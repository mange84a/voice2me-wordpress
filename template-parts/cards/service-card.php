<article class="card card-service">
    <a aria-label="<?php printf( __( 'Gå till %s', 'kreation'), get_the_title() ); ?>" href="<?php the_permalink(); ?>">
        <div class="card__body">    
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            
            <?php if($readmore_text = get_field('readmore_text')): ?>
                <span class="read-more"><?php echo esc_html($readmore_text); ?>
                    <svg><use href="#arrow"></use></svg>
                </span>
            <?php endif; ?>
        </div>
    </a>
</article>
