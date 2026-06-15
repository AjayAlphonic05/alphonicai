<?php
include("../config.php");
$page_title = "SaaS Development - Software as a Service - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Enterprise</div>
            <h1>SaaS Development</h1>
            <p class="service-hero-description">Build multi-tenant SaaS platforms with subscription management and scalability</p>
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
                <h2>Complete SaaS Platform Development</h2>
                <p>Launch your SaaS product with our end-to-end development services. We build secure, scalable platforms with subscription billing, user management, and analytics.</p>
                <h3>Our SaaS Services</h3>
                <ul>
                    <li><strong>Multi-Tenant Architecture:</strong> Isolated customer data</li>
                    <li><strong>Subscription Management:</strong> Billing and invoicing</li>
                    <li><strong>User Authentication:</strong> SSO, OAuth2 integration</li>
                    <li><strong>Payment Integration:</strong> Stripe, PayPal subscriptions</li>
                    <li><strong>Admin Dashboard:</strong> Manage customers and metrics</li>
                    <li><strong>API Development:</strong> Third-party integrations</li>
                    <li><strong>Analytics & Reporting:</strong> Usage tracking</li>
                    <li><strong>Auto-Scaling:</strong> Handle traffic spikes</li>
                </ul>
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
                            <p>4-8 months</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Launch Your SaaS</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build recurring revenue</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Build Your SaaS?</h2>
            <p>Create a profitable subscription business</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start SaaS Development</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
