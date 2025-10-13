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
                    <div class="icon">❄️</div>
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
                    <div class="icon">💨</div>
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
                    <div class="icon">💧</div>
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
                    <div class="icon">🔌</div>
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
                    <div class="icon">🌀</div>
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
                    <div class="icon">💦</div>
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
                    <div class="icon">🔧</div>
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
                    <div class="icon">🛢️</div>
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
                    <div class="icon">⚙️</div>
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
                    <div class="icon">🌪️</div>
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
                    <div class="icon">📟</div>
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
                    <div class="icon">🏭</div>
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
