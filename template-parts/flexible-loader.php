<?php
/**
 * Loader för flexible content
 * Kallas med: get_template_part('template-parts/flexible-loader');
 */

if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
        $layout = get_row_layout();
        get_template_part("template-parts/flexible-blocks/{$layout}");
    endwhile;
endif;

