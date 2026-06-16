<?php
include("../config.php");
$page_title = "AI & Machine Learning Solutions - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">AI & Data</div>
            <h1>AI & Machine Learning Solutions</h1>
            <p class="service-hero-description">Transform your business with intelligent automation and predictive analytics powered by AI</p>
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
                <h2>Intelligent AI & ML Solutions</h2>
                <p>Leverage the power of artificial intelligence and machine learning to automate processes, gain insights, and make data-driven decisions. Our AI solutions are practical, scalable, and deliver measurable ROI.</p>
                <h3>Our AI & ML Services</h3>
                <ul>
                    <li><strong>Custom ML Model Development:</strong> Tailored algorithms for your data</li>
                    <li><strong>Predictive Analytics:</strong> Forecast trends and outcomes</li>
                    <li><strong>Recommendation Systems:</strong> Personalized content and product suggestions</li>
                    <li><strong>Anomaly Detection:</strong> Identify unusual patterns and fraud</li>
                    <li><strong>Time Series Forecasting:</strong> Predict future values from historical data</li>
                    <li><strong>Classification & Clustering:</strong> Organize and categorize data</li>
                    <li><strong>Neural Networks:</strong> Deep learning for complex problems</li>
                    <li><strong>Model Training & Optimization:</strong> Fine-tune for best performance</li>
                    <li><strong>AI Integration:</strong> Embed AI into existing applications</li>
                    <li><strong>MLOps Setup:</strong> Automated model deployment and monitoring</li>
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
                    <div class="quick-info-item">
                        <div class="quick-info-icon">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                        </div>
                        <div class="quick-info-content">
                            <h4>Expertise</h4>
                            <p>TensorFlow, PyTorch</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Harness AI Power</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Let's build intelligent solutions</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>AI/ML Technologies</h2>
            <p>Cutting-edge frameworks</p>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🤖</div><h4>TensorFlow</h4></div>
            <div class="tech-item"><div class="tech-icon">🔥</div><h4>PyTorch</h4></div>
            <div class="tech-item"><div class="tech-icon">🐍</div><h4>Scikit-learn</h4></div>
            <div class="tech-item"><div class="tech-icon">🧠</div><h4>Keras</h4></div>
            <div class="tech-item"><div class="tech-icon">📊</div><h4>Pandas</h4></div>
            <div class="tech-item"><div class="tech-icon">🔢</div><h4>NumPy</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>OpenAI</h4></div>
            <div class="tech-item"><div class="tech-icon">☁️</div><h4>AWS ML</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for AI Transformation?</h2>
            <p>Let's unlock the potential of your data with AI</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start AI Project</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
