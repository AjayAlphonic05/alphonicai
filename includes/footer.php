    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>Alphonic<span class="ai-text">AI</span></h3>
                    <p>Innovative software and AI solutions for the modern world.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        
                        <li><a href="<?=_APPLICATION_URL;?>">Home</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>services">Services</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>about">About</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>blog">Blog</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="<?=_APPLICATION_URL;?>services#software">Software Development</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>services#web-mobile">Web & Mobile Apps</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>services#ai">AI Solutions</a></li>
                        <li><a href="<?=_APPLICATION_URL;?>services#cloud">Cloud Services</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Connect</h4>
                    <ul class="social-links">
                        <li><a href="https://www.linkedin.com/company/alphonic/" target="_blank">LinkedIn</a></li>
                        <li><a href="#" target="_blank">Twitter</a></li>
                        <li><a href="#" target="_blank">GitHub</a></li>
                        <!-- <li><a href="mailto:support@alphonicai.com">Email</a></li> -->
                        <li><a href="mailto:support@alphonicai.com">support@alphonicai.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> AlphonicAI. All rights reserved.</p>
            </div>
        </div>
    </footer>

        <div class="enquiry-modal" id="enquiryModal" aria-hidden="true">
        <div class="enquiry-modal-backdrop" data-modal-close></div>
        <div class="enquiry-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="enquiryModalTitle">
            <button type="button" class="enquiry-modal-close" data-modal-close aria-label="Close enquiry form">&times;</button>
            <span class="service-badge">Quick Enquiry</span>
            <h2 id="enquiryModalTitle">Tell us what you want to build</h2>
            <p>Choose a comfortable time and the right team will shape the next step with you.</p>

            <form class="enquiry-form" id="enquiryForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="enquiryName">Name</label>
                        <input type="text" id="enquiryName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="enquiryEmail">Email</label>
                        <input type="email" id="enquiryEmail" name="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="enquiryTime">Preferred Time</label>
                        <select id="enquiryTime" name="time" required>
                            <option value="">Select a time</option>
                            <option>09:00 AM - 11:00 AM</option>
                            <option>11:00 AM - 01:00 PM</option>
                            <option>02:00 PM - 04:00 PM</option>
                            <option>04:00 PM - 06:00 PM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="enquiryCategory">Category</label>
                        <select id="enquiryCategory" name="category" required>
                            <option value="">Select a category</option>
                            <option>AI Solutions</option>
                            <option>Web Development</option>
                            <option>Mobile Apps</option>
                            <option>Cloud & DevOps</option>
                            <option>Product Consulting</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="enquiryMessage">Message</label>
                    <textarea id="enquiryMessage" name="message" placeholder="Share a little context about your idea..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Enquiry</button>
                <p class="enquiry-success" id="enquirySuccess">Thanks. We received your enquiry and will get back to you soon.</p>
            </form>
        </div>
    </div>

    <script src="<?=_APPLICATION_URL;?>js/script.js"></script>
</body>
</html>
