<?php
require_once 'config.php';

$pageTitle = 'Equipamentos de Refrigeração Industrial Atendidos - KM Refrigeração';
$pageDescription = 'Assistência técnica especializada em chillers, fancoil, UTA, AHU, torres de resfriamento, resfriadores de painel elétrico, secadores de ar comprimido e mais equipamentos de refrigeração industrial.';
$pageKeywords = 'chiller industrial, fancoil, UTA, AHU, torre de resfriamento, resfriador painel elétrico, secador ar comprimido, desumidificador industrial';
$currentPage = 'equipamentos';
$canonical = SITE_URL . '/equipamentos';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Equipamentos', 'url' => SITE_URL . '/equipamentos']
];

require_once 'includes/header.php';
echo getBreadcrumbs($breadcrumbs);
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Equipamentos</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h1 class="section-title">Equipamentos de Refrigeração Industrial</h1>
            <p class="section-subtitle">Assistência técnica especializada para diversos tipos de equipamentos nacionais e importados</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Chillers e Unidades de Água Gelada</h2>
                    <p>Manutenção preventiva, corretiva e retrofit de <strong>chillers industriais</strong>, incluindo unidades de água gelada com compressores scroll, parafuso e centrífugos. Atendemos marcas nacionais e importadas.</p>
                    <ul class="small mt-3">
                        <li>Chillers de condensação a ar</li>
                        <li>Chillers de condensação a água</li>
                        <li>Unidades modulares e compactas</li>
                        <li>Free-cooling e eco-chillers</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0a.5.5 0 0 1 .5.5v7h7a.5.5 0 0 1 0 1h-7v7a.5.5 0 0 1-1 0v-7h-7a.5.5 0 0 1 0-1h7v-7A.5.5 0 0 1 8 0z"/>
                            <path d="M8 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 1 0v2a.5.5 0 0 1-.5.5zm10 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 1 0v2a.5.5 0 0 1-.5.5zM8 13.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5zm-5-3a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10 0a.5.5 0 0 1 .5.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Fancoil, UTA e AHU</h2>
                    <p>Assistência técnica em <strong>fancoils</strong>, <strong>UTA (Unidade de Tratamento de Ar)</strong> e <strong>AHU (Air Handling Unit)</strong> para climatização de ambientes industriais e comerciais.</p>
                    <ul class="small mt-3">
                        <li>Fancoils de teto e piso</li>
                        <li>Self-contained e split systems</li>
                        <li>Unidades de tratamento de ar customizadas</li>
                        <li>Sistemas de renovação de ar</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Torres de Resfriamento</h2>
                    <p>Manutenção completa em <strong>torres de resfriamento</strong> de fluxo cruzado e contracorrente, incluindo limpeza, tratamento de água e substituição de componentes.</p>
                    <ul class="small mt-3">
                        <li>Torres de circuito aberto</li>
                        <li>Torres de circuito fechado</li>
                        <li>Condensadores evaporativos</li>
                        <li>Sistemas de bombeamento</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0zM5 4v2.5A2.5 2.5 0 0 0 7.5 9h1A2.5 2.5 0 0 0 11 6.5V4H5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Resfriadores de Painel Elétrico</h2>
                    <p>Assistência técnica especializada em <strong>resfriadores de painel elétrico</strong> para proteção de componentes eletrônicos sensíveis em ambientes industriais.</p>
                    <ul class="small mt-3">
                        <li>Ar condicionado para painéis</li>
                        <li>Trocadores de calor ar-ar</li>
                        <li>Ventiladores e filtros</li>
                        <li>Sistemas com controle de temperatura</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Secadores de Ar Comprimido</h2>
                    <p>Manutenção de <strong>secadores de ar comprimido</strong> por refrigeração e adsorção para garantir qualidade do ar em processos industriais.</p>
                    <ul class="small mt-3">
                        <li>Secadores frigoríficos</li>
                        <li>Secadores por adsorção</li>
                        <li>Sistemas de filtragem</li>
                        <li>Separadores de condensado</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.5 0a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V7.5h-1.5a.5.5 0 0 0 0 1H15v2.75h-.5a.5.5 0 0 0 0 1h.5V15h-1.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 .5-.5v-15a.5.5 0 0 0-.5-.5h-2zM7 1.5l.364-.343a.5.5 0 0 0-.728 0l-.002.002-.006.007-.022.023-.08.088a28.458 28.458 0 0 0-1.274 1.517c-.769.983-1.714 2.325-2.385 3.727C2.368 7.564 2 8.682 2 9.733 2 12.614 4.212 15 7 15s5-2.386 5-5.267c0-1.05-.368-2.169-.867-3.212-.671-1.402-1.616-2.744-2.385-3.727a28.458 28.458 0 0 0-1.354-1.605l-.022-.023-.006-.007-.002-.001L7 1.5zm0 0-.364-.343L7 1.5zm-.016.766L7 2.247l.016.019c.24.274.572.667.944 1.144.611.781 1.32 1.776 1.901 2.827H4.14c.58-1.051 1.29-2.046 1.9-2.827.373-.477.706-.87.945-1.144zM3 9.733c0-.755.244-1.612.638-2.496h6.724c.395.884.638 1.741.638 2.496C11 12.117 9.182 14 7 14s-4-1.883-4-4.267z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Desumidificadores Industriais</h2>
                    <p>Assistência técnica em <strong>desumidificadores industriais</strong> para controle de umidade em processos produtivos e armazenagem.</p>
                    <ul class="small mt-3">
                        <li>Desumidificadores por condensação</li>
                        <li>Desumidificadores por adsorção</li>
                        <li>Sistemas de grande porte</li>
                        <li>Controle automático de umidade</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Trocadores de Calor</h2>
                    <p>Manutenção e reforma de <strong>trocadores de calor</strong> tipo casco-tubo, placas e aletados para diversas aplicações industriais.</p>
                    <ul class="small mt-3">
                        <li>Evaporadores e condensadores</li>
                        <li>Trocadores casco-tubo</li>
                        <li>Trocadores a placas</li>
                        <li>Economizadores e recuperadores</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                            <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Resfriadores de Óleo</h2>
                    <p>Assistência técnica em <strong>resfriadores de óleo</strong> para máquinas industriais, prensas, injetoras e sistemas hidráulicos.</p>
                    <ul class="small mt-3">
                        <li>Resfriadores a ar</li>
                        <li>Resfriadores a água</li>
                        <li>Sistemas compactos e modulares</li>
                        <li>Controle de temperatura preciso</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Bombas Centrífugas</h2>
                    <p>Manutenção de <strong>bombas centrífugas</strong> para sistemas de refrigeração, incluindo bombas de água gelada e água de condensação.</p>
                    <ul class="small mt-3">
                        <li>Bombas end suction</li>
                        <li>Bombas in-line</li>
                        <li>Motores e acionamentos</li>
                        <li>Sistemas de selagem</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Exaustores e Insufladores</h2>
                    <p>Assistência técnica em <strong>exaustores industriais</strong> e <strong>insufladores</strong> para ventilação e renovação de ar.</p>
                    <ul class="small mt-3">
                        <li>Exaustores centrífugos e axiais</li>
                        <li>Insufladores de ar</li>
                        <li>Sistemas de ventilação</li>
                        <li>Controle de velocidade</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5zm-.5 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V3zm.5 1a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1H5zm0 2.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1H5zM4.5 9a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 11a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1H5zm4.5-7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zM10 6a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm-.5 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zM10 11a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Painéis de Controle e Automação</h2>
                    <p>Retrofit e manutenção de <strong>painéis de controle</strong> e sistemas de automação para equipamentos de refrigeração industrial.</p>
                    <ul class="small mt-3">
                        <li>CLPs e inversores de frequência</li>
                        <li>Sistemas supervisórios</li>
                        <li>Instrumentação e sensores</li>
                        <li>Modernização de controles obsoletos</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
                        </svg>
                    </div>
                    <h2 class="h4">Sistemas Customizados</h2>
                    <p>Manutenção de <strong>sistemas de refrigeração customizados</strong> e sob medida para aplicações especiais e processos específicos.</p>
                    <ul class="small mt-3">
                        <li>Sistemas de processo</li>
                        <li>Câmaras frigoríficas</li>
                        <li>Túneis de congelamento</li>
                        <li>Soluções especiais</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 fade-in">
                <div class="bg-light p-5 rounded-3">
                    <h2 class="h3 mb-4">Marcas Atendidas</h2>
                    <p>Nossa equipe técnica possui experiência e capacitação para atender as principais marcas do mercado:</p>
                    <div class="row mt-4">
                        <div class="col-md-3 mb-2">
                            <p class="mb-1"><strong>Nacionais:</strong></p>
                            <ul class="small">
                                <li>Carrier</li>
                                <li>Hitachi</li>
                                <li>Thermomatic</li>
                                <li>Trane</li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p class="mb-1"><strong>Importadas:</strong></p>
                            <ul class="small">
                                <li>York</li>
                                <li>McQuay</li>
                                <li>Daikin</li>
                                <li>Lennox</li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p class="mb-1"><strong>Europeias:</strong></p>
                            <ul class="small">
                                <li>Clivet</li>
                                <li>Aermec</li>
                                <li>Rhoss</li>
                                <li>Trane</li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-2">
                            <p class="mb-1"><strong>E muitas outras</strong></p>
                            <p class="small">Atendemos equipamentos de qualquer marca nacional ou importada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="fade-in">
            <h2>Seu Equipamento Precisa de Manutenção?</h2>
            <p class="lead mb-4">Entre em contato e fale com nossos especialistas</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Preciso de assistência técnica para equipamento de refrigeração." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                Solicitar Atendimento
            </a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
