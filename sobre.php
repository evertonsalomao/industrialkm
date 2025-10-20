<?php
require_once 'config.php';

$pageTitle = 'Sobre a KM Refrigeração Industrial - Grupo KM';
$pageDescription = 'Conheça a KM Refrigeração Industrial, empresa do Grupo KM especializada em assistência técnica de equipamentos de refrigeração industrial com mais de 15 anos de experiência no mercado.';
$pageKeywords = 'sobre km refrigeração, grupo km, empresa refrigeração industrial, história km refrigeração, assistência técnica especializada';
$currentPage = 'sobre';
$canonical = SITE_URL . '/sobre';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Sobre', 'url' => SITE_URL . '/sobre']
];

require_once 'includes/header.php';
echo getBreadcrumbs($breadcrumbs);
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sobre</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5 pt-md-0">
    <div class="container">
        <div class="about-hero-section fade-in">
            <h1>Sobre a KM Refrigeração Industrial</h1>
            <p>Empresa do Grupo KM especializada em soluções completas para refrigeração industrial</p>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 fade-in">
                <h2 class="h3 mb-4">Nossa História</h2>
                <p>A <strong>KM Refrigeração Industrial</strong> é uma empresa do renomado <strong>Grupo KM</strong>, especializada em serviços de assistência técnica em equipamentos de refrigeração industrial. Com mais de 15 anos de experiência no mercado, consolidamos nossa posição como referência nacional em manutenção e assistência técnica especializada.</p>

                <p>Atendemos diversos segmentos industriais com soluções personalizadas em <strong>unidades de água gelada</strong>, <strong>resfriadores de painel elétrico</strong>, <strong>trocadores de calor</strong>, <strong>resfriadores de óleo</strong>, <strong>secadores de ar comprimido</strong>, <strong>desumidificadores industriais</strong>, <strong>torres de resfriamento</strong>, <strong>fancoil</strong>, <strong>UTA</strong>, <strong>AHU</strong>, entre outros equipamentos essenciais para processos industriais.</p>

                <h2 class="h3 mb-4 mt-5">Nossa Expertise</h2>
                <p>Realizamos <strong>manutenção preventiva</strong>, <strong>corretiva</strong> e <strong>preditiva</strong> em equipamentos nacionais e importados, garantindo a máxima eficiência operacional e redução de custos para nossos clientes.</p>

                <p>Nossa equipe é formada por técnicos especializados e altamente qualificados, com treinamento contínuo nas mais modernas tecnologias de refrigeração industrial. Trabalhamos exclusivamente com peças originais e de fornecedores homologados, assegurando a qualidade e durabilidade das intervenções realizadas.</p>
            </div>

            <div class="col-lg-6 fade-in">
                <div class="bg-light p-5 rounded-3 mb-4">
                    <h3 class="h4 mb-4">Nossos Valores</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h4">◆</span>
                            <div>
                                <strong>Qualidade:</strong> Excelência técnica em cada serviço prestado
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h4">◆</span>
                            <div>
                                <strong>Eficiência:</strong> Soluções rápidas e eficazes para minimizar paradas
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h4">◆</span>
                            <div>
                                <strong>Segurança:</strong> Procedimentos seguros e conformes com normas técnicas
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h4">◆</span>
                            <div>
                                <strong>Compromisso:</strong> Relacionamento duradouro com nossos clientes
                            </div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h4">◆</span>
                            <div>
                                <strong>Inovação:</strong> Atualização constante com as tecnologias mais modernas
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="bg-primary text-white p-5 rounded-3">
                    <h3 class="h4 mb-4">Estrutura Completa</h3>
                    <p class="mb-0">Contamos com estrutura completa de atendimento, incluindo equipe técnica disponível 24/7, estoque de peças de reposição, ferramentas especializadas e veículos equipados para atendimento emergencial em todo território nacional.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5 g-4">
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="text-center p-4 bg-light rounded-3">
                    <div class="display-4 text-primary mb-2">15+</div>
                    <h3 class="h5 mb-0">Anos no Mercado</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="text-center p-4 bg-light rounded-3">
                    <div class="display-4 text-primary mb-2">500+</div>
                    <h3 class="h5 mb-0">Clientes Atendidos</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="text-center p-4 bg-light rounded-3">
                    <div class="display-4 text-primary mb-2">50+</div>
                    <h3 class="h5 mb-0">Técnicos Especializados</h3>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="text-center p-4 bg-light rounded-3">
                    <div class="display-4 text-primary mb-2">24/7</div>
                    <h3 class="h5 mb-0">Atendimento Emergencial</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 fade-in">
                <div class="bg-light p-5 rounded-3">
                    <h2 class="h3 mb-4">Segmentos Atendidos</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Indústria Alimentícia</li>
                                <li class="mb-2">✓ Indústria Farmacêutica</li>
                                <li class="mb-2">✓ Indústria Química</li>
                                <li class="mb-2">✓ Indústria Automotiva</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Plásticos e Injeção</li>
                                <li class="mb-2">✓ Data Centers</li>
                                <li class="mb-2">✓ Hospitais e Laboratórios</li>
                                <li class="mb-2">✓ Shopping Centers</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="mb-2">✓ Edifícios Comerciais</li>
                                <li class="mb-2">✓ Indústria Metalúrgica</li>
                                <li class="mb-2">✓ Processamento Industrial</li>
                                <li class="mb-2">✓ Armazenagem e Logística</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 fade-in">
                <h2 class="h3 mb-4">Certificações e Qualificações</h2>
                <p>Nossa equipe técnica possui certificações nas principais marcas e tecnologias do mercado de refrigeração industrial. Mantemos programa contínuo de treinamento e atualização técnica, garantindo que nossos profissionais estejam sempre preparados para atender as demandas mais complexas do setor.</p>

                <p class="mb-0">Trabalhamos em conformidade com as normas técnicas brasileiras (NBR) e internacionais, incluindo procedimentos de segurança do trabalho (NR-10, NR-12, NR-33, NR-35) e normas ambientais para manuseio de gases refrigerantes.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="fade-in">
            <h2>Conheça Nossas Soluções em Refrigeração Industrial</h2>
            <p class="lead mb-4">Entre em contato e descubra como podemos ajudar sua empresa</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de conhecer as soluções da KM Refrigeração." class="btn btn-light btn-lg me-3" target="_blank" rel="noopener">
                Falar com Especialista
            </a>
            <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-light btn-lg">Enviar Mensagem</a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
