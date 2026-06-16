<?php
include("../config.php");
$page_title = "Cloud Solutions - AWS, Azure, GCP - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Cloud & DevOps</div>
            <h1>Cloud Solutions</h1>
            <p class="service-hero-description">Build scalable, secure cloud infrastructure on AWS, Azure, and Google Cloud Platform</p>
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
                <h2>Enterprise Cloud Solutions</h2>
                <p>Modernize your infrastructure with cloud-native architecture. We design, deploy, and manage cloud solutions that scale with your business while optimizing costs.</p>
                <h3>Our Cloud Services</h3>
                <ul>
                    <li><strong>Cloud Architecture Design:</strong> Scalable and secure infrastructure</li>
                    <li><strong>AWS Solutions:</strong> EC2, S3, Lambda, RDS, and more</li>
                    <li><strong>Azure Solutions:</strong> Virtual Machines, Blob Storage, Functions</li>
                    <li><strong>Google Cloud Platform:</strong> Compute Engine, Cloud Storage</li>
                    <li><strong>Serverless Architecture:</strong> Event-driven applications</li>
                    <li><strong>Container Orchestration:</strong> Kubernetes, Docker, ECS</li>
                    <li><strong>Cloud Security:</strong> IAM, encryption, compliance</li>
                    <li><strong>Cost Optimization:</strong> Reduce cloud spending</li>
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
                            <p>4-12 weeks</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Move to Cloud</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Start your cloud journey</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Cloud Platforms</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">☁️</div><h4>AWS</h4></div>
            <div class="tech-item"><div class="tech-icon">🔷</div><h4>Azure</h4></div>
            <div class="tech-item"><div class="tech-icon">🌐</div><h4>Google Cloud</h4></div>
            <div class="tech-item"><div class="tech-icon">🐳</div><h4>Docker</h4></div>
            <div class="tech-item"><div class="tech-icon">☸️</div><h4>Kubernetes</h4></div>
            <div class="tech-item"><div class="tech-icon">⚡</div><h4>Lambda</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for the Cloud?</h2>
            <p>Scale infinitely with cloud infrastructure</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Cloud Migration</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
