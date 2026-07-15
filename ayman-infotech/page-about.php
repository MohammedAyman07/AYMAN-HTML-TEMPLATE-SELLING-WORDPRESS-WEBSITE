<?php
/**
 * Template Name: About Us
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="container" style="padding-bottom: 4rem;">
    <div class="row" style="display: flex; gap: 3rem; align-items: center; flex-wrap: wrap;">
        <div class="col-text" style="flex: 1; min-width: 300px;">
            <h2>About AYMAN INFOTECH</h2>
            <p>We are a premier digital marketplace dedicated to providing high-quality HTML templates and WordPress themes. Our mission is to empower developers, agencies, and startups with the tools they need to build stunning websites faster.</p>
            <p>Founded with a vision of excellence, we curate only the best digital assets, ensuring that every product you purchase meets the highest standards of code quality and design.</p>
            
            <h3>Our Mission</h3>
            <p>To be the world's most trusted source for premium digital web assets.</p>
            
            <h3>Our Vision</h3>
            <p>To democratize web development by making professional-grade designs accessible to everyone.</p>
        </div>
        <div class="col-image" style="flex: 1; min-width: 300px;">
            <!-- Placeholder for About Image -->
            <div style="background: #eee; width: 100%; height: 400px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                <span style="color: #999; font-size: 1.5rem;">About Image Placeholder</span>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
