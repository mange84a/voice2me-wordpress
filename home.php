<?php /* Frontpage template */ ?>
<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>
    <section class="section">
        <div class="container">
            <h1><?php echo get_the_title(get_option('page_for_posts', true)); ?></h1>
            <?php if($content = get_field('home_content', get_option('page_for_posts', true))): ?>
                <?php echo apply_filters( 'home_content', $content ); ?>
            <?php endif; ?>
            <div class="grid grid--3">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/cards/news-card'); ?>   
                <?php endwhile; endif; ?>   
            </div>
            <div class="pagination-box">
                <?php echo paginate_links([
                    'prev_text' => __('&laquo;', 'textdomain'),
                    'next_text' => __('&raquo;', 'textdomain'),
                ]); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
