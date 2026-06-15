<?php
include("../config.php");
$page_title = "Chatbot Development - AI Chatbots - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">AI & Data</div>
            <h1>Chatbot Development</h1>
            <p class="service-hero-description">Build intelligent conversational AI assistants that enhance customer experience 24/7</p>
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
                <h2>AI-Powered Chatbot Solutions</h2>
                <p>Create engaging conversational experiences with our custom chatbot development services. From customer support to sales automation, our chatbots understand context and deliver human-like interactions.</p>
                <h3>Our Chatbot Services</h3>
                <ul>
                    <li><strong>Customer Support Bots:</strong> 24/7 automated customer service</li>
                    <li><strong>Sales Chatbots:</strong> Lead generation and qualification</li>
                    <li><strong>Voice Assistants:</strong> Alexa and Google Assistant integration</li>
                    <li><strong>WhatsApp Bots:</strong> Automated messaging on WhatsApp</li>
                    <li><strong>Facebook Messenger Bots:</strong> Social media automation</li>
                    <li><strong>Website Chat Widgets:</strong> Embedded live chat</li>
                    <li><strong>NLP Integration:</strong> Natural language understanding</li>
                    <li><strong>Multi-language Support:</strong> Communicate globally</li>
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
                    <h3 style="color: white;">Build Your Bot</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Automate conversations</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Chatbot Technologies</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🤖</div><h4>Dialogflow</h4></div>
            <div class="tech-item"><div class="tech-icon">💬</div><h4>Rasa</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>OpenAI GPT</h4></div>
            <div class="tech-item"><div class="tech-icon">📱</div><h4>WhatsApp API</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Launch Your Chatbot?</h2>
            <p>Automate customer interactions with AI</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start Building</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
