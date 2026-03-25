<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-contact-block <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h2 class="section-heading contact-block-heading"><?php echo strip_tags($heading, '<strong>'); ?></h2>
        <?php endif; ?>
        <div class="contact-block-row">
            <div class="contact-block-contact">
                <div class="contact-block-contact-wrapper">
                    <?php if($subheading = get_sub_field('subheading')): ?>
                        <h3 class="contact-block-subheading"><?php echo strip_tags($subheading, '<strong>'); ?></h3>
                    <?php endif; ?>
                    <div class="contact-block-contact-info">
                        <?php if($contact = get_sub_field('contact')): ?>
                            <?php if(has_post_thumbnail($contact->ID)): ?>
                                <div class="contact-block-image">
                                    <?php echo get_the_post_thumbnail($contact->ID, 'thumbnail'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="contact-block-info">
                                <h4 class="contact-block-name"><?php echo get_the_title($contact->ID); ?></h4>
                                <?php if($title = get_field('title', $contact->ID)): ?>
                                    <p class="contact-block-title"><?php echo esc_html($title); ?></p>
                                <?php endif; ?>
                                <?php if($email = get_field('email', $contact->ID)): ?>
                                    <a href="mailto:<?php echo esc_attr($email); ?>" class="contact-block-email"><?php echo esc_html($email); ?></a>
                                <?php endif; ?>
                                <?php if($phone = get_field('phone', $contact->ID)): ?>
                                    <a href="tel:<?php echo esc_attr($phone); ?>" class="contact-block-phone"><?php echo esc_html($phone); ?></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="contact-block-form">
                <?php if($additional_info = get_sub_field('additional_info')): ?>
                    <div class="contact-block-additional-info">
                        <?php echo wpautop($additional_info); ?>
                    </div>
                <?php endif; ?>
                <?php if($form_shortcode = get_sub_field('form_shortcode')): ?>
                    <?php echo do_shortcode($form_shortcode); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
