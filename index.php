<?php
require_once 'config.php';

$pageTitle = 'KM Refrigeração Industrial - Assistência Técnica em Refrigeração Industrial';
$pageDescription = 'Especialistas em manutenção preventiva, corretiva e preditiva de equipamentos de refrigeração industrial. Chillers, fancoil, UTA, AHU, torres de resfriamento e mais. Atendimento em todo Brasil.';
$pageKeywords = 'refrigeração industrial, manutenção chiller, assistência técnica refrigeração, fancoil, UTA, AHU, torre de resfriamento, manutenção preventiva, retrofit gás ecológico';
$currentPage = 'home';
$canonical = SITE_URL . '/';

require_once 'includes/header.php';
?>

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 fade-in">
                <h1>KM Refrigeração Industrial</h1>
                <p class="lead">Soluções completas em refrigeração industrial com qualidade, eficiência e segurança. Assistência técnica especializada para sua empresa.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar um orçamento." class="btn btn-light btn-lg" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16" style="vertical-align: middle;">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                        Solicitar Orçamento
                    </a>
                    <a href="#servicos" class="btn btn-outline-light btn-lg">Nossos Serviços</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="p-4">
                    <div class="display-4 text-primary mb-2">15+</div>
                    <h3 class="h5">Anos de Experiência</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="p-4">
                    <div class="display-4 text-primary mb-2">500+</div>
                    <h3 class="h5">Clientes Atendidos</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="p-4">
                    <div class="display-4 text-primary mb-2">24/7</div>
                    <h3 class="h5">Suporte Técnico</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="p-4">
                    <div class="display-4 text-primary mb-2">100%</div>
                    <h3 class="h5">Qualidade Garantida</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="servicos" class="py-5">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h2 class="section-title">Nossos Serviços</h2>
            <p class="section-subtitle">Soluções completas em manutenção e assistência técnica de equipamentos de refrigeração industrial</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/manutencao-preventiva" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/3862130/pexels-photo-3862130.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Manutenção Preventiva</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/manutencao-corretiva" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/8961481/pexels-photo-8961481.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Manutenção Corretiva</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/manutencao-preditiva" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/5691598/pexels-photo-5691598.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Manutenção Preditiva</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/reforma-revisao" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/4792285/pexels-photo-4792285.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Reforma e Revisão</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/retrofit-painel" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/257736/pexels-photo-257736.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Retrofit de Painéis</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 fade-in">
                <a href="<?php echo SITE_URL; ?>/servicos/retrofit-gas" class="service-card-link">
                    <div class="service-card-image" style="background-image: url('https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&w=800');">
                        <div class="service-card-overlay">
                            <h3>Retrofit de Gás Ecológico</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h2 class="section-title">Equipamentos Atendidos</h2>
            <p class="section-subtitle">Assistência técnica especializada para diversos tipos de equipamentos</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16a.5.5 0 0 1-.5-.5v-1.293l-.646.647a.5.5 0 0 1-.707-.708L7.5 12.793V8.866l-3.4 1.963-.496 1.85a.5.5 0 1 1-.966-.26l.237-.882-1.12.646a.5.5 0 0 1-.5-.866l1.12-.646-.884-.237a.5.5 0 1 1 .26-.966l1.848.495L7 8 3.6 6.037l-1.85.495a.5.5 0 0 1-.258-.966l.883-.237-1.12-.646a.5.5 0 1 1 .5-.866l1.12.646-.237-.883a.5.5 0 1 1 .966-.258l.495 1.849L7.5 7.134V3.207L6.147 1.854a.5.5 0 1 1 .707-.708l.646.647V.5a.5.5 0 1 1 1 0v1.293l.647-.647a.5.5 0 1 1 .707.708L8.5 3.207v3.927l3.4-1.963.496-1.85a.5.5 0 1 1 .966.26l-.236.882 1.12-.646a.5.5 0 0 1 .5.866l-1.12.646.883.237a.5.5 0 1 1-.26.966l-1.848-.495L9 8l3.4 1.963 1.849-.495a.5.5 0 0 1 .259.966l-.883.237 1.12.646a.5.5 0 0 1-.5.866l-1.12-.646.236.883a.5.5 0 1 1-.966.258l-.495-1.849-3.4-1.963v3.927l1.353 1.353a.5.5 0 0 1-.707.708l-.647-.647V15.5a.5.5 0 0 1-.5.5z"/>
                        </svg>
                    </div>
                    <h3>Chillers</h3>
                    <p>Unidades de água gelada</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0a.5.5 0 0 1 .5.5v7h7a.5.5 0 0 1 0 1h-7v7a.5.5 0 0 1-1 0v-7h-7a.5.5 0 0 1 0-1h7v-7A.5.5 0 0 1 8 0z"/>
                            <path d="M8 2.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 1 0v2a.5.5 0 0 1-.5.5zm10 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 1 0v2a.5.5 0 0 1-.5.5zM8 13.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 .5-.5zm-5-3a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm10 0a.5.5 0 0 1 .5.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </div>
                    <h3>Fancoil</h3>
                    <p>UTA, AHU e sistemas de climatização</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0zM5 4v2.5A2.5 2.5 0 0 0 7.5 9h1A2.5 2.5 0 0 0 11 6.5V4H5z"/>
                        </svg>
                    </div>
                    <h3>Resfriadores</h3>
                    <p>Painéis elétricos e óleo</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon-svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                        </svg>
                    </div>
                    <h3>Torres</h3>
                    <p>Torres de resfriamento</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 fade-in">
            <a href="<?php echo SITE_URL; ?>/equipamentos" class="btn btn-primary btn-lg">Ver Todos os Equipamentos</a>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5 fade-in">
            <h2 class="section-title">Por Que Escolher a KM?</h2>
            <p class="section-subtitle">Diferenciais que fazem da KM Refrigeração Industrial a melhor escolha</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Técnicos Especializados</h3>
                        <p class="text-muted">Equipe altamente qualificada com certificações e treinamento contínuo.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Atendimento Nacional</h3>
                        <p class="text-muted">Atuamos em todo território nacional com rapidez e eficiência.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Peças Originais</h3>
                        <p class="text-muted">Trabalhamos apenas com peças originais e de fornecedores homologados.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Equipamentos Nacionais e Importados</h3>
                        <p class="text-muted">Experiência com as principais marcas do mercado nacional e internacional.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Contratos Personalizados</h3>
                        <p class="text-muted">Planos de manutenção preventiva customizados para sua necessidade.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 fade-in">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-size: 1.5rem;">✓</div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3 class="h5">Suporte 24/7</h3>
                        <p class="text-muted">Atendimento emergencial disponível 24 horas por dia, 7 dias por semana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="fade-in">
            <h2>Precisa de Assistência Técnica em Refrigeração Industrial?</h2>
            <p class="lead mb-4">Entre em contato conosco e solicite um orçamento sem compromisso</p>
            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Olá! Gostaria de solicitar um orçamento." class="btn btn-light btn-lg me-3" target="_blank" rel="noopener">
                Solicitar Orçamento
            </a>
            <a href="<?php echo SITE_URL; ?>/contato" class="btn btn-outline-light btn-lg">Fale Conosco</a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
