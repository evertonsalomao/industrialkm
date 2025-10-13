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
                    <div class="icon">❄️</div>
                    <h3>Chillers</h3>
                    <p>Unidades de água gelada</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon">💨</div>
                    <h3>Fancoil</h3>
                    <p>UTA, AHU e sistemas de climatização</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon">🔌</div>
                    <h3>Resfriadores</h3>
                    <p>Painéis elétricos e óleo</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 fade-in">
                <div class="equipment-card">
                    <div class="icon">💧</div>
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
