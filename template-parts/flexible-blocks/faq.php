<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>
<section class="section section-faq <?php echo esc_attr($class); ?>">
    <div class="container">
        <?php if($heading = get_sub_field('heading')): ?>
            <h3 class="faq-heading"><?php echo strip_tags($heading); ?></h3>
        <?php endif; ?>
        <?php if($faqs = get_sub_field('faqs')): ?>
            <?php foreach($faqs as $faq): ?>
                <details>
                    <summary><span><?php echo esc_html($faq['question']); ?></span></summary>
                    <?php echo wpautop($faq['answer']); ?>
                </details>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
