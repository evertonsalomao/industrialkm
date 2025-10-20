<?php
require_once 'config.php';

$messages = [];

try {
    // Create admin_users table
    $sql = "CREATE TABLE IF NOT EXISTS admin_users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

    $pdo->exec($sql);
    $messages[] = "Tabela admin_users criada com sucesso!";

    // Create service_pages table
    $sql = "CREATE TABLE IF NOT EXISTS service_pages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        slug VARCHAR(255) NOT NULL UNIQUE,
        title VARCHAR(255) NOT NULL,
        meta_description TEXT,
        meta_keywords TEXT,
        hero_title VARCHAR(255),
        hero_subtitle TEXT,
        content LONGTEXT,
        is_active TINYINT(1) DEFAULT 1,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

    $pdo->exec($sql);
    $messages[] = "Tabela service_pages criada com sucesso!";

    // Check if default user exists
    $stmt = $pdo->prepare("SELECT id FROM admin_users WHERE email = ?");
    $stmt->execute(['contato@qubedesign.com.br']);

    if (!$stmt->fetch()) {
        // Create default admin user
        $hashedPassword = password_hash('jj401rbz.', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO admin_users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute(['Administrador', 'contato@qubedesign.com.br', $hashedPassword]);
        $messages[] = "Usuário padrão criado com sucesso!";
    } else {
        $messages[] = "Usuário padrão já existe.";
    }

    // Import existing service pages
    $services = [
        [
            'slug' => 'manutencao-preventiva',
            'title' => 'Manutenção Preventiva de Refrigeração Industrial',
            'meta_description' => 'Manutenção preventiva especializada em equipamentos de refrigeração industrial. Evite paradas não programadas e aumente a vida útil dos seus equipamentos.',
            'meta_keywords' => 'manutenção preventiva refrigeração, manutenção chiller, manutenção preventiva industrial',
            'hero_title' => 'Manutenção Preventiva de Refrigeração Industrial',
            'hero_subtitle' => 'Evite paradas não programadas e aumente a vida útil dos seus equipamentos com programas de manutenção preventiva personalizados'
        ],
        [
            'slug' => 'manutencao-corretiva',
            'title' => 'Manutenção Corretiva de Refrigeração Industrial',
            'meta_description' => 'Serviço de manutenção corretiva especializada em equipamentos de refrigeração industrial. Atendimento emergencial 24h.',
            'meta_keywords' => 'manutenção corretiva refrigeração, reparo chiller, conserto equipamento industrial',
            'hero_title' => 'Manutenção Corretiva de Refrigeração Industrial',
            'hero_subtitle' => 'Solução rápida e eficaz para falhas em equipamentos de refrigeração industrial com atendimento emergencial 24 horas'
        ],
        [
            'slug' => 'instalacao-retrofit',
            'title' => 'Instalação e Retrofit de Refrigeração Industrial',
            'meta_description' => 'Serviços de instalação e retrofit de equipamentos de refrigeração industrial. Modernização e adequação às normas ambientais.',
            'meta_keywords' => 'instalação chiller, retrofit refrigeração, modernização sistema refrigeração',
            'hero_title' => 'Instalação e Retrofit de Refrigeração Industrial',
            'hero_subtitle' => 'Modernize seus equipamentos, aumente a eficiência energética e adeque-se às normas ambientais com soluções em retrofit'
        ],
        [
            'slug' => 'assistencia-tecnica-24h',
            'title' => 'Assistência Técnica 24 Horas - Refrigeração Industrial',
            'meta_description' => 'Assistência técnica 24 horas especializada em refrigeração industrial. Atendimento emergencial todos os dias.',
            'meta_keywords' => 'assistência técnica 24h, atendimento emergencial refrigeração, suporte técnico 24 horas',
            'hero_title' => 'Assistência Técnica 24 Horas',
            'hero_subtitle' => 'Suporte técnico especializado disponível 24 horas por dia, 7 dias por semana, para garantir a continuidade operacional da sua indústria'
        ],
        [
            'slug' => 'manutencao-preditiva',
            'title' => 'Manutenção Preditiva de Refrigeração Industrial',
            'meta_description' => 'Manutenção preditiva com monitoramento e análise preditiva de equipamentos de refrigeração industrial.',
            'meta_keywords' => 'manutenção preditiva, monitoramento equipamentos, análise preditiva refrigeração',
            'hero_title' => 'Manutenção Preditiva de Refrigeração Industrial',
            'hero_subtitle' => 'Antecipe falhas e otimize a performance com análise preditiva e monitoramento contínuo dos seus equipamentos'
        ]
    ];

    foreach ($services as $service) {
        $stmt = $pdo->prepare("SELECT id FROM service_pages WHERE slug = ?");
        $stmt->execute([$service['slug']]);

        if (!$stmt->fetch()) {
            $stmt = $pdo->prepare("
                INSERT INTO service_pages (slug, title, meta_description, meta_keywords, hero_title, hero_subtitle)
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $service['slug'],
                $service['title'],
                $service['meta_description'],
                $service['meta_keywords'],
                $service['hero_title'],
                $service['hero_subtitle']
            ]);
        }
    }
    $messages[] = "Páginas de serviços importadas com sucesso!";

    $success = true;

} catch (PDOException $e) {
    $messages[] = "Erro: " . $e->getMessage();
    $success = false;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalação - Qube Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Instalação do Qube Manager</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($success): ?>
                            <div class="alert alert-success">
                                <h5>✓ Instalação concluída com sucesso!</h5>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-danger">
                                <h5>✗ Erro na instalação</h5>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
                            <?php foreach ($messages as $message): ?>
                                <p class="mb-1">• <?php echo $message; ?></p>
                            <?php endforeach; ?>
                        </div>

                        <?php if ($success): ?>
                            <div class="alert alert-info">
                                <strong>Credenciais de acesso:</strong><br>
                                Email: contato@qubedesign.com.br<br>
                                Senha: jj401rbz.
                            </div>

                            <a href="login.php" class="btn btn-primary w-100">Acessar Painel</a>

                            <div class="alert alert-warning mt-3">
                                <strong>Importante:</strong> Delete o arquivo install.php após a instalação por segurança.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
