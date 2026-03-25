<article class="card card-news">
    <a aria-label="<?php printf( __( 'Gå till %s', 'kreation'), get_the_title() ); ?>" class="card-wrapper" href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()): ?>
            <figure>
                <?php echo get_the_post_thumbnail(get_the_ID(), 'image-600-500'); ?>
            </figure>
        <?php endif; ?>
        <div class="card__body">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        </div>
    </a>
</article>
