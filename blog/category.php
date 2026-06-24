<?php
include("../config.php");
$page_title = "Blog - AlphonicAI Insights";
$current_page = "blog";
include '../includes/header.php';
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
                   
                    <!-- <div class="blog-section-heading">
                        <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-secondary blog-subscribe-btn">Discuss a Topic</a>
                    </div> -->
                  

                    <div class="blog-post-grid">
                        <article class="blog-post-card" data-categories="mobile-apps ai">
                            <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                <div class="blog-card-visual blog-visual-health">
                                    <img src="<?=_APPLICATION_URL;?>images/blog/healthcare-app-planning.avif" alt="Healthcare app planning with medical technology" loading="lazy">
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <!-- <span>Mobile App</span> -->
                                        <span>Jan 04, 2026</span>
                                    </div>
                                    <h3>How to Develop a Doctor Appointment Booking App Like Zocdoc and Practo</h3>
                                    <p>Understand patient flows, provider scheduling, reminders, payments, and compliance-aware product planning.</p>
                                    <span class="blog-read-more">Read Article</span>
                                </div>
                            </a>
                        </article>

                        <article class="blog-post-card" data-categories="mobile-apps web-development">
                            <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                <div class="blog-card-visual blog-visual-fintech">
                                    <img src="<?=_APPLICATION_URL;?>images/blog/fintech-dashboard.avif" alt="Trading chart and fintech dashboard" loading="lazy">
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <!-- <span>Fintech</span> -->
                                        <span>Oct 29, 2026</span>
                                    </div>
                                    <h3>Step-by-Step Tutorial on Making Your Own Trading App</h3>
                                    <p>Explore portfolios, watchlists, KYC, market data, security, and infrastructure choices for trading platforms.</p>
                                    <span class="blog-read-more">Read Article</span>
                                </div>
                            </a>
                        </article>

                        <article class="blog-post-card" data-categories="web-development mobile-apps">
                            <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                <div class="blog-card-visual blog-visual-react">
                                    <img src="<?=_APPLICATION_URL;?>images/blog/react-native-development.avif" alt="Software development code on screen" loading="lazy">
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <!-- <span>Engineering</span> -->
                                        <span>May 12, 2026</span>
                                    </div>
                                    <h3>The Pros and Cons of React Native for Mobile App Development</h3>
                                    <p>Compare delivery speed, native performance, reusable code, and maintainability before choosing your stack.</p>
                                    <span class="blog-read-more">Read Article</span>
                                </div>
                            </a>
                        </article>

                        <article class="blog-post-card" data-categories="cloud devops">
                            <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                <div class="blog-card-visual blog-visual-cloud">
                                    <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Cloud server infrastructure" loading="lazy">
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <!-- <span>Cloud</span> -->
                                        <span>Apr 18, 2026</span>
                                    </div>
                                    <h3>Cloud Migration Planning for High-Growth Digital Products</h3>
                                    <p>A practical checklist for reducing downtime, improving observability, and modernizing legacy systems.</p>
                                    <span class="blog-read-more">Read Article</span>
                                </div>
                            </a>
                        </article>

                        <article class="blog-post-card" data-categories="cloud devops">
                            <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                                <div class="blog-card-visual blog-visual-cloud">
                                    <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Cloud server infrastructure" loading="lazy">
                                </div>
                                <div class="blog-card-body">
                                    <div class="blog-meta">
                                        <!-- <span>Cloud</span> -->
                                        <span>Apr 18, 2026</span>
                                    </div>
                                    <h3>Cloud Migration Planning for High-Growth Digital Products</h3>
                                    <p>A practical checklist for reducing downtime, improving observability, and modernizing legacy systems.</p>
                                    <span class="blog-read-more">Read Article</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    <p class="blog-empty-state">No articles found in this category.</p>

                    <nav class="blog-pagination" aria-label="Blog pagination">
                        <a href="#" class="blog-page-control is-disabled" data-page-action="prev" aria-label="Previous page">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                        <a href="#" class="blog-page-number active" data-page="1">1</a>
                        <a href="#" class="blog-page-number" data-page="2">2</a>
                        <a href="#" class="blog-page-control" data-page-action="next" aria-label="Next page">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </nav>
                </main>

                
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
