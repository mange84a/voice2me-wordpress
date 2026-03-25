<?php
    $class = "";
    if(get_sub_field('has_background')) { $class .= " has-background"; }
?>

<section class="section section-logos <?php echo esc_attr($class); ?>">
    <div class="container">
        <div class="logos-row">
            <div class="logos-heading">
                <?php if($heading = get_sub_field('heading')): ?>
                    <h3><?php echo strip_tags($heading, '<strong>'); ?></h3>
                <?php endif; ?>
            </div>
            <div class="logos-content">
                <?php if($loggos = get_sub_field('loggos')): ?>
                    <ul class="logos-list">
                        <?php for($i = 0; $i < 4; $i++): ?>
                            <?php foreach($loggos as $loggo): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $loggo['ID'], 'medium'); ?>
                                </li>
                            <?php endforeach; ?>
                        <?php endfor; ?>
                    </ul> 
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
