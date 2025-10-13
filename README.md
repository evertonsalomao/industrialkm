# KM Refrigeração Industrial - Website

Site profissional otimizado para SEO, desenvolvido para a KM Refrigeração Industrial, empresa do Grupo KM especializada em assistência técnica e manutenção de equipamentos de refrigeração industrial.

## Tecnologias Utilizadas

- **PHP 7.4+** - Backend e lógica de servidor
- **HTML5** - Estrutura semântica
- **CSS3** - Estilização customizada
- **Bootstrap 5.3** - Framework CSS responsivo
- **JavaScript (Vanilla)** - Interatividade e animações
- **Apache/Nginx** - Servidor web com suporte a .htaccess

## Estrutura do Projeto

```
/
├── assets/
│   ├── css/
│   │   └── style.css              # Estilos customizados
│   ├── js/
│   │   └── main.js                # Scripts JavaScript
│   └── img/                       # Imagens do site
│       ├── logo.png
│       ├── favicon.png
│       └── og-image.jpg
├── includes/
│   ├── header.php                 # Cabeçalho global
│   └── footer.php                 # Rodapé global
├── servicos/
│   ├── manutencao-preventiva.php
│   ├── manutencao-corretiva.php
│   ├── manutencao-preditiva.php
│   ├── reforma-revisao.php
│   ├── retrofit-painel.php
│   ├── retrofit-gas.php
│   └── contrato-manutencao.php
├── config.php                     # Configurações globais
├── index.php                      # Página inicial
├── sobre.php                      # Sobre a empresa
├── equipamentos.php               # Equipamentos atendidos
├── contato.php                    # Formulário de contato
├── politica-de-privacidade.php   # Política de privacidade LGPD
├── .htaccess                      # URLs amigáveis e segurança
├── robots.txt                     # Configuração para crawlers
└── sitemap.xml                    # Mapa do site para SEO
```

## Configuração

### 1. Requisitos

- PHP 7.4 ou superior
- Apache com mod_rewrite habilitado (ou Nginx com configuração equivalente)
- Suporte a .htaccess
- Função mail() configurada para envio de e-mails

### 2. Instalação

1. Clone ou baixe os arquivos do projeto
2. Faça upload para o diretório raiz do servidor web
3. Edite o arquivo `config.php` e atualize as seguintes constantes:

```php
define('SITE_URL', 'https://kmrefrigeracao.com.br');
define('SITE_PHONE', '+55 (XX) XXXXX-XXXX');
define('SITE_WHATSAPP', '5511999999999');
define('SITE_EMAIL', 'contato@kmrefrigeracao.com.br');
define('SITE_ADDRESS', 'Endereço da Empresa');
define('SITE_CITY', 'São Paulo');
define('SITE_STATE', 'SP');
define('SITE_ZIPCODE', '00000-000');
define('SITE_CNPJ', '00.000.000/0000-00');
```

### 3. Adicionar Imagens

Adicione os seguintes arquivos na pasta `assets/img/`:

- **logo.png** - Logotipo da empresa (recomendado: 200x50px)
- **favicon.png** - Ícone do site (32x32px)
- **og-image.jpg** - Imagem para compartilhamento em redes sociais (1200x630px)

### 4. Configurar Servidor de E-mail

Para o formulário de contato funcionar corretamente, configure a função `mail()` do PHP ou utilize um serviço SMTP.

## Funcionalidades de SEO

### Meta Tags Completas
- Title, Description e Keywords únicos por página
- Open Graph para redes sociais
- Twitter Cards
- Canonical URLs

### Dados Estruturados (Schema.org)
- Organization
- LocalBusiness
- Service
- BreadcrumbList
- FAQPage

### Otimizações Técnicas
- URLs amigáveis e curtas
- Sitemap XML
- Robots.txt
- Compressão de arquivos (gzip)
- Cache de navegador
- Lazy loading de imagens
- Minificação de recursos

### Performance
- CSS crítico inline
- Carregamento assíncrono de scripts
- Imagens otimizadas com loading="lazy"
- Preconnect para fontes externas

## Segurança

### Headers de Segurança
- X-XSS-Protection
- X-Frame-Options
- X-Content-Type-Options
- Referrer-Policy
- Permissions-Policy

### Proteções Implementadas
- Sanitização de inputs
- Validação de e-mails
- Proteção de arquivos sensíveis
- Bloqueio de listagem de diretórios

## URLs do Site

### Páginas Principais
- `/` - Página inicial
- `/sobre` - Sobre a empresa
- `/equipamentos` - Equipamentos atendidos
- `/contato` - Formulário de contato
- `/politica-de-privacidade` - Política de privacidade

### Páginas de Serviços
- `/servicos/manutencao-preventiva`
- `/servicos/manutencao-corretiva`
- `/servicos/manutencao-preditiva`
- `/servicos/reforma-revisao`
- `/servicos/retrofit-painel`
- `/servicos/retrofit-gas`
- `/servicos/contrato-manutencao`

## Integrações

### WhatsApp
Botão flutuante e links de contato direto integrados em todo o site.

### Google Analytics (Preparado)
Adicione seu código de tracking no arquivo `includes/footer.php` antes do fechamento da tag `</body>`.

### Google Tag Manager (Preparado)
O site está preparado para receber código do GTM no `includes/header.php`.

## Conformidade LGPD

O site possui:
- Banner de cookies com localStorage
- Política de Privacidade completa
- Formulários com consentimento
- Links para exercício de direitos

## Manutenção

### Atualizar Conteúdo
Edite os arquivos PHP correspondentes à página que deseja modificar.

### Adicionar Novo Serviço
1. Crie um novo arquivo em `/servicos/nome-do-servico.php`
2. Use como base o arquivo `manutencao-preventiva.php`
3. Adicione a URL no `sitemap.xml`
4. Adicione a regra de rewrite no `.htaccess`
5. Adicione link no menu em `includes/header.php`

### Atualizar Sitemap
Sempre que adicionar ou remover páginas, atualize o arquivo `sitemap.xml` com as novas URLs e a data de modificação.

## Suporte Técnico

Para dúvidas sobre o funcionamento do site, consulte:

- Documentação do Bootstrap 5: https://getbootstrap.com/docs/5.3/
- Schema.org para dados estruturados: https://schema.org/
- LGPD: https://www.gov.br/anpd

## Licença

Este projeto foi desenvolvido exclusivamente para KM Refrigeração Industrial.

---

**Desenvolvido com foco em SEO, performance e experiência do usuário.**
