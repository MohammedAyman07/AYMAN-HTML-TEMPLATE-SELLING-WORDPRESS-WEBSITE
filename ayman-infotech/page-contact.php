<?php
/**
 * Template Name: Contact Us
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="container" style="padding-bottom: 4rem;">
    <div class="row" style="display: flex; gap: 4rem; flex-wrap: wrap;">
        <div class="col-info" style="flex: 1; min-width: 300px;">
            <h2>Get in Touch</h2>
            <p>Have questions? We'd love to hear from you.</p>
            
            <div class="contact-details" style="margin-top: 2rem;">
                <div class="detail-item" style="margin-bottom: 1.5rem;">
                    <strong style="display: block; margin-bottom: 0.5rem;">Email Us</strong>
                    <a href="mailto:support@aymaninfotech.com">support@aymaninfotech.com</a>
                </div>
                <div class="detail-item" style="margin-bottom: 1.5rem;">
                    <strong style="display: block; margin-bottom: 0.5rem;">Call Us</strong>
                    <a href="tel:+1234567890">+1 234 567 890</a>
                </div>
                <div class="detail-item">
                    <strong style="display: block; margin-bottom: 0.5rem;">Visit Us</strong>
                    <p>123 Tech Street, Digital City, World</p>
                </div>
            </div>
        </div>
        
        <div class="col-form" style="flex: 2; min-width: 300px;">
            <div style="background: #f8f9fa; padding: 2rem; border-radius: 8px;">
                <h3>Send a Message</h3>
                <!-- Simple Contact Form (Standard WP or CF7 placeholder) -->
                <form action="" method="post" style="display: grid; gap: 1rem;">
                    <input type="text" placeholder="Your Name" style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; width: 100%;">
                    <input type="email" placeholder="Your Email" style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; width: 100%;">
                    <input type="text" placeholder="Subject" style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; width: 100%;">
                    <textarea placeholder="Your Message" rows="5" style="padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; width: 100%;"></textarea>
                    <button type="button" class="btn">Send Message</button>
                </form>
                <p style="font-size: 0.8rem; margin-top: 1rem; color: #777;">* This is a template form. Install a plugin like Contact Form 7 for functionality.</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
