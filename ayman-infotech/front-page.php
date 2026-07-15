<?php
/**
 * Template Name: Front Page
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-content">
        <h1>Premium HTML Templates & WordPress Themes</h1>
        <p>Expertly crafted digital assets for developers, startups, and agencies.</p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="btn">Browse All Products</a>
            <a href="#featured-products" class="btn btn-outline">View Featured</a>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section id="featured-products" class="featured-section section-padding">
    <div class="container">
        <h2 class="section-title">Featured Products</h2>
        <?php echo do_shortcode('[featured_products limit="4" columns="4"]'); ?>
    </div>
</section>

<!-- Categories Grid -->
<section class="categories-section section-padding bg-light">
    <div class="container">
        <h2 class="section-title">Browse by Category</h2>
        <div class="categories-grid">
            <?php
            $term_args = array(
                'taxonomy' => 'product_cat',
                'hide_empty' => false,
                'number' => 8
            );
            $terms = get_terms($term_args);
            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    echo '<a href="' . get_term_link($term) . '" class="category-card">';
                    echo '<h3>' . $term->name . '</h3>';
                    echo '<span class="count">' . $term->count . ' Items</span>';
                    echo '</a>';
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us section-padding">
    <div class="container">
        <h2 class="section-title">Why Choose AYMAN INFOTECH?</h2>
        <div class="features-grid">
            <div class="feature-box">
                <i class="fas fa-code"></i>
                <h3>Clean Code</h3>
                <p>Standardized, commented, and easy-to-edit codebases.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-bolt"></i>
                <h3>Fast Loading</h3>
                <p>Optimized for speed and performance scores.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-life-ring"></i>
                <h3>Premium Support</h3>
                <p>Dedicated support to help you get started.</p>
            </div>
            <div class="feature-box">
                <i class="fas fa-mobile-alt"></i>
                <h3>Fully Responsive</h3>
                <p>Looks perfect on all devices and screen sizes.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials-section section-padding bg-dark text-white">
    <div class="container">
        <h2 class="section-title text-white">What Our Customers Say</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p>"The code quality is outstanding. Saved me weeks of work!"</p>
                <h4>- Alex D., Developer</h4>
            </div>
            <div class="testimonial-card">
                <p>"Beautiful designs and very easy to customize. Highly recommended."</p>
                <h4>- Sarah J., Agency Owner</h4>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
