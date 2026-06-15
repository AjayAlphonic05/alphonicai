<?php
include("../config.php");
$page_title = "Data Analytics Services - Business Intelligence - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">AI & Data</div>
            <h1>Data Analytics</h1>
            <p class="service-hero-description">Transform raw data into actionable insights with powerful analytics and visualization</p>
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
                <h2>Business Intelligence & Data Analytics</h2>
                <p>Make data-driven decisions with our comprehensive analytics solutions. We help you collect, process, and visualize data to uncover trends, patterns, and opportunities.</p>
                <h3>Our Data Analytics Services</h3>
                <ul>
                    <li><strong>Business Intelligence Dashboards:</strong> Real-time KPI tracking</li>
                    <li><strong>Data Visualization:</strong> Interactive charts and graphs</li>
                    <li><strong>Predictive Analytics:</strong> Forecast future trends</li>
                    <li><strong>Customer Analytics:</strong> Understand user behavior</li>
                    <li><strong>Sales Analytics:</strong> Optimize revenue strategies</li>
                    <li><strong>Marketing Analytics:</strong> Campaign performance tracking</li>
                    <li><strong>ETL Pipelines:</strong> Data extraction and transformation</li>
                    <li><strong>Data Warehousing:</strong> Centralized data storage</li>
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
                    <h3 style="color: white;">Unlock Insights</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Start analyzing your data</p>
                    <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>Analytics Tools</h2>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">📊</div><h4>Tableau</h4></div>
            <div class="tech-item"><div class="tech-icon">📈</div><h4>Power BI</h4></div>
            <div class="tech-item"><div class="tech-icon">🐍</div><h4>Python</h4></div>
            <div class="tech-item"><div class="tech-icon">🔢</div><h4>SQL</h4></div>
            <div class="tech-item"><div class="tech-icon">📉</div><h4>Looker</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>Google Analytics</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Leverage Your Data?</h2>
            <p>Turn data into competitive advantage</p>
            <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Start Analytics</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
