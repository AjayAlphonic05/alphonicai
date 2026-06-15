<?php
include("../config.php");
$page_title = "API Development Services - RESTful & GraphQL - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Development</div>
            <h1>API Development</h1>
            <p class="service-hero-description">Build robust, scalable APIs that power modern applications with RESTful and GraphQL architectures</p>
            <div class="service-cta-buttons">
                <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary">Start Your Project</a>
                <a href="#overview" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>
<section class="service-overview" id="overview">
    <div class="container">
        <div class="service-content-grid">
            <div class="service-main-content">
                <h2>Professional API Development Services</h2>
                <p>We design and develop high-performance APIs that enable seamless communication between applications, services, and platforms. Our API solutions are secure, scalable, and built following industry best practices.</p>
                <h3>Our API Development Services</h3>
                <ul>
                    <li><strong>RESTful API Development:</strong> Standard REST APIs with JSON responses</li>
                    <li><strong>GraphQL API Development:</strong> Flexible query-based API architecture</li>
                    <li><strong>API Gateway Setup:</strong> Centralized API management and routing</li>
                    <li><strong>API Documentation:</strong> Comprehensive docs using Swagger/OpenAPI</li>
                    <li><strong>API Security:</strong> OAuth2, JWT authentication, rate limiting</li>
                    <li><strong>Microservices APIs:</strong> Service-to-service communication</li>
                    <li><strong>Third-Party Integrations:</strong> Payment gateways, social media, cloud services</li>
                    <li><strong>API Versioning:</strong> Backward compatibility and smooth transitions</li>
                </ul>
                <h3>Why API-First Development?</h3>
                <p>Building with APIs first enables flexibility, scalability, and easier integration with mobile apps, web applications, and third-party services. It's the foundation of modern software architecture.</p>
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
                            <p>4-10 weeks</p>
                        </div>
                    </div>
                    <div class="quick-info-item">
                        <div class="quick-info-icon">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div class="quick-info-content">
                            <h4>Security</h4>
                            <p>OAuth2, JWT</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Build Your API</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Get expert API development</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>API Technologies</h2>
            <p>Modern frameworks and tools</p>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">📱</div><h4>Node.js</h4></div>
            <div class="tech-item"><div class="tech-icon">🐍</div><h4>Python/FastAPI</h4></div>
            <div class="tech-item"><div class="tech-icon">⚡</div><h4>Express.js</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>GraphQL</h4></div>
            <div class="tech-item"><div class="tech-icon">🔐</div><h4>OAuth2</h4></div>
            <div class="tech-item"><div class="tech-icon">📋</div><h4>Swagger</h4></div>
            <div class="tech-item"><div class="tech-icon">🌐</div><h4>REST</h4></div>
            <div class="tech-item"><div class="tech-icon">🔧</div><h4>Postman</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Build Your API?</h2>
            <p>Let's create powerful APIs for your applications</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start Development</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
