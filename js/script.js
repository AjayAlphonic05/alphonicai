document.addEventListener('DOMContentLoaded', function() {

    // ---- Light/dark theme toggle ----
    try {
        const themeToggle = document.getElementById('theme-toggle');
        const STORAGE_KEY = 'alphonicai-theme';

        function getStoredTheme() {
            try {
                return localStorage.getItem(STORAGE_KEY);
            } catch (err) {
                return null;
            }
        }

        function setStoredTheme(theme) {
            try {
                localStorage.setItem(STORAGE_KEY, theme);
            } catch (err) {}
        }

        function applyTheme(theme) {
            if (theme === 'light') {
                document.documentElement.setAttribute('data-theme', 'light');
            } else {
                document.documentElement.removeAttribute('data-theme');
            }
        }

        const currentTheme = getStoredTheme() === 'light' ? 'light' : 'dark';
        applyTheme(currentTheme);

        if (themeToggle) {
            themeToggle.addEventListener('click', function() {
                const isLight = document.documentElement.getAttribute('data-theme') === 'light';
                const nextTheme = isLight ? 'dark' : 'light';
                applyTheme(nextTheme);
                setStoredTheme(nextTheme);
            });
        }
    } catch (err) {
        console.error('Theme toggle init failed:', err);
    }

    // ---- Mobile nav toggle ----
    try {
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.querySelector('.nav-menu');

        if (mobileMenu && navMenu) {
            mobileMenu.addEventListener('click', function() {
                navMenu.classList.toggle('active');

                const bars = mobileMenu.querySelectorAll('.bar');
                bars[0].style.transform = navMenu.classList.contains('active')
                    ? 'rotate(-45deg) translate(-5px, 6px)'
                    : 'none';
                bars[1].style.opacity = navMenu.classList.contains('active') ? '0' : '1';
                bars[2].style.transform = navMenu.classList.contains('active')
                    ? 'rotate(45deg) translate(-5px, -6px)'
                    : 'none';
            });

            const navLinks = navMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        navMenu.classList.remove('active');
                        const bars = mobileMenu.querySelectorAll('.bar');
                        bars[0].style.transform = 'none';
                        bars[1].style.opacity = '1';
                        bars[2].style.transform = 'none';
                    }
                });
            });
        }
    } catch (err) {
        console.error('Mobile nav init failed:', err);
    }

    // ---- Contact form (page contact form, separate from enquiry modal form) ----
    try {
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(contactForm);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

                console.log('Form submitted:', data);

                contactForm.style.display = 'none';
                const successMessage = document.getElementById('formSuccess');
                if (successMessage) {
                    successMessage.classList.add('show');
                }

                setTimeout(() => {
                    contactForm.reset();
                    contactForm.style.display = 'block';
                    if (successMessage) {
                        successMessage.classList.remove('show');
                    }
                }, 5000);
            });
        }
    } catch (err) {
        console.error('Contact form init failed:', err);
    }

    // ---- Scroll-reveal animation for cards/stats ----
    try {
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.service-card, .feature-item, .team-member, .value-card, .stat-item');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(el);
            });
        }
    } catch (err) {
        console.error('Scroll-reveal init failed:', err);
    }

    // ---- category.php: single-category listing with pagination (no filter) ----
    try {
        const categoryListing = document.querySelector('.category-listing-section');

        if (categoryListing) {
            const blogPostCards = Array.from(categoryListing.querySelectorAll('.blog-post-card'));
            const blogEmptyState = categoryListing.querySelector('.blog-empty-state');
            const blogPageControls = categoryListing.querySelectorAll('.blog-page-control');
            const blogPagination = categoryListing.querySelector('.blog-pagination');
            const blogPageNumbersContainer = categoryListing.querySelector('.blog-page-numbers');
            const blogPostGrid = categoryListing.querySelector('.category-post-grid');
            const postsPerPage = parseInt(blogPostGrid?.dataset.postsPerPage, 10) || 6;
            let activePage = 1;

            function renderBlogPosts() {
                const totalPages = Math.max(1, Math.ceil(blogPostCards.length / postsPerPage));
                activePage = Math.min(activePage, totalPages);

                const startIndex = (activePage - 1) * postsPerPage;
                const visiblePosts = blogPostCards.slice(startIndex, startIndex + postsPerPage);

                blogPostCards.forEach(card => {
                    card.classList.toggle('is-hidden', !visiblePosts.includes(card));
                });

                if (blogEmptyState) {
                    blogEmptyState.classList.toggle('show', blogPostCards.length === 0);
                }

                renderPageNumbers(totalPages);

                if (blogPagination) {
                    blogPagination.style.display = totalPages > 1 ? 'flex' : 'none';
                }

                blogPageControls.forEach(control => {
                    const action = control.dataset.pageAction;
                    control.classList.toggle('is-disabled',
                        (action === 'prev' && activePage === 1) ||
                        (action === 'next' && activePage === totalPages)
                    );
                });
            }

            function renderPageNumbers(totalPages) {
                if (!blogPageNumbersContainer) return;

                blogPageNumbersContainer.innerHTML = '';

                for (let pageNumber = 1; pageNumber <= totalPages; pageNumber++) {
                    const pageLink = document.createElement('a');
                    pageLink.href = '#';
                    pageLink.className = `blog-page-number${pageNumber === activePage ? ' active' : ''}`;
                    pageLink.dataset.page = pageNumber;
                    pageLink.textContent = pageNumber;
                    pageLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        activePage = pageNumber;
                        renderBlogPosts();
                    });
                    blogPageNumbersContainer.appendChild(pageLink);
                }
            }

            blogPageControls.forEach(control => {
                control.addEventListener('click', function(e) {
                    e.preventDefault();

                    const totalPages = Math.max(1, Math.ceil(blogPostCards.length / postsPerPage));

                    if (this.dataset.pageAction === 'prev') {
                        activePage = Math.max(1, activePage - 1);
                    } else {
                        activePage = Math.min(totalPages, activePage + 1);
                    }

                    renderBlogPosts();
                });
            });

            renderBlogPosts();
        }
    } catch (err) {
        console.error('Category pagination init failed:', err);
    }

    // ---- blog.php: category tabs that switch which section is visible ----
    try {
        const blogCategorySections = document.querySelector('.blog-category-sections');

        if (blogCategorySections) {
            const tabs = blogCategorySections.querySelectorAll('.blog-category-tab');
            const sections = blogCategorySections.querySelectorAll('.blog-category-section');

            function showCategory(categorySlug) {
                tabs.forEach(tab => {
                    tab.classList.toggle('active', tab.dataset.categoryTab === categorySlug);
                });
                sections.forEach(section => {
                    section.classList.toggle('active', section.dataset.category === categorySlug);
                });
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    showCategory(this.dataset.categoryTab);
                });
            });

            if (tabs.length > 0) {
                showCategory(tabs[0].dataset.categoryTab);
            }
        }
    } catch (err) {
        console.error('Blog category tabs init failed:', err);
    }

    // ---- Enquiry modal (open/close/submit) ----
    try {
        const enquiryModal = document.getElementById('enquiryModal');

        if (enquiryModal) {
            const enquiryOpenButtons = document.querySelectorAll('[data-modal-open="enquiryModal"]');
            const enquiryCloseButtons = enquiryModal.querySelectorAll('[data-modal-close]');
            const enquiryForm = document.getElementById('enquiryForm');

            function openEnquiryModal() {
                enquiryModal.classList.add('is-open');
                enquiryModal.setAttribute('aria-hidden', 'false');
                document.body.classList.add('modal-open');
                const firstInput = enquiryModal.querySelector('input, select, textarea, button');
                if (firstInput) firstInput.focus();
            }

            function closeEnquiryModal() {
                enquiryModal.classList.remove('is-open');
                enquiryModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('modal-open');
            }

            enquiryOpenButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    openEnquiryModal();
                });
            });

            enquiryCloseButtons.forEach(button => {
                button.addEventListener('click', closeEnquiryModal);
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && enquiryModal.classList.contains('is-open')) {
                    closeEnquiryModal();
                }
            });

            if (enquiryForm) {
                enquiryForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const successMessage = document.getElementById('enquirySuccess');
                    if (successMessage) {
                        successMessage.classList.add('show');
                    }
                    enquiryForm.reset();
                });
            }
        }
    } catch (err) {
        console.error('Enquiry modal init failed:', err);
    }

    // ---- Smooth-scroll for in-page anchor links ----
    try {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.length > 1) {
                    const target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    } catch (err) {
        console.error('Smooth-scroll init failed:', err);
    }

    // ---- Navbar hide-on-scroll ----
    try {
        const navbar = document.querySelector('.navbar');

        if (navbar) {
            navbar.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';

            let lastScroll = 0;
            let ticking = false;

            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        const currentScroll = window.pageYOffset;

                        if (currentScroll > lastScroll && currentScroll > 100) {
                            navbar.style.transform = 'translateY(-100%)';
                        } else {
                            navbar.style.transform = 'translateY(0)';
                        }

                        if (currentScroll > 50) {
                            navbar.style.boxShadow = '0 10px 40px rgba(0, 0, 0, 0.5)';
                        } else {
                            navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.3)';
                        }

                        lastScroll = currentScroll;
                        ticking = false;
                    });

                    ticking = true;
                }
            });
        }
    } catch (err) {
        console.error('Navbar scroll init failed:', err);
    }

    // ---- Hero particle background ----
    try {
        function createParticles() {
            const hero = document.querySelector('.hero');
            if (!hero) return;

            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.style.position = 'absolute';
                particle.style.width = Math.random() * 4 + 1 + 'px';
                particle.style.height = particle.style.width;
                particle.style.background = 'rgba(0, 61, 92, 0.5)';
                particle.style.borderRadius = '50%';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.pointerEvents = 'none';
                particle.style.boxShadow = '0 0 10px rgba(0, 61, 92, 0.5)';
                particle.style.animation = `float ${Math.random() * 10 + 10}s ease-in-out infinite`;
                particle.style.animationDelay = Math.random() * 5 + 's';

                hero.appendChild(particle);
            }
        }

        createParticles();
    } catch (err) {
        console.error('Particle background init failed:', err);
    }

    // ---- Button ripple effect ----
    try {
        const buttons = document.querySelectorAll('.btn');

        if (buttons.length > 0) {
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function(e) {
                    const ripple = document.createElement('span');
                    ripple.style.position = 'absolute';
                    ripple.style.width = '5px';
                    ripple.style.height = '5px';
                    ripple.style.background = 'rgba(255, 255, 255, 0.5)';
                    ripple.style.borderRadius = '50%';
                    ripple.style.pointerEvents = 'none';
                    ripple.style.left = e.offsetX + 'px';
                    ripple.style.top = e.offsetY + 'px';
                    ripple.style.animation = 'ripple 0.6s ease-out';

                    this.appendChild(ripple);

                    setTimeout(() => ripple.remove(), 600);
                });
            });

            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        width: 200px;
                        height: 200px;
                        margin-left: -100px;
                        margin-top: -100px;
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        }
    } catch (err) {
        console.error('Button ripple init failed:', err);
    }

    // ---- Custom cursor (desktop only) ----
    try {
        if (window.innerWidth > 768) {
            const cursorDot = document.createElement('div');
            cursorDot.className = 'cursor-dot';
            cursorDot.style.cssText = `
                width: 8px;
                height: 8px;
                background: linear-gradient(135deg, #003D5C, #006B9E);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 9999;
                transition: transform 0.15s ease;
                box-shadow: 0 0 20px rgba(0, 61, 92, 0.6);
            `;

            const cursorOutline = document.createElement('div');
            cursorOutline.className = 'cursor-outline';
            cursorOutline.style.cssText = `
                width: 30px;
                height: 30px;
                border: 2px solid rgba(0, 61, 92, 0.5);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 9999;
                transition: all 0.15s ease;
            `;

            document.body.appendChild(cursorDot);
            document.body.appendChild(cursorOutline);

            let mouseX = 0, mouseY = 0;
            let cursorX = 0, cursorY = 0;
            let outlineX = 0, outlineY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            function animateCursor() {
                cursorX += (mouseX - cursorX) * 0.3;
                cursorY += (mouseY - cursorY) * 0.3;
                outlineX += (mouseX - outlineX) * 0.15;
                outlineY += (mouseY - outlineY) * 0.15;

                cursorDot.style.left = cursorX + 'px';
                cursorDot.style.top = cursorY + 'px';
                cursorOutline.style.left = outlineX - 15 + 'px';
                cursorOutline.style.top = outlineY - 15 + 'px';

                requestAnimationFrame(animateCursor);
            }

            animateCursor();

            const hoverTargets = document.querySelectorAll('a, button, .service-card, .team-member, .value-card');
            hoverTargets.forEach(target => {
                target.addEventListener('mouseenter', () => {
                    cursorDot.style.transform = 'scale(1.5)';
                    cursorOutline.style.width = '50px';
                    cursorOutline.style.height = '50px';
                    cursorOutline.style.left = outlineX - 25 + 'px';
                    cursorOutline.style.top = outlineY - 25 + 'px';
                });

                target.addEventListener('mouseleave', () => {
                    cursorDot.style.transform = 'scale(1)';
                    cursorOutline.style.width = '30px';
                    cursorOutline.style.height = '30px';
                });
            });
        }
    } catch (err) {
        console.error('Custom cursor init failed:', err);
    }

    // ---- Animated stat counters ----
    try {
        const statNumbers = document.querySelectorAll('.stat-number');

        if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = entry.target;
                        const text = target.textContent;
                        const number = parseInt(text);

                        if (!isNaN(number)) {
                            let current = 0;
                            const increment = number / 50;
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= number) {
                                    target.textContent = text;
                                    clearInterval(timer);
                                } else {
                                    target.textContent = Math.floor(current) + '+';
                                }
                            }, 30);
                        }

                        statsObserver.unobserve(target);
                    }
                });
            }, { threshold: 0.5 });

            statNumbers.forEach(stat => statsObserver.observe(stat));
        }
    } catch (err) {
        console.error('Stat counter init failed:', err);
    }

    // ---- Service card 3D tilt ----
    try {
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;

                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                card.style.transform = `translateY(-10px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0) rotateX(0) rotateY(0)';
            });
        });
    } catch (err) {
        console.error('Service card tilt init failed:', err);
    }

    // ---- Homepage hero typewriter effect ----
    try {
        if (window.location.pathname.includes('index.php') || window.location.pathname.endsWith('/')) {
            const heroTitle = document.querySelector('.hero-title');
            if (heroTitle) {
                const titleTokens = heroTitle.innerHTML.match(/<[^>]+>|[^<]/g) || [];
                heroTitle.innerHTML = '';
                heroTitle.style.opacity = '1';

                let i = 0;
                function typeWriter() {
                    if (i < titleTokens.length) {
                        heroTitle.innerHTML += titleTokens[i];
                        i++;
                        setTimeout(typeWriter, 30);
                    }
                }

                setTimeout(typeWriter, 500);
            }
        }
    } catch (err) {
        console.error('Hero typewriter init failed:', err);
    }
});

if ('scrollBehavior' in document.documentElement.style === false) {
    const script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js';
    document.head.appendChild(script);
}