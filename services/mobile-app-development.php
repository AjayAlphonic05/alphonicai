<?php
include("../config.php");
$page_title = "Mobile App Development - iOS & Android - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Development</div>
            <h1>Mobile App Development</h1>
            <p class="service-hero-description">Build native and cross-platform mobile applications for iOS and Android that users love</p>
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
                <h2>Native & Cross-Platform Mobile Apps</h2>
                <p>Create engaging mobile experiences with our expert app development services. We build high-performance applications for iOS, Android, and cross-platform solutions.</p>
                <h3>Our Mobile App Services</h3>
                <ul>
                    <li><strong>Native iOS Development:</strong> Swift and Objective-C apps for Apple devices</li>
                    <li><strong>Native Android Development:</strong> Kotlin and Java apps for Android</li>
                    <li><strong>Cross-Platform Apps:</strong> React Native, Flutter for multiple platforms</li>
                    <li><strong>App Store Optimization:</strong> Get discovered by your target audience</li>
                    <li><strong>App Maintenance:</strong> Regular updates and performance monitoring</li>
                    <li><strong>API Integration:</strong> Connect with backend services and third-party APIs</li>
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
                    <div class="quick-info-item">
                        <div class="quick-info-icon">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                        </div>
                        <div class="quick-info-content">
                            <h4>Platforms</h4>
                            <p>iOS, Android, Both</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Launch Your App</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Get a free consultation</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Mobile Technologies</h2>
            <p>Latest frameworks and tools</p>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🍎</div><h4>Swift</h4></div>
            <div class="tech-item"><div class="tech-icon">🤖</div><h4>Kotlin</h4></div>
            <div class="tech-item"><div class="tech-icon">⚛️</div><h4>React Native</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>Flutter</h4></div>
            <div class="tech-item"><div class="tech-icon">📱</div><h4>Ionic</h4></div>
            <div class="tech-item"><div class="tech-icon">🔥</div><h4>Firebase</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Build Your Mobile App?</h2>
            <p>Transform your idea into a powerful mobile application</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Today</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
