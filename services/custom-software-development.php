<?php
include("../config.php");
$page_title = "Custom Software Development Services - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>

    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">
                <div class="service-category">Development</div>
                <h1>Custom Software Development</h1>
                <p class="service-hero-description">Build tailored software solutions that perfectly match your business needs and drive digital transformation</p>
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
                    <h2>Transform Your Business with Custom Software</h2>
                    <p>At AlphonicAI, we specialize in creating bespoke software solutions that address your unique business challenges. Our custom software development services help you automate processes, improve efficiency, and gain a competitive edge in your industry.</p>

                    <h3>What is Custom Software Development?</h3>
                    <p>Custom software development involves creating applications specifically designed for your organization's needs, rather than using off-the-shelf solutions. This approach ensures that every feature aligns with your business processes and goals.</p>

                    <h3>Our Custom Software Solutions</h3>
                    <ul>
                        <li><strong>Business Process Automation:</strong> Streamline workflows and eliminate repetitive tasks</li>
                        <li><strong>Custom CRM Systems:</strong> Manage customer relationships effectively</li>
                        <li><strong>Inventory Management:</strong> Track and optimize your stock levels</li>
                        <li><strong>HR Management Systems:</strong> Simplify employee management and payroll</li>
                        <li><strong>Project Management Tools:</strong> Coordinate teams and track progress</li>
                        <li><strong>Financial Software:</strong> Accounting, billing, and financial reporting</li>
                        <li><strong>Custom Dashboards:</strong> Visualize your business metrics in real-time</li>
                        <li><strong>Integration Solutions:</strong> Connect your existing systems seamlessly</li>
                    </ul>

                    <h3>Why Choose Custom Software?</h3>
                    <p>Off-the-shelf software often requires you to adapt your processes to fit the software. Custom development does the opposite - we build software that fits your exact needs, providing better ROI and user adoption.</p>
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
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div class="quick-info-content">
                                <h4>Team Size</h4>
                                <p>4-8 experts</p>
                            </div>
                        </div>
                        <div class="quick-info-item">
                            <div class="quick-info-icon">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div class="quick-info-content">
                                <h4>Support</h4>
                                <p>12 months free</p>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                        <h3 style="color: white;">Ready to Start?</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Let's discuss your custom software needs</p>
                        <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-stack">
        <div class="container">
            <div class="section-header">
                <h2>Technologies We Use</h2>
                <p>Industry-leading tools and frameworks</p>
            </div>
            <div class="tech-grid">
                <div class="tech-item">
                    <div class="tech-icon">💻</div>
                    <h4>Python</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">☕</div>
                    <h4>Java</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🟦</div>
                    <h4>C#/.NET</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">📱</div>
                    <h4>Node.js</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🐘</div>
                    <h4>PHP</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🎯</div>
                    <h4>React</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">🅰️</div>
                    <h4>Angular</h4>
                </div>
                <div class="tech-item">
                    <div class="tech-icon">💚</div>
                    <h4>Vue.js</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Development Process</h2>
                <p>Proven methodology for successful delivery</p>
            </div>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="process-number">1</div>
                    <div class="process-content">
                        <h3>Discovery & Requirements</h3>
                        <p>We analyze your business needs, goals, and challenges to create a comprehensive project scope.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">2</div>
                    <div class="process-content">
                        <h3>Design & Prototyping</h3>
                        <p>Our team creates wireframes and prototypes to visualize the solution before development begins.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">3</div>
                    <div class="process-content">
                        <h3>Development & Testing</h3>
                        <p>Agile development with continuous testing ensures quality at every stage.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">4</div>
                    <div class="process-content">
                        <h3>Deployment & Training</h3>
                        <p>Smooth launch with comprehensive user training and documentation.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="process-number">5</div>
                    <div class="process-content">
                        <h3>Support & Maintenance</h3>
                        <p>Ongoing support to ensure your software evolves with your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2>Benefits of Custom Software</h2>
                <p>Why businesses choose custom development</p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3>Perfect Fit</h3>
                    <p>Software designed specifically for your workflows and business processes.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Cost Effective</h3>
                    <p>No licensing fees, only pay for what you need, better long-term ROI.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3>Scalability</h3>
                    <p>Easily add features and scale as your business grows.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <h3>Enhanced Security</h3>
                    <p>Full control over your data and security measures.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3>Integration</h3>
                    <p>Seamless integration with your existing systems and tools.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                    <h3>Competitive Edge</h3>
                    <p>Unique features that set you apart from competitors.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Build Your Custom Software?</h2>
                <p>Let's turn your vision into reality with a tailored solution</p>
                <a href="<?=_APPLICATION_URL;?>contact.php" class="btn btn-primary btn-large">Get Started Today</a>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
