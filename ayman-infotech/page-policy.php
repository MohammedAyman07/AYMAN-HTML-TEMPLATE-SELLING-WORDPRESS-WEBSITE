<?php
/**
 * Template Name: Legal Policy
 */

get_header();
?>

<div class="page-header">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="container" style="padding-bottom: 4rem; max-width: 800px;">
    <div class="entry-content">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
