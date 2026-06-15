<?php
include("../config.php");
$page_title = "UI/UX Design Services - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Enterprise</div>
            <h1>UI/UX Design</h1>
            <p class="service-hero-description">Create beautiful, intuitive user experiences that delight customers and drive engagement</p>
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
                <h2>User-Centered Design</h2>
                <p>Design products that users love with our UX research and UI design services. We create interfaces that are not only beautiful but also functional and accessible.</p>
                <h3>Our Design Services</h3>
                <ul>
                    <li><strong>User Research:</strong> Understand your audience</li>
                    <li><strong>Wireframing:</strong> Low-fidelity prototypes</li>
                    <li><strong>UI Design:</strong> High-fidelity mockups</li>
                    <li><strong>Prototyping:</strong> Interactive demos</li>
                    <li><strong>Usability Testing:</strong> Validate designs</li>
                    <li><strong>Design Systems:</strong> Consistent UI components</li>
                    <li><strong>Mobile App Design:</strong> iOS and Android</li>
                    <li><strong>Web Design:</strong> Responsive interfaces</li>
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
                            <p>4-10 weeks</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Design Better</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Create great experiences</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Design Tools</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🎨</div><h4>Figma</h4></div>
            <div class="tech-item"><div class="tech-icon">✏️</div><h4>Sketch</h4></div>
            <div class="tech-item"><div class="tech-icon">🖼️</div><h4>Adobe XD</h4></div>
            <div class="tech-item"><div class="tech-icon">📱</div><h4>InVision</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Great Design?</h2>
            <p>Create experiences users love</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start Designing</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
