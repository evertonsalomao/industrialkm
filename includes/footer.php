</main>

<footer class="site-footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <h3 class="h5 mb-3"><?php echo SITE_NAME; ?></h3>
                <p class="text-light">Empresa do Grupo KM especializada em assistência técnica e manutenção de equipamentos de refrigeração industrial.</p>
                <p class="mb-1"><strong>CNPJ:</strong> <?php echo SITE_CNPJ; ?></p>
            </div>

            <div class="col-lg-2 col-md-6">
                <h4 class="h6 mb-3">Navegação</h4>
                <ul class="list-unstyled footer-links">
                    <li><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/sobre">Sobre</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/equipamentos">Equipamentos</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contato">Contato</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="h6 mb-3">Serviços</h4>
                <ul class="list-unstyled footer-links">
                    <li><a href="<?php echo SITE_URL; ?>/servicos/manutencao-preventiva">Manutenção Preventiva</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/servicos/manutencao-corretiva">Manutenção Corretiva</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/servicos/retrofit-gas">Retrofit de Gás Ecológico</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/servicos/contrato-manutencao">Contrato de Manutenção</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="h6 mb-3">Contato</h4>
                <ul class="list-unstyled contact-info">
                    <li class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                        </svg>
                        <a href="tel:<?php echo SITE_PHONE; ?>" class="text-white text-decoration-none"><?php echo SITE_PHONE; ?></a>
                    </li>
                    <li class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-white text-decoration-none"><?php echo SITE_EMAIL; ?></a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        <?php echo SITE_ADDRESS; ?> - <?php echo SITE_CITY; ?>/<?php echo SITE_STATE; ?>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-4 bg-secondary">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 small">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="<?php echo SITE_URL; ?>/politica-de-privacidade" class="text-white text-decoration-none small">Política de Privacidade</a>
            </div>
        </div>
    </div>
</footer>

<div class="lgpd-banner" id="lgpdBanner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 mb-3 mb-lg-0">
                <p class="mb-0 small">Este site utiliza cookies para melhorar sua experiência de navegação. Ao continuar navegando, você concorda com nossa <a href="<?php echo SITE_URL; ?>/politica-de-privacidade" class="text-white">Política de Privacidade</a>.</p>
            </div>
            <div class="col-lg-3 text-lg-end">
                <button class="btn btn-light btn-sm" onclick="acceptLGPD()">Aceitar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>

</body>
</html>
