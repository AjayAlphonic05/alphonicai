document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navMenu = document.querySelector('.nav-menu');
    const navbar = document.querySelector('.navbar');

    if (mobileMenu) {
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
    }

    const navLinks = document.querySelectorAll('.nav-menu a');
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
            successMessage.classList.add('show');

            setTimeout(() => {
                contactForm.reset();
                contactForm.style.display = 'block';
                successMessage.classList.remove('show');
            }, 5000);
        });
    }

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

    const blogCategoryChips = document.querySelectorAll('.blog-category-chip');
    const blogPostCards = document.querySelectorAll('.blog-post-card');
    const blogEmptyState = document.querySelector('.blog-empty-state');
    const blogPageNumbers = document.querySelectorAll('.blog-page-number');
    const blogPageControls = document.querySelectorAll('.blog-page-control');
    const blogPagination = document.querySelector('.blog-pagination');

    if (blogCategoryChips.length && blogPostCards.length) {
        const postsPerPage = 4;
        let activeCategory = 'all';
        let activePage = 1;

        function getFilteredPosts() {
            return Array.from(blogPostCards).filter(card => {
                const cardCategories = (card.dataset.categories || '').split(' ');
                return activeCategory === 'all' || cardCategories.includes(activeCategory);
            });
        }

        function renderBlogPosts() {
            const filteredPosts = getFilteredPosts();
            const totalPages = Math.max(1, Math.ceil(filteredPosts.length / postsPerPage));
            activePage = Math.min(activePage, totalPages);

            const startIndex = (activePage - 1) * postsPerPage;
            const visiblePosts = filteredPosts.slice(startIndex, startIndex + postsPerPage);

            blogPostCards.forEach(card => {
                card.classList.toggle('is-hidden', !visiblePosts.includes(card));
            });

            if (blogEmptyState) {
                blogEmptyState.classList.toggle('show', filteredPosts.length === 0);
            }

            if (blogPagination) {
                blogPagination.style.display = filteredPosts.length > postsPerPage ? 'flex' : 'none';
            }

            blogPageNumbers.forEach(pageLink => {
                const pageNumber = parseInt(pageLink.dataset.page, 10);
                pageLink.classList.toggle('active', pageNumber === activePage);
                pageLink.style.display = pageNumber <= totalPages ? 'inline-flex' : 'none';
            });

            blogPageControls.forEach(control => {
                const action = control.dataset.pageAction;
                control.classList.toggle('is-disabled',
                    (action === 'prev' && activePage === 1) ||
                    (action === 'next' && activePage === totalPages)
                );
            });
        }

        blogCategoryChips.forEach(chip => {
            chip.addEventListener('click', function(e) {
                e.preventDefault();

                activeCategory = this.dataset.category || 'all';
                activePage = 1;

                blogCategoryChips.forEach(item => item.classList.remove('active'));
                this.classList.add('active');

                renderBlogPosts();
            });
        });

        blogPageNumbers.forEach(pageLink => {
            pageLink.addEventListener('click', function(e) {
                e.preventDefault();

                activePage = parseInt(this.dataset.page, 10) || 1;
                renderBlogPosts();
            });
        });

        blogPageControls.forEach(control => {
            control.addEventListener('click', function(e) {
                e.preventDefault();

                const totalPages = Math.max(1, Math.ceil(getFilteredPosts().length / postsPerPage));

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

    navbar.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';

    function createParticles() {
        const hero = document.querySelector('.hero');
        if (!hero) return;

        const particleCount = 30;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.style.position = 'absolute';
            particle.style.width = Math.random() * 4 + 1 + 'px';
            particle.style.height = particle.style.width;
            /* OLD: rgba(99, 102, 241, 0.5) */
            particle.style.background = 'rgba(0, 61, 92, 0.5)';
            particle.style.borderRadius = '50%';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.pointerEvents = 'none';
            /* OLD: rgba(99, 102, 241, 0.5) */
            particle.style.boxShadow = '0 0 10px rgba(0, 61, 92, 0.5)';
            particle.style.animation = `float ${Math.random() * 10 + 10}s ease-in-out infinite`;
            particle.style.animationDelay = Math.random() * 5 + 's';

            hero.appendChild(particle);
        }
    }

    createParticles();

    const buttons = document.querySelectorAll('.btn');
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

    const cursorDot = document.createElement('div');
    cursorDot.className = 'cursor-dot';
    cursorDot.style.cssText = `
        width: 8px;
        height: 8px;
        /* OLD: linear-gradient(135deg, #6366f1, #8b5cf6) */
        background: linear-gradient(135deg, #003D5C, #006B9E);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.15s ease;
        /* OLD: rgba(99, 102, 241, 0.6) */
        box-shadow: 0 0 20px rgba(0, 61, 92, 0.6);
    `;

    const cursorOutline = document.createElement('div');
    cursorOutline.className = 'cursor-outline';
    cursorOutline.style.cssText = `
        width: 30px;
        height: 30px;
        /* OLD: rgba(99, 102, 241, 0.5) */
        border: 2px solid rgba(0, 61, 92, 0.5);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: all 0.15s ease;
    `;

    if (window.innerWidth > 768) {
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

    const statNumbers = document.querySelectorAll('.stat-number');
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
});

if ('scrollBehavior' in document.documentElement.style === false) {
    const script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/npm/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js';
    document.head.appendChild(script);
}
