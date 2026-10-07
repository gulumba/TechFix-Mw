<?php
$page_title = 'Home';
$meta_description = 'TechFix Solutions Malawi - GPS vehicle tracking installation, appliance repair, computer repair and professional IT services in Chigumula, Blantyre. Call +265 996 942 109.';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <div class="hero-badge">
                    <i class="fas fa-map-marker-alt"></i> Based in Chigumula, Blantyre
                </div>
                <h1>Smart Technology.<br><span>Reliable Repairs.</span><br>Professional Solutions.</h1>
                <p class="hero-lead">
                    From GPS vehicle tracking and fleet monitoring to appliance repairs and computer doctor services — TechFix Solutions Malawi delivers trusted technology expertise across Blantyre and beyond.
                </p>
                <div class="hero-buttons">
                    <a href="contact.php" class="btn btn-danger btn-lg"><i class="fas fa-file-invoice me-2"></i>Get a Quote</a>
                    <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-lg"><i class="fas fa-phone me-2"></i>Call Us</a>
                    <a href="<?php echo whatsapp_url(); ?>" class="btn btn-outline-light btn-lg" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <h3 data-counter="500">0+</h3>
                        <p>Jobs Completed</p>
                    </div>
                    <div class="stat-item">
                        <h3 data-counter="300">0+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="stat-item">
                        <h3 data-counter="5">0+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-visual">
                <div class="hero-card">
                    <div class="hero-card-icon">
                        <i class="fas fa-satellite-dish"></i>
                    </div>
                    <h3 class="mb-3">Our Core Expertise</h3>
                    <div class="hero-features">
                        <div class="hero-feature">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>GPS Vehicle Tracking & Fleet Monitoring</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-tools"></i>
                            <span>Hotplates, Kettles, Irons & Appliances</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-laptop-medical"></i>
                            <span>Computer Repair, OS Booting & Hardware</span>
                        </div>
                        <div class="hero-feature">
                            <i class="fas fa-headset"></i>
                            <span>Ongoing Support & Maintenance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">What We Offer</span>
            <h2>Professional Technology Services</h2>
            <p>Comprehensive solutions tailored for individuals, businesses and fleets across Malawi.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 fade-up">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>GPS & Tracking Systems</h3>
                    <p>Real-time vehicle tracking, fleet monitoring, installation, configuration and ongoing support.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Live location tracking</li>
                        <li><i class="fas fa-check"></i> Fleet management dashboards</li>
                        <li><i class="fas fa-check"></i> Device installation & setup</li>
                        <li><i class="fas fa-check"></i> Maintenance & support</li>
                    </ul>
                    <a href="tracking.php" class="btn btn-outline-light btn-sm">Learn More <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 fade-up">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-plug"></i></div>
                    <h3>Appliance Repair</h3>
                    <p>Expert repair of hotplates, kettles, irons and general household appliances with quality parts.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Hotplates & cookers</li>
                        <li><i class="fas fa-check"></i> Electric kettles</li>
                        <li><i class="fas fa-check"></i> Irons & steamers</li>
                        <li><i class="fas fa-check"></i> Diagnosis & maintenance</li>
                    </ul>
                    <a href="appliance-repair.php" class="btn btn-outline-light btn-sm">Book Repair <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 fade-up">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-laptop"></i></div>
                    <h3>Computer Doctor</h3>
                    <p>OS installation & booting, hardware repair, phone unlocking and full system diagnostics.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Windows, Linux (Kali, Ubuntu, Arch)</li>
                        <li><i class="fas fa-check"></i> Hardware upgrades & repair</li>
                        <li><i class="fas fa-check"></i> Phone unlock & repair</li>
                        <li><i class="fas fa-check"></i> Virus removal & optimization</li>
                    </ul>
                    <a href="computer-repair.php" class="btn btn-outline-light btn-sm">Get Help <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 fade-up">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-headset"></i></div>
                    <h3>Support & Maintenance</h3>
                    <p>Ongoing technical support, system maintenance and reliable after-service care for all our solutions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Tracking system support</li>
                        <li><i class="fas fa-check"></i> Appliance follow-up care</li>
                        <li><i class="fas fa-check"></i> Remote & on-site help</li>
                        <li><i class="fas fa-check"></i> Fast response times</li>
                    </ul>
                    <a href="contact.php" class="btn btn-outline-light btn-sm">Contact Us <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">Why TechFix</span>
            <h2>Why Choose Us</h2>
            <p>We combine technical expertise with reliable local service that Malawian customers trust.</p>
        </div>
        <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <h4>Expertise</h4>
                    <p>Skilled technicians with real field experience</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>Reliability</h4>
                    <p>Dependable workmanship you can count on</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-smile"></i></div>
                    <h4>Satisfaction</h4>
                    <p>Customer happiness is our priority</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h4>Innovation</h4>
                    <p>Modern solutions for modern problems</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-tag"></i></div>
                    <h4>Affordable</h4>
                    <p>Fair pricing without cutting quality</p>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Local</h4>
                    <p>Proudly based in Blantyre, serving Malawi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Work -->
<section class="section">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">Process</span>
            <h2>How We Work</h2>
            <p>Simple, transparent steps from enquiry to completed job.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Contact Us</h4>
                    <p>Call, WhatsApp or fill a form. Tell us what you need.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Assessment</h4>
                    <p>We diagnose the issue or scope the installation required.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Solution</h4>
                    <p>Clear quote and professional execution of the work.</p>
                </div>
            </div>
            <div class="col-md-3 fade-up">
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Support</h4>
                    <p>After-service support and maintenance when you need it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">Testimonials</span>
            <h2>What Our Clients Say</h2>
            <p>Real feedback from customers across Blantyre and Malawi.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 fade-up">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"Installed GPS trackers on our delivery vans. Real-time monitoring has reduced losses and improved route planning significantly. Professional team."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JM</div>
                        <div class="author-info">
                            <h5>James M.</h5>
                            <span>Fleet Manager, Blantyre</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p>"My hotplate and kettle were repaired the same day. Fair pricing and the appliances work perfectly. Highly recommend TechFix."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AC</div>
                        <div class="author-info">
                            <h5>Agnes C.</h5>
                            <span>Homeowner, Chigumula</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>"They recovered my laptop after a failed OS update and installed a clean dual-boot setup. Knowledgeable and honest about what was needed."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">PK</div>
                        <div class="author-info">
                            <h5>Peter K.</h5>
                            <span>Student, Blantyre</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container fade-up">
        <h2>Ready to Get Started?</h2>
        <p>Whether you need GPS tracking installed, an appliance fixed, or a computer back online — we are here to help.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="<?php echo call_url(); ?>" class="btn btn-danger btn-lg"><i class="fas fa-phone me-2"></i>Call <?php echo PHONE_DISPLAY_1; ?></a>
            <a href="<?php echo whatsapp_url(); ?>" class="btn btn-outline-light btn-lg" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
            <a href="contact.php" class="btn btn-outline-light btn-lg"><i class="fas fa-envelope me-2"></i>Send Enquiry</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
