<?php
include("../config.php");
$page_title = "Web Development Services - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>

    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">
                <div class="service-category">Development</div>
                <h1>Web Development</h1>
                <p class="service-hero-description">Create powerful, responsive web applications that deliver exceptional user experiences and drive business growth</p>
                <div class="service-cta-buttons">
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Start Your Project</a>
                    <a href="#overview" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-overview" id="overview">
        <div class="container">
            <div class="service-content-grid">
                <div class="service-main-content">
                    <h2>Modern Web Development Solutions</h2>
                    <p>We build fast, secure, and scalable web applications using the latest technologies. From simple websites to complex web platforms, we deliver solutions that engage users and achieve your business objectives.</p>

                    <h3>Our Web Development Services</h3>
                    <ul>
                        <li><strong>Responsive Websites:</strong> Beautiful designs that work on all devices</li>
                        <li><strong>Progressive Web Apps (PWA):</strong> App-like experiences on the web</li>
                        <li><strong>Single Page Applications (SPA):</strong> Fast, dynamic user interfaces</li>
                        <li><strong>E-commerce Platforms:</strong> Online stores with secure payment integration</li>
                        <li><strong>Corporate Websites:</strong> Professional online presence for your business</li>
                        <li><strong>Web Portals:</strong> Customer/employee portals with secure access</li>
                        <li><strong>Content Management Systems:</strong> Easy-to-manage website content</li>
                        <li><strong>API Development:</strong> Backend services for web applications</li>
                    </ul>

                    <h3>Technologies We Excel In</h3>
                    <p>React, Angular, Vue.js, Node.js, Django, Laravel, .NET Core, and more. We choose the right technology stack based on your project requirements.</p>
                </div>

                <div class="service-sidebar">
                    <div class="sidebar-card">
                        <h3>Quick Info</h3>
                        <div class="quick-info-item">
                            <div class="quick-info-icon">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="quick-info-content">
                                <h4>Timeline</h4>
                                <p>4-12 weeks</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <div class="quick-info-icon">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="quick-info-content">
                                <h4>Deployment</h4>
                                <p>AWS, Azure, GCP</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <div class="quick-info-icon">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div class="quick-info-content">
                                <h4>Performance</h4>
                                <p>95+ PageSpeed</p>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                        <h3 style="color: white;">Need a Website?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Get a free quote for your web project</p>
                        <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-stack">
        <div class="container">
            <div class="section-header">
                <h2>Our Tech Stack</h2>
                <p>Modern frameworks and tools</p>
            </div>
            <div class="tech-grid">
                <div class="tech-item">
                    <div class="tech-icon">⚛️</div>
                    <h4>React</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🅰️</div>
                    <h4>Angular</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">💚</div>
                    <h4>Vue.js</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">📱</div>
                    <h4>Node.js</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🐍</div>
                    <h4>Django</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🎯</div>
                    <h4>Next.js</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">⚡</div>
                    <h4>Laravel</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🔷</div>
                    <h4>TypeScript</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Launch Your Web Project?</h2>
                <p>Let's build a web presence that drives results</p>
                <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Building Today</a>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
