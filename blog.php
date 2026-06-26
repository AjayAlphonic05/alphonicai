<?php
include("config.php");
$page_title = "Blog - AlphonicAI Insights";
$current_page = "blog";
include 'includes/header.php';
?>

    <section class="page-header blog-page-header">
        <div class="container">
            <span class="blog-eyebrow">AlphonicAI Insights</span>
            <h1>Ideas for Building Smarter Digital Products</h1>
            <p>Explore practical perspectives on AI, product engineering, app development, cloud, and scalable software systems.</p>
        </div>
    </section>

    <section class="blog-main-section">
        <div class="container">
            <div class="blog-layout">
                <main class="blog-content">
                    <div class="blog-section-heading">
                        <div>
                            <span class="service-badge">Latest Articles</span>
                            <h2>Fresh Thinking From Our Team</h2>
                        </div>
                    </div>

                    <div class="blog-category-sections">

                        <div class="blog-category-tabs" role="tablist" aria-label="Blog categories">
                            <button type="button" class="blog-category-tab" data-category-tab="ai">AI</button>
                            <button type="button" class="blog-category-tab" data-category-tab="web-development">Web Development</button>
                            <button type="button" class="blog-category-tab" data-category-tab="mobile-apps">Mobile Apps</button>
                            <button type="button" class="blog-category-tab" data-category-tab="cloud">Cloud</button>
                            <button type="button" class="blog-category-tab" data-category-tab="devops">DevOps</button>
                        </div>

                        <!-- AI -->
                        <section class="blog-category-section" data-category="ai" aria-labelledby="blog-category-ai">
                          

                            <div class="blog-post-grid blog-post-grid-compact">
                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-health">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/healthcare-app-planning.avif" alt="Healthcare app planning with medical technology" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Mobile App</span>
                                                <span>Jan 04, 2026</span>
                                            </div>
                                            <h4>How to Develop a Doctor Appointment Booking App Like Zocdoc and Practo</h4>
                                            <p>Understand patient flows, provider scheduling, reminders, payments, and compliance-aware product planning.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>

                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-ai">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/ai-workflow-automation.avif" alt="Artificial intelligence digital interface" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Artificial Intelligence</span>
                                                <span>Mar 21, 2026</span>
                                            </div>
                                            <h4>Where AI Workflow Automation Creates Immediate ROI</h4>
                                            <p>Identify the internal workflows where AI agents, document intelligence, and smart routing save real team hours.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="blog-category-heading">
                                <a href="<?=_APPLICATION_URL;?>blog/category" class="btn btn-secondary blog-view-all-btn">View All</a>
                            </div>
                        </section>

                        <!-- Web Development -->
                        <section class="blog-category-section" data-category="web-development" aria-labelledby="blog-category-web-development">
                           

                            <div class="blog-post-grid blog-post-grid-compact">
                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-fintech">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/fintech-dashboard.avif" alt="Trading chart and fintech dashboard" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Fintech</span>
                                                <span>Oct 29, 2026</span>
                                            </div>
                                            <h4>Step-by-Step Tutorial on Making Your Own Trading App</h4>
                                            <p>Explore portfolios, watchlists, KYC, market data, security, and infrastructure choices for trading platforms.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>

                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-react">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/react-native-development.avif" alt="Software development code on screen" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Engineering</span>
                                                <span>May 12, 2026</span>
                                            </div>
                                            <h4>The Pros and Cons of React Native for Mobile App Development</h4>
                                            <p>Compare delivery speed, native performance, reusable code, and maintainability before choosing your stack.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="blog-category-heading">
                                <a href="<?=_APPLICATION_URL;?>blog/category" class="btn btn-secondary blog-view-all-btn">View All</a>
                            </div>
                        </section>

                        <!-- Mobile Apps -->
                        <section class="blog-category-section" data-category="mobile-apps" aria-labelledby="blog-category-mobile-apps">
                           

                            <div class="blog-post-grid blog-post-grid-compact">
                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-health">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/healthcare-app-planning.avif" alt="Healthcare app planning with medical technology" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Mobile App</span>
                                                <span>Jan 04, 2026</span>
                                            </div>
                                            <h4>How to Develop a Doctor Appointment Booking App Like Zocdoc and Practo</h4>
                                            <p>Understand patient flows, provider scheduling, reminders, payments, and compliance-aware product planning.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>

                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-fintech">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/fintech-dashboard.avif" alt="Trading chart and fintech dashboard" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Fintech</span>
                                                <span>Oct 29, 2026</span>
                                            </div>
                                            <h4>Step-by-Step Tutorial on Making Your Own Trading App</h4>
                                            <p>Explore portfolios, watchlists, KYC, market data, security, and infrastructure choices for trading platforms.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="blog-category-heading">
                                <a href="<?=_APPLICATION_URL;?>blog/category" class="btn btn-secondary blog-view-all-btn">View All</a>
                            </div>
                        </section>

                        <!-- Cloud -->
                        <section class="blog-category-section" data-category="cloud" aria-labelledby="blog-category-cloud">
                            

                            <div class="blog-post-grid blog-post-grid-compact">
                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-cloud">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Cloud server infrastructure" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Cloud</span>
                                                <span>Apr 18, 2026</span>
                                            </div>
                                            <h4>Cloud Migration Planning for High-Growth Digital Products</h4>
                                            <p>A practical checklist for reducing downtime, improving observability, and modernizing legacy systems.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="blog-category-heading">
                                <a href="<?=_APPLICATION_URL;?>blog/category" class="btn btn-secondary blog-view-all-btn">View All</a>
                            </div>
                        </section>

                        <!-- DevOps -->
                        <section class="blog-category-section" data-category="devops" aria-labelledby="blog-category-devops">
                           

                            <div class="blog-post-grid blog-post-grid-compact">
                                <article class="blog-post-card">
                                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                        <div class="blog-card-visual blog-visual-cloud">
                                            <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Cloud server infrastructure" loading="lazy">
                                        </div>
                                        <div class="blog-card-body">
                                            <div class="blog-meta">
                                                <span>Cloud</span>
                                                <span>Apr 18, 2026</span>
                                            </div>
                                            <h4>Cloud Migration Planning for High-Growth Digital Products</h4>
                                            <p>A practical checklist for reducing downtime, improving observability, and modernizing legacy systems.</p>
                                            <span class="blog-read-more">Read Article</span>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="blog-category-heading">
                                <a href="<?=_APPLICATION_URL;?>blog/category" class="btn btn-secondary blog-view-all-btn">View All</a>
                            </div>
                        </section>

                    </div>
                </main>

                <aside class="blog-sidebar">
                    <div class="blog-sidebar-card">
                        <h3>Popular Topics</h3>
                        <div class="blog-topic-cloud">
                            <a href="<?=_APPLICATION_URL;?>blog/category">AI</a>
                            <a href="<?=_APPLICATION_URL;?>blog/category">Web Development</a>
                            <a href="<?=_APPLICATION_URL;?>blog/category">Mobile Apps</a>
                            <a href="<?=_APPLICATION_URL;?>blog/category">Cloud</a>
                            <a href="<?=_APPLICATION_URL;?>blog/category">DevOps</a>
                        </div>
                    </div>

                    <div class="blog-sidebar-card blog-newsletter-card">
                        <span class="service-badge">Stay Updated</span>
                        <h3>Need a Product Roadmap?</h3>
                        <p>Share your idea with AlphonicAI and get a practical technical direction for your next build.</p>
                        <button type="button" class="btn btn-primary" data-modal-open="enquiryModal">Start a Conversation</button>
                    </div>
                </aside>
            </div>
        </div>
    </section>



<?php include 'includes/footer.php'; ?>