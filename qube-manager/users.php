<?php
require_once 'config.php';
requireAuth();

$pageTitle = 'Gerenciar Usuários - Qube Manager';

// Handle delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];

    // Prevent self-deletion
    if ($id == $_SESSION['admin_user_id']) {
        $_SESSION['error'] = 'Você não pode excluir seu próprio usuário.';
    } else {
        $stmt = $pdo->prepare("DELETE FROM admin_users WHERE id = ?");
        if ($stmt->execute([$id])) {
            $_SESSION['success'] = 'Usuário excluído com sucesso!';
        } else {
            $_SESSION['error'] = 'Erro ao excluir usuário.';
        }
    }
    header('Location: users.php');
    exit;
}

// Handle new user creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_user'])) {
    $name = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['error'] = 'Todos os campos são obrigatórios.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Email inválido.';
    } elseif (strlen($password) < 6) {
        $_SESSION['error'] = 'A senha deve ter no mínimo 6 caracteres.';
    } else {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO admin_users (name, email, password) VALUES (?, ?, ?)");
            $stmt->execute([$name, $email, $hashedPassword]);
            $_SESSION['success'] = 'Usuário criado com sucesso!';
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $_SESSION['error'] = 'Já existe um usuário com este email.';
            } else {
                $_SESSION['error'] = 'Erro ao criar usuário: ' . $e->getMessage();
            }
        }
    }
    header('Location: users.php');
    exit;
}

// Get all users
$stmt = $pdo->query("SELECT * FROM admin_users ORDER BY created_at DESC");
$users = $stmt->fetchAll();

require_once 'includes/header.php';
?>

<div class="page-header d-flex justify-content-between align-items-center">
    <div>
        <h1><i class="bi bi-people"></i> Gerenciar Usuários</h1>
        <p>Gerencie usuários com acesso ao painel administrativo</p>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUserModal">
        <i class="bi bi-person-plus"></i> Novo Usuário
    </button>
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

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="30%">Nome</th>
                        <th width="30%">Email</th>
                        <th width="20%">Criado em</th>
                        <th width="15%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td>
                                <strong><?php echo htmlspecialchars($user['name']); ?></strong>
                                <?php if ($user['id'] == $_SESSION['admin_user_id']): ?>
                                    <span class="badge bg-primary">Você</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo formatDate($user['created_at']); ?></td>
                            <td class="action-buttons">
                                <?php if ($user['id'] != $_SESSION['admin_user_id']): ?>
                                    <a href="users.php?delete=<?php echo $user['id']; ?>"
                                       class="btn btn-sm btn-danger btn-delete"
                                       title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted small">-</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <i class="bi bi-info-circle"></i> Informações
    </div>
    <div class="card-body">
        <p class="mb-0"><strong>Total de Usuários:</strong> <?php echo count($users); ?></p>
    </div>
</div>

<!-- New User Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-person-plus"></i> Novo Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome *</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Senha *</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <small class="text-muted">Mínimo de 6 caracteres</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="create_user" class="btn btn-primary">
                        <i class="bi bi-save"></i> Criar Usuário
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
