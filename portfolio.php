<?php
$page_title = 'Portfolio';
$meta_description = 'Portfolio of TechFix Solutions Malawi - GPS tracking installations, appliance repairs and computer projects in Blantyre.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Portfolio</li>
            </ol>
        </nav>
        <h1>Our Work</h1>
        <p>Selected projects and jobs completed for clients across Blantyre and Malawi.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="portfolio-filter fade-up">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="tracking">Tracking</button>
            <button class="filter-btn" data-filter="appliance">Appliance Repair</button>
            <button class="filter-btn" data-filter="computer">Computer Repair</button>
        </div>
        <div class="row g-4">
            <!-- Tracking -->
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="tracking">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-truck"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Tracking</div>
                        <h4>Delivery Fleet Tracking</h4>
                        <p>Installed and configured GPS trackers on a 12-vehicle delivery fleet with live dashboard access for the operations manager.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="tracking">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-car"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Tracking</div>
                        <h4>Private Vehicle Monitoring</h4>
                        <p>Discrete GPS installation on personal vehicles with mobile app setup and geofence alerts for family security.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="tracking">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-taxi"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Tracking</div>
                        <h4>Taxi Operator Setup</h4>
                        <p>Multi-vehicle tracking for a local taxi operator including driver behaviour monitoring and route history.</p>
                    </div>
                </div>
            </div>
            <!-- Appliance -->
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="appliance">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-fire"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Appliance Repair</div>
                        <h4>Hotplate Element Replacement</h4>
                        <p>Diagnosed and replaced faulty heating elements on multiple household hotplates with same-day turnaround.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="appliance">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-mug-hot"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Appliance Repair</div>
                        <h4>Kettle & Iron Batch Repair</h4>
                        <p>Repaired a set of office kettles and irons for a small business, restoring full functionality cost-effectively.</p>
                    </div>
                </div>
            </div>
            <!-- Computer -->
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="computer">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fab fa-linux"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Computer Repair</div>
                        <h4>Kali Linux Dual-Boot</h4>
                        <p>Installed Kali Linux dual-boot alongside Windows for a cybersecurity student, including driver configuration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="computer">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-laptop-medical"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Computer Repair</div>
                        <h4>Laptop Recovery & Upgrade</h4>
                        <p>Recovered data from a non-booting laptop, installed a new SSD and fresh Windows 11 with all user data restored.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 portfolio-item fade-up" data-category="computer">
                <div class="portfolio-card">
                    <div class="portfolio-img"><i class="fas fa-mobile-alt"></i></div>
                    <div class="portfolio-body">
                        <div class="portfolio-cat">Computer Repair</div>
                        <h4>Phone Software Recovery</h4>
                        <p>Resolved boot-loop and software issues on multiple Android devices, restoring normal operation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container fade-up">
        <h2>Have a Similar Project?</h2>
        <p>Tell us about your tracking, repair or technology need.</p>
        <a href="contact.php" class="btn btn-danger btn-lg me-2">Get in Touch</a>
        <a href="<?php echo whatsapp_url(); ?>" class="btn btn-outline-light btn-lg" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
