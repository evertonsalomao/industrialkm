<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php echo getMetaTags(); ?>

    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        *{margin:0;padding:0;box-sizing:border-box}body{font-family:'Inter',sans-serif;line-height:1.6;color:#333}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css?c=<?php echo rand();?>">

    <?php echo getOrganizationSchema(); ?>
</head>
<body>

<header class="site-header fixed-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo SITE_URL; ?>/">
                <img src="<?php echo SITE_URL; ?>/assets/img/logo.png" alt="<?php echo SITE_NAME; ?>" height="50" loading="eager">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Menu de navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'sobre' ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/sobre">Sobre</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo strpos($currentPage, 'servicos') !== false ? 'active' : ''; ?>" href="#" id="navbarServicos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarServicos">
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/manutencao-preventiva">Manutenção Preventiva</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/manutencao-corretiva">Manutenção Corretiva</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/manutencao-preditiva">Manutenção Preditiva</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/reforma-revisao">Reforma e Revisão</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/retrofit-painel">Retrofit de Painel</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/retrofit-gas">Retrofit de Gás Ecológico</a></li>
                            <li><a class="dropdown-item" href="<?php echo SITE_URL; ?>/servicos/contrato-manutencao">Contrato de Manutenção</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'equipamentos' ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/equipamentos">Equipamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $currentPage == 'contato' ? 'active' : ''; ?>" href="<?php echo SITE_URL; ?>/contato">Contato</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar um orçamento." class="btn btn-primary btn-cta" target="_blank" rel="noopener">
                            Solicitar Orçamento
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Preciso de assistência técnica." class="whatsapp-float" target="_blank" rel="noopener" aria-label="Fale conosco pelo WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
</a>

<main>
