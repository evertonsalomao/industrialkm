<?php
require_once 'config.php';

$pageTitle = 'Contato - KM Refrigeração Industrial';
$pageDescription = 'Entre em contato com a KM Refrigeração Industrial. Atendimento 24/7 para assistência técnica em refrigeração industrial. Solicite orçamento sem compromisso.';
$pageKeywords = 'contato km refrigeração, orçamento refrigeração industrial, assistência técnica 24h, telefone km refrigeração';
$currentPage = 'contato';
$canonical = SITE_URL . '/contato';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Contato', 'url' => SITE_URL . '/contato']
];

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $phone && $subject && $message) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (sendContactEmail($name, $email, $phone, "$subject\n\n$message")) {
                $successMessage = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
            } else {
                $errorMessage = 'Erro ao enviar mensagem. Por favor, tente novamente ou entre em contato pelo WhatsApp.';
            }
        } else {
            $errorMessage = 'E-mail inválido. Por favor, verifique e tente novamente.';
        }
    } else {
        $errorMessage = 'Por favor, preencha todos os campos obrigatórios.';
    }
}

require_once 'includes/header.php';
echo getBreadcrumbs($breadcrumbs);
echo getLocalBusinessSchema();
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contato</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h1 class="section-title">Entre em Contato</h1>
            <p class="section-subtitle">Estamos prontos para atender sua empresa com soluções em refrigeração industrial</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 fade-in">
                <div class="contact-info-box">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                        </svg>
                    </div>
                    <h2 class="h5 mb-3">Telefone</h2>
                    <p class="mb-0"><a href="tel:<?php echo SITE_PHONE; ?>" class="text-decoration-none text-dark"><?php echo SITE_PHONE; ?></a></p>
                    <p class="small text-muted mt-2">Atendimento 24 horas</p>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="contact-info-box">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                    </div>
                    <h2 class="h5 mb-3">E-mail</h2>
                    <p class="mb-0"><a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-decoration-none text-dark"><?php echo SITE_EMAIL; ?></a></p>
                    <p class="small text-muted mt-2">Respondemos em até 24h</p>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="contact-info-box">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </div>
                    <h2 class="h5 mb-3">WhatsApp</h2>
                    <p class="mb-0"><a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" class="btn btn-success btn-sm" target="_blank" rel="noopener">Enviar Mensagem</a></p>
                    <p class="small text-muted mt-2">Atendimento imediato</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 g-4">
            <div class="col-lg-8 fade-in">
                <div class="contact-form">
                    <h2 class="h4 mb-4">Envie sua Mensagem</h2>

                    <?php if ($successMessage): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo htmlspecialchars($successMessage); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($errorMessage): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($errorMessage); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo SITE_URL; ?>/contato">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome Completo *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telefone/WhatsApp *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>

                            <div class="col-md-6">
                                <label for="subject" class="form-label">Assunto *</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Selecione...</option>
                                    <option value="Orçamento">Solicitar Orçamento</option>
                                    <option value="Manutenção Preventiva">Manutenção Preventiva</option>
                                    <option value="Manutenção Corretiva">Manutenção Corretiva</option>
                                    <option value="Retrofit">Retrofit de Equipamentos</option>
                                    <option value="Contrato">Contrato de Manutenção</option>
                                    <option value="Outros">Outros Assuntos</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Mensagem *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Descreva sua necessidade, tipo de equipamento e localização"></textarea>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="bg-light p-4 rounded mb-4">
                    <h3 class="h5 mb-3">Endereço</h3>
                    <p class="mb-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        <?php echo SITE_ADDRESS; ?><br>
                        <?php echo SITE_CITY; ?>/<?php echo SITE_STATE; ?> - CEP: <?php echo SITE_ZIPCODE; ?>
                    </p>
                </div>

                <div class="bg-primary text-white p-4 rounded mb-4">
                    <h3 class="h5 mb-3">Horário de Atendimento</h3>
                    <p class="mb-2"><strong>Segunda a Sexta:</strong><br>08:00 às 18:00</p>
                    <p class="mb-2"><strong>Emergências:</strong><br>24 horas / 7 dias</p>
                </div>

                <div class="bg-light p-4 rounded">
                    <h3 class="h5 mb-3">Área de Atuação</h3>
                    <p class="mb-0 small">Atendemos todo território nacional com equipes técnicas especializadas e estrutura completa para manutenção em refrigeração industrial.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
