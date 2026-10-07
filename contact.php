<?php
$page_title = 'Contact Us';
$meta_description = 'Contact TechFix Solutions Malawi in Chigumula, Blantyre. Call +265 996 942 109 or +265 883 924 080. GPS tracking, appliance & computer repair enquiries.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
        <h1>Contact Us</h1>
        <p>Reach TechFix Solutions Malawi — we respond quickly to calls, WhatsApp and form enquiries.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4 fade-up">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h5>Location</h5>
                    <p>Chigumula, Blantyre, Malawi</p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h5>Phone</h5>
                    <p><a href="<?php echo call_url(PHONE_PRIMARY); ?>"><?php echo PHONE_DISPLAY_1; ?></a></p>
                    <p><a href="<?php echo call_url(PHONE_SECONDARY); ?>"><?php echo PHONE_DISPLAY_2; ?></a></p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="contact-card">
                    <i class="fas fa-clock"></i>
                    <h5>Business Hours</h5>
                    <p>Monday – Saturday<br>8:00 AM – 5:00 PM</p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 fade-up">
                <div class="service-card">
                    <h3 class="mb-4">Send an Enquiry</h3>
                    <form action="process-form.php" method="POST" data-ajax-form novalidate>
                        <input type="hidden" name="form_type" value="contact">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Email (optional)</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Service Interest</label>
                                <select name="service" class="form-select">
                                    <option value="General">General Enquiry</option>
                                    <option value="GPS Tracking">GPS Tracking</option>
                                    <option value="Appliance Repair">Appliance Repair</option>
                                    <option value="Computer Repair">Computer Repair</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message *</label>
                                <textarea name="message" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-paper-plane me-2"></i>Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 fade-up">
                <div class="map-placeholder mb-4">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Chigumula, Blantyre, Malawi</p>
                    <a href="https://www.google.com/maps/search/Chigumula+Blantyre+Malawi" target="_blank" class="btn btn-outline-light btn-sm">Open in Google Maps</a>
                </div>
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <a href="<?php echo call_url(); ?>" class="btn btn-danger"><i class="fas fa-phone me-2"></i>Call Now</a>
                    <a href="<?php echo whatsapp_url(); ?>" class="btn btn-outline-light" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp Us</a>
                </div>
                <div class="service-card">
                    <h5 class="mb-3">Quick Service Request</h5>
                    <p class="text-secondary small">Prefer WhatsApp with a pre-filled service message?</p>
                    <div class="d-flex flex-column gap-2">
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to enquire about GPS Tracking Systems.'); ?>" class="btn btn-outline-light btn-sm text-start" target="_blank"><i class="fas fa-map-marker-alt text-danger me-2"></i> GPS Tracking</a>
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I would like to book Appliance Repair.'); ?>" class="btn btn-outline-light btn-sm text-start" target="_blank"><i class="fas fa-plug text-danger me-2"></i> Appliance Repair</a>
                        <a href="<?php echo whatsapp_url('Hello TechFix Solutions Malawi, I need Computer Repair / OS Booting help.'); ?>" class="btn btn-outline-light btn-sm text-start" target="_blank"><i class="fas fa-laptop text-danger me-2"></i> Computer Repair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section section-dark" id="faq">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion fade-up" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">Where are you located?</button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">We are based in Chigumula, Blantyre, Malawi. We serve customers across Blantyre and can discuss arrangements for further areas.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">Do you install GPS trackers on all vehicle types?</button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">We install on cars, vans, trucks and many commercial vehicles. Contact us with your vehicle details for confirmation and a quote.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">How long does appliance repair usually take?</button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Many common repairs (hotplates, kettles, irons) can be completed the same day or within 1–2 days depending on parts availability. We will give you a clear timeline after diagnosis.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">Can you install Linux distributions like Kali or Arch?</button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Yes. We handle Windows and a range of Linux distributions including Ubuntu, Kali Linux, Arch and others, including dual-boot configurations.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">How do I get a quote?</button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Call or WhatsApp us, or use the contact form. Describe the service you need and we will respond with next steps and pricing guidance.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
