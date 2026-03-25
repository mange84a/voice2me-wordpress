<?php /* Default fallback template, nothing fancy just show content */ ?>
<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <main>
            <div class="text">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php if(has_post_thumbnail()): ?>
                    <div class="entry-image">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'image-1000-600'); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <?php get_template_part('template-parts/flexible-loader'); ?>
        </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
