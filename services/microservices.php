<?php
include("../config.php");
$page_title = "Microservices Architecture - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Cloud & DevOps</div>
            <h1>Microservices Architecture</h1>
            <p class="service-hero-description">Build scalable, distributed systems with microservices architecture and containerization</p>
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
                <h2>Modern Microservices Solutions</h2>
                <p>Break down monolithic applications into independently deployable microservices. Scale individual components, improve fault tolerance, and accelerate development cycles.</p>
                <h3>Our Microservices Services</h3>
                <ul>
                    <li><strong>Architecture Design:</strong> Plan microservices decomposition</li>
                    <li><strong>API Gateway Implementation:</strong> Centralized entry point</li>
                    <li><strong>Service Mesh:</strong> Istio, Linkerd for service communication</li>
                    <li><strong>Event-Driven Architecture:</strong> Async messaging with Kafka</li>
                    <li><strong>Container Orchestration:</strong> Kubernetes deployment</li>
                    <li><strong>Service Discovery:</strong> Consul, Eureka integration</li>
                    <li><strong>Monitoring & Tracing:</strong> Distributed logging</li>
                    <li><strong>Monolith to Microservices:</strong> Migration strategy</li>
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
                            <p>3-6 months</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Go Microservices</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build scalable architecture</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Microservices Stack</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🐳</div><h4>Docker</h4></div>
            <div class="tech-item"><div class="tech-icon">☸️</div><h4>Kubernetes</h4></div>
            <div class="tech-item"><div class="tech-icon">📊</div><h4>Kafka</h4></div>
            <div class="tech-item"><div class="tech-icon">🌐</div><h4>Istio</h4></div>
            <div class="tech-item"><div class="tech-icon">🔍</div><h4>Consul</h4></div>
            <div class="tech-item"><div class="tech-icon">📈</div><h4>Prometheus</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Microservices?</h2>
            <p>Build distributed systems that scale</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Building</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
