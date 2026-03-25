<header class="front-header">
    <div class="container">
        <?php if($main_heading = get_field('main_heading')): ?>
            <h1><?php echo esc_html($main_heading); ?></h1>
        <?php endif; ?>
        <?php if($usps = get_field('main_usp')): ?>
            <div class="grid grid--3 front-header-usps">
                <?php foreach($usps as $usp): ?>
                    <div class="front-header-usp">
                        <?php if(!empty($usp['usp_title'])): ?>
                            <span class="front-header-usp-title"><?php echo esc_html($usp['usp_title']); ?></span>
                        <?php endif; ?>
                        <?php if(!empty($usp['usp_text'])): ?>
                            <span class="front-header-usp-text"><?php echo esc_html($usp['usp_text']); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</header>

