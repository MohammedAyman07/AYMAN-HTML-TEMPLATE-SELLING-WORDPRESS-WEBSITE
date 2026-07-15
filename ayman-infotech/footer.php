</div><!-- #content -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <div class="footer-widget">
                <h4><?php bloginfo('name'); ?></h4>
                <p><?php bloginfo('description'); ?></p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
            <div class="footer-widget">
                <h4>Quick Links</h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                    'depth'          => 1,
                ) );
                ?>
            </div>
            
            <div class="footer-widget">
                <h4>Contact Us</h4>
                <p><i class="fas fa-envelope"></i> support@aymaninfotech.com</p>
                <p><i class="fas fa-map-marker-alt"></i> 123 Tech Street, Digital City</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                <p>Designed with ❤️ by Ayman Infotech</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
