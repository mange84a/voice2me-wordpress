<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-reviews <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h2 class="section-heading review-heading"><?php echo strip_tags($heading); ?></h2>
        <?php endif; ?>
        <?php if($reviews = get_sub_field('reviews')): ?>
            <div class="grid grid--3">
                <?php foreach($reviews as $post): ?>
                    <?php setup_postdata($post); ?>
                    <?php get_template_part('template-parts/cards/review-card'); ?>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
