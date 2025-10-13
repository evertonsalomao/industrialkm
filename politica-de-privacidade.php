<?php
require_once 'config.php';

$pageTitle = 'Política de Privacidade - KM Refrigeração Industrial';
$pageDescription = 'Política de Privacidade da KM Refrigeração Industrial conforme Lei Geral de Proteção de Dados (LGPD).';
$currentPage = '';
$canonical = SITE_URL . '/politica-de-privacidade';

require_once 'includes/header.php';
?>

<div class="breadcrumb-nav">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/">Início</a></li>
                <li class="breadcrumb-item active" aria-current="page">Política de Privacidade</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="section-title mb-4">Política de Privacidade</h1>
                <p class="text-muted mb-4">Última atualização: <?php echo date('d/m/Y'); ?></p>

                <div class="content">
                    <h2 class="h4 mt-5 mb-3">1. Introdução</h2>
                    <p>A <strong><?php echo SITE_NAME; ?></strong> ("nós", "nosso" ou "empresa") está comprometida em proteger e respeitar a privacidade dos dados pessoais de nossos clientes, parceiros e visitantes do site.</p>
                    <p>Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas informações pessoais em conformidade com a Lei Geral de Proteção de Dados (LGPD - Lei nº 13.709/2018) e demais legislações aplicáveis.</p>

                    <h2 class="h4 mt-5 mb-3">2. Dados Coletados</h2>
                    <p>Coletamos os seguintes tipos de dados pessoais:</p>
                    <ul>
                        <li><strong>Dados de identificação:</strong> nome completo, CPF/CNPJ, RG, endereço</li>
                        <li><strong>Dados de contato:</strong> e-mail, telefone, WhatsApp</li>
                        <li><strong>Dados profissionais:</strong> empresa, cargo, área de atuação</li>
                        <li><strong>Dados de navegação:</strong> endereço IP, cookies, páginas acessadas, dispositivo utilizado</li>
                        <li><strong>Dados comerciais:</strong> histórico de serviços, orçamentos, contratos</li>
                    </ul>

                    <h2 class="h4 mt-5 mb-3">3. Finalidade do Uso dos Dados</h2>
                    <p>Utilizamos seus dados pessoais para as seguintes finalidades:</p>
                    <ul>
                        <li>Prestação de serviços de assistência técnica e manutenção</li>
                        <li>Elaboração e envio de orçamentos</li>
                        <li>Comunicação sobre serviços, atualizações e novidades</li>
                        <li>Cumprimento de obrigações legais e contratuais</li>
                        <li>Melhoria da experiência do usuário em nosso site</li>
                        <li>Análise estatística e pesquisas de mercado</li>
                        <li>Gestão de relacionamento com clientes</li>
                    </ul>

                    <h2 class="h4 mt-5 mb-3">4. Base Legal para Tratamento</h2>
                    <p>O tratamento de dados pessoais é realizado com base nas seguintes hipóteses legais previstas na LGPD:</p>
                    <ul>
                        <li>Consentimento do titular dos dados</li>
                        <li>Execução de contrato ou procedimentos preliminares</li>
                        <li>Cumprimento de obrigação legal ou regulatória</li>
                        <li>Exercício regular de direitos em processo judicial, administrativo ou arbitral</li>
                        <li>Legítimo interesse da empresa</li>
                    </ul>

                    <h2 class="h4 mt-5 mb-3">5. Compartilhamento de Dados</h2>
                    <p>Seus dados pessoais não serão vendidos, alugados ou compartilhados com terceiros, exceto nas seguintes situações:</p>
                    <ul>
                        <li>Com prestadores de serviços essenciais (hospedagem, e-mail, análise)</li>
                        <li>Quando exigido por lei ou ordem judicial</li>
                        <li>Com seu consentimento expresso</li>
                        <li>Para proteção dos direitos e segurança da empresa</li>
                    </ul>

                    <h2 class="h4 mt-5 mb-3">6. Armazenamento e Segurança</h2>
                    <p>Implementamos medidas técnicas e organizacionais adequadas para proteger seus dados pessoais contra acesso não autorizado, perda, destruição ou alteração:</p>
                    <ul>
                        <li>Criptografia de dados sensíveis</li>
                        <li>Controle de acesso restrito</li>
                        <li>Backups regulares</li>
                        <li>Servidores seguros e atualizados</li>
                        <li>Treinamento de equipe em proteção de dados</li>
                    </ul>
                    <p>Os dados são armazenados pelo período necessário para cumprir as finalidades descritas ou conforme exigido por lei.</p>

                    <h2 class="h4 mt-5 mb-3">7. Cookies</h2>
                    <p>Utilizamos cookies e tecnologias similares para melhorar sua experiência de navegação. Os cookies são pequenos arquivos armazenados no seu dispositivo que nos ajudam a:</p>
                    <ul>
                        <li>Lembrar suas preferências</li>
                        <li>Analisar o tráfego do site</li>
                        <li>Personalizar conteúdo</li>
                        <li>Melhorar a segurança</li>
                    </ul>
                    <p>Você pode configurar seu navegador para recusar cookies, mas isso pode afetar algumas funcionalidades do site.</p>

                    <h2 class="h4 mt-5 mb-3">8. Seus Direitos</h2>
                    <p>Conforme a LGPD, você tem os seguintes direitos sobre seus dados pessoais:</p>
                    <ul>
                        <li><strong>Confirmação e acesso:</strong> confirmar se tratamos seus dados e acessá-los</li>
                        <li><strong>Correção:</strong> solicitar correção de dados incompletos ou desatualizados</li>
                        <li><strong>Anonimização, bloqueio ou eliminação:</strong> de dados desnecessários ou excessivos</li>
                        <li><strong>Portabilidade:</strong> solicitar transferência dos dados para outro fornecedor</li>
                        <li><strong>Revogação do consentimento:</strong> a qualquer momento</li>
                        <li><strong>Informação sobre compartilhamento:</strong> saber com quem compartilhamos seus dados</li>
                        <li><strong>Oposição:</strong> opor-se ao tratamento realizado com base em legítimo interesse</li>
                    </ul>

                    <h2 class="h4 mt-5 mb-3">9. Como Exercer Seus Direitos</h2>
                    <p>Para exercer qualquer dos direitos acima ou esclarecer dúvidas sobre o tratamento de seus dados pessoais, entre em contato conosco:</p>
                    <ul>
                        <li><strong>E-mail:</strong> <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
                        <li><strong>Telefone:</strong> <?php echo SITE_PHONE; ?></li>
                        <li><strong>Endereço:</strong> <?php echo SITE_ADDRESS; ?>, <?php echo SITE_CITY; ?>/<?php echo SITE_STATE; ?></li>
                    </ul>
                    <p>Responderemos sua solicitação em até 15 dias úteis.</p>

                    <h2 class="h4 mt-5 mb-3">10. Retenção de Dados</h2>
                    <p>Seus dados pessoais serão mantidos durante o período necessário para:</p>
                    <ul>
                        <li>Cumprir as finalidades para as quais foram coletados</li>
                        <li>Atender obrigações legais, contratuais ou regulatórias</li>
                        <li>Resguardar direitos em processos judiciais ou administrativos</li>
                    </ul>
                    <p>Após esse período, os dados serão eliminados de forma segura.</p>

                    <h2 class="h4 mt-5 mb-3">11. Transferência Internacional</h2>
                    <p>Alguns de nossos prestadores de serviços podem estar localizados fora do Brasil. Nesses casos, garantimos que a transferência de dados seja feita em conformidade com a LGPD e com adequadas medidas de proteção.</p>

                    <h2 class="h4 mt-5 mb-3">12. Menores de Idade</h2>
                    <p>Nossos serviços não são direcionados a menores de 18 anos. Não coletamos intencionalmente dados de crianças ou adolescentes sem o consentimento dos pais ou responsáveis legais.</p>

                    <h2 class="h4 mt-5 mb-3">13. Alterações nesta Política</h2>
                    <p>Podemos atualizar esta Política de Privacidade periodicamente para refletir mudanças em nossas práticas ou na legislação. Recomendamos que você revise esta página regularmente. A data da última atualização está indicada no topo desta página.</p>

                    <h2 class="h4 mt-5 mb-3">14. Contato</h2>
                    <p>Se você tiver dúvidas, preocupações ou solicitações relacionadas a esta Política de Privacidade ou ao tratamento de seus dados pessoais, entre em contato conosco:</p>
                    <div class="bg-light p-4 rounded mt-3">
                        <p class="mb-2"><strong><?php echo SITE_NAME; ?></strong></p>
                        <p class="mb-2">CNPJ: <?php echo SITE_CNPJ; ?></p>
                        <p class="mb-2">Endereço: <?php echo SITE_ADDRESS; ?>, <?php echo SITE_CITY; ?>/<?php echo SITE_STATE; ?></p>
                        <p class="mb-2">E-mail: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
                        <p class="mb-0">Telefone: <?php echo SITE_PHONE; ?></p>
                    </div>

                    <h2 class="h4 mt-5 mb-3">15. Autoridade Nacional de Proteção de Dados (ANPD)</h2>
                    <p>Você também tem o direito de apresentar uma reclamação à Autoridade Nacional de Proteção de Dados (ANPD) caso considere que o tratamento de seus dados pessoais não está em conformidade com a LGPD.</p>
                    <p class="mb-0"><strong>Website da ANPD:</strong> <a href="https://www.gov.br/anpd" target="_blank" rel="noopener">www.gov.br/anpd</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
