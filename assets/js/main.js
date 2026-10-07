/**
 * TechFix Solutions Malawi - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
    // Hide loading overlay
    const overlay = document.getElementById('loading-overlay');
    if (overlay) {
        setTimeout(() => overlay.classList.add('hidden'), 400);
    }

    // Sticky nav scroll effect
    const nav = document.getElementById('mainNav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }

    // Back to top
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Scroll animations
    const fadeEls = document.querySelectorAll('.fade-up');
    if (fadeEls.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        fadeEls.forEach(el => observer.observe(el));
    } else {
        fadeEls.forEach(el => el.classList.add('visible'));
    }

    // Animated counters
    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => counterObserver.observe(c));
    }

    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-counter'), 10);
        const duration = 2000;
        const start = performance.now();
        const isPlus = el.textContent.includes('+');

        function update(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);
            el.textContent = current + (isPlus ? '+' : '');
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = target + (isPlus ? '+' : '');
        }
        requestAnimationFrame(update);
    }

    // Portfolio filter
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    if (filterBtns.length) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filter = btn.getAttribute('data-filter');
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = '';
                        setTimeout(() => item.classList.add('visible'), 10);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

    // Form validation helper
    window.validateForm = function (formId) {
        const form = document.getElementById(formId);
        if (!form) return false;
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            showToast('Please fill in all required fields correctly.', 'error');
            return false;
        }
        return true;
    };

    // Toast notifications
    window.showToast = function (message, type = 'success') {
        const container = document.getElementById('toastContainer');
        if (!container) return;
        const id = 'toast-' + Date.now();
        const bg = type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-primary';
        const html = `
            <div id="${id}" class="toast align-items-center text-white ${bg} border-0" role="alert">
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>`;
        container.insertAdjacentHTML('beforeend', html);
        const toastEl = document.getElementById(id);
        const toast = new bootstrap.Toast(toastEl, { delay: 4000 });
        toast.show();
        toastEl.addEventListener('hidden.bs.toast', () => toastEl.remove());
    };

    // AJAX form submission helper
    document.querySelectorAll('[data-ajax-form]').forEach(form => {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            if (!this.checkValidity()) {
                this.classList.add('was-validated');
                showToast('Please fill in all required fields.', 'error');
                return;
            }
            const btn = this.querySelector('[type="submit"]');
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';

            try {
                const formData = new FormData(this);
                const res = await fetch(this.action, {
                    method: 'POST',
                    body: formData
                });
                const data = await res.json();
                if (data.success) {
                    showToast(data.message || 'Submitted successfully!', 'success');
                    this.reset();
                    this.classList.remove('was-validated');
                } else {
                    showToast(data.message || 'Something went wrong.', 'error');
                }
            } catch (err) {
                showToast('Network error. Please try again or call us.', 'error');
            } finally {
                btn.disabled = false;
                btn.innerHTML = originalText;
            }
        });
    });
});
