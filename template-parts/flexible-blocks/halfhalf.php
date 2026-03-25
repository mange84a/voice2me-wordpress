<?php
    $class = "";
    if(get_sub_field('reverse')) { $class .= "row-reverse";  }
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>
<section class="section section-half-half <?php echo esc_attr($class); ?>">
    <div class="container">
        <div class="half-half-row">
            <div class="half-half-image">
                <?php if($image = get_sub_field('image')): ?>
                    <?php echo wp_get_attachment_image( $image['ID'], 'image-1000-600'); ?>
                <?php endif; ?>
            </div>
            <div>
                <?php if($heading = get_sub_field('heading')): ?>
                    <h2><?php echo strip_tags($heading, '<strong>'); ?></h2>
                <?php endif; ?>
                <?php if($text = get_sub_field('text')): ?>
                    <?php echo wpautop($text); ?>
                <?php endif; ?>
                <?php if($link = get_sub_field('link')): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button button--primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
