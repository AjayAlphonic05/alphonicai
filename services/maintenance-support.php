<?php
include("../config.php");
$page_title = "Maintenance & Support Services - 24/7 - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Enterprise</div>
            <h1>Maintenance & Support</h1>
            <p class="service-hero-description">24/7 technical support and ongoing maintenance to keep your software running smoothly</p>
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
                <h2>Always-On Support</h2>
                <p>Keep your applications running at peak performance with our comprehensive maintenance and support services. We monitor, update, and optimize your software 24/7.</p>
                <h3>Our Support Services</h3>
                <ul>
                    <li><strong>24/7 Technical Support:</strong> Round-the-clock assistance</li>
                    <li><strong>Bug Fixes:</strong> Quick resolution of issues</li>
                    <li><strong>Security Updates:</strong> Regular patches and updates</li>
                    <li><strong>Performance Optimization:</strong> Speed improvements</li>
                    <li><strong>Feature Enhancements:</strong> Continuous improvements</li>
                    <li><strong>Server Monitoring:</strong> Proactive issue detection</li>
                    <li><strong>Backup & Recovery:</strong> Data protection</li>
                    <li><strong>Documentation:</strong> Knowledge base maintenance</li>
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
                            <h4>Availability</h4>
                            <p>24/7/365</p>
                        </div>
                    </div>
                    <div class="quick-info-item">
                        <div class="quick-info-icon">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div class="quick-info-content">
                            <h4>Response Time</h4>
                            <p>< 2 hours</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Get Support</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Peace of mind 24/7</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Reliable Support?</h2>
            <p>Keep your software running perfectly</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Get Support</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
