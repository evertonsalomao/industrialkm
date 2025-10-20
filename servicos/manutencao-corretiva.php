<?php
require_once '../config.php';

$pageTitle = 'Manutenção Corretiva de Refrigeração Industrial - KM Refrigeração';
$pageDescription = 'Serviço de manutenção corretiva especializada em equipamentos de refrigeração industrial. Atendimento emergencial 24h para solução rápida de falhas e problemas operacionais.';
$pageKeywords = 'manutenção corretiva refrigeração, reparo chiller, conserto equipamento industrial, manutenção emergencial, assistência técnica corretiva';
$currentPage = 'servicos';
$canonical = SITE_URL . '/servicos/manutencao-corretiva';

$breadcrumbs = [
    ['name' => 'Início', 'url' => SITE_URL . '/'],
    ['name' => 'Serviços', 'url' => SITE_URL . '/#servicos'],
    ['name' => 'Manutenção Corretiva', 'url' => SITE_URL . '/servicos/manutencao-corretiva']
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Manutenção Corretiva de Refrigeração Industrial',
    'serviceType' => 'Manutenção Corretiva',
    'provider' => [
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL
    ],
    'description' => 'Serviço especializado de manutenção corretiva para equipamentos de refrigeração industrial com atendimento emergencial 24h.',
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
                <li class="breadcrumb-item active" aria-current="page">Manutenção Corretiva</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <h1 class="section-title">Manutenção Corretiva de Refrigeração Industrial</h1>
                <p class="lead">Solução rápida e eficaz para falhas em equipamentos de refrigeração industrial com atendimento emergencial 24 horas</p>

                <div class="mt-4">
                    <h2 class="h3 mb-3">O Que É Manutenção Corretiva?</h2>
                    <p>A <strong>manutenção corretiva</strong> é a intervenção técnica realizada após a ocorrência de uma falha ou problema em equipamentos de refrigeração industrial. Seu objetivo é restaurar rapidamente as condições normais de operação, minimizando o tempo de parada e os prejuízos à produção.</p>

                    <p>Na <strong>KM Refrigeração Industrial</strong>, contamos com equipe especializada e estoque estratégico de peças para atender emergências com máxima agilidade. Nossa experiência de mais de 15 anos no mercado nos permite diagnosticar e solucionar problemas complexos em tempo recorde.</p>

                    <h2 class="h3 mb-3 mt-5">Quando Solicitar Manutenção Corretiva?</h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Parada total do equipamento</strong> ou falha no sistema de refrigeração</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Perda de capacidade frigorífica</strong> e temperaturas fora do padrão</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Vazamento de gás refrigerante</strong> ou fluido térmico</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Ruídos anormais</strong> em compressores, ventiladores ou bombas</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Alarmes de segurança</strong> ou falhas elétricas no sistema</div>
                        </li>
                        <li class="mb-3 d-flex">
                            <span class="text-primary me-3 h5">⚠</span>
                            <div><strong>Aumento de consumo energético</strong> sem causa aparente</div>
                        </li>
                    </ul>

                    <h2 class="h3 mb-3 mt-5">Problemas Mais Comuns Solucionados</h2>
                    <p>Nossa equipe está preparada para resolver diversos tipos de falhas:</p>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Falhas em Compressores</h4>
                                <p class="small mb-0">Queima de compressores, falha de partida, superaquecimento e problemas mecânicos</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Vazamentos de Gás</h4>
                                <p class="small mb-0">Detecção, reparo e recarga de sistemas com perda de refrigerante</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Falhas Elétricas</h4>
                                <p class="small mb-0">Problemas em painéis, contatores, disjuntores e sistema de controle</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Trocadores Entupidos</h4>
                                <p class="small mb-0">Limpeza química e mecânica de evaporadores e condensadores</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Válvulas e Controles</h4>
                                <p class="small mb-0">Substituição de válvulas de expansão, solenoides e pressostatos</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded">
                                <h4 class="h6">Bombas e Ventiladores</h4>
                                <p class="small mb-0">Reparo ou substituição de motores, rolamentos e acoplamentos</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Nosso Processo de Atendimento</h2>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">1. Acionamento Emergencial</h4>
                        <p class="mb-0">Entre em contato 24/7 por WhatsApp ou telefone. Nossa central registra o chamado e aciona a equipe mais próxima.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">2. Diagnóstico no Local</h4>
                        <p class="mb-0">Técnico especializado se desloca até sua empresa com ferramentas e equipamentos de teste para identificar a causa raiz do problema.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">3. Orçamento e Aprovação</h4>
                        <p class="mb-0">Apresentamos orçamento detalhado com prazo de execução. Em casos emergenciais, iniciamos reparos imediatos com sua autorização verbal.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">4. Execução do Reparo</h4>
                        <p class="mb-0">Realizamos o reparo utilizando peças originais ou de fornecedores homologados, seguindo todas as normas técnicas e de segurança.</p>
                    </div>

                    <div class="bg-light p-4 rounded mt-3">
                        <h4 class="h6 mb-3">5. Testes e Entrega</h4>
                        <p class="mb-0">Após o reparo, testamos completamente o equipamento e entregamos relatório técnico com as intervenções realizadas.</p>
                    </div>

                    <h2 class="h3 mb-3 mt-5">Diferenciais KM Refrigeração</h2>
                    <ul>
                        <li><strong>Atendimento 24 horas:</strong> Equipe disponível todos os dias, incluindo finais de semana e feriados</li>
                        <li><strong>Tempo de resposta:</strong> Chegada no local em até 4 horas em regiões metropolitanas</li>
                        <li><strong>Estoque de peças:</strong> Mantemos estoque estratégico das peças mais críticas</li>
                        <li><strong>Garantia dos serviços:</strong> Todos os reparos possuem garantia de execução</li>
                        <li><strong>Relatórios técnicos:</strong> Documentação completa de cada intervenção realizada</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="fade-in sticky-top">
                    <div class="contact-form mb-4">
                        <h3 class="h5 mb-3">Atendimento Emergencial</h3>
                        <p class="small text-muted mb-4">Entre em contato agora mesmo pelo WhatsApp</p>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Preciso de manutenção corretiva emergencial." class="btn btn-danger w-100 mb-3" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            Emergência 24h
                        </a>
                        <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-primary w-100">Solicitar Orçamento</a>
                    </div>

                    <div class="bg-danger text-white p-4 rounded">
                        <h4 class="h6 mb-3">Atendimento Emergencial</h4>
                        <ul class="small list-unstyled mb-0">
                            <li class="mb-2">✓ Disponível 24/7</li>
                            <li class="mb-2">✓ Resposta em até 4 horas</li>
                            <li class="mb-2">✓ Técnicos especializados</li>
                            <li class="mb-2">✓ Estoque de peças críticas</li>
                            <li class="mb-0">✓ Garantia dos serviços</li>
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
                                Quanto tempo leva para um técnico chegar no local?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Em regiões metropolitanas, nossa equipe chega ao local em até 4 horas após o acionamento. Para outras regiões, o prazo pode variar conforme a distância, mas sempre priorizamos atendimentos emergenciais.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Vocês atendem finais de semana e feriados?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim! Nosso atendimento emergencial funciona 24 horas por dia, 7 dias por semana, incluindo finais de semana e feriados. Sabemos que problemas em equipamentos de refrigeração não escolhem hora para acontecer.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                É possível fazer o reparo no mesmo dia?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Na maioria dos casos sim. Nossa equipe leva ferramentas especializadas e mantemos estoque das peças mais críticas. Para reparos que exigem peças específicas, trabalhamos para conseguir no menor prazo possível.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Os reparos possuem garantia?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sim. Todos os nossos serviços de manutenção corretiva possuem garantia de execução. As peças substituídas seguem a garantia do fabricante, que pode variar de 3 a 12 meses conforme o componente.
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
            <h2>Precisa de Atendimento Emergencial?</h2>
            <p class="lead mb-4">Entre em contato agora e resolva seu problema rapidamente</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Preciso de manutenção corretiva emergencial." class="btn btn-light btn-lg" target="_blank" rel="noopener">
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
            'name' => 'Quanto tempo leva para um técnico chegar no local?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Em regiões metropolitanas, nossa equipe chega ao local em até 4 horas após o acionamento. Para outras regiões, o prazo pode variar conforme a distância.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Vocês atendem finais de semana e feriados?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sim! Nosso atendimento emergencial funciona 24 horas por dia, 7 dias por semana, incluindo finais de semana e feriados.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'É possível fazer o reparo no mesmo dia?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Na maioria dos casos sim. Nossa equipe leva ferramentas especializadas e mantemos estoque das peças mais críticas.'
            ]
        ]
    ]
];

echo '<script type="application/ld+json">' . json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once '../includes/footer.php';
?>
