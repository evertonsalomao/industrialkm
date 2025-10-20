<?php
require_once '../config.php';

$pageTitle = 'Instalação e Retrofit de Refrigeração Industrial - KM Refrigeração';
$pageDescription = 'Serviços de instalação e retrofit de equipamentos de refrigeração industrial. Modernização de sistemas antigos, aumento de capacidade e adequação às normas ambientais.';
$pageKeywords = 'instalação chiller, retrofit refrigeração, modernização sistema refrigeração, troca de gás refrigerante, upgrade equipamentos industriais';
$currentPage = 'servicos';
$canonical = SITE_URL . '/servicos/instalacao-retrofit';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Serviços', 'url' => SITE_URL . '/#servicos'],
    ['name' => 'Instalação e Retrofit', 'url' => SITE_URL . '/servicos/instalacao-retrofit']
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Instalação e Retrofit de Refrigeração Industrial',
    'serviceType' => 'Instalação e Retrofit',
    'provider' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL
    ],
    'description' => 'Serviço especializado de instalação e retrofit de equipamentos de refrigeração industrial com modernização e adequação às normas ambientais.',
    'areaServed' => 'BR'
];

require_once '../includes/header.php';
echo getBreadcrumbs($breadcrumbs);
echo '<script type="application/ld+json">' . json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/#servicos">Serviços</a></li>
                <li class="breadcrumb-item active" aria-current="page">Instalação e Retrofit</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <h1 class="section-title">Instalação e Retrofit de Refrigeração Industrial</h1>
                <p class="lead">Modernize seus equipamentos, aumente a eficiência energética e adeque-se às normas ambientais com soluções em retrofit</p>

                <div class="mt-4">
                    <h2 class="h3 mb-3">O Que É Retrofit de Refrigeração?</h2>
                    <p><strong>Retrofit</strong> é o processo de modernização e atualização de equipamentos de refrigeração industrial existentes, substituindo componentes obsoletos por tecnologias mais eficientes, sem necessidade de trocar todo o sistema. É uma alternativa economicamente viável para renovar instalações antigas.</p>

                    <p>Na <strong>KM Refrigeração Industrial</strong>, oferecemos soluções completas de retrofit que incluem desde a troca de gases refrigerantes para atender normas ambientais, até a modernização de sistemas de controle e automação, melhorando performance e reduzindo custos operacionais.</p>

                    <h2 class="h3 mb-3 mt-5">Quando Considerar um Retrofit?</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Equipamento com mais de 10 anos:</strong> Tecnologia defasada e peças descontinuadas</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Alto consumo de energia:</strong> Conta de luz elevada devido à baixa eficiência</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Gases refrigerantes proibidos:</strong> R-22, R-502 e outros CFCs eliminados pelo Protocolo de Montreal</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Manutenções frequentes:</strong> Custos crescentes com reparos e paradas</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Necessidade de aumento de capacidade:</strong> Expansão da produção sem comprar novo equipamento</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Falta de automação:</strong> Controle manual obsoleto e ineficiente</div>
                        </li>
                    </ul>

                    <h2 class="h3 mb-3 mt-5">Serviços de Retrofit Oferecidos</h2>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Conversão de Gases Refrigerantes</h4>
                                <p class="small mb-0">Substituição de R-22 por R-410A, R-407C ou R-134a conforme o sistema</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Modernização de Compressores</h4>
                                <p class="small mb-0">Troca por compressores de alta eficiência com tecnologia inverter</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Upgrade de Painéis Elétricos</h4>
                                <p class="small mb-0">Substituição de painéis obsoletos por sistemas com CLP e IHM</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Automação e IoT</h4>
                                <p class="small mb-0">Implementação de sistemas de monitoramento remoto e gestão inteligente</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Troca de Trocadores de Calor</h4>
                                <p class="small mb-0">Substituição de evaporadores e condensadores por modelos mais eficientes</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Aumento de Capacidade</h4>
                                <p class="small mb-0">Expansão da capacidade frigorífica sem troca completa do sistema</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Instalação de Novos Equipamentos</h2>
                    <p>Além de retrofit, realizamos instalação completa de equipamentos novos de refrigeração industrial:</p>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Chillers e Unidades de Água Gelada</h4>
                        <ul>
                            <li>Dimensionamento correto da capacidade necessária</li>
                            <li>Instalação de tubulações de água gelada e condensação</li>
                            <li>Conexões elétricas e automação</li>
                            <li>Testes de performance e comissionamento</li>
                        </ul>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Torres de Resfriamento e Condensadores</h4>
                        <ul>
                            <li>Projeto de instalação com análise de espaço físico</li>
                            <li>Sistema de bombeamento e tratamento de água</li>
                            <li>Instalação de tubulações e conexões hidráulicas</li>
                            <li>Startup e balanceamento do sistema</li>
                        </ul>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Fancoil, UTA e Sistemas de Climatização</h4>
                        <ul>
                            <li>Instalação de dutos e difusores de ar</li>
                            <li>Conexão com sistema de água gelada</li>
                            <li>Automação e integração com BMS</li>
                            <li>Balanceamento e ajuste de vazões</li>
                        </ul>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Vantagens do Retrofit vs. Compra de Novo</h2>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Aspecto</th>
                                    <th>Retrofit</th>
                                    <th>Equipamento Novo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Custo</strong></td>
                                    <td>40% a 60% mais econômico</td>
                                    <td>Investimento total</td>
                                </tr>
                                <tr>
                                    <td><strong>Prazo</strong></td>
                                    <td>Mais rápido (dias)</td>
                                    <td>Mais longo (semanas/meses)</td>
                                </tr>
                                <tr>
                                    <td><strong>Parada Operacional</strong></td>
                                    <td>Mínima</td>
                                    <td>Maior</td>
                                </tr>
                                <tr>
                                    <td><strong>Sustentabilidade</strong></td>
                                    <td>Reutiliza estrutura existente</td>
                                    <td>Descarte de equipamento antigo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Nosso Processo de Retrofit</h2>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">1. Diagnóstico e Estudo de Viabilidade</h4>
                        <p class="mb-0">Avaliação técnica completa do equipamento atual, medições de performance e análise custo-benefício do retrofit.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">2. Projeto e Especificação</h4>
                        <p class="mb-0">Desenvolvimento do projeto de modernização com especificação de todos os componentes e sistemas a serem substituídos.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">3. Orçamento Detalhado</h4>
                        <p class="mb-0">Apresentação de proposta completa incluindo equipamentos, mão de obra, prazo e ROI estimado.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">4. Execução do Retrofit</h4>
                        <p class="mb-0">Desmontagem controlada, instalação de novos componentes e integração com sistemas existentes.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">5. Testes e Comissionamento</h4>
                        <p class="mb-0">Startup completo, ajustes finos, testes de performance e treinamento da equipe operacional.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="fade-in sticky-top">
                    <div class="contact-form mb-4">
                        <h3 class="h5 mb-3">Solicite uma Análise Técnica</h3>
                        <p class="small text-muted mb-4">Avaliação gratuita de viabilidade de retrofit</p>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar uma análise técnica para retrofit." class="btn btn-primary w-100 mb-3" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            Falar no WhatsApp
                        </a>
                        <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-primary w-100">Enviar Mensagem</a>
                    </div>

                    <div class="bg-primary text-white p-4 rounded">
                        <h4 class="h6 mb-3">Benefícios do Retrofit</h4>
                        <ul class="small list-unstyled mb-0">
                            <li class="mb-2">✓ Economia de 40% a 60%</li>
                            <li class="mb-2">✓ Redução de consumo energético</li>
                            <li class="mb-2">✓ Adequação ambiental</li>
                            <li class="mb-2">✓ Execução rápida</li>
                            <li class="mb-0">✓ Menor impacto operacional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h2 class="h3">Perguntas Frequentes</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion fade-in" id="faqAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Quanto tempo dura um retrofit?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Depende da complexidade do projeto. Retrofits simples como troca de gás refrigerante podem levar de 3 a 5 dias. Modernizações completas com troca de compressores e automação podem levar de 2 a 4 semanas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Retrofit vale mais a pena que comprar equipamento novo?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Na maioria dos casos sim, principalmente quando a estrutura principal (chassi, trocadores, tubulações) está em bom estado. O retrofit pode custar de 40% a 60% menos que um equipamento novo com resultado similar.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                É obrigatório trocar o gás R-22?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim. O gás R-22 foi banido pelo Protocolo de Montreal e sua produção foi encerrada. Os estoques existentes estão se esgotando e o preço aumentou drasticamente. A conversão para gases alternativos é necessária e urgente.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Quanto posso economizar de energia com um retrofit?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A economia varia conforme o tipo de intervenção. Retrofits com compressores de alta eficiência e automação podem gerar economia de 20% a 40% no consumo de energia elétrica, com payback entre 18 e 36 meses.
                            </div>
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
            <h2>Modernize Seus Equipamentos com Retrofit</h2>
            <p class="lead mb-4">Economize até 60% comparado à compra de equipamento novo</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Quero fazer um retrofit no meu sistema de refrigeração." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                Solicitar Análise Gratuita
            </a>
        </div>
    </div>
</section>

<?php
$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'Quanto tempo dura um retrofit?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Depende da complexidade do projeto. Retrofits simples podem levar de 3 a 5 dias. Modernizações completas podem levar de 2 a 4 semanas.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Retrofit vale mais a pena que comprar equipamento novo?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Na maioria dos casos sim. O retrofit pode custar de 40% a 60% menos que um equipamento novo com resultado similar.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'É obrigatório trocar o gás R-22?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sim. O gás R-22 foi banido pelo Protocolo de Montreal e a conversão para gases alternativos é necessária e urgente.'
            ]
        ]
    ]
];

echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once '../includes/footer.php';
?>
