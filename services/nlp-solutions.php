<?php
include("../config.php");
$page_title = "NLP Solutions - Natural Language Processing - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">AI & Data</div>
            <h1>NLP Solutions</h1>
            <p class="service-hero-description">Process and understand human language with advanced natural language processing</p>
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
                <h2>Natural Language Processing Services</h2>
                <p>Extract meaning from text and speech with our NLP solutions. From sentiment analysis to language translation, we build systems that understand human communication.</p>
                <h3>Our NLP Services</h3>
                <ul>
                    <li><strong>Sentiment Analysis:</strong> Understand customer emotions</li>
                    <li><strong>Text Classification:</strong> Categorize documents automatically</li>
                    <li><strong>Named Entity Recognition:</strong> Extract key information</li>
                    <li><strong>Language Translation:</strong> Multi-language support</li>
                    <li><strong>Text Summarization:</strong> Condense long documents</li>
                    <li><strong>Question Answering Systems:</strong> Intelligent Q&A bots</li>
                    <li><strong>Speech-to-Text:</strong> Transcription services</li>
                    <li><strong>Intent Detection:</strong> Understand user intentions</li>
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
                            <p>8-16 weeks</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Process Language</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build NLP solutions</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>NLP Technologies</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🗣️</div><h4>spaCy</h4></div>
            <div class="tech-item"><div class="tech-icon">📝</div><h4>NLTK</h4></div>
            <div class="tech-item"><div class="tech-icon">🤖</div><h4>Transformers</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>BERT</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for NLP Solutions?</h2>
            <p>Understand language with AI</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start NLP Project</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
