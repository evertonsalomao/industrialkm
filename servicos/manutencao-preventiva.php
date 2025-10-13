<?php
require_once '../config.php';

$pageTitle = 'Manutenção Preventiva de Refrigeração Industrial - KM Refrigeração';
$pageDescription = 'Manutenção preventiva especializada em equipamentos de refrigeração industrial. Evite paradas não programadas e aumente a vida útil dos seus equipamentos com a KM Refrigeração.';
$pageKeywords = 'manutenção preventiva refrigeração, manutenção chiller, manutenção preventiva industrial, plano manutenção refrigeração, check-list preventiva';
$currentPage = 'servicos';
$canonical = SITE_URL . '/servicos/manutencao-preventiva';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Serviços', 'url' => SITE_URL . '/#servicos'],
    ['name' => 'Manutenção Preventiva', 'url' => SITE_URL . '/servicos/manutencao-preventiva']
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Manutenção Preventiva de Refrigeração Industrial',
    'serviceType' => 'Manutenção Preventiva',
    'provider' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL
    ],
    'description' => 'Serviço especializado de manutenção preventiva para equipamentos de refrigeração industrial, incluindo chillers, fancoil, torres de resfriamento e mais.',
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
                <li class="breadcrumb-item active" aria-current="page">Manutenção Preventiva</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <h1 class="section-title">Manutenção Preventiva de Refrigeração Industrial</h1>
                <p class="lead">Evite paradas não programadas e aumente a vida útil dos seus equipamentos com programas de manutenção preventiva personalizados</p>

                <div class="mt-4">
                    <h2 class="h3 mb-3">O Que É Manutenção Preventiva?</h2>
                    <p>A <strong>manutenção preventiva</strong> é um conjunto de ações planejadas e sistemáticas realizadas periodicamente em equipamentos de refrigeração industrial, com o objetivo de prevenir falhas, reduzir paradas não programadas e prolongar a vida útil dos ativos.</p>

                    <p>Na <strong>KM Refrigeração Industrial</strong>, desenvolvemos programas de manutenção preventiva customizados para cada tipo de equipamento e necessidade operacional, garantindo máxima eficiência e confiabilidade dos sistemas de refrigeração.</p>

                    <h2 class="h3 mb-3 mt-5">Benefícios da Manutenção Preventiva</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Redução de paradas não programadas</strong> e aumento da disponibilidade operacional</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Economia de energia</strong> através da otimização do desempenho dos equipamentos</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Aumento da vida útil</strong> de compressores, trocadores de calor e componentes críticos</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Redução de custos</strong> com reparos emergenciais e substituição prematura de peças</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Conformidade com normas</strong> técnicas e ambientais</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">✓</span>
                            <div><strong>Histórico detalhado</strong> de manutenções para gestão de ativos</div>
                        </li>
                    </ul>

                    <h2 class="h3 mb-3 mt-5">Equipamentos Atendidos</h2>
                    <p>Realizamos manutenção preventiva em diversos tipos de equipamentos de refrigeração industrial:</p>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Chillers e Unidades de Água Gelada</h4>
                                <p class="small mb-0">Inspeção completa de compressores, evaporadores, condensadores e sistema de controle</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Fancoil, UTA e AHU</h4>
                                <p class="small mb-0">Limpeza de serpentinas, verificação de ventiladores e sistema de drenagem</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Torres de Resfriamento</h4>
                                <p class="small mb-0">Limpeza de bandejas, tratamento de água e inspeção de motorredutor</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Resfriadores e Secadores</h4>
                                <p class="small mb-0">Manutenção de painéis elétricos, resfriadores de óleo e secadores de ar</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Check-List de Manutenção Preventiva</h2>
                    <p>Nossos programas de manutenção preventiva incluem:</p>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Inspeções Visuais e Funcionais</h4>
                        <ul>
                            <li>Verificação de vazamentos de gás refrigerante</li>
                            <li>Inspeção de conexões elétricas e aperto de terminais</li>
                            <li>Análise de ruídos e vibrações anormais</li>
                            <li>Verificação de pressões de operação</li>
                        </ul>

                        <h4 class="h6 mb-3 mt-4">Limpezas e Ajustes</h4>
                        <ul>
                            <li>Limpeza de serpentinas e trocadores de calor</li>
                            <li>Limpeza de filtros de ar e água</li>
                            <li>Lubrificação de motores e rolamentos</li>
                            <li>Ajuste de correias e polias</li>
                        </ul>

                        <h4 class="h6 mb-3 mt-4">Testes e Medições</h4>
                        <ul>
                            <li>Medição de corrente elétrica dos compressores</li>
                            <li>Análise de superaquecimento e sub-resfriamento</li>
                            <li>Teste de segurança e controles</li>
                            <li>Medição de temperaturas de operação</li>
                        </ul>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Periodicidade Recomendada</h2>
                    <p>A periodicidade da manutenção preventiva varia conforme o tipo de equipamento, condições de operação e criticidade do sistema. Geralmente recomendamos:</p>

                    <ul>
                        <li><strong>Mensal:</strong> Inspeções visuais e limpezas básicas</li>
                        <li><strong>Trimestral:</strong> Manutenção completa com medições e testes</li>
                        <li><strong>Semestral:</strong> Análise detalhada e substituição preventiva de componentes</li>
                        <li><strong>Anual:</strong> Revisão geral com desmontagem e inspeção interna</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="fade-in">
                    <div class="contact-form mb-4 sticky-top">
                        <h3 class="h5 mb-3">Solicite um Orçamento</h3>
                        <p class="small text-muted mb-4">Preencha o formulário abaixo ou entre em contato pelo WhatsApp</p>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar um orçamento para manutenção preventiva." class="btn btn-primary w-100 mb-3" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            Falar no WhatsApp
                        </a>
                        <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-primary w-100">Enviar Mensagem</a>
                    </div>

                    <div class="bg-primary text-white p-4 rounded">
                        <h4 class="h6 mb-3">Vantagens do Contrato</h4>
                        <ul class="small list-unstyled mb-0">
                            <li class="mb-2">✓ Atendimento prioritário</li>
                            <li class="mb-2">✓ Descontos em peças e serviços</li>
                            <li class="mb-2">✓ Relatórios técnicos detalhados</li>
                            <li class="mb-2">✓ Gestão de histórico de manutenções</li>
                            <li class="mb-0">✓ Suporte técnico 24/7</li>
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
                                Qual a diferença entre manutenção preventiva e corretiva?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A manutenção preventiva é planejada e realizada periodicamente para evitar falhas, enquanto a manutenção corretiva é executada após a ocorrência de um problema. A preventiva reduz custos e paradas não programadas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Com que frequência deve ser feita a manutenção preventiva?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A periodicidade varia conforme o equipamento e condições de uso. Geralmente recomendamos inspeções mensais e manutenções completas trimestrais. Nossa equipe pode avaliar e sugerir o melhor plano para sua operação.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                A manutenção preventiva para o equipamento?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Não necessariamente. Muitas inspeções e ajustes são realizados com o equipamento em operação. Quando necessário parar, agendamos previamente em horários que minimizem impacto na sua produção.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Vale a pena contratar um plano de manutenção preventiva?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim. Estudos mostram que a manutenção preventiva pode reduzir custos em até 40% comparado com manutenções corretivas emergenciais, além de aumentar a vida útil dos equipamentos em até 50%.
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
            <h2>Implante um Programa de Manutenção Preventiva</h2>
            <p class="lead mb-4">Proteja seus investimentos e garanta a continuidade operacional</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Quero contratar manutenção preventiva." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                Solicitar Proposta
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
            'name' => 'Qual a diferença entre manutenção preventiva e corretiva?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'A manutenção preventiva é planejada e realizada periodicamente para evitar falhas, enquanto a manutenção corretiva é executada após a ocorrência de um problema. A preventiva reduz custos e paradas não programadas.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Com que frequência deve ser feita a manutenção preventiva?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'A periodicidade varia conforme o equipamento e condições de uso. Geralmente recomendamos inspeções mensais e manutenções completas trimestrais.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'A manutenção preventiva para o equipamento?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Não necessariamente. Muitas inspeções e ajustes são realizados com o equipamento em operação. Quando necessário parar, agendamos previamente em horários que minimizem impacto na produção.'
            ]
        ]
    ]
];

echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once '../includes/footer.php';
?>
