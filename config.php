<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

define('SITE_NAME', 'KM Refrigeração Industrial');
define('SITE_URL', 'https://kmrefrigeracao.com.br');
define('SITE_PHONE', '+55 (XX) XXXXX-XXXX');
define('SITE_WHATSAPP', '5511999999999');
define('SITE_EMAIL', 'contato@kmrefrigeracao.com.br');
define('SITE_ADDRESS', 'Endereço da Empresa');
define('SITE_CITY', 'São Paulo');
define('SITE_STATE', 'SP');
define('SITE_ZIPCODE', '00000-000');
define('SITE_CNPJ', '00.000.000/0000-00');

$pageTitle = '';
$pageDescription = '';
$pageKeywords = '';
$currentPage = '';
$canonical = '';

function getMetaTags() {
    global $pageTitle, $pageDescription, $pageKeywords, $canonical;

    $output = '<meta charset="UTF-8">' . "\n";
    $output .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
    $output .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
    $output .= '<title>' . htmlspecialchars($pageTitle) . '</title>' . "\n";
    $output .= '<meta name="description" content="' . htmlspecialchars($pageDescription) . '">' . "\n";

    if (!empty($pageKeywords)) {
        $output .= '<meta name="keywords" content="' . htmlspecialchars($pageKeywords) . '">' . "\n";
    }

    $output .= '<meta name="robots" content="index, follow">' . "\n";
    $output .= '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";

    $output .= '<meta property="og:title" content="' . htmlspecialchars($pageTitle) . '">' . "\n";
    $output .= '<meta property="og:description" content="' . htmlspecialchars($pageDescription) . '">' . "\n";
    $output .= '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n";
    $output .= '<meta property="og:type" content="website">' . "\n";
    $output .= '<meta property="og:image" content="' . SITE_URL . '/assets/img/og-image.jpg">' . "\n";
    $output .= '<meta property="og:locale" content="pt_BR">' . "\n";

    $output .= '<meta name="twitter:card" content="summary_large_image">' . "\n";
    $output .= '<meta name="twitter:title" content="' . htmlspecialchars($pageTitle) . '">' . "\n";
    $output .= '<meta name="twitter:description" content="' . htmlspecialchars($pageDescription) . '">' . "\n";

    return $output;
}

function getBreadcrumbs($items) {
    $breadcrumbList = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => []
    ];

    foreach ($items as $index => $item) {
        $breadcrumbList['itemListElement'][] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['name'],
            'item' => $item['url']
        ];
    }

    return '<script type="application/ld+json">' . json_encode($breadcrumbList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function getOrganizationSchema() {
    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => SITE_NAME,
        'url' => SITE_URL,
        'logo' => SITE_URL . '/assets/img/logo.png',
        'description' => 'Empresa especializada em assistência técnica e manutenção de equipamentos de refrigeração industrial',
        'telephone' => SITE_PHONE,
        'email' => SITE_EMAIL,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => SITE_ADDRESS,
            'addressLocality' => SITE_CITY,
            'addressRegion' => SITE_STATE,
            'postalCode' => SITE_ZIPCODE,
            'addressCountry' => 'BR'
        ],
        'sameAs' => [
            'https://www.facebook.com/kmrefrigeracao',
            'https://www.instagram.com/kmrefrigeracao',
            'https://www.linkedin.com/company/kmrefrigeracao'
        ]
    ];

    return '<script type="application/ld+json">' . json_encode($organization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function getLocalBusinessSchema() {
    $business = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => SITE_NAME,
        'image' => SITE_URL . '/assets/img/logo.png',
        'url' => SITE_URL,
        'telephone' => SITE_PHONE,
        'email' => SITE_EMAIL,
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => SITE_ADDRESS,
            'addressLocality' => SITE_CITY,
            'addressRegion' => SITE_STATE,
            'postalCode' => SITE_ZIPCODE,
            'addressCountry' => 'BR'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => '-23.5505',
            'longitude' => '-46.6333'
        ],
        'priceRange' => '$$',
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '08:00',
                'closes' => '18:00'
            ]
        ]
    ];

    return '<script type="application/ld+json">' . json_encode($business, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

function sendContactEmail($name, $email, $phone, $message) {
    $to = SITE_EMAIL;
    $subject = 'Novo contato do site - ' . SITE_NAME;

    $emailBody = "Nome: $name\n";
    $emailBody .= "E-mail: $email\n";
    $emailBody .= "Telefone: $phone\n";
    $emailBody .= "Mensagem:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    return mail($to, $subject, $emailBody, $headers);
}
?>
