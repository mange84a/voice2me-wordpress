<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-staff <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h2 class="section-heading staff-heading"><?php echo strip_tags($heading); ?></h2>
        <?php endif; ?>
        <?php if($staff = get_sub_field('staff_members')): ?>
            <div class="grid grid--4">
                <?php foreach($staff as $post): ?>
                    <?php setup_postdata($post); ?>
                    <?php get_template_part('template-parts/cards/staff-card'); ?>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
