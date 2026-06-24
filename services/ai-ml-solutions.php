<?php
include("../config.php");
$page_title = "AI & Machine Learning Solutions - AlphonicAI";
$current_page = "services";
include '../includes/header.php';
?>

    <!-- <link rel="stylesheet" href="<?=_APPLICATION_URL;?>assets/css/aiml-extend.css"> -->

    <section class="page-header">
        <div class="container">
            <div class="page-eyebrow"><span class="dot"></span> Emerging Technologies</div>
            <h1>AI &amp; Machine Learning <span class="gradient-text">Solutions</span></h1>
            <p>AI isn't magic - it's math and data, applied correctly. We build production machine learning systems that predict churn, catch fraud, and recommend better than your sales team ever could.</p>
            <div class="hero-buttons" style="margin-top: 2.5rem;">
                <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary">Schedule a Call</a>
                <a href="#solutions" class="btn btn-secondary">Explore Solutions</a>
            </div>
            <div class="hero-stat-strip">
                <div class="strip-item">
                    <div class="strip-number">25%</div>
                    <div class="strip-label">Avg. Sales Lift</div>
                </div>
                <div class="strip-divider"></div>
                <div class="strip-item">
                    <div class="strip-number">95%</div>
                    <div class="strip-label">Fraud Caught</div>
                </div>
                <div class="strip-divider"></div>
                <div class="strip-item">
                    <div class="strip-number">92%</div>
                    <div class="strip-label">Forecast Accuracy</div>
                </div>
                <div class="strip-divider"></div>
                <div class="strip-item">
                    <div class="strip-number">700+</div>
                    <div class="strip-label">Projects Delivered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ INTRO ============ -->
    <section class="about-story" id="solutions" style="padding: 5rem 0 2rem;">
        <div class="container">
            <div class="about-content" style="gap: 2rem;">
                <div class="about-text">
                    <p>Most companies have data but don't know how to extract insights from it. They want to leverage AI but can't tell what's actually possible versus what's hype. We close that gap - we identify where machine learning genuinely makes sense, build custom models trained on your data, and deploy them into production systems your team can actually use.</p>
                    <p>Not research projects. Production systems with measurable ROI.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 1: PREDICTIVE ANALYTICS ============ -->
    <section class="service-detail">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-text">
                    <div class="service-badge">Predictive Analytics</div>
                    <h2>Forecasting &amp; Predictive Analytics</h2>
                    <p>Predict future outcomes from historical data - who's likely to churn, what you'll need to stock, and where risk is hiding before it becomes a loss.</p>
                    <div class="use-case-chips">
                        <span>Churn Prediction</span>
                        <span>Demand Forecasting</span>
                        <span>Revenue Prediction</span>
                        <span>Predictive Maintenance</span>
                        <span>Credit Risk Scoring</span>
                        <span>Customer LTV</span>
                    </div>
                    <ul class="service-features">
                        <li>Customer churn prediction - know who's likely to leave before they do</li>
                        <li>Demand forecasting for smarter inventory optimization</li>
                        <li>Sales forecasting and revenue prediction models</li>
                        <li>Equipment failure prediction for predictive maintenance</li>
                    </ul>
                </div>
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="pa-line" x1="0" y1="1" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#003D5C"/>
                                    <stop offset="100%" stop-color="#00B8D4"/>
                                </linearGradient>
                                <linearGradient id="pa-fill" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#00B8D4" stop-opacity="0.35"/>
                                    <stop offset="100%" stop-color="#00B8D4" stop-opacity="0"/>
                                </linearGradient>
                            </defs>
                            <!-- grid -->
                            <g stroke="rgba(255,255,255,0.06)" stroke-width="1">
                                <line x1="60" y1="80" x2="60" y2="360"/>
                                <line x1="60" y1="360" x2="400" y2="360"/>
                                <line x1="60" y1="290" x2="400" y2="290"/>
                                <line x1="60" y1="220" x2="400" y2="220"/>
                                <line x1="60" y1="150" x2="400" y2="150"/>
                            </g>
                            <!-- historical solid line -->
                            <path d="M60,300 L110,280 L160,295 L210,250 L260,230" fill="none" stroke="url(#pa-line)" stroke-width="4" stroke-linecap="round"/>
                            <!-- forecast dashed continuation -->
                            <path d="M260,230 L310,195 L360,170 L400,140" fill="none" stroke="#00E5FF" stroke-width="4" stroke-linecap="round" stroke-dasharray="2 10"/>
                            <!-- confidence band -->
                            <path d="M260,230 L310,170 L360,135 L400,95 L400,185 L360,205 L310,220 L260,230 Z" fill="url(#pa-fill)" opacity="0.6"/>
                            <!-- data points -->
                            <circle cx="60" cy="300" r="5" fill="#00B8D4"/>
                            <circle cx="110" cy="280" r="5" fill="#00B8D4"/>
                            <circle cx="160" cy="295" r="5" fill="#00B8D4"/>
                            <circle cx="210" cy="250" r="5" fill="#00B8D4"/>
                            <circle cx="260" cy="230" r="6" fill="#00E5FF" stroke="#0a0a0f" stroke-width="2"/>
                            <circle cx="310" cy="195" r="4" fill="#00E5FF" opacity="0.8"/>
                            <circle cx="360" cy="170" r="4" fill="#00E5FF" opacity="0.8"/>
                            <circle cx="400" cy="140" r="4" fill="#00E5FF" opacity="0.8"/>
                            <!-- "today" marker -->
                            <line x1="260" y1="80" x2="260" y2="360" stroke="#00E5FF" stroke-width="1" stroke-dasharray="3 4" opacity="0.5"/>
                            <text x="260" y="70" fill="#a1a1aa" font-size="11" text-anchor="middle" font-family="Inter, sans-serif">TODAY</text>
                            <text x="400" y="115" fill="#00E5FF" font-size="13" font-weight="700" text-anchor="end" font-family="Inter, sans-serif">92% confidence</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 2: RECOMMENDATION SYSTEMS ============ -->
    <section class="service-detail alternate">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="rec-node" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#003D5C"/>
                                    <stop offset="100%" stop-color="#00B8D4"/>
                                </linearGradient>
                            </defs>
                            <!-- center user node -->
                            <circle cx="230" cy="230" r="34" fill="url(#rec-node)"/>
                            <text x="230" y="235" fill="white" font-size="12" font-weight="700" text-anchor="middle" font-family="Inter, sans-serif">YOU</text>
                            <!-- connecting lines -->
                            <g stroke="rgba(0,184,212,0.35)" stroke-width="2">
                                <line x1="230" y1="230" x2="120" y2="120"/>
                                <line x1="230" y1="230" x2="340" y2="110"/>
                                <line x1="230" y1="230" x2="100" y2="250"/>
                                <line x1="230" y1="230" x2="360" y2="260"/>
                                <line x1="230" y1="230" x2="150" y2="360"/>
                                <line x1="230" y1="230" x2="320" y2="370"/>
                            </g>
                            <!-- recommendation product cards -->
                            <g>
                                <rect x="90" y="85" width="60" height="70" rx="8" fill="#13131a" stroke="#00B8D4" stroke-width="1.5"/>
                                <rect x="98" y="95" width="44" height="30" rx="4" fill="#003D5C"/>
                                <rect x="98" y="132" width="44" height="6" rx="3" fill="#a1a1aa"/>
                                <rect x="98" y="142" width="28" height="6" rx="3" fill="#a1a1aa" opacity="0.6"/>
                            </g>
                            <g>
                                <rect x="312" y="72" width="60" height="70" rx="8" fill="#13131a" stroke="#00B8D4" stroke-width="1.5"/>
                                <rect x="320" y="82" width="44" height="30" rx="4" fill="#006B9E"/>
                                <rect x="320" y="119" width="44" height="6" rx="3" fill="#a1a1aa"/>
                                <rect x="320" y="129" width="28" height="6" rx="3" fill="#a1a1aa" opacity="0.6"/>
                            </g>
                            <g>
                                <rect x="62" y="218" width="60" height="70" rx="8" fill="#13131a" stroke="#00E5FF" stroke-width="2"/>
                                <rect x="70" y="228" width="44" height="30" rx="4" fill="#00B8D4"/>
                                <rect x="70" y="265" width="44" height="6" rx="3" fill="#ffffff"/>
                                <rect x="70" y="275" width="28" height="6" rx="3" fill="#a1a1aa"/>
                                <circle cx="112" cy="222" r="9" fill="#00E5FF"/>
                                <text x="112" y="226" fill="#0a0a0f" font-size="10" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">★</text>
                            </g>
                            <g>
                                <rect x="332" y="232" width="60" height="70" rx="8" fill="#13131a" stroke="#00B8D4" stroke-width="1.5"/>
                                <rect x="340" y="242" width="44" height="30" rx="4" fill="#003D5C"/>
                                <rect x="340" y="279" width="44" height="6" rx="3" fill="#a1a1aa"/>
                                <rect x="340" y="289" width="28" height="6" rx="3" fill="#a1a1aa" opacity="0.6"/>
                            </g>
                            <g>
                                <rect x="118" y="328" width="60" height="70" rx="8" fill="#13131a" stroke="#00B8D4" stroke-width="1.5"/>
                                <rect x="126" y="338" width="44" height="30" rx="4" fill="#006B9E"/>
                                <rect x="126" y="375" width="44" height="6" rx="3" fill="#a1a1aa"/>
                                <rect x="126" y="385" width="28" height="6" rx="3" fill="#a1a1aa" opacity="0.6"/>
                            </g>
                            <g>
                                <rect x="288" y="338" width="60" height="70" rx="8" fill="#13131a" stroke="#00B8D4" stroke-width="1.5"/>
                                <rect x="296" y="348" width="44" height="30" rx="4" fill="#003D5C"/>
                                <rect x="296" y="385" width="44" height="6" rx="3" fill="#a1a1aa"/>
                                <rect x="296" y="395" width="28" height="6" rx="3" fill="#a1a1aa" opacity="0.6"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="service-detail-text">
                    <div class="service-badge">Recommendation Systems</div>
                    <h2>Personalized Recommendation Engines</h2>
                    <p>Surface the right product, article, or action at the right moment. Collaborative filtering and behavioral models that increase engagement without feeling intrusive.</p>
                    <div class="impact-callout">
                        <div class="impact-icon">↑</div>
                        <p><strong>Typical impact:</strong> recommendation engines increase conversion rates by 15–30% and average order value by 10–20%.</p>
                    </div>
                    <ul class="service-features">
                        <li>Product recommendations using collaborative filtering</li>
                        <li>Content recommendations for articles, video, and music</li>
                        <li>Personalized search ranking and next-best-action suggestions</li>
                        <li>Dynamic pricing and bundle recommendations based on behavior</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 3: NLP ============ -->
    <section class="service-detail">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-text">
                    <div class="service-badge">Natural Language Processing</div>
                    <h2>NLP &amp; Language Understanding</h2>
                    <p>Turn unstructured text - reviews, tickets, contracts, conversations - into structured insight your systems can act on automatically.</p>
                    <div class="use-case-chips">
                        <span>Sentiment Analysis</span>
                        <span>Text Classification</span>
                        <span>Entity Recognition</span>
                        <span>Document Summarization</span>
                        <span>Chatbots</span>
                        <span>Contract Analysis</span>
                    </div>
                    <ul class="service-features">
                        <li>Sentiment analysis across customer feedback and social media</li>
                        <li>Text classification, categorization, and named entity recognition</li>
                        <li>Automated document and contract summarization</li>
                        <li>Chatbots and virtual assistants trained on your domain</li>
                    </ul>
                </div>
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="nlp-bar" x1="0" y1="0" x2="1" y2="0">
                                    <stop offset="0%" stop-color="#003D5C"/>
                                    <stop offset="100%" stop-color="#00E5FF"/>
                                </linearGradient>
                            </defs>
                            <!-- chat bubble (input text) -->
                            <rect x="55" y="60" width="270" height="86" rx="16" fill="#13131a" stroke="rgba(0,184,212,0.3)" stroke-width="1.5"/>
                            <rect x="75" y="82" width="200" height="8" rx="4" fill="#a1a1aa"/>
                            <rect x="75" y="100" width="230" height="8" rx="4" fill="#a1a1aa" opacity="0.7"/>
                            <rect x="75" y="118" width="150" height="8" rx="4" fill="#a1a1aa" opacity="0.5"/>
                            <path d="M85,146 L70,168 L105,146 Z" fill="#13131a" stroke="rgba(0,184,212,0.3)" stroke-width="1.5"/>
                            <!-- arrow down to processing -->
                            <path d="M230,160 L230,195" stroke="#00B8D4" stroke-width="2" marker-end="url(#arrow)"/>
                            <defs>
                                <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="5" orient="auto">
                                    <path d="M0,0 L10,5 L0,10 Z" fill="#00B8D4"/>
                                </marker>
                            </defs>
                            <!-- tag/entity extraction output -->
                            <g font-family="Inter, sans-serif" font-size="13" font-weight="700">
                                <rect x="60" y="215" width="92" height="34" rx="17" fill="rgba(0,184,212,0.15)" stroke="#00B8D4" stroke-width="1.5"/>
                                <text x="106" y="237" fill="#00E5FF" text-anchor="middle">PERSON</text>

                                <rect x="166" y="215" width="100" height="34" rx="17" fill="rgba(0,107,158,0.2)" stroke="#006B9E" stroke-width="1.5"/>
                                <text x="216" y="237" fill="#ffffff" text-anchor="middle">PRODUCT</text>

                                <rect x="280" y="215" width="100" height="34" rx="17" fill="rgba(0,184,212,0.15)" stroke="#00B8D4" stroke-width="1.5"/>
                                <text x="330" y="237" fill="#00E5FF" text-anchor="middle">DATE</text>
                            </g>
                            <!-- sentiment meter -->
                            <text x="60" y="295" fill="#a1a1aa" font-size="12" font-family="Inter, sans-serif" letter-spacing="1" font-weight="700">SENTIMENT SCORE</text>
                            <rect x="60" y="308" width="280" height="14" rx="7" fill="#0a0a0f"/>
                            <rect x="60" y="308" width="232" height="14" rx="7" fill="url(#nlp-bar)"/>
                            <circle cx="292" cy="315" r="11" fill="#0a0a0f" stroke="#00E5FF" stroke-width="2.5"/>
                            <text x="60" y="350" fill="#00E5FF" font-size="22" font-weight="900" font-family="Inter, sans-serif">+0.83</text>
                            <text x="60" y="372" fill="#a1a1aa" font-size="12" font-family="Inter, sans-serif">Positive · High confidence</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 4: COMPUTER VISION ============ -->
    <section class="service-detail alternate">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <!-- "photo" frame -->
                            <rect x="60" y="70" width="340" height="260" rx="14" fill="#0a0a0f" stroke="rgba(0,184,212,0.3)" stroke-width="1.5"/>
                            <!-- abstract scene shapes -->
                            <rect x="85" y="95" width="120" height="90" rx="6" fill="#13131a"/>
                            <circle cx="300" cy="140" r="45" fill="#13131a"/>
                            <rect x="85" y="210" width="290" height="95" rx="6" fill="#13131a"/>
                            <!-- bounding boxes (detections) -->
                            <rect x="92" y="102" width="106" height="76" rx="3" fill="none" stroke="#00E5FF" stroke-width="2.5"/>
                            <rect x="92" y="80" width="74" height="20" rx="4" fill="#00E5FF"/>
                            <text x="129" y="94" fill="#0a0a0f" font-size="11" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">PERSON 0.98</text>

                            <circle cx="300" cy="140" r="46" fill="none" stroke="#00B8D4" stroke-width="2.5"/>
                            <rect x="262" y="88" width="76" height="20" rx="4" fill="#00B8D4"/>
                            <text x="300" y="102" fill="#0a0a0f" font-size="11" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">FACE 0.95</text>

                            <rect x="95" y="218" width="120" height="78" rx="3" fill="none" stroke="#006B9E" stroke-width="2.5"/>
                            <rect x="95" y="196" width="86" height="20" rx="4" fill="#006B9E"/>
                            <text x="138" y="210" fill="white" font-size="11" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">DEFECT 0.91</text>

                            <rect x="240" y="225" width="118" height="68" rx="3" fill="none" stroke="#00E5FF" stroke-width="2.5" stroke-dasharray="6 4"/>
                            <rect x="240" y="203" width="92" height="20" rx="4" fill="#00E5FF"/>
                            <text x="286" y="217" fill="#0a0a0f" font-size="11" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">OBJECT 0.87</text>

                            <!-- corner reticle marks -->
                            <g stroke="#00B8D4" stroke-width="2" opacity="0.6">
                                <path d="M60,70 L60,90 M60,70 L80,70" fill="none"/>
                                <path d="M400,70 L400,90 M400,70 L380,70" fill="none"/>
                                <path d="M60,330 L60,310 M60,330 L80,330" fill="none"/>
                                <path d="M400,330 L400,310 M400,330 L380,330" fill="none"/>
                            </g>
                            <text x="230" y="365" fill="#a1a1aa" font-size="12" text-anchor="middle" font-family="Inter, sans-serif" letter-spacing="1">4 OBJECTS DETECTED · 38ms</text>
                        </svg>
                    </div>
                </div>
                <div class="service-detail-text">
                    <div class="service-badge">Computer Vision</div>
                    <h2>Computer Vision Solutions</h2>
                    <p>Give your systems the ability to see - detecting defects on a line, verifying identity, reading documents, or analyzing medical images, in real time.</p>
                    <div class="use-case-chips">
                        <span>Object Detection</span>
                        <span>Face Verification</span>
                        <span>Quality Inspection</span>
                        <span>OCR</span>
                        <span>Image Classification</span>
                        <span>Medical Imaging</span>
                    </div>
                    <ul class="service-features">
                        <li>Object detection and recognition for real-time analysis</li>
                        <li>Quality inspection and automated defect detection on production lines</li>
                        <li>OCR for digitizing and reading scanned documents</li>
                        <li>Medical image analysis for diagnostic support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 5: ANOMALY DETECTION ============ -->
    <section class="service-detail">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-text">
                    <div class="service-badge">Anomaly Detection</div>
                    <h2>Fraud &amp; Anomaly Detection</h2>
                    <p>Catch the transaction, claim, or network event that doesn't belong - in milliseconds, before it costs you. Pattern-based detection that adapts as fraud tactics evolve.</p>
                    <div class="impact-callout">
                        <div class="impact-icon">⚡</div>
                        <p><strong>Built for speed:</strong> fraud detection systems we've deployed catch 95% of fraudulent transactions in real time, at the point of transaction.</p>
                    </div>
                    <ul class="service-features">
                        <li>Credit card and payment fraud detection at transaction speed</li>
                        <li>Insurance claim fraud identification and risk scoring</li>
                        <li>Cybersecurity threat and network intrusion detection</li>
                        <li>Manufacturing defect and bot-traffic detection</li>
                    </ul>
                </div>
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <!-- scatter cluster -->
                            <g fill="#00B8D4" opacity="0.55">
                                <circle cx="150" cy="280" r="6"/>
                                <circle cx="175" cy="260" r="6"/>
                                <circle cx="160" cy="230" r="6"/>
                                <circle cx="190" cy="245" r="6"/>
                                <circle cx="210" cy="275" r="6"/>
                                <circle cx="140" cy="250" r="6"/>
                                <circle cx="200" cy="220" r="6"/>
                                <circle cx="170" cy="295" r="6"/>
                                <circle cx="225" cy="255" r="6"/>
                                <circle cx="155" cy="210" r="6"/>
                                <circle cx="240" cy="230" r="6"/>
                                <circle cx="185" cy="200" r="6"/>
                            </g>
                            <!-- normal cluster boundary -->
                            <ellipse cx="185" cy="248" rx="80" ry="65" fill="none" stroke="#006B9E" stroke-width="1.5" stroke-dasharray="5 5" opacity="0.7"/>
                            <text x="185" y="335" fill="#a1a1aa" font-size="12" text-anchor="middle" font-family="Inter, sans-serif" letter-spacing="0.5">NORMAL BEHAVIOR</text>

                            <!-- anomaly points far from cluster -->
                            <circle cx="350" cy="120" r="9" fill="none" stroke="#00E5FF" stroke-width="2.5"/>
                            <circle cx="350" cy="120" r="9" fill="#00E5FF" opacity="0.3"/>
                            <circle cx="385" cy="320" r="9" fill="none" stroke="#00E5FF" stroke-width="2.5"/>
                            <circle cx="385" cy="320" r="9" fill="#00E5FF" opacity="0.3"/>
                            <circle cx="80" cy="120" r="9" fill="none" stroke="#00E5FF" stroke-width="2.5"/>
                            <circle cx="80" cy="120" r="9" fill="#00E5FF" opacity="0.3"/>

                            <!-- connecting lines from anomaly to label -->
                            <line x1="359" y1="120" x2="395" y2="100" stroke="#00E5FF" stroke-width="1" opacity="0.6"/>
                            <text x="400" y="98" fill="#00E5FF" font-size="12" font-weight="800" font-family="Inter, sans-serif">FLAGGED</text>

                            <line x1="394" y1="320" x2="420" y2="340" stroke="#00E5FF" stroke-width="1" opacity="0.6"/>
                            <text x="305" y="358" fill="#00E5FF" font-size="12" font-weight="800" font-family="Inter, sans-serif">FLAGGED</text>

                            <!-- alert badge -->
                            <rect x="285" y="55" width="130" height="40" rx="20" fill="rgba(0,229,255,0.12)" stroke="#00E5FF" stroke-width="1.5"/>
                            <circle cx="305" cy="75" r="5" fill="#00E5FF"/>
                            <text x="320" y="80" fill="#00E5FF" font-size="13" font-weight="800" font-family="Inter, sans-serif">3 ANOMALIES</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ SOLUTION 6: PROCESS AUTOMATION ============ -->
    <section class="service-detail alternate">
        <div class="container">
            <div class="service-detail-content">
                <div class="service-detail-image">
                    <div class="solution-visual">
                        <svg viewBox="0 0 460 460" xmlns="http://www.w3.org/2000/svg">
                            <!-- document in -->
                            <rect x="55" y="160" width="80" height="100" rx="6" fill="#13131a" stroke="rgba(0,184,212,0.3)" stroke-width="1.5"/>
                            <rect x="68" y="178" width="54" height="6" rx="3" fill="#a1a1aa"/>
                            <rect x="68" y="192" width="54" height="6" rx="3" fill="#a1a1aa" opacity="0.7"/>
                            <rect x="68" y="206" width="36" height="6" rx="3" fill="#a1a1aa" opacity="0.5"/>
                            <rect x="68" y="226" width="54" height="6" rx="3" fill="#a1a1aa" opacity="0.7"/>
                            <rect x="68" y="240" width="40" height="6" rx="3" fill="#a1a1aa" opacity="0.5"/>

                            <!-- arrow to AI engine -->
                            <path d="M145,210 L195,210" stroke="#00B8D4" stroke-width="2.5" marker-end="url(#arrow2)"/>
                            <defs>
                                <marker id="arrow2" markerWidth="10" markerHeight="10" refX="5" refY="5" orient="auto">
                                    <path d="M0,0 L10,5 L0,10 Z" fill="#00B8D4"/>
                                </marker>
                                <linearGradient id="pa-gear" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#003D5C"/>
                                    <stop offset="100%" stop-color="#00E5FF"/>
                                </linearGradient>
                            </defs>

                            <!-- AI processing hexagon -->
                            <polygon points="230,150 275,175 275,225 230,250 185,225 185,175" fill="url(#pa-gear)" opacity="0.9"/>
                            <text x="230" y="206" fill="white" font-size="14" font-weight="900" text-anchor="middle" font-family="Inter, sans-serif">AI</text>

                            <!-- arrow to outputs -->
                            <path d="M285,195 L325,160" stroke="#00B8D4" stroke-width="2" marker-end="url(#arrow2)" opacity="0.8"/>
                            <path d="M285,210 L325,210" stroke="#00B8D4" stroke-width="2" marker-end="url(#arrow2)" opacity="0.8"/>
                            <path d="M285,225 L325,260" stroke="#00B8D4" stroke-width="2" marker-end="url(#arrow2)" opacity="0.8"/>

                            <!-- output cards -->
                            <g font-family="Inter, sans-serif" font-size="11" font-weight="700">
                                <rect x="335" y="120" width="90" height="36" rx="8" fill="rgba(0,184,212,0.12)" stroke="#00B8D4" stroke-width="1.5"/>
                                <text x="380" y="143" fill="#00E5FF" text-anchor="middle">APPROVED</text>

                                <rect x="335" y="192" width="90" height="36" rx="8" fill="rgba(0,107,158,0.18)" stroke="#006B9E" stroke-width="1.5"/>
                                <text x="380" y="215" fill="white" text-anchor="middle">ROUTED</text>

                                <rect x="335" y="244" width="90" height="36" rx="8" fill="rgba(0,184,212,0.12)" stroke="#00B8D4" stroke-width="1.5"/>
                                <text x="380" y="267" fill="#00E5FF" text-anchor="middle">FLAGGED</text>
                            </g>

                            <text x="230" y="330" fill="#a1a1aa" font-size="12" text-anchor="middle" font-family="Inter, sans-serif" letter-spacing="0.5">2,400 DOCUMENTS / HOUR</text>
                        </svg>
                    </div>
                </div>
                <div class="service-detail-text">
                    <div class="service-badge">Process Automation</div>
                    <h2>AI-Powered Process Automation</h2>
                    <p>Automate the tasks that need judgment, not just rules - document review, ticket routing, claims processing - at a speed and consistency no manual team can match.</p>
                    <div class="use-case-chips">
                        <span>Document Processing</span>
                        <span>Invoice Matching</span>
                        <span>Resume Screening</span>
                        <span>Ticket Routing</span>
                        <span>Claims Processing</span>
                        <span>Contract Review</span>
                    </div>
                    <ul class="service-features">
                        <li>Intelligent document processing and automated invoice matching</li>
                        <li>Resume screening and candidate matching at scale</li>
                        <li>Customer support ticket routing and triage</li>
                        <li>Contract review and clause-level risk analysis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PROCESS ============ -->
    <section class="ml-process-section">
        <div class="container">
            <div class="section-header">
                <h2>Our AI/ML Development Process</h2>
                <p>From problem definition to production deployment and ongoing improvement</p>
            </div>
            <div class="ml-process-list">
                <div class="ml-process-row">
                    <div class="ml-process-num">01</div>
                    <div class="ml-process-duration">2–3 Weeks</div>
                    <div class="ml-process-content">
                        <h3>Problem Definition &amp; Feasibility</h3>
                        <p>We understand the business problem and desired outcome, assess data availability and quality, evaluate ML feasibility and expected accuracy, and recommend the right approach - ML, rules-based, or hybrid.</p>
                    </div>
                </div>
                <div class="ml-process-row">
                    <div class="ml-process-num">02</div>
                    <div class="ml-process-duration">3–6 Weeks</div>
                    <div class="ml-process-content">
                        <h3>Data Preparation</h3>
                        <p>Data collection from your existing sources, cleaning and quality improvement, handling missing values and outliers, feature engineering, labeling where needed, and a privacy and compliance review.</p>
                    </div>
                </div>
                <div class="ml-process-row">
                    <div class="ml-process-num">03</div>
                    <div class="ml-process-duration">4–8 Weeks</div>
                    <div class="ml-process-content">
                        <h3>Model Development</h3>
                        <p>We select appropriate algorithms, train multiple model variants, tune hyperparameters, cross-validate, compare results, and test for bias and fairness before anything ships.</p>
                    </div>
                </div>
                <div class="ml-process-row">
                    <div class="ml-process-num">04</div>
                    <div class="ml-process-duration">2–4 Weeks</div>
                    <div class="ml-process-content">
                        <h3>Deployment &amp; Integration</h3>
                        <p>API development for model serving, integration with your existing applications, real-time or batch prediction infrastructure, versioning, monitoring, and A/B testing setup.</p>
                    </div>
                </div>
                <div class="ml-process-row">
                    <div class="ml-process-num">05</div>
                    <div class="ml-process-duration">Ongoing</div>
                    <div class="ml-process-content">
                        <h3>Monitoring &amp; Improvement</h3>
                        <p>Continuous performance monitoring, data drift detection, automated retraining triggers, and business-metric tracking so the model keeps earning its keep.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ TECH STACK ============ -->
    <section class="services-overview" id="tech-stack">
        <div class="container">
            <div class="section-header">
                <h2>AI/ML Technology Stack</h2>
                <p>Industry-standard frameworks and tools for building production ML systems</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3>ML Frameworks</h3>
                    <p>TensorFlow, PyTorch, Scikit-learn, XGBoost, and LightGBM - the industry-standard frameworks for building and training models.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3>Deep Learning</h3>
                    <p>Keras, PyTorch, and TensorFlow for neural networks, plus pre-trained models like BERT, GPT, and ResNet when they fit.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-4l-4 4v-4z"/></svg>
                    </div>
                    <h3>NLP</h3>
                    <p>spaCy, NLTK, Hugging Face Transformers, and the OpenAI API for language understanding and generation tasks.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3>Computer Vision</h3>
                    <p>OpenCV, PIL, and TensorFlow/PyTorch for image processing, with YOLO and Mask R-CNN for object detection.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/></svg>
                    </div>
                    <h3>Data Processing</h3>
                    <p>Pandas, NumPy, and Apache Spark for large-scale data processing, with feature stores built for production use.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </div>
                    <h3>MLOps</h3>
                    <p>MLflow, Kubeflow, and AWS SageMaker for model management and deployment, running on Docker and Kubernetes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ WHEN AI/ML MAKES SENSE ============ -->
    <section class="fit-section">
        <div class="container">
            <div class="section-header">
                <h2>When AI/ML Makes Sense</h2>
                <p>We'll honestly tell you if ML isn't the right solution - sometimes simpler approaches work better</p>
            </div>
            <div class="fit-grid">
                <div class="fit-card is-good">
                    <h3><span class="fit-mark">✓</span> Good Candidates for ML</h3>
                    <ul>
                        <li>You have large amounts of historical data</li>
                        <li>The problem involves patterns too complex for fixed rules</li>
                        <li>You need to make predictions or recommendations</li>
                        <li>Manual processes are expensive and time-consuming</li>
                        <li>Accuracy improves as more data comes in</li>
                        <li>The problem has clear, measurable success metrics</li>
                    </ul>
                </div>
                <div class="fit-card is-poor">
                    <h3><span class="fit-mark">✕</span> Poor Candidates for ML</h3>
                    <ul>
                        <li>Limited data available - fewer than 1,000 examples</li>
                        <li>Rules-based logic would simply work better</li>
                        <li>The problem needs to be 100% accurate, every time</li>
                        <li>There's no objective way to measure success</li>
                        <li>Explainability is critical, and the model would be a black box</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PRICING ============ -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>AI/ML Development Cost</h2>
                <p>Pricing depends on complexity and data requirements</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Proof of Concept</h3>
                    <span class="pricing-amount">₹5L – ₹10L</span>
                    <span class="pricing-duration">4–6 weeks</span>
                    <p class="pricing-desc">Validate feasibility and expected accuracy before committing to a full build.</p>
                </div>
                <div class="pricing-card is-featured">
                    <div class="pricing-tag">Most Common</div>
                    <h3>Simple ML Model</h3>
                    <span class="pricing-amount">₹10L – ₹20L</span>
                    <span class="pricing-duration">2–3 months</span>
                    <p class="pricing-desc">A single, well-scoped model - churn prediction, scoring, or basic forecasting.</p>
                </div>
                <div class="pricing-card">
                    <h3>Medium Complexity</h3>
                    <span class="pricing-amount">₹20L – ₹40L</span>
                    <span class="pricing-duration">3–5 months</span>
                    <p class="pricing-desc">NLP, recommendation engines, or anomaly detection with production integration.</p>
                </div>
                <div class="pricing-card">
                    <h3>Complex Solution</h3>
                    <span class="pricing-amount">₹40L – ₹75L</span>
                    <span class="pricing-duration">4–8 months</span>
                    <p class="pricing-desc">Computer vision, multi-model systems, or solutions with strict accuracy and latency needs.</p>
                </div>
            </div>
            <div class="pricing-footnote">
                <strong>Long-term value:</strong> Enterprise AI platforms run ₹75L+ over 6–12 months. Ongoing monitoring and retraining typically costs ₹2L–₹10L per month. Most clients see ROI within 6–18 months through automation, better decisions, or increased revenue.
            </div>
        </div>
    </section>

    <!-- ============ FAQ ============ -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>AI/ML Development FAQs</h2>
                <p>Straight answers to the questions we get asked most</p>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <input type="checkbox" id="faq1" class="faq-toggle" checked>
                    <label for="faq1" class="faq-question">How much data do we need?<span class="faq-plus">+</span></label>
                    <div class="faq-answer"><p>It depends on the problem. Simple classification tasks can work with 1,000+ examples; complex deep learning typically needs 10,000+. We assess your data and determine feasibility during the initial phase, before you commit to a full build.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq2" class="faq-toggle">
                    <label for="faq2" class="faq-question">How accurate will the model be?<span class="faq-plus">+</span></label>
                    <div class="faq-answer"><p>It varies by problem and data quality. We provide accuracy estimates during the feasibility phase - typical range is 75–95% depending on use case. No ML model is ever 100% accurate, and we'll be upfront about that from day one.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq3" class="faq-toggle">
                    <label for="faq3" class="faq-question">How do you handle bias in AI models?<span class="faq-plus">+</span></label>
                    <div class="faq-answer"><p>We test for bias across demographics, use fairness metrics, balance training data, and provide explainability tools. This is part of our standard process for every ML project, not an optional add-on.</p></div>
                </div>
                <div class="faq-item">
                    <input type="checkbox" id="faq4" class="faq-toggle">
                    <label for="faq4" class="faq-question">What if the model stops working well?<span class="faq-plus">+</span></label>
                    <div class="faq-answer"><p>Models degrade over time as the underlying data shifts. We set up monitoring to detect this early and retrain models automatically or on a fixed schedule - it's part of our ongoing service, not a separate emergency.</p></div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Build AI Solutions That Work</h2>
                <p>Ready to leverage AI and machine learning for your business? Let's discuss your use case and determine if ML is the right approach.</p>
                <a href="<?=_APPLICATION_URL;?>contact" class="btn btn-primary btn-large">Schedule a Call</a>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>