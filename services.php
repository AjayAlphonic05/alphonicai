<?php
include("config.php");
$page_title = "Our Services - AlphonicAI";
$current_page = "services";
include 'includes/header.php';
?>

    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive solutions to drive your business forward</p>
        </div>
    </section>

    <section class="service-detail" id="software">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-text">
                    <div class="service-badge">Software Development</div>
                    <h2>Custom Software Development</h2>
                    <p>We create tailored software solutions that perfectly align with your business objectives. From enterprise applications to specialized tools, our team delivers robust, scalable, and maintainable code.</p>
                    <ul class="service-features">
                        <li>Enterprise Software Solutions</li>
                        <li>API Development & Integration</li>
                        <li>Legacy System Modernization</li>
                        <li>Database Design & Optimization</li>
                        <li>DevOps & CI/CD Implementation</li>
                    </ul>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Get Started</a>
                </div>
                <div class="service-detail-image">
                    <div class="image-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-detail alternate" id="web-mobile">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-image">
                    <div class="image-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="service-detail-text">
                    <div class="service-badge">Web & Mobile</div>
                    <h2>Web & Mobile Applications</h2>
                    <p>Beautiful, responsive applications that work seamlessly across all devices. We build modern web apps and native mobile experiences that users love.</p>
                    <ul class="service-features">
                        <li>Progressive Web Apps (PWA)</li>
                        <li>Native iOS & Android Development</li>
                        <li>Cross-Platform Mobile Apps</li>
                        <li>E-commerce Solutions</li>
                        <li>UI/UX Design & Prototyping</li>
                    </ul>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="service-detail" id="ai">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-text">
                    <div class="service-badge">Artificial Intelligence</div>
                    <h2>AI & Machine Learning Solutions</h2>
                    <p>Harness the power of artificial intelligence to automate processes, gain insights, and create intelligent applications that learn and adapt.</p>
                    <ul class="service-features">
                        <li>Custom AI Model Development</li>
                        <li>Natural Language Processing (NLP)</li>
                        <li>Computer Vision & Image Recognition</li>
                        <li>Predictive Analytics & Forecasting</li>
                        <li>AI Integration & Consulting</li>
                    </ul>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Get Started</a>
                </div>
                <div class="service-detail-image">
                    <div class="image-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-detail alternate" id="cloud">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-image">
                    <div class="image-placeholder">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                </div>
                <div class="service-detail-text">
                    <div class="service-badge">Cloud Services</div>
                    <h2>Cloud Infrastructure & Migration</h2>
                    <p>Modernize your infrastructure with cloud solutions that offer scalability, reliability, and cost-effectiveness. We handle everything from strategy to implementation.</p>
                    <ul class="service-features">
                        <li>Cloud Migration & Strategy</li>
                        <li>AWS, Azure & Google Cloud Setup</li>
                        <li>Serverless Architecture</li>
                        <li>Container Orchestration (Kubernetes)</li>
                        <li>Cloud Security & Compliance</li>
                    </ul>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Need a Custom Solution?</h2>
                <p>We'd love to discuss your specific requirements and how we can help.</p>
                <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Contact Us Today</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
