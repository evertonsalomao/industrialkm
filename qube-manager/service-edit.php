<?php
require_once 'config.php';
requireAuth();

$pageTitle = 'Editar Serviço - Qube Manager';
$isEdit = false;
$service = [
    'id' => null,
    'slug' => '',
    'title' => '',
    'meta_description' => '',
    'meta_keywords' => '',
    'hero_title' => '',
    'hero_subtitle' => '',
    'content' => '',
    'is_active' => 1
];

// Load service if editing
if (isset($_GET['id'])) {
    $isEdit = true;
    $pageTitle = 'Editar Serviço - Qube Manager';

    $stmt = $pdo->prepare("SELECT * FROM service_pages WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $loadedService = $stmt->fetch();

    if ($loadedService) {
        $service = $loadedService;
    } else {
        $_SESSION['error'] = 'Serviço não encontrado.';
        header('Location: services.php');
        exit;
    }
} else {
    $pageTitle = 'Novo Serviço - Qube Manager';
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $slug = sanitize($_POST['slug']);
    $title = sanitize($_POST['title']);
    $meta_description = sanitize($_POST['meta_description']);
    $meta_keywords = sanitize($_POST['meta_keywords']);
    $hero_title = sanitize($_POST['hero_title']);
    $hero_subtitle = sanitize($_POST['hero_subtitle']);
    $content = $_POST['content'];
    $is_active = isset($_POST['is_active']) ? 1 : 0;

    if (empty($slug) || empty($title)) {
        $_SESSION['error'] = 'Slug e título são obrigatórios.';
    } else {
        try {
            if ($isEdit) {
                // Update existing service
                $stmt = $pdo->prepare("
                    UPDATE service_pages
                    SET slug = ?, title = ?, meta_description = ?, meta_keywords = ?,
                        hero_title = ?, hero_subtitle = ?, content = ?, is_active = ?
                    WHERE id = ?
                ");
                $stmt->execute([
                    $slug, $title, $meta_description, $meta_keywords,
                    $hero_title, $hero_subtitle, $content, $is_active, $service['id']
                ]);

                $_SESSION['success'] = 'Serviço atualizado com sucesso!';
            } else {
                // Create new service
                $stmt = $pdo->prepare("
                    INSERT INTO service_pages (slug, title, meta_description, meta_keywords,
                        hero_title, hero_subtitle, content, is_active)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                ");
                $stmt->execute([
                    $slug, $title, $meta_description, $meta_keywords,
                    $hero_title, $hero_subtitle, $content, $is_active
                ]);

                $_SESSION['success'] = 'Serviço criado com sucesso!';
                $service['id'] = $pdo->lastInsertId();
                $isEdit = true;
            }

            header('Location: service-edit.php?id=' . $service['id']);
            exit;

        } catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $_SESSION['error'] = 'Já existe um serviço com este slug.';
            } else {
                $_SESSION['error'] = 'Erro ao salvar serviço: ' . $e->getMessage();
            }
        }
    }
}

require_once 'includes/header.php';
?>

<div class="page-header d-flex justify-content-between align-items-center">
    <div>
        <h1>
            <i class="bi bi-<?php echo $isEdit ? 'pencil' : 'plus-circle'; ?>"></i>
            <?php echo $isEdit ? 'Editar' : 'Novo'; ?> Serviço
        </h1>
        <p>Preencha as informações do serviço</p>
    </div>
    <a href="services.php" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Voltar
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

<form method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="bi bi-file-text"></i> Informações Básicas
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título *</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="<?php echo htmlspecialchars($service['title']); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug (URL) *</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                               value="<?php echo htmlspecialchars($service['slug']); ?>" required>
                        <small class="text-muted">URL amigável (ex: manutencao-preventiva)</small>
                    </div>

                    <div class="mb-3">
                        <label for="hero_title" class="form-label">Título do Hero</label>
                        <input type="text" class="form-control" id="hero_title" name="hero_title"
                               value="<?php echo htmlspecialchars($service['hero_title']); ?>">
                    </div>

                    <div class="mb-3">
                        <label for="hero_subtitle" class="form-label">Subtítulo do Hero</label>
                        <textarea class="form-control" id="hero_subtitle" name="hero_subtitle" rows="2"><?php echo htmlspecialchars($service['hero_subtitle']); ?></textarea>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="bi bi-file-richtext"></i> Conteúdo
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="content" class="form-label">Conteúdo da Página</label>
                        <textarea class="form-control tinymce-editor" id="content" name="content" rows="20"><?php echo htmlspecialchars($service['content']); ?></textarea>
                        <small class="text-muted">Conteúdo HTML da página de serviço</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="bi bi-gear"></i> Configurações
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                   <?php echo $service['is_active'] ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="is_active">
                                Página Ativa
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Salvar Alterações
                        </button>

                        <?php if ($isEdit): ?>
                            <a href="../servicos/<?php echo $service['slug']; ?>.php"
                               class="btn btn-info"
                               target="_blank">
                                <i class="bi bi-eye"></i> Visualizar Página
                            </a>
                        <?php endif; ?>

                        <a href="services.php" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Cancelar
                        </a>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="bi bi-search"></i> SEO
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" rows="3"><?php echo htmlspecialchars($service['meta_description']); ?></textarea>
                        <small class="text-muted">Descrição para mecanismos de busca</small>
                    </div>

                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <textarea class="form-control" id="meta_keywords" name="meta_keywords" rows="2"><?php echo htmlspecialchars($service['meta_keywords']); ?></textarea>
                        <small class="text-muted">Palavras-chave separadas por vírgula</small>
                    </div>
                </div>
            </div>

            <?php if ($isEdit): ?>
                <div class="card">
                    <div class="card-header">
                        <i class="bi bi-info-circle"></i> Informações
                    </div>
                    <div class="card-body">
                        <p class="small mb-2">
                            <strong>ID:</strong> <?php echo $service['id']; ?>
                        </p>
                        <p class="small mb-2">
                            <strong>Criado em:</strong><br>
                            <?php echo formatDate($service['created_at']); ?>
                        </p>
                        <p class="small mb-0">
                            <strong>Última atualização:</strong><br>
                            <?php echo formatDate($service['updated_at']); ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</form>

<script>
    initTinyMCE('.tinymce-editor');
</script>

<?php require_once 'includes/footer.php'; ?>
