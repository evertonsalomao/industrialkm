<?php
require_once 'config.php';
requireAuth();

$pageTitle = 'Dashboard - Qube Manager';

// Get statistics
$stmt = $pdo->query("SELECT COUNT(*) as total FROM service_pages");
$totalServices = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM service_pages WHERE is_active = 1");
$activeServices = $stmt->fetch()['total'];

$stmt = $pdo->query("SELECT COUNT(*) as total FROM admin_users");
$totalUsers = $stmt->fetch()['total'];

// Get recent services
$stmt = $pdo->query("SELECT * FROM service_pages ORDER BY updated_at DESC LIMIT 5");
$recentServices = $stmt->fetchAll();

require_once 'includes/header.php';
?>

<div class="page-header d-flex justify-content-between align-items-center">
    <div>
        <h1><i class="bi bi-speedometer2"></i> Dashboard</h1>
        <p>Bem-vindo ao painel de gestão de conteúdo</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card stats-card">
            <div class="card-body">
                <h3><?php echo $totalServices; ?></h3>
                <p><i class="bi bi-file-earmark-text"></i> Total de Serviços</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card stats-card">
            <div class="card-body">
                <h3><?php echo $activeServices; ?></h3>
                <p><i class="bi bi-check-circle"></i> Serviços Ativos</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card stats-card">
            <div class="card-body">
                <h3><?php echo $totalUsers; ?></h3>
                <p><i class="bi bi-people"></i> Usuários</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span><i class="bi bi-clock-history"></i> Serviços Atualizados Recentemente</span>
                <a href="services.php" class="btn btn-sm btn-primary">Ver Todos</a>
            </div>
            <div class="card-body">
                <?php if (empty($recentServices)): ?>
                    <p class="text-muted mb-0">Nenhum serviço cadastrado ainda.</p>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Última Atualização</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($recentServices as $service): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($service['title']); ?></td>
                                        <td><code><?php echo htmlspecialchars($service['slug']); ?></code></td>
                                        <td>
                                            <?php if ($service['is_active']): ?>
                                                <span class="badge bg-success">Ativo</span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Inativo</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo formatDate($service['updated_at']); ?></td>
                                        <td>
                                            <a href="service-edit.php?id=<?php echo $service['id']; ?>"
                                               class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil"></i> Editar
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
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <i class="bi bi-info-circle"></i> Acesso Rápido
            </div>
            <div class="card-body">
                <div class="list-group">
                    <a href="services.php" class="list-group-item list-group-item-action">
                        <i class="bi bi-file-earmark-text"></i> Gerenciar Serviços
                    </a>
                    <a href="users.php" class="list-group-item list-group-item-action">
                        <i class="bi bi-people"></i> Gerenciar Usuários
                    </a>
                    <a href="profile.php" class="list-group-item list-group-item-action">
                        <i class="bi bi-person"></i> Meu Perfil
                    </a>
                    <a href="../" target="_blank" class="list-group-item list-group-item-action">
                        <i class="bi bi-box-arrow-up-right"></i> Ver Site
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <i class="bi bi-person-circle"></i> Informações da Sessão
            </div>
            <div class="card-body">
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($currentUser['name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($currentUser['email']); ?></p>
                <p><strong>Último Acesso:</strong> <?php echo formatDate($currentUser['updated_at']); ?></p>
                <a href="profile.php" class="btn btn-sm btn-primary">Editar Perfil</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
