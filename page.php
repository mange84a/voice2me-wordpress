<?php /* Frontpage template */ ?>
<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="section">
            <div class="container">
                <?php the_content(); ?> 
            </div>
        </section>
        <?php get_template_part('template-parts/flexible-loader'); ?>
    <?php endwhile; endif; ?>   
<?php get_footer(); ?>
