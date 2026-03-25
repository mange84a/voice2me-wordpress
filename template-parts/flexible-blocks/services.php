<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-services <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h2 class="section-heading services-heading"><?php echo strip_tags($heading); ?></h2>
        <?php endif; ?>
        <?php if($services = get_sub_field('services')): ?>
            <div class="grid grid--4">
                <?php foreach($services as $post): ?>
                    <?php setup_postdata($post); ?>
                    <?php get_template_part('template-parts/cards/service-card'); ?>
                <?php endforeach; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php if($link = get_sub_field('link')): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="services-link section-link">
                <a class="button button--primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>
