<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=_APPLICATION_URL;?>images/favicon.png" rel="icon" />
    <title><?php echo isset($page_title) ? $page_title : 'AlphonicAI - Innovative Software & AI Solutions'; ?></title>
    <link rel="stylesheet" href="<?=_APPLICATION_URL;?>css/styles.css">
    <link rel="stylesheet" href="<?=_APPLICATION_URL;?>css/service-page.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                   <!-- <a href="<?=_APPLICATION_URL;?>"><span class="logo-text">Alphonic<span class="ai-text">AI</span></span></a> -->
                   <a href="<?=_APPLICATION_URL;?>">
                <img src="<?=_APPLICATION_URL;?>images/AlphonicAI_Logo.png" alt="AlphonicAI Logo" class="logo-image" />
                   </a>
                </div>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="<?=_APPLICATION_URL;?>" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li class="has-mega-menu">
                        <a href="<?=_APPLICATION_URL;?>services" class="<?php echo ($current_page == 'services') ? 'active' : ''; ?>">Services</a>
                        <div class="mega-menu">
                            <div class="container">
                                <div class="mega-menu-content">
                                    <div class="mega-menu-column">
                                        <h4>Development</h4>
                                        <a href="<?=_APPLICATION_URL;?>services/custom-software-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Custom Software</span>
                                                <small>Tailored solutions</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/web-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Web Development</span>
                                                <small>Modern web apps</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/mobile-app-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Mobile Apps</span>
                                                <small>iOS & Android</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/api-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>API Development</span>
                                                <small>RESTful & GraphQL</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/ecommerce-solutions" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>E-commerce</span>
                                                <small>Online stores</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4>AI & Data</h4>
                                        <a href="<?=_APPLICATION_URL;?>services/ai-ml-solutions" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>AI & ML Solutions</span>
                                                <small>Intelligent systems</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/chatbot-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Chatbot Development</span>
                                                <small>AI assistants</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/data-analytics" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Data Analytics</span>
                                                <small>Business insights</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/computer-vision" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Computer Vision</span>
                                                <small>Image recognition</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/nlp-solutions" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>NLP Solutions</span>
                                                <small>Language processing</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4>Cloud & DevOps</h4>
                                        <a href="<?=_APPLICATION_URL;?>services/cloud-solutions" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Cloud Solutions</span>
                                                <small>AWS, Azure, GCP</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/devops-services" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>DevOps Services</span>
                                                <small>CI/CD pipelines</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/cloud-migration" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Cloud Migration</span>
                                                <small>Seamless transfer</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/microservices" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Microservices</span>
                                                <small>Scalable architecture</small>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4>Enterprise</h4>
                                        <a href="<?=_APPLICATION_URL;?>services/enterprise-software" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Enterprise Software</span>
                                                <small>Large-scale systems</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/saas-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>SaaS Development</span>
                                                <small>Cloud applications</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/blockchain-development" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Blockchain</span>
                                                <small>Web3 solutions</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/ui-ux-design" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>UI/UX Design</span>
                                                <small>User experience</small>
                                            </div>
                                        </a>
                                        <a href="<?=_APPLICATION_URL;?>services/maintenance-support" class="mega-menu-link">
                                            <div class="mega-menu-icon">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                            </div>
                                            <div class="mega-menu-text">
                                                <span>Maintenance & Support</span>
                                                <small>24/7 assistance</small>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?=_APPLICATION_URL;?>about" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">About</a></li>
                    <!-- <li><a href="<?=_APPLICATION_URL;?>blog" class="<?php echo ($current_page == 'blog') ? 'active' : ''; ?>">Blog</a></li> -->
                    <li><a href="<?=_APPLICATION_URL;?>contact" class="cta-btn <?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
