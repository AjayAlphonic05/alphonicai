<?php
include("../config.php");
$page_title = "Enterprise Software Development - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Enterprise</div>
            <h1>Enterprise Software</h1>
            <p class="service-hero-description">Build large-scale business management systems for complex enterprise needs</p>
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
                <h2>Enterprise-Grade Solutions</h2>
                <p>Develop robust, scalable software for large organizations. From ERP to CRM systems, we build enterprise solutions that streamline operations and drive efficiency.</p>
                <h3>Our Enterprise Services</h3>
                <ul>
                    <li><strong>ERP Development:</strong> Unified business management systems</li>
                    <li><strong>CRM Systems:</strong> Customer relationship management</li>
                    <li><strong>Supply Chain Management:</strong> End-to-end logistics</li>
                    <li><strong>Human Resource Management:</strong> Employee lifecycle management</li>
                    <li><strong>Financial Management Systems:</strong> Accounting and reporting</li>
                    <li><strong>Business Intelligence:</strong> Data-driven decision making</li>
                    <li><strong>Workflow Automation:</strong> Process optimization</li>
                    <li><strong>Document Management:</strong> Centralized file systems</li>
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
                            <p>6-12 months</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Enterprise Ready</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build at scale</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Enterprise Software?</h2>
            <p>Build systems that power large organizations</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Building</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
