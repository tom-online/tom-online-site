<?php
/**
Template Name: Home Page
 */


get_header(); ?>

<div class="main">
    <aside class="side-image" style="background-image: url('<?php the_field('aside_background')?>')"></aside>
    <section class="main-content">
        <div class="spacer s0"></div>
        <?php require get_template_directory() . '/partials/home.php'; ?>
        <div class="spacer s1">
        <?php require get_template_directory() . '/partials/about.php'; ?>

        <?php require get_template_directory() . '/partials/work.php'; ?>
        <?php require get_template_directory() . '/partials/contact.php'; ?>

</section>
</div>

<?php get_footer(); ?>