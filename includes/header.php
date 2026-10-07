<?php
require_once __DIR__ . '/config.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($meta_description) ? htmlspecialchars($meta_description) : 'TechFix Solutions Malawi - GPS tracking installation, appliance repair and computer repair in Blantyre, Malawi. Professional technology services.'; ?>">
    <meta name="keywords" content="GPS tracker installation Malawi, tracking system installation Blantyre, appliance repair Blantyre, computer repair Malawi, IT services Blantyre, TechFix Solutions">
    <meta name="author" content="TechFix Solutions Malawi">
    <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | ' : ''; ?>TechFix Solutions Malawi">
    <meta property="og:description" content="<?php echo isset($meta_description) ? htmlspecialchars($meta_description) : 'Smart Technology. Reliable Repairs. Professional Solutions in Blantyre, Malawi.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_MW">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | ' : ''; ?>TechFix Solutions Malawi</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Orbitron:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Schema.org LocalBusiness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "TechFix Solutions Malawi",
        "description": "Professional GPS tracking installation, appliance repair, computer repair and technology services in Blantyre, Malawi.",
        "url": "https://techfixmalawi.com",
        "telephone": "+265996942109",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Chigumula",
            "addressRegion": "Blantyre",
            "addressCountry": "MW"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-15.7861",
            "longitude": "35.0058"
        },
        "openingHours": "Mo-Sa 08:00-17:00",
        "priceRange": "$$"
    }
    </script>
</head>
<body>
    <!-- Loading Overlay -->
    <div id="loading-overlay">
        <div class="spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <div class="logo-icon me-2">
                    <i class="fas fa-satellite-dish"></i>
                </div>
                <div class="logo-text">
                    <span class="brand-name">TechFix</span>
                    <span class="brand-sub">Solutions Malawi</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'index' ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo in_array($current_page, ['services','tracking','appliance-repair','computer-repair']) ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="services.php">All Services</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="tracking.php"><i class="fas fa-map-marker-alt me-2 text-danger"></i>GPS Tracking</a></li>
                            <li><a class="dropdown-item" href="appliance-repair.php"><i class="fas fa-plug me-2 text-danger"></i>Appliance Repair</a></li>
                            <li><a class="dropdown-item" href="computer-repair.php"><i class="fas fa-laptop me-2 text-danger"></i>Computer Repair</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'about' ? 'active' : ''; ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'portfolio' ? 'active' : ''; ?>" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'contact' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-sm me-2"><i class="fas fa-phone me-1"></i> Call</a>
                        <a href="<?php echo whatsapp_url(); ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
