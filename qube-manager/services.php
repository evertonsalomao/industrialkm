<?php
require_once 'config.php';
requireAuth();

$pageTitle = 'Gerenciar Serviços - Qube Manager';

// Handle delete
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM service_pages WHERE id = ?");
    if ($stmt->execute([$id])) {
        $_SESSION['success'] = 'Serviço excluído com sucesso!';
    } else {
        $_SESSION['error'] = 'Erro ao excluir serviço.';
    }
    header('Location: services.php');
    exit;
}

// Handle toggle status
if (isset($_GET['toggle'])) {
    $id = (int)$_GET['toggle'];
    $stmt = $pdo->prepare("UPDATE service_pages SET is_active = NOT is_active WHERE id = ?");
    if ($stmt->execute([$id])) {
        $_SESSION['success'] = 'Status alterado com sucesso!';
    } else {
        $_SESSION['error'] = 'Erro ao alterar status.';
    }
    header('Location: services.php');
    exit;
}

// Get all services
$stmt = $pdo->query("SELECT * FROM service_pages ORDER BY title ASC");
$services = $stmt->fetchAll();

require_once 'includes/header.php';
?>

<div class="page-header d-flex justify-content-between align-items-center">
    <div>
        <h1><i class="bi bi-file-earmark-text"></i> Gerenciar Serviços</h1>
        <p>Gerencie o conteúdo das páginas de serviços</p>
    </div>
    <a href="service-edit.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Serviço
    </a>
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
        <?php if (empty($services)): ?>
            <div class="text-center py-5">
                <i class="bi bi-inbox" style="font-size: 4rem; color: #ccc;"></i>
                <p class="text-muted mt-3">Nenhum serviço cadastrado ainda.</p>
                <a href="service-edit.php" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Criar Primeiro Serviço
                </a>
            </div>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="30%">Título</th>
                            <th width="20%">Slug</th>
                            <th width="10%">Status</th>
                            <th width="15%">Atualização</th>
                            <th width="20%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $service): ?>
                            <tr>
                                <td><?php echo $service['id']; ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($service['title']); ?></strong>
                                </td>
                                <td>
                                    <code><?php echo htmlspecialchars($service['slug']); ?></code>
                                </td>
                                <td>
                                    <?php if ($service['is_active']): ?>
                                        <span class="badge bg-success">Ativo</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Inativo</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <small><?php echo formatDate($service['updated_at']); ?></small>
                                </td>
                                <td class="action-buttons">
                                    <a href="service-edit.php?id=<?php echo $service['id']; ?>"
                                       class="btn btn-sm btn-primary"
                                       title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="services.php?toggle=<?php echo $service['id']; ?>"
                                       class="btn btn-sm btn-warning"
                                       title="Ativar/Desativar">
                                        <i class="bi bi-toggle-on"></i>
                                    </a>
                                    <a href="../servicos/<?php echo $service['slug']; ?>.php"
                                       class="btn btn-sm btn-info"
                                       target="_blank"
                                       title="Visualizar">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="services.php?delete=<?php echo $service['id']; ?>"
                                       class="btn btn-sm btn-danger btn-delete"
                                       title="Excluir">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <i class="bi bi-info-circle"></i> Informações
    </div>
    <div class="card-body">
        <p><strong>Total de Serviços:</strong> <?php echo count($services); ?></p>
        <p><strong>Serviços Ativos:</strong> <?php echo count(array_filter($services, fn($s) => $s['is_active'])); ?></p>
        <p class="mb-0"><strong>Serviços Inativos:</strong> <?php echo count(array_filter($services, fn($s) => !$s['is_active'])); ?></p>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
