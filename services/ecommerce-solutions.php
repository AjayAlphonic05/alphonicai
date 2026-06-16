<?php
include("../config.php");
$page_title = "E-commerce Solutions - Online Store Development - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Development</div>
            <h1>E-commerce Solutions</h1>
            <p class="service-hero-description">Launch your online store with powerful e-commerce platforms that drive sales and growth</p>
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
                <h2>Complete E-commerce Development</h2>
                <p>Build a profitable online business with our comprehensive e-commerce solutions. From custom stores to marketplace platforms, we deliver solutions that convert visitors into customers.</p>
                <h3>Our E-commerce Services</h3>
                <ul>
                    <li><strong>Custom Online Stores:</strong> Tailored shopping experiences</li>
                    <li><strong>Multi-vendor Marketplaces:</strong> Connect multiple sellers and buyers</li>
                    <li><strong>B2B E-commerce:</strong> Wholesale and bulk ordering platforms</li>
                    <li><strong>Payment Gateway Integration:</strong> Stripe, PayPal, Razorpay, and more</li>
                    <li><strong>Inventory Management:</strong> Real-time stock tracking and alerts</li>
                    <li><strong>Shopping Cart Development:</strong> Smooth checkout experiences</li>
                    <li><strong>Product Management:</strong> Easy catalog and pricing updates</li>
                    <li><strong>Order Management System:</strong> Track orders from purchase to delivery</li>
                    <li><strong>Customer Portal:</strong> Account management and order history</li>
                    <li><strong>Analytics Dashboard:</strong> Sales reports and customer insights</li>
                </ul>
                <h3>Platform Options</h3>
                <p>WooCommerce, Shopify, Magento, or custom-built solutions - we recommend the best platform for your business size and goals.</p>
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
                            <p>3-5 months</p>
                        </div>
                    </div>
                    <div class="quick-info-item">
                        <div class="quick-info-icon">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <div class="quick-info-content">
                            <h4>Features</h4>
                            <p>Full e-commerce</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar-card" style="background: var(--gradient-3); border: none;">
                    <h3 style="color: white;">Launch Your Store</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Start selling online today</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tech-stack">
    <div class="container">
        <div class="section-header">
            <h2>E-commerce Platforms</h2>
            <p>Proven technologies</p>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><div class="tech-icon">🛒</div><h4>WooCommerce</h4></div>
            <div class="tech-item"><div class="tech-icon">🛍️</div><h4>Shopify</h4></div>
            <div class="tech-item"><div class="tech-icon">🎯</div><h4>Magento</h4></div>
            <div class="tech-item"><div class="tech-icon">💳</div><h4>Stripe</h4></div>
            <div class="tech-item"><div class="tech-icon">💰</div><h4>PayPal</h4></div>
            <div class="tech-item"><div class="tech-icon">⚛️</div><h4>React</h4></div>
            <div class="tech-item"><div class="tech-icon">📱</div><h4>Node.js</h4></div>
            <div class="tech-item"><div class="tech-icon">🗃️</div><h4>MongoDB</h4></div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Sell Online?</h2>
            <p>Build your e-commerce empire with our expert solutions</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Your Store</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
