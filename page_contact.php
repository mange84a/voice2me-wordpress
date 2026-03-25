<?php /* Template Name: Kontaktsida */ ?>
<?php defined( 'ABSPATH' ) || exit; ?>
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="section">
            <div class="container">
                <div class="text text--center">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div class="grid contact-grid">
                    <div class="contact-info">
                        <?php if($contact_info_header = get_field('contact_info_header')): ?>
                            <h3><?php echo esc_html($contact_info_header); ?></h3>
                        <?php endif; ?>
                        <div class="contact-info-grid">
                            <?php if($phone = get_field('phone')): ?>
                                <div class="contact-info-item">
                                    <strong><svg><use href="#phone"></use></svg><?php _e('Telefon', 'webbma'); ?>:</strong>
                                    <a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if($email = get_field('email')): ?>
                                <div class="contact-info-item">
                                    <strong><svg><use href="#email"></use></svg><?php _e('E-post', 'webbma'); ?>:</strong>
                                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if($opening_hours = get_field('opening_hours')): ?>
                                <div class="contact-info-item">
                                    <strong><svg><use href="#clock"></use></svg><?php _e('Öppettider', 'webbma'); ?>:</strong>
                                    <span><?php echo nl2br(esc_html($opening_hours)); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if($address = get_field('address')): ?>
                                <div class="contact-info-item">
                                    <strong><svg><use href="#location"></use></svg><?php _e('Adress', 'webbma'); ?>:</strong>
                                    <span><?php echo nl2br(esc_html($address)); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if($staff_header = get_field('staff_header')): ?>
                            <h3><?php echo esc_html($staff_header); ?></h3>
                        <?php endif; ?>
                        <div class="contact-staff-grid">
                            <?php if($staff = get_field('staff')): ?>
                                <?php foreach($staff as $post): ?>
                                    <?php setup_postdata($post); ?>
                                    <?php get_template_part('template-parts/cards/staff-card'); ?>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="contact-page-form">
                        <?php if($additional_info = get_field('additional_info')): ?>
                            <div class="contact-form-additional-info">
                                <?php echo wpautop($additional_info); ?>
                            </div>
                        <?php endif; ?>
                        <?php if($form_shortcode = get_field('form_shortcode')): ?>
                            <?php echo do_shortcode($form_shortcode); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
