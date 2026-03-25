<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="page-with-sidebar">
                <div class="page-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php get_template_part('template-parts/flexible-loader'); ?>
                </div>
                <div class="page-sidebar">
                    <div class="sticky-sidebar">
                        <?php
                            if (have_rows('sidebar_flexible_content', 'option')) :
                                while (have_rows('sidebar_flexible_content', 'option')) : the_row();
                                    $layout = get_row_layout();
                                    get_template_part("template-parts/flexible-blocks/{$layout}");
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
