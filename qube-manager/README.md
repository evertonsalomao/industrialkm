# Qube Manager - Painel de Gestão de Conteúdo

Sistema de gerenciamento de conteúdo desenvolvido para o site KM Refrigeração Industrial.

## 🚀 Instalação

1. Certifique-se de que o banco de dados MySQL está configurado
2. Atualize as credenciais no arquivo `config.php`:
   - DB_HOST
   - DB_NAME
   - DB_USER
   - DB_PASS

3. Acesse `http://seusite.com/qube-manager/install.php` para instalar as tabelas e criar o usuário padrão

4. Após a instalação, **DELETE o arquivo `install.php`** por segurança

## 🔐 Credenciais Padrão

- **Email:** contato@qubedesign.com.br
- **Senha:** jj401rbz.

⚠️ **Importante:** Altere a senha padrão após o primeiro acesso!

## 📋 Funcionalidades

### Gestão de Serviços
- Criar, editar e excluir páginas de serviços
- Editor de texto rico (TinyMCE)
- Gerenciamento de SEO (meta description, keywords)
- Ativar/desativar páginas
- Personalização de Hero (título e subtítulo)

### Gestão de Usuários
- Criar novos usuários administrativos
- Excluir usuários (exceto o próprio)
- Visualizar lista de todos os usuários

### Perfil do Usuário
- Editar nome e email
- Alterar senha
- Visualizar informações da conta

## 🗂️ Estrutura de Arquivos

```
qube-manager/
├── assets/
│   ├── css/
│   │   └── admin.css       # Estilos do painel
│   └── js/
│       └── admin.js        # Scripts do painel
├── includes/
│   ├── header.php          # Cabeçalho comum
│   └── footer.php          # Rodapé comum
├── config.php              # Configurações e conexão DB
├── install.php             # Instalador (deletar após uso)
├── login.php               # Página de login
├── logout.php              # Logout
├── index.php               # Dashboard
├── services.php            # Lista de serviços
├── service-edit.php        # Editar/criar serviço
├── users.php               # Gerenciar usuários
├── profile.php             # Perfil do usuário
├── .htaccess               # Configurações Apache
└── README.md               # Este arquivo
```

## 🗄️ Estrutura do Banco de Dados

### Tabela: admin_users
- `id` - ID do usuário (auto increment)
- `name` - Nome do usuário
- `email` - Email único
- `password` - Senha criptografada (bcrypt)
- `created_at` - Data de criação
- `updated_at` - Data de atualização

### Tabela: service_pages
- `id` - ID da página (auto increment)
- `slug` - URL amigável (único)
- `title` - Título da página
- `meta_description` - Descrição para SEO
- `meta_keywords` - Palavras-chave para SEO
- `hero_title` - Título do hero
- `hero_subtitle` - Subtítulo do hero
- `content` - Conteúdo HTML da página
- `is_active` - Status (1 = ativo, 0 = inativo)
- `created_at` - Data de criação
- `updated_at` - Data de atualização

## 🔒 Segurança

- Senhas criptografadas com `password_hash()` (bcrypt)
- Proteção contra SQL Injection (PDO prepared statements)
- Sanitização de inputs com `htmlspecialchars()`
- Sessões protegidas
- Verificação de autenticação em todas as páginas
- `.htaccess` protegendo arquivos sensíveis

## 📝 Como Usar

### Adicionar um Novo Serviço

1. Acesse **Serviços** no menu
2. Clique em **Novo Serviço**
3. Preencha:
   - Título (obrigatório)
   - Slug (URL amigável, obrigatório)
   - Hero Title e Subtitle
   - Conteúdo (HTML com editor rico)
   - Meta Description e Keywords para SEO
4. Marque como **Ativo** para publicar
5. Clique em **Salvar Alterações**

### Editar um Serviço Existente

1. Acesse **Serviços** no menu
2. Clique no botão **Editar** do serviço desejado
3. Faça as alterações necessárias
4. Clique em **Salvar Alterações**

### Criar um Novo Usuário

1. Acesse **Usuários** no menu
2. Clique em **Novo Usuário**
3. Preencha nome, email e senha (mínimo 6 caracteres)
4. Clique em **Criar Usuário**

### Alterar Senha

1. Acesse **Meu Perfil** no menu do usuário (canto superior direito)
2. Preencha:
   - Senha Atual
   - Nova Senha
   - Confirmar Nova Senha
3. Clique em **Salvar Alterações**

## ⚙️ Requisitos

- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Extensão PDO PHP
- Extensão mbstring PHP
- Apache com mod_rewrite habilitado

## 🛠️ Manutenção

### Backup do Banco de Dados

Recomenda-se fazer backup regular das tabelas:
```sql
mysqldump -u usuario -p nome_banco admin_users service_pages > backup.sql
```

### Logs

Verifique os logs do PHP e Apache em caso de erros:
- `/var/log/apache2/error.log`
- `/var/log/php/error.log`

## 📞 Suporte

Para suporte técnico, entre em contato com a equipe de desenvolvimento.

---

**Desenvolvido por Qube Design**
