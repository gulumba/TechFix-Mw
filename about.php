<?php
$page_title = 'About Us';
$meta_description = 'About TechFix Solutions Malawi - technical expertise, reliable repairs and professional technology services based in Chigumula, Blantyre.';
require_once 'includes/header.php';
?>

<section class="page-hero">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </nav>
        <h1>About TechFix Solutions Malawi</h1>
        <p>Professional technology and technical services rooted in Blantyre.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 fade-up">
                <span class="section-badge">Our Story</span>
                <h2 class="mb-3">Built on Expertise and Trust</h2>
                <p class="text-secondary">TechFix Solutions Malawi was founded to bridge the gap between modern technology needs and reliable local service. Based in Chigumula, Blantyre, we serve individuals, small businesses and organisations that need GPS tracking, appliance repairs and computer recovery — without the frustration of unreliable contractors.</p>
                <p class="text-secondary">Our team combines hands-on technical skills with a commitment to clear communication, fair pricing and work that lasts. Whether installing a fleet tracking system or restoring a laptop after a failed update, we treat every job with the same professional standard.</p>
                <p class="text-secondary mb-0">We are proud to support customers across Blantyre and further afield in Malawi with solutions that are practical, affordable and backed by real local support.</p>
            </div>
            <div class="col-lg-6 fade-up">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="feature-box glass p-4 rounded-3">
                            <div class="icon"><i class="fas fa-cogs"></i></div>
                            <h4>Technical Expertise</h4>
                            <p>Deep knowledge across tracking hardware, electronics and computing</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box glass p-4 rounded-3">
                            <div class="icon"><i class="fas fa-handshake"></i></div>
                            <h4>Reliability</h4>
                            <p>We show up, we finish the job, and we stand behind our work</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box glass p-4 rounded-3">
                            <div class="icon"><i class="fas fa-heart"></i></div>
                            <h4>Customer Focus</h4>
                            <p>Clear quotes, honest advice and satisfaction as the goal</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="feature-box glass p-4 rounded-3">
                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                            <h4>Local Presence</h4>
                            <p>Chigumula, Blantyre — serving Malawi with local knowledge</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-dark">
    <div class="container">
        <div class="section-header fade-up">
            <span class="section-badge">Values</span>
            <h2>What Drives Us</h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-user-check"></i></div>
                    <h4>Professional Workmanship</h4>
                    <p>Clean installations, careful repairs and attention to detail on every job.</p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-lightbulb"></i></div>
                    <h4>Innovation</h4>
                    <p>We stay current with tracking technology, operating systems and practical digital tools.</p>
                </div>
            </div>
            <div class="col-md-4 fade-up">
                <div class="feature-box">
                    <div class="icon"><i class="fas fa-tag"></i></div>
                    <h4>Affordable Solutions</h4>
                    <p>Quality work at prices that make sense for Malawian homes and businesses.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container fade-up">
        <h2>Work With a Local Team You Can Trust</h2>
        <p>Located in Chigumula, Blantyre — ready to help with tracking, repairs and technology projects.</p>
        <a href="contact.php" class="btn btn-danger btn-lg me-2">Contact Us</a>
        <a href="<?php echo whatsapp_url(); ?>" class="btn btn-outline-light btn-lg" target="_blank"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
