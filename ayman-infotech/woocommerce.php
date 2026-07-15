<?php
/**
 * The template for displaying WooCommerce pages
 */

get_header();
?>

<div class="container" style="padding: 4rem 15px;">
    <div class="woocommerce-content">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php
get_footer();
