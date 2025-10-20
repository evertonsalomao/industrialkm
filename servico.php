<?php
require_once 'config.php';
require_once 'includes/db-helper.php';

$slug = $_GET['s'] ?? '';

if (empty($slug)) {
    header('Location: ' . SITE_URL . '/');
    exit;
}

$service = getServiceBySlug($slug);

if (!$service) {
    header('HTTP/1.0 404 Not Found');
    $pageTitle = 'Serviço não encontrado - ' . SITE_NAME;
    $pageDescription = 'A página solicitada não foi encontrada.';
    $pageKeywords = '';
    $currentPage = 'servicos';
    $canonical = SITE_URL . '/servicos/' . urlencode($slug);

    require_once 'includes/header.php';
    ?>
    <div class="container py-5">
        <div class="text-center py-5">
            <h1 class="display-4 mb-3">Página não encontrada</h1>
            <p class="lead">O serviço que você está procurando não existe ou foi removido.</p>
            <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary">Voltar para Home</a>
        </div>
    </div>
    <?php
    require_once 'includes/footer.php';
    exit;
}

$faqs = getServiceFAQs($service['id']);

$pageTitle = $service['title'] . ' - ' . SITE_NAME;
$pageDescription = $service['meta_description'] ?: $service['lead_text'];
$pageKeywords = $service['meta_keywords'];
$currentPage = 'servicos';
$canonical = SITE_URL . '/servicos/' . $service['slug'];

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Serviços', 'url' => SITE_URL . '/#servicos'],
    ['name' => $service['title'], 'url' => $canonical]
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => $service['title'],
    'serviceType' => $service['title'],
    'provider' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL
    ],
    'description' => $service['meta_description'] ?: $service['lead_text'],
    'areaServed' => 'BR'
];

require_once 'includes/header.php';
echo getBreadcrumbs($breadcrumbs);
echo '<script type="application/ld+json">' . json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/#servicos">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($service['title']); ?></li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <h1 class="section-title"><?php echo htmlspecialchars($service['title']); ?></h1>
                <?php if ($service['lead_text']): ?>
                    <p class="lead"><?php echo htmlspecialchars($service['lead_text']); ?></p>
                <?php endif; ?>

                <div class="mt-4">
                    <?php echo $service['content']; ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="fade-in sticky-top" style="top: 100px;">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h5 mb-3">Solicite um Orçamento</h3>
                            <p class="small text-muted mb-4">Entre em contato pelo WhatsApp</p>
                            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar um orçamento para <?php echo urlencode($service['title']); ?>." class="btn btn-primary w-100 mb-3" target="_blank" rel="noopener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                                Falar no WhatsApp
                            </a>
                            <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-primary w-100">Enviar Mensagem</a>
                        </div>
                    </div>

                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h4 class="h6 mb-3">Atendimento Especializado</h4>
                            <ul class="small list-unstyled mb-0">
                                <li class="mb-2">✓ Equipe técnica qualificada</li>
                                <li class="mb-2">✓ Atendimento em todo Brasil</li>
                                <li class="mb-2">✓ Peças originais</li>
                                <li class="mb-2">✓ Garantia dos serviços</li>
                                <li class="mb-0">✓ Suporte técnico</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($faqs)): ?>
<section class="faq-section">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h2 class="h3">Perguntas Frequentes</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion fade-in" id="faqAccordion">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button <?php echo $index > 0 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $index + 1; ?>">
                                <?php echo htmlspecialchars($faq['question']); ?>
                            </button>
                        </h3>
                        <div id="faq<?php echo $index + 1; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function($faq) {
        return [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer']
            ]
        ];
    }, $faqs)
];

echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
?>
<?php endif; ?>

<section class="cta-section">
    <div class="container">
        <div class="fade-in">
            <h2>Precisa de <?php echo htmlspecialchars($service['title']); ?>?</h2>
            <p class="lead mb-4">Entre em contato e solicite um orçamento personalizado</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de contratar <?php echo urlencode($service['title']); ?>." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                Falar com Especialista
            </a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
