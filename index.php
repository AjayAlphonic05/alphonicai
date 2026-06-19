<?php
include("config.php");
$page_title = "AlphonicAI - Innovative Software & AI Solutions";
$current_page = "home";
include 'includes/header.php';
?>

     <section class="hero">
        <div class="hero-background"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Transform Your Business with <br/> AI-Powered Solutions</h1>
                <p class="hero-subtitle">We deliver cutting-edge software development, intelligent AI solutions, and seamless cloud services to propel your business into the future.</p>
                <div class="hero-buttons">
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Get Started</a>
                    <a href="<?=_APPLICATION_URL;?>services" class="btn btn-secondary">Our Services</a>
                </div>
            </div>
        </div>
        <div class="hero-wave"></div>
    </section>

    <section class="services-overview">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Comprehensive solutions tailored to your needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3>Software Development</h3>
                    <p>Custom software solutions built with modern technologies to solve your unique business challenges.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3>Web & Mobile Apps</h3>
                    <p>Responsive web applications and native mobile apps that deliver exceptional user experiences.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3>AI Solutions</h3>
                    <p>Intelligent automation and machine learning solutions that drive innovation and efficiency.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3>Cloud Services</h3>
                    <p>Scalable cloud infrastructure and migration services for enhanced performance and reliability.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose AlphonicAI</h2>
                <p>Excellence in every project we deliver</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-number">01</div>
                    <h3>Expert Team</h3>
                    <p>Highly skilled developers and AI specialists with years of industry experience.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-number">02</div>
                    <h3>Cutting-Edge Technology</h3>
                    <p>We use the latest tools and frameworks to build future-proof solutions.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-number">03</div>
                    <h3>Client-Focused</h3>
                    <p>Your success is our priority. We work closely with you every step of the way.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-number">04</div>
                    <h3>Proven Track Record</h3>
                    <p>Successful projects delivered across various industries worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Business?</h2>
                <p>Let's build something amazing together. Contact us today for a free consultation.</p>
                <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Your Project</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
