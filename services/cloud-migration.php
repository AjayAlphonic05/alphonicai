<?php
include("../config.php");
$page_title = "Cloud Migration Services - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Cloud & DevOps</div>
            <h1>Cloud Migration</h1>
            <p class="service-hero-description">Seamlessly migrate your infrastructure and applications to the cloud with zero downtime</p>
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
                <h2>Risk-Free Cloud Migration</h2>
                <p>Move your applications and data to the cloud safely and efficiently. Our proven migration methodology ensures minimal disruption to your business operations.</p>
                <h3>Our Migration Services</h3>
                <ul>
                    <li><strong>Migration Assessment:</strong> Analyze current infrastructure</li>
                    <li><strong>Migration Strategy:</strong> Lift-and-shift or re-architecture</li>
                    <li><strong>Application Migration:</strong> Move apps to cloud platforms</li>
                    <li><strong>Database Migration:</strong> Seamless data transfer</li>
                    <li><strong>Cloud-to-Cloud Migration:</strong> Switch between providers</li>
                    <li><strong>Testing & Validation:</strong> Ensure everything works</li>
                    <li><strong>Post-Migration Support:</strong> Ongoing optimization</li>
                    <li><strong>Rollback Planning:</strong> Safety net if needed</li>
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
                            <p>2-6 months</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Migrate Safely</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Move to cloud risk-free</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Migration Tools</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">☁️</div><h4>AWS Migration</h4></div>
            <div class="tech-item"><div class="tech-icon">🔷</div><h4>Azure Migrate</h4></div>
            <div class="tech-item"><div class="tech-icon">🌐</div><h4>GCP Migrate</h4></div>
            <div class="tech-item"><div class="tech-icon">📦</div><h4>CloudEndure</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Migrate?</h2>
            <p>Move to cloud with confidence</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Migration</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
