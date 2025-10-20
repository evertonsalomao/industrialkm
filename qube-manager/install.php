<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'kmrefrigeracao_cms');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME . " CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    echo "✓ Database created successfully<br>";

    $pdo->exec("USE " . DB_NAME);

    $sql = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $pdo->exec($sql);
    echo "✓ Users table created<br>";

    $sql = "
    CREATE TABLE IF NOT EXISTS services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        slug VARCHAR(255) NOT NULL UNIQUE,
        meta_description TEXT,
        meta_keywords TEXT,
        lead_text TEXT,
        content LONGTEXT,
        icon VARCHAR(100),
        order_position INT DEFAULT 0,
        active TINYINT(1) DEFAULT 1,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $pdo->exec($sql);
    echo "✓ Services table created<br>";

    $sql = "
    CREATE TABLE IF NOT EXISTS service_faqs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        service_id INT NOT NULL,
        question TEXT NOT NULL,
        answer TEXT NOT NULL,
        order_position INT DEFAULT 0,
        FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $pdo->exec($sql);
    echo "✓ Service FAQs table created<br>";

    $sql = "
    CREATE TABLE IF NOT EXISTS site_settings (
        id INT AUTO_INCREMENT PRIMARY KEY,
        setting_key VARCHAR(100) NOT NULL UNIQUE,
        setting_value TEXT,
        setting_type VARCHAR(50) DEFAULT 'text',
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";
    $pdo->exec($sql);
    echo "✓ Site Settings table created<br>";

    $email = 'contato@qubedesign.com.br';
    $password = password_hash('jj401rbz.', PASSWORD_DEFAULT);
    $name = 'Administrador';

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if (!$stmt->fetch()) {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);
        echo "✓ Default user created: $email<br>";
    } else {
        echo "✓ Default user already exists<br>";
    }

    $defaultSettings = [
        ['site_name', 'KM Refrigeração Industrial', 'text'],
        ['site_description', 'Especialistas em manutenção de equipamentos de refrigeração industrial', 'textarea'],
        ['site_phone', '+55 (XX) XXXXX-XXXX', 'text'],
        ['site_whatsapp', '5511999999999', 'text'],
        ['site_email', 'contato@kmrefrigeracao.com.br', 'email'],
        ['site_address', 'Endereço da Empresa', 'text'],
        ['site_city', 'São Paulo', 'text'],
        ['site_state', 'SP', 'text'],
        ['site_zipcode', '00000-000', 'text'],
        ['site_cnpj', '00.000.000/0000-00', 'text']
    ];

    foreach ($defaultSettings as $setting) {
        $stmt = $pdo->prepare("SELECT id FROM site_settings WHERE setting_key = ?");
        $stmt->execute([$setting[0]]);
        if (!$stmt->fetch()) {
            $stmt = $pdo->prepare("INSERT INTO site_settings (setting_key, setting_value, setting_type) VALUES (?, ?, ?)");
            $stmt->execute($setting);
        }
    }
    echo "✓ Default settings created<br>";

    $services = [
        [
            'title' => 'Manutenção Preventiva',
            'slug' => 'manutencao-preventiva',
            'meta_description' => 'Manutenção preventiva especializada em equipamentos de refrigeração industrial. Evite paradas não programadas e aumente a vida útil dos seus equipamentos.',
            'meta_keywords' => 'manutenção preventiva refrigeração, manutenção chiller, manutenção preventiva industrial',
            'lead_text' => 'Evite paradas não programadas e aumente a vida útil dos seus equipamentos com programas de manutenção preventiva personalizados',
            'icon' => 'tools',
            'order_position' => 1
        ],
        [
            'title' => 'Manutenção Corretiva',
            'slug' => 'manutencao-corretiva',
            'meta_description' => 'Serviço de manutenção corretiva especializada em equipamentos de refrigeração industrial. Atendimento emergencial 24h.',
            'meta_keywords' => 'manutenção corretiva refrigeração, reparo chiller, conserto equipamento industrial',
            'lead_text' => 'Solução rápida e eficaz para falhas em equipamentos de refrigeração industrial com atendimento emergencial 24 horas',
            'icon' => 'wrench',
            'order_position' => 2
        ],
        [
            'title' => 'Instalação e Retrofit',
            'slug' => 'instalacao-retrofit',
            'meta_description' => 'Serviços de instalação e retrofit de equipamentos de refrigeração industrial. Modernização de sistemas antigos.',
            'meta_keywords' => 'instalação chiller, retrofit refrigeração, modernização sistema refrigeração',
            'lead_text' => 'Modernize seus equipamentos, aumente a eficiência energética e adeque-se às normas ambientais com soluções em retrofit',
            'icon' => 'gear',
            'order_position' => 3
        ],
        [
            'title' => 'Assistência Técnica 24h',
            'slug' => 'assistencia-tecnica-24h',
            'meta_description' => 'Assistência técnica 24 horas especializada em refrigeração industrial. Atendimento emergencial todos os dias.',
            'meta_keywords' => 'assistência técnica 24h, atendimento emergencial refrigeração, suporte técnico 24 horas',
            'lead_text' => 'Suporte técnico especializado disponível 24 horas por dia, 7 dias por semana, para garantir a continuidade operacional',
            'icon' => 'telephone',
            'order_position' => 4
        ]
    ];

    foreach ($services as $service) {
        $stmt = $pdo->prepare("SELECT id FROM services WHERE slug = ?");
        $stmt->execute([$service['slug']]);

        if (!$stmt->fetch()) {
            $stmt = $pdo->prepare("
                INSERT INTO services (title, slug, meta_description, meta_keywords, lead_text, icon, order_position)
                VALUES (?, ?, ?, ?, ?, ?, ?)
            ");
            $stmt->execute([
                $service['title'],
                $service['slug'],
                $service['meta_description'],
                $service['meta_keywords'],
                $service['lead_text'],
                $service['icon'],
                $service['order_position']
            ]);
            echo "✓ Service created: " . $service['title'] . "<br>";
        }
    }

    echo "<br><strong>Installation completed successfully!</strong><br>";
    echo "<strong>Login credentials:</strong><br>";
    echo "Email: contato@qubedesign.com.br<br>";
    echo "Password: jj401rbz.<br><br>";
    echo "<a href='login.php'>Go to Login Page</a><br><br>";
    echo "<div style='color: red;'><strong>IMPORTANT:</strong> Delete this install.php file after installation for security!</div>";

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
