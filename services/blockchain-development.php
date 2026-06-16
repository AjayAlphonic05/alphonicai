<?php
include("../config.php");
$page_title = "Blockchain Development - Web3 Solutions - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>
<section class="service-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-category">Enterprise</div>
            <h1>Blockchain Development</h1>
            <p class="service-hero-description">Build decentralized applications and smart contracts on blockchain platforms</p>
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
                <h2>Web3 & Blockchain Solutions</h2>
                <p>Enter the decentralized future with our blockchain development services. From smart contracts to DeFi platforms, we build secure and transparent blockchain solutions.</p>
                <h3>Our Blockchain Services</h3>
                <ul>
                    <li><strong>Smart Contract Development:</strong> Solidity, Rust contracts</li>
                    <li><strong>DApp Development:</strong> Decentralized applications</li>
                    <li><strong>NFT Platforms:</strong> Marketplace and minting</li>
                    <li><strong>DeFi Solutions:</strong> Decentralized finance apps</li>
                    <li><strong>Token Development:</strong> ERC-20, ERC-721 tokens</li>
                    <li><strong>Blockchain Integration:</strong> Connect to existing systems</li>
                    <li><strong>Wallet Integration:</strong> MetaMask, WalletConnect</li>
                    <li><strong>Security Audits:</strong> Smart contract testing</li>
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
                    <h3 style="color: white;">Go Web3</h3>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Build on blockchain</p>
                    <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary" style="width: 100%; text-align: center; background: white; color: var(--primary-color);">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for Blockchain?</h2>
            <p>Build decentralized solutions</p>
            <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Start Blockchain Project</a>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>
