<?php
$page_title = 'Appliance Repair';
$meta_description = 'Professional appliance repair in Blantyre, Malawi. Hotplates, kettles, irons and household appliances. Book a repair with TechFix Solutions Malawi.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                <li class="breadcrumb-item active">Appliance Repair</li>
            </ol>
        </nav>
        <h1>Appliance Repair</h1>
        <p>Expert repair of hotplates, kettles, irons and general household appliances in Blantyre.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">What We Fix</span>
            <h2>Supported Appliances</h2>
            <p>Common household items we diagnose and repair every week.</p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-6 col-md-3 fade-up">
                <div class="appliance-card">
                    <i class="fas fa-fire"></i>
                    <h4>Hotplates</h4>
                    <p>Electric hotplates & cookers</p>
                </div>
            </div>
            <div class="col-6 col-md-3 fade-up">
                <div class="appliance-card">
                    <i class="fas fa-mug-hot"></i>
                    <h4>Kettles</h4>
                    <p>Electric kettles of most brands</p>
                </div>
            </div>
            <div class="col-6 col-md-3 fade-up">
                <div class="appliance-card">
                    <i class="fas fa-tshirt"></i>
                    <h4>Irons</h4>
                    <p>Dry & steam irons</p>
                </div>
            </div>
            <div class="col-6 col-md-3 fade-up">
                <div class="appliance-card">
                    <i class="fas fa-blender"></i>
                    <h4>Other Appliances</h4>
                    <p>General household devices</p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-5 fade-up">
                <h3 class="mb-3">Why Repair With Us?</h3>
                <ul class="service-features">
                    <li><i class="fas fa-check"></i> Honest diagnosis before any work</li>
                    <li><i class="fas fa-check"></i> Quality replacement parts where needed</li>
                    <li><i class="fas fa-check"></i> Competitive pricing vs buying new</li>
                    <li><i class="fas fa-check"></i> Quick service in the Chigumula / Blantyre area</li>
                    <li><i class="fas fa-check"></i> Advice on care to extend appliance life</li>
                </ul>
                <div class="mt-4">
                    <a href="<?php echo call_url(); ?>" class="btn btn-outline-light me-2"><i class="fas fa-phone me-1"></i> Call</a>
                    <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I need Appliance Repair.'); ?>" class="btn btn-danger" target="_blank"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-7 fade-up">
                <div class="service-card">
                    <h3 class="mb-4"><i class="fas fa-calendar-check text-danger me-2"></i>Book a Repair</h3>
                    <form id="repairForm" action="process-form.php" method="POST" data-ajax-form novalidate>
                        <input type="hidden" name="form_type" value="appliance_repair">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="full_name">Full Name *</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="phone">Phone Number *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+265 ..." required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="appliance_type">Appliance Type *</label>
                                <select class="form-select" id="appliance_type" name="appliance_type" required>
                                    <option value="">Select appliance</option>
                                    <option value="Hotplate">Hotplate / Cooker</option>
                                    <option value="Kettle">Electric Kettle</option>
                                    <option value="Iron">Iron</option>
                                    <option value="Other">Other Household Appliance</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="preferred_date">Preferred Date</label>
                                <input type="date" class="form-control" id="preferred_date" name="preferred_date">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="location">Location / Area *</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="e.g. Chigumula, Blantyre" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="problem">Problem Description *</label>
                                <textarea class="form-control" id="problem" name="problem" rows="3" placeholder="Describe the issue..." required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Additional Message</label>
                                <textarea class="form-control" id="message" name="message" rows="2"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-paper-plane me-2"></i>Submit Booking Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
