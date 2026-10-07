<?php
$page_title = 'GPS Tracking Systems';
$meta_description = 'Professional GPS vehicle tracking system installation in Blantyre, Malawi. Real-time monitoring, fleet tracking, device configuration and support. TechFix Solutions Malawi.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                <li class="breadcrumb-item active">GPS Tracking</li>
            </ol>
        </nav>
        <h1>GPS Vehicle Tracking Systems</h1>
        <p>Real-time location monitoring, fleet visibility and professional installation across Blantyre and Malawi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 fade-up">
                <span class="section-badge">Tracking Solutions</span>
                <h2 class="mb-3">Know Where Every Vehicle Is</h2>
                <p class="text-secondary mb-4">Whether you manage a single vehicle or a full fleet, our GPS tracking installations give you live visibility, historical routes and peace of mind. We handle device selection advice, professional installation, configuration and ongoing support.</p>
                <ul class="service-features mb-4">
                    <li><i class="fas fa-check"></i> <strong>Real-time vehicle monitoring</strong> — see location, speed and status live</li>
                    <li><i class="fas fa-check"></i> <strong>Vehicle location history</strong> — review past routes and stops</li>
                    <li><i class="fas fa-check"></i> <strong>Fleet tracking</strong> — manage multiple vehicles from one dashboard</li>
                    <li><i class="fas fa-check"></i> <strong>Professional installation</strong> — clean wiring and secure mounting</li>
                    <li><i class="fas fa-check"></i> <strong>Configuration & training</strong> — apps and alerts set up for you</li>
                    <li><i class="fas fa-check"></i> <strong>Maintenance & support</strong> — help when devices need attention</li>
                </ul>
                <div class="d-flex flex-wrap gap-2">
                    <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to request GPS Tracking Installation.'); ?>" class="btn btn-danger" target="_blank"><i class="fab fa-whatsapp me-2"></i>Request Installation</a>
                    <a href="<?php echo call_url(); ?>" class="btn btn-outline-light"><i class="fas fa-phone me-2"></i>Call Us</a>
                </div>
            </div>
            <div class="col-lg-6 fade-up">
                <div class="hero-card">
                    <div class="hero-card-icon"><i class="fas fa-satellite"></i></div>
                    <h3 class="mb-3">Who Benefits?</h3>
                    <div class="hero-features">
                        <div class="hero-feature"><i class="fas fa-truck"></i><span>Logistics & delivery companies</span></div>
                        <div class="hero-feature"><i class="fas fa-car"></i><span>Private vehicle owners</span></div>
                        <div class="hero-feature"><i class="fas fa-building"></i><span>Business fleets & company cars</span></div>
                        <div class="hero-feature"><i class="fas fa-taxi"></i><span>Taxi & transport operators</span></div>
                        <div class="hero-feature"><i class="fas fa-hard-hat"></i><span>Construction & site vehicles</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">Process</span>
            <h2>Our Tracking Installation Process</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Consultation</h4>
                    <p>We discuss your vehicles, goals and recommended tracker options.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Installation</h4>
                    <p>On-site or workshop installation with secure mounting and wiring.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Configuration</h4>
                    <p>Platform setup, mobile app access, geofences and alerts.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Handover & Support</h4>
                    <p>Training and ongoing technical support when you need it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container fade-up">
        <h2>Ready for GPS Tracking?</h2>
        <p>Get professional installation and real-time monitoring for your vehicles in Blantyre.</p>
        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to request GPS Tracking Installation for my vehicle(s).'); ?>" class="btn btn-danger btn-lg me-2" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp Request</a>
        <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-lg"><i class="fas fa-phone me-2"></i><?php echo PHONE_DISPLAY_1; ?></a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
