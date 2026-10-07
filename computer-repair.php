<?php
$page_title = 'Computer Repair & OS Booting';
$meta_description = 'Computer repair, OS booting (Windows, Linux Kali Ubuntu Arch), hardware repair and phone unlocking in Blantyre. TechFix Solutions Malawi - Computer Doctor.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                <li class="breadcrumb-item active">Computer Repair</li>
            </ol>
        </nav>
        <h1>Computer Doctor Services</h1>
        <p>OS installation, hardware repair, phone unlocking and full system recovery in Blantyre.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 fade-up">
                <span class="section-badge">Computer Services</span>
                <h2 class="mb-3">Get Your Machine Running Again</h2>
                <p class="text-secondary mb-4">From failed boots and slow performance to hardware upgrades and specialised Linux setups, our computer doctor service covers the full range of desktop, laptop and phone issues.</p>

                <div class="row g-4 mb-4">
                    <div class="col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon"><i class="fab fa-windows"></i></div>
                            <h3>OS Booting & Installation</h3>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Windows (10 / 11) clean install & recovery</li>
                                <li><i class="fas fa-check"></i> Linux distributions: Ubuntu, Kali, Arch and more</li>
                                <li><i class="fas fa-check"></i> Dual-boot setups</li>
                                <li><i class="fas fa-check"></i> Driver installation & activation assistance</li>
                                <li><i class="fas fa-check"></i> Data backup before major work</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon"><i class="fas fa-microchip"></i></div>
                            <h3>Hardware Repair</h3>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Diagnosis of hardware faults</li>
                                <li><i class="fas fa-check"></i> RAM, storage and component upgrades</li>
                                <li><i class="fas fa-check"></i> Screen, keyboard and battery issues (laptops)</li>
                                <li><i class="fas fa-check"></i> Cleaning and thermal maintenance</li>
                                <li><i class="fas fa-check"></i> Power and charging problems</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                            <h3>Phone Unlocking & Repair</h3>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Network unlocking (where supported)</li>
                                <li><i class="fas fa-check"></i> Software troubleshooting</li>
                                <li><i class="fas fa-check"></i> Hardware repair assessment</li>
                                <li><i class="fas fa-check"></i> Performance optimisation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-card h-100">
                            <div class="service-icon"><i class="fas fa-shield-virus"></i></div>
                            <h3>Maintenance & Security</h3>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Virus & malware removal</li>
                                <li><i class="fas fa-check"></i> System optimisation</li>
                                <li><i class="fas fa-check"></i> Backup setup advice</li>
                                <li><i class="fas fa-check"></i> General troubleshooting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 fade-up">
                <div class="service-card sticky-top" style="top: 100px;">
                    <h4 class="mb-3">Request Computer Help</h4>
                    <p class="text-secondary small">Describe your issue and we will get back to you quickly.</p>
                    <form action="process-form.php" method="POST" data-ajax-form novalidate>
                        <input type="hidden" name="form_type" value="computer_repair">
                        <div class="mb-3">
                            <label class="form-label">Your Name *</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Issue Type</label>
                            <select name="issue_type" class="form-select">
                                <option value="OS Booting">OS Booting / Installation</option>
                                <option value="Hardware">Hardware Repair</option>
                                <option value="Phone">Phone Unlock / Repair</option>
                                <option value="Virus">Virus / Performance</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description *</label>
                            <textarea name="problem" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger w-100"><i class="fas fa-paper-plane me-2"></i>Send Request</button>
                    </form>
                    <hr class="my-3" style="border-color: var(--border);">
                    <p class="small text-muted mb-2">Prefer to talk?</p>
                    <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-sm w-100 mb-2"><i class="fas fa-phone me-1"></i> <?php echo PHONE_DISPLAY_1; ?></a>
                    <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I need Computer Repair help.'); ?>" class="btn btn-outline-light btn-sm w-100" target="_blank"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
