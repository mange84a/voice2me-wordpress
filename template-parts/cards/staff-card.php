<div class="card card-staff">
    <?php if(has_post_thumbnail()): ?>
        <figure class="staff-image">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'image-600-500'); ?>
        </figure>
    <?php endif; ?>
    <div class="card__body">
        <h3 class="h4"><?php the_title(); ?></h3>
        <?php if($title = get_field('title')): ?>
            <p class="staff-title"><?php echo esc_html($title); ?></p>
        <?php endif; ?>
         <?php if($email = get_field('email')): ?>
            <a href="mailto:<?php echo esc_attr($email); ?>" class="staff-email"><?php echo esc_html($email); ?></a>
        <?php endif; ?>
         <?php if($phone = get_field('phone')): ?>
            <a href="tel:<?php echo esc_attr($phone); ?>" class="staff-phone"><?php echo esc_html($phone); ?></a>
        <?php endif; ?>
    </div>
</div>
