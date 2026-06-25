<?php
include("../config.php");
$page_title = "Web Development - AlphonicAI Insights";
$current_page = "blog";
include '../includes/header.php';
?>

    <section class="page-header blog-page-header">
        <div class="container">
            <span class="blog-eyebrow">AlphonicAI Insights</span>
            <h1>Web Development</h1>
            <p>Practical engineering perspectives on building fast, reliable, and scalable web products.</p>
        </div>
    </section>

    <section class="blog-main-section category-listing-section">
        <div class="container">
            <div class="blog-section-heading category-listing-heading">
                <div>
                    <span class="service-badge">Web Development</span>
                    <h2>Articles in This Category</h2>
                </div>
                <a href="<?=_APPLICATION_URL;?>blog" class="btn btn-secondary">Back to Blog</a>
            </div>

            <div class="blog-post-grid category-post-grid" data-posts-per-page="3">

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
                            <h3>Step-by-Step Tutorial on Making Your Own Trading App</h3>
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
                            <h3>The Pros and Cons of React Native for Mobile App Development</h3>
                            <p>Compare delivery speed, native performance, reusable code, and maintainability before choosing your stack.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-cloud">
                            <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Cloud server infrastructure" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Frontend</span>
                                <span>Feb 08, 2026</span>
                            </div>
                            <h3>Building Accessible Forms That Don't Frustrate Users</h3>
                            <p>Label associations, error states, focus order, and keyboard support that make forms usable for everyone.</p>
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
                                <span>Performance</span>
                                <span>Feb 22, 2026</span>
                            </div>
                            <h3>A Practical Guide to Core Web Vitals in 2026</h3>
                            <p>What LCP, INP, and CLS actually measure, and the fixes that move the needle fastest on real sites.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-health">
                            <img src="<?=_APPLICATION_URL;?>images/blog/healthcare-app-planning.avif" alt="Healthcare app planning with medical technology" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Architecture</span>
                                <span>Mar 03, 2026</span>
                            </div>
                            <h3>Monolith vs Microservices for Early-Stage Products</h3>
                            <p>Why most teams should stay boring for longer, and the signals that tell you it's time to split.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-fintech">
                            <img src="<?=_APPLICATION_URL;?>images/blog/fintech-dashboard.avif" alt="API integration and dashboard interface" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>API Design</span>
                                <span>Mar 17, 2026</span>
                            </div>
                            <h3>REST vs GraphQL: Choosing the Right API Style</h3>
                            <p>Trade-offs in caching, tooling, versioning, and team familiarity that should drive your decision.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-react">
                            <img src="<?=_APPLICATION_URL;?>images/blog/react-native-development.avif" alt="Frontend testing and code review" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Testing</span>
                                <span>Apr 02, 2026</span>
                            </div>
                            <h3>Setting Up a Frontend Testing Strategy That Actually Gets Used</h3>
                            <p>Balancing unit, integration, and end-to-end tests so coverage grows without slowing the team down.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-cloud">
                            <img src="<?=_APPLICATION_URL;?>images/blog/cloud-server-infrastructure.avif" alt="Server-side rendering pipeline" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Rendering</span>
                                <span>Apr 21, 2026</span>
                            </div>
                            <h3>SSR, SSG, or CSR: Picking a Rendering Strategy for 2026</h3>
                            <p>How content type, SEO needs, and team capacity should shape your rendering approach.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-ai">
                            <img src="<?=_APPLICATION_URL;?>images/blog/ai-workflow-automation.avif" alt="Design system component library" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Design Systems</span>
                                <span>May 30, 2026</span>
                            </div>
                            <h3>Building a Design System Engineers Actually Want to Use</h3>
                            <p>Token structure, component ownership, and documentation habits that keep a system alive past launch.</p>
                            <span class="blog-read-more">Read Article</span>
                        </div>
                    </a>
                </article>

                <article class="blog-post-card">
                    <a href="<?=_APPLICATION_URL;?>blog-detail" class="blog-card-link">
                        <div class="blog-card-visual blog-visual-health">
                            <img src="<?=_APPLICATION_URL;?>images/blog/healthcare-app-planning.avif" alt="Security audit and code scanning" loading="lazy">
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-meta">
                                <span>Security</span>
                                <span>Jun 11, 2026</span>
                            </div>
                            <h3>Common Web Security Mistakes Teams Still Make in 2026</h3>
                            <p>From stale dependencies to loose CORS policies, the recurring gaps that show up in real audits.</p>
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
                <span class="blog-page-numbers"></span>
                <a href="#" class="blog-page-control" data-page-action="next" aria-label="Next page">
                    <span aria-hidden="true">&gt;</span>
                </a>
            </nav>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>