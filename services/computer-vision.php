<?php
include("../config.php");
$page_title = "Computer Vision Solutions - Image Recognition - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">AI & Data</div>
            <h1>Computer Vision</h1>
            <p class="service-hero-description">Enable machines to see and understand images with advanced computer vision AI</p>
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
                <h2>Advanced Computer Vision Solutions</h2>
                <p>Implement cutting-edge image and video analysis with our computer vision services. From object detection to facial recognition, we build AI that sees and understands visual data.</p>
                <h3>Our Computer Vision Services</h3>
                <ul>
                    <li><strong>Object Detection & Recognition:</strong> Identify objects in images/videos</li>
                    <li><strong>Facial Recognition:</strong> Identity verification and authentication</li>
                    <li><strong>Image Classification:</strong> Categorize and tag images automatically</li>
                    <li><strong>OCR (Optical Character Recognition):</strong> Extract text from images</li>
                    <li><strong>Video Analytics:</strong> Motion detection and tracking</li>
                    <li><strong>Medical Image Analysis:</strong> Healthcare diagnostics</li>
                    <li><strong>Quality Inspection:</strong> Manufacturing defect detection</li>
                    <li><strong>Image Segmentation:</strong> Separate objects from backgrounds</li>
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
                    <h3 style="color: white;">See with AI</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build vision solutions</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Vision Technologies</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">👁️</div><h4>OpenCV</h4></div>
            <div class="tech-item"><div class="tech-icon">🤖</div><h4>YOLO</h4></div>
            <div class="tech-item"><div class="tech-icon">🧠</div><h4>TensorFlow</h4></div>
            <div class="tech-item"><div class="tech-icon">🔥</div><h4>PyTorch</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Computer Vision?</h2>
            <p>Let machines see and understand</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start Vision Project</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
