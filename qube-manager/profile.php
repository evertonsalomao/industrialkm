<?php
require_once 'config.php';
requireAuth();

$pageTitle = 'Meu Perfil - Qube Manager';
$currentUser = getCurrentUser();

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($name) || empty($email)) {
        $_SESSION['error'] = 'Nome e email são obrigatórios.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Email inválido.';
    } else {
        // Check if changing password
        if (!empty($new_password)) {
            if (empty($current_password)) {
                $_SESSION['error'] = 'Digite sua senha atual para alterar a senha.';
            } elseif (!password_verify($current_password, $currentUser['password'])) {
                $_SESSION['error'] = 'Senha atual incorreta.';
            } elseif (strlen($new_password) < 6) {
                $_SESSION['error'] = 'A nova senha deve ter no mínimo 6 caracteres.';
            } elseif ($new_password !== $confirm_password) {
                $_SESSION['error'] = 'As senhas não conferem.';
            } else {
                // Update with new password
                try {
                    $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("UPDATE admin_users SET name = ?, email = ?, password = ? WHERE id = ?");
                    $stmt->execute([$name, $email, $hashedPassword, $_SESSION['admin_user_id']]);
                    $_SESSION['admin_name'] = $name;
                    $_SESSION['admin_email'] = $email;
                    $_SESSION['success'] = 'Perfil e senha atualizados com sucesso!';
                } catch (PDOException $e) {
                    if ($e->getCode() == 23000) {
                        $_SESSION['error'] = 'Já existe um usuário com este email.';
                    } else {
                        $_SESSION['error'] = 'Erro ao atualizar perfil: ' . $e->getMessage();
                    }
                }
            }
        } else {
            // Update without password
            try {
                $stmt = $pdo->prepare("UPDATE admin_users SET name = ?, email = ? WHERE id = ?");
                $stmt->execute([$name, $email, $_SESSION['admin_user_id']]);
                $_SESSION['admin_name'] = $name;
                $_SESSION['admin_email'] = $email;
                $_SESSION['success'] = 'Perfil atualizado com sucesso!';
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) {
                    $_SESSION['error'] = 'Já existe um usuário com este email.';
                } else {
                    $_SESSION['error'] = 'Erro ao atualizar perfil: ' . $e->getMessage();
                }
            }
        }
    }

    header('Location: profile.php');
    exit;
}

require_once 'includes/header.php';
?>

<div class="page-header">
    <h1><i class="bi bi-person-circle"></i> Meu Perfil</h1>
    <p>Gerencie suas informações pessoais e senha</p>
</div>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle"></i> <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-triangle"></i> <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <i class="bi bi-person"></i> Informações Pessoais
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome *</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="<?php echo htmlspecialchars($currentUser['name']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="<?php echo htmlspecialchars($currentUser['email']); ?>" required>
                    </div>

                    <hr class="my-4">

                    <h5 class="mb-3">Alterar Senha</h5>
                    <p class="text-muted small">Deixe em branco se não quiser alterar a senha</p>

                    <div class="mb-3">
                        <label for="current_password" class="form-label">Senha Atual</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nova Senha</label>
                                <input type="password" class="form-control" id="new_password" name="new_password">
                                <small class="text-muted">Mínimo de 6 caracteres</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirmar Nova Senha</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Salvar Alterações
                        </button>
                        <a href="index.php" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <i class="bi bi-info-circle"></i> Informações da Conta
            </div>
            <div class="card-body">
                <p class="small mb-2">
                    <strong>ID do Usuário:</strong><br>
                    <?php echo $currentUser['id']; ?>
                </p>
                <p class="small mb-2">
                    <strong>Conta Criada em:</strong><br>
                    <?php echo formatDate($currentUser['created_at']); ?>
                </p>
                <p class="small mb-0">
                    <strong>Última Atualização:</strong><br>
                    <?php echo formatDate($currentUser['updated_at']); ?>
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <i class="bi bi-shield-lock"></i> Segurança
            </div>
            <div class="card-body">
                <ul class="small mb-0">
                    <li>Use senhas fortes e únicas</li>
                    <li>Não compartilhe suas credenciais</li>
                    <li>Altere sua senha periodicamente</li>
                    <li>Faça logout ao sair</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
