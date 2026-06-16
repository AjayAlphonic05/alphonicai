<?php
include("../config.php");
$page_title = "DevOps Services - CI/CD Pipelines - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Cloud & DevOps</div>
            <h1>DevOps Services</h1>
            <p class="service-hero-description">Automate deployments and streamline development with modern DevOps practices</p>
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
                <h2>DevOps Automation & CI/CD</h2>
                <p>Accelerate software delivery with our DevOps services. We implement continuous integration, continuous deployment, and infrastructure automation to reduce time-to-market.</p>
                <h3>Our DevOps Services</h3>
                <ul>
                    <li><strong>CI/CD Pipeline Setup:</strong> Automated build, test, deploy</li>
                    <li><strong>Infrastructure as Code:</strong> Terraform, CloudFormation</li>
                    <li><strong>Configuration Management:</strong> Ansible, Chef, Puppet</li>
                    <li><strong>Monitoring & Logging:</strong> Prometheus, Grafana, ELK</li>
                    <li><strong>Container Orchestration:</strong> Kubernetes management</li>
                    <li><strong>Automated Testing:</strong> Unit, integration, E2E tests</li>
                    <li><strong>Release Management:</strong> Blue-green, canary deployments</li>
                    <li><strong>Security Integration:</strong> DevSecOps practices</li>
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
                            <p>6-12 weeks</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Automate Everything</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Streamline your workflow</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>DevOps Tools</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🔧</div><h4>Jenkins</h4></div>
            <div class="tech-item"><div class="tech-icon">🦊</div><h4>GitLab CI</h4></div>
            <div class="tech-item"><div class="tech-icon">📦</div><h4>Docker</h4></div>
            <div class="tech-item"><div class="tech-icon">☸️</div><h4>Kubernetes</h4></div>
            <div class="tech-item"><div class="tech-icon">🏗️</div><h4>Terraform</h4></div>
            <div class="tech-item"><div class="tech-icon">📊</div><h4>Grafana</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Automate?</h2>
            <p>Deploy faster with DevOps</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start DevOps</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
