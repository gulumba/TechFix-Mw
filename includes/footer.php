    <!-- Footer -->
    <footer class="footer pt-5 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand d-flex align-items-center mb-3">
                        <div class="logo-icon me-2">
                            <i class="fas fa-satellite-dish"></i>
                        </div>
                        <div>
                            <span class="brand-name">TechFix</span>
                            <span class="brand-sub d-block">Solutions Malawi</span>
                        </div>
                    </div>
                    <p class="text-muted mb-3">Smart technology solutions, reliable repairs and professional services for homes and businesses across Blantyre and Malawi.</p>
                    <div class="social-links">
                        <a href="<?php echo whatsapp_url(); ?>" class="social-btn" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="<?php echo call_url(); ?>" class="social-btn" aria-label="Call"><i class="fas fa-phone"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Services</h5>
                    <ul class="footer-links">
                        <li><a href="tracking.php">GPS Tracking</a></li>
                        <li><a href="appliance-repair.php">Appliance Repair</a></li>
                        <li><a href="computer-repair.php">Computer Repair</a></li>
                        <li><a href="services.php">All Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="contact.php#faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Contact Us</h5>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt text-danger"></i> <?php echo LOCATION; ?></li>
                        <li><a href="<?php echo call_url(PHONE_PRIMARY); ?>"><i class="fas fa-phone text-danger"></i> <?php echo PHONE_DISPLAY_1; ?></a></li>
                        <li><a href="<?php echo call_url(PHONE_SECONDARY); ?>"><i class="fas fa-phone text-danger"></i> <?php echo PHONE_DISPLAY_2; ?></a></li>
                        <li><i class="fas fa-clock text-danger"></i> Mon - Sat: 8:00 AM - 5:00 PM</li>
                    </ul>
                    <div class="mt-3">
                        <a href="<?php echo whatsapp_url(); ?>" class="btn btn-danger btn-sm me-2" target="_blank"><i class="fab fa-whatsapp me-1"></i> WhatsApp</a>
                        <a href="<?php echo call_url(); ?>" class="btn btn-outline-light btn-sm"><i class="fas fa-phone me-1"></i> Call Now</a>
                    </div>
                </div>
            </div>
            <hr class="footer-divider my-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-muted small">&copy; <?php echo date('Y'); ?> TechFix Solutions Malawi. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 text-muted small">Serving Blantyre &amp; Across Malawi</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Toast Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3" id="toastContainer"></div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
