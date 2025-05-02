/**
 * NAVBAR MOBILE TOGGLE 
 * */
function setupNavbar() {
    // Element Selector
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    // Jika element navbar ada di halaman ini
    if (hamburger && navLinks) {
        // Toggle menu saat hamburger diklik
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
            
            // Lock scroll saat menu terbuka (opsional)
            document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
        });
        
        // Auto-close menu saat link diklik (untuk mobile)
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    hamburger.classList.remove('active');
                    navLinks.classList.remove('active');
                    document.body.style.overflow = ''; // Unlock scroll
                }
            });
        });
    }
}

// Panggil fungsi ketika DOM siap
document.addEventListener('DOMContentLoaded', () => {
    setupNavbar();

});