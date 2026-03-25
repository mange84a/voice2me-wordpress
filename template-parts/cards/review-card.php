<article class="card card-review">
    <div class="card__body">
        <?php $rating = get_field('rating'); ?>
        <?php if($rating): ?>
            <div class="rating">
                <?php for($i = 0; $i < $rating; $i++): ?>
                    <span class="star">&#9733;</span>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
        <div class="review__body">
            <?php the_content(); ?>
        </div>
        <div class="review__author">
            <?php if(has_post_thumbnail()): ?>
                <div class="author-image">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?>
                </div>
            <?php endif; ?>
            <p class="author-info">
                <?php if($author = get_field('author')): ?>
                    <span class="author-name"><?php echo esc_html($author); ?></span>
                <?php endif; ?>
                <?php if($company = get_field('company')): ?>
                    <span class="author-company"><?php echo esc_html($company); ?></span>
                <?php endif; ?>
            </p>
        </div>
    </div>
</article>
