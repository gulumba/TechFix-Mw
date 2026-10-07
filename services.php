<?php
$page_title = 'Our Services';
$meta_description = 'Explore TechFix Solutions Malawi services: GPS tracking installation, appliance repair and computer repair in Blantyre.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
        </nav>
        <h1>Our Services</h1>
        <p>End-to-end technology and technical solutions for homes, businesses and fleets in Malawi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <!-- GPS -->
            <div class="col-lg-6 fade-up">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>GPS & Tracking Systems</h3>
                    <p>Professional installation and configuration of GPS vehicle tracking systems for private cars, company fleets and logistics operators.</p>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Features</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Real-time vehicle location monitoring</li>
                        <li><i class="fas fa-check"></i> Fleet tracking dashboards</li>
                        <li><i class="fas fa-check"></i> Device installation & wiring</li>
                        <li><i class="fas fa-check"></i> Configuration & mobile app setup</li>
                        <li><i class="fas fa-check"></i> Maintenance and technical support</li>
                    </ul>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Benefits</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Reduce vehicle misuse and theft risk</li>
                        <li><i class="fas fa-check"></i> Improve route efficiency and fuel use</li>
                        <li><i class="fas fa-check"></i> Peace of mind with live visibility</li>
                    </ul>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <a href="tracking.php" class="btn btn-danger btn-sm">Request Tracking Service</a>
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to enquire about GPS Tracking Systems.'); ?>" class="btn btn-outline-light btn-sm" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <!-- Appliance -->
            <div class="col-lg-6 fade-up">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-plug"></i></div>
                    <h3>Appliance Repair</h3>
                    <p>Fast, reliable repair of common household appliances. We diagnose accurately and use quality components for lasting results.</p>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Features</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Hotplates and electric cookers</li>
                        <li><i class="fas fa-check"></i> Electric kettles</li>
                        <li><i class="fas fa-check"></i> Irons and steam irons</li>
                        <li><i class="fas fa-check"></i> General household appliance troubleshooting</li>
                        <li><i class="fas fa-check"></i> Preventive maintenance advice</li>
                    </ul>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Benefits</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Save money versus full replacement</li>
                        <li><i class="fas fa-check"></i> Quick turnaround in Blantyre</li>
                        <li><i class="fas fa-check"></i> Honest diagnosis — no unnecessary parts</li>
                    </ul>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <a href="appliance-repair.php" class="btn btn-danger btn-sm">Book a Repair</a>
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to book Appliance Repair.'); ?>" class="btn btn-outline-light btn-sm" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <!-- Computer -->
            <div class="col-lg-6 fade-up">
                <div class="service-card h-100">
                    <div class="service-icon"><i class="fas fa-laptop"></i></div>
                    <h3>Computer Repair & OS Booting</h3>
                    <p>Complete computer doctor services including operating system installation, hardware repair, upgrades and phone services.</p>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Features</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Windows installation & recovery</li>
                        <li><i class="fas fa-check"></i> Linux (Kali, Ubuntu, Arch and more)</li>
                        <li><i class="fas fa-check"></i> Hardware diagnosis & component replacement</li>
                        <li><i class="fas fa-check"></i> Phone unlocking and hardware repair</li>
                        <li><i class="fas fa-check"></i> Virus removal & performance tuning</li>
                    </ul>
                    <h5 class="text-white mt-3 mb-2" style="font-size:1rem;">Benefits</h5>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Get your machine running again quickly</li>
                        <li><i class="fas fa-check"></i> Dual-boot and specialised OS setups</li>
                        <li><i class="fas fa-check"></i> Transparent pricing</li>
                    </ul>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <a href="computer-repair.php" class="btn btn-danger btn-sm">Request Service</a>
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I need Computer Repair / OS Booting help.'); ?>" class="btn btn-outline-light btn-sm" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container fade-up">
        <h2>Need a Service Not Listed?</h2>
        <p>Tell us about your project. We often handle specialised technical requests across Blantyre.</p>
        <a href="<?php echo whatsapp_url(); ?>" class="btn btn-danger btn-lg me-2" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
        <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-lg"><i class="fas fa-phone me-2"></i>Call Now</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
