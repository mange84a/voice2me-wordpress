<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-news <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h2 class="section-heading news-heading"><?php echo strip_tags($heading); ?></h2>
        <?php endif; ?>
        <?php $news_to_show = get_sub_field('posts_to_show') ?: 4; ?>
        <?php 
            $news_args = array(
                'post_type' => 'post',
                'posts_per_page' => $news_to_show,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $news_query = new WP_Query($news_args);
        ?>
        <?php if($news_query->have_posts()): ?>
            <div class="grid grid--3">
                <?php while($news_query->have_posts()): $news_query->the_post(); ?>
                    <?php get_template_part('template-parts/cards/news-card'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

        <?php if($link = get_sub_field('link')): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="section-link news-link">
                <a class="button button--primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
