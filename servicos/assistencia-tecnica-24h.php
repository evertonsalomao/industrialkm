<?php
require_once '../config.php';

$pageTitle = 'Assistência Técnica 24 Horas - Refrigeração Industrial - KM Refrigeração';
$pageDescription = 'Assistência técnica 24 horas especializada em refrigeração industrial. Atendimento emergencial todos os dias da semana, incluindo finais de semana e feriados.';
$pageKeywords = 'assistência técnica 24h, atendimento emergencial refrigeração, suporte técnico 24 horas, manutenção urgente chiller, plantão técnico refrigeração';
$currentPage = 'servicos';
$canonical = SITE_URL . '/servicos/assistencia-tecnica-24h';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Serviços', 'url' => SITE_URL . '/#servicos'],
    ['name' => 'Assistência Técnica 24h', 'url' => SITE_URL . '/servicos/assistencia-tecnica-24h']
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Assistência Técnica 24 Horas - Refrigeração Industrial',
    'serviceType' => 'Assistência Técnica 24h',
    'provider' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL
    ],
    'description' => 'Assistência técnica especializada 24 horas para equipamentos de refrigeração industrial com atendimento emergencial todos os dias.',
    'areaServed' => 'BR',
    'hoursAvailable' => '24/7'
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
                <li class="breadcrumb-item active" aria-current="page">Assistência Técnica 24h</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <h1 class="section-title">Assistência Técnica 24 Horas</h1>
                <p class="lead">Suporte técnico especializado disponível 24 horas por dia, 7 dias por semana, para garantir a continuidade operacional da sua indústria</p>

                <div class="mt-4">
                    <h2 class="h3 mb-3">Atendimento Sem Interrupções</h2>
                    <p>Sabemos que <strong>problemas em sistemas de refrigeração industrial não escolhem hora para acontecer</strong>. Uma parada não programada pode significar perdas significativas de produção, produtos deteriorados e prejuízos financeiros expressivos.</p>

                    <p>Por isso, a <strong>KM Refrigeração Industrial</strong> mantém equipes técnicas especializadas de plantão 24 horas por dia, 365 dias por ano, prontas para atender emergências em qualquer momento, incluindo madrugadas, finais de semana e feriados.</p>

                    <h2 class="h3 mb-3 mt-5">Como Funciona Nosso Atendimento 24h</h2>

                    <div class="bg-light p-4 rounded mt-3">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="min-width: 40px; height: 40px; font-weight: bold;">1</div>
                            <div>
                                <h4 class="h6 mb-2">Acionamento Imediato</h4>
                                <p class="mb-0">Entre em contato via WhatsApp ou telefone. Nossa central de atendimento registra o chamado e coleta informações sobre o problema.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="min-width: 40px; height: 40px; font-weight: bold;">2</div>
                            <div>
                                <h4 class="h6 mb-2">Triagem Técnica</h4>
                                <p class="mb-0">Técnico especialista faz diagnóstico inicial por telefone e orienta sobre procedimentos emergenciais se necessário.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="min-width: 40px; height: 40px; font-weight: bold;">3</div>
                            <div>
                                <h4 class="h6 mb-2">Deslocamento da Equipe</h4>
                                <p class="mb-0">Acionamos a equipe mais próxima equipada com ferramentas e peças para atendimento no local em até 4 horas (regiões metropolitanas).</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="min-width: 40px; height: 40px; font-weight: bold;">4</div>
                            <div>
                                <h4 class="h6 mb-2">Reparo ou Contenção</h4>
                                <p class="mb-0">Executamos o reparo definitivo ou implementamos solução temporária para restabelecer a operação enquanto aguarda peças específicas.</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Cobertura de Atendimento</h2>
                    <p>Nosso serviço de assistência técnica 24h atende todas as necessidades de suporte emergencial:</p>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Diagnóstico Remoto</h4>
                                <p class="small mb-0">Suporte técnico por telefone ou vídeo para identificação inicial de problemas</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Atendimento Presencial</h4>
                                <p class="small mb-0">Técnicos especializados no local com ferramentas e equipamentos de teste</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Reparos Emergenciais</h4>
                                <p class="small mb-0">Intervenções corretivas urgentes para restabelecer operação</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Fornecimento de Peças</h4>
                                <p class="small mb-0">Estoque estratégico de componentes críticos para substituição imediata</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Equipamentos Atendidos 24h</h2>
                    <p>Prestamos assistência técnica emergencial para todos os tipos de equipamentos de refrigeração industrial:</p>

                    <ul>
                        <li><strong>Chillers:</strong> Água gelada, condensação a ar e água, compressores scroll, parafuso e centrífugos</li>
                        <li><strong>Torres de Resfriamento:</strong> Circuito aberto, fechado e condensadores evaporativos</li>
                        <li><strong>Fancoil e UTA:</strong> Unidades de tratamento de ar e sistemas de climatização industrial</li>
                        <li><strong>Resfriadores:</strong> Painéis elétricos, óleo, processos industriais</li>
                        <li><strong>Secadores:</strong> Ar comprimido, desumidificadores industriais</li>
                        <li><strong>Câmaras Frias:</strong> Conservação, congelamento e processos especiais</li>
                        <li><strong>Compressores:</strong> Sistemas centralizados e racks de compressão</li>
                    </ul>

                    <h2 class="h3 mb-3 mt-5">Modalidades de Contratação</h2>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Chamado Avulso</h4>
                        <p class="mb-2">Acionamento pontual conforme necessidade. Cobrança por chamado com valores diferenciados para horários comerciais, noturnos, finais de semana e feriados.</p>
                        <ul class="small">
                            <li>Sem mensalidade</li>
                            <li>Pagamento apenas quando usar</li>
                            <li>Ideal para emergências eventuais</li>
                        </ul>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Contrato de Suporte 24h</h4>
                        <p class="mb-2">Mensalidade fixa com número de chamados inclusos e valores reduzidos. Prioridade no atendimento e descontos em peças e serviços.</p>
                        <ul class="small">
                            <li>Atendimento prioritário</li>
                            <li>Chamados inclusos na mensalidade</li>
                            <li>Descontos em peças e manutenções</li>
                            <li>Relatórios mensais de atendimento</li>
                        </ul>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">Plantão Dedicado</h4>
                        <p class="mb-2">Equipe exclusiva alocada para sua empresa, disponível 24/7 para atendimento imediato. Ideal para operações críticas que não podem parar.</p>
                        <ul class="small">
                            <li>Técnico dedicado com conhecimento do seu parque</li>
                            <li>Tempo de resposta imediato</li>
                            <li>Estoque de peças no cliente</li>
                            <li>SLA customizado</li>
                        </ul>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Tempo de Resposta Garantido</h2>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Região</th>
                                    <th>Chamado Avulso</th>
                                    <th>Contrato Suporte</th>
                                    <th>Plantão Dedicado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Capital SP</strong></td>
                                    <td>Até 4 horas</td>
                                    <td>Até 2 horas</td>
                                    <td>Imediato</td>
                                </tr>
                                <tr>
                                    <td><strong>Grande SP</strong></td>
                                    <td>Até 6 horas</td>
                                    <td>Até 4 horas</td>
                                    <td>Até 1 hora</td>
                                </tr>
                                <tr>
                                    <td><strong>Interior SP</strong></td>
                                    <td>Até 12 horas</td>
                                    <td>Até 8 horas</td>
                                    <td>Até 2 horas</td>
                                </tr>
                                <tr>
                                    <td><strong>Outros Estados</strong></td>
                                    <td>A combinar</td>
                                    <td>Até 24 horas</td>
                                    <td>Até 4 horas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Por Que Escolher a KM Refrigeração?</h2>
                    <ul>
                        <li><strong>Mais de 15 anos de experiência</strong> em refrigeração industrial</li>
                        <li><strong>50+ técnicos especializados</strong> em todo território nacional</li>
                        <li><strong>Frota própria</strong> equipada com ferramentas e instrumentos de medição</li>
                        <li><strong>Estoque estratégico</strong> de peças críticas em centros de distribuição</li>
                        <li><strong>Parceria com fabricantes</strong> para acesso rápido a componentes originais</li>
                        <li><strong>Sistema de gestão</strong> com rastreamento de chamados e histórico detalhado</li>
                        <li><strong>Certificações técnicas</strong> nas principais marcas do mercado</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="fade-in sticky-top">
                    <div class="contact-form mb-4 bg-danger text-white p-4 rounded">
                        <h3 class="h5 mb-3">🚨 Emergência 24 Horas</h3>
                        <p class="small mb-4">Atendimento imediato todos os dias</p>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Preciso de assistência técnica emergencial 24h." class="btn btn-light w-100 mb-3" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            Acionar Agora
                        </a>
                        <div class="text-center small">
                            <p class="mb-1">📞 Telefone 24h:</p>
                            <p class="mb-0 h6">(11) 98765-4321</p>
                        </div>
                    </div>

                    <div class="bg-primary text-white p-4 rounded mb-4">
                        <h4 class="h6 mb-3">Disponibilidade Total</h4>
                        <ul class="small list-unstyled mb-0">
                            <li class="mb-2">✓ 24 horas por dia</li>
                            <li class="mb-2">✓ 7 dias por semana</li>
                            <li class="mb-2">✓ Finais de semana</li>
                            <li class="mb-2">✓ Feriados nacionais</li>
                            <li class="mb-0">✓ Madrugadas</li>
                        </ul>
                    </div>

                    <div class="bg-light p-4 rounded">
                        <h4 class="h6 mb-3">Contrato de Suporte</h4>
                        <p class="small mb-3">Economize até 50% em atendimentos emergenciais com nosso contrato de suporte 24h</p>
                        <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-primary w-100">Solicitar Proposta</a>
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
                                Qual o custo do atendimento 24 horas?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                O custo varia conforme a modalidade (chamado avulso ou contrato), horário do atendimento e localização. Chamados em horário comercial têm valor diferente de madrugadas e feriados. Entre em contato para orçamento detalhado.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Como faço para acionar o suporte emergencial?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Entre em contato através do WhatsApp ou telefone 24h. Nossa central registra o chamado, faz triagem técnica inicial e aciona a equipe mais próxima para deslocamento ao local.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Vocês atendem todo o Brasil?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim. Temos equipes próprias nas principais capitais e rede de parceiros técnicos homologados em todo território nacional. Para localizações remotas, o tempo de resposta pode ser estendido.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Vale a pena contratar um contrato de suporte 24h?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim, principalmente para empresas que dependem criticamente de refrigeração. O contrato oferece economia de até 50% comparado a chamados avulsos, além de atendimento prioritário e outros benefícios.
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
            <h2>Garanta Tranquilidade com Suporte 24 Horas</h2>
            <p class="lead mb-4">Contrate um contrato de assistência técnica e durma tranquilo</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Quero contratar assistência técnica 24h." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                Falar com Especialista
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
            'name' => 'Qual o custo do atendimento 24 horas?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'O custo varia conforme a modalidade (chamado avulso ou contrato), horário do atendimento e localização.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Como faço para acionar o suporte emergencial?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Entre em contato através do WhatsApp ou telefone 24h. Nossa central registra o chamado e aciona a equipe mais próxima.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Vocês atendem todo o Brasil?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sim. Temos equipes próprias nas principais capitais e rede de parceiros técnicos homologados em todo território nacional.'
            ]
        ]
    ]
];

echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once '../includes/footer.php';
?>
