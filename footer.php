    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <h2>Lorem ipsum dolor sit amet</h2>
                <a href="#" class="button button--primary">Begär offert</a>
            </div>
            <div class="grid grid--4">
                <div class="grid__item">
                    <a class="logotype" href="/">
                        <img class="footer__loggo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/loggo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" width="200" height="55">
                    </a>
                    <ul class="social-icons">
                        <?php if ( $company_facebook = get_field('company_facebook', 'option') ) : ?>
                            <li>
                                <a class="icon-facebook" href="<?php echo esc_url( $company_facebook['url'] );?>" target="_blank">
                                    <span class="screen-reader-text">Facebook</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( $company_x_twitter = get_field('company_x_twitter', 'option') ) : ?>
                            <li>
                                <a class="icon-twitter" href="<?php echo esc_url( $company_x_twitter['url']);?>" target="_blank">
                                    <span class="screen-reader-text">X</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( $company_instagram = get_field('company_instagram', 'option') ) : ?>
                            <li>
                                <a class="icon-instagram" href="<?php echo esc_url( $company_instagram['url'] );?>" target="_blank">
                                    <span class="screen-reader-text">Instagram</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( $company_linkedin = get_field('company_linkedin', 'option') ) : ?>
                            <li>
                                <a class="icon-linkedin" href="<?php echo esc_url( $company_linkedin['url'] );?>" target="_blank">
                                    <span class="screen-reader-text">LinkedIn</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ( $company_youtube = get_field('company_youtube', 'option') ) : ?>
                            <li>
                                <a class="icon-youtube" href="<?php echo esc_url( $company_youtube['url'] );?>" target="_blank">
                                    <span class="screen-reader-text">YouTube</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <?php if($footer_copyright = get_field('footer_copyright', 'option')) : ?>
                        <p class="footer_copyright"><?php echo esc_html($footer_copyright); ?></p>
                    <?php endif; ?>
                </div>
                <div class="grid__item">
                    <?php if (has_nav_menu('footer-menu-1')) : ?>
                        <h2 class="h5"><?php echo wp_get_nav_menu_name('footer-menu-1'); ?></h2>
                        <ul>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-1',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => false,
                                'depth' => 1,
                                'items_wrap' => '%3$s',
                            ));
                            ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="grid__item">
                    <?php if (has_nav_menu('footer-menu-2')) : ?>
                        <h2 class="h5"><?php echo wp_get_nav_menu_name('footer-menu-2'); ?></h2>
                        <ul>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-2',
                                'container' => false,
                                'menu_class' => '',
                                'fallback_cb' => false,
                                'depth' => 1,
                                'items_wrap' => '%3$s',
                            ));
                            ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="grid__item">
                    <h2 class="h5">Nyhetsbrev</h2>
                    <p>Registrera dig för vårt nyhetsbrev och få de senaste uppdatering</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
        <symbol id="menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </symbol>
        <symbol id="arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m547.69-267.69-28.31-28.77L682.92-460H200v-40h482.92L519.38-663.54l28.31-28.77L760-480 547.69-267.69Z"/></svg>
        </symbol>
        <symbol id="phone">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M162-120q-18 0-30-12t-12-30v-162q0-13 9-23.5t23-14.5l138-28q14-2 28.5 2.5T342-374l94 94q38-22 72-48.5t65-57.5q33-32 60.5-66.5T681-524l-97-98q-8-8-11-19t-1-27l26-140q2-13 13-22.5t25-9.5h162q18 0 30 12t12 30q0 125-54.5 247T631-329Q531-229 409-174.5T162-120Zm556-480q17-39 26-79t14-81h-88l-18 94 66 66ZM360-244l-66-66-94 20v88q41-3 81-14t79-28Zm358-356ZM360-244Z"/></svg>
        </symbol>
        <symbol id="email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
        </symbol>
        <symbol id="clock">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg> 
        </symbol>
        <symbol id="location">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960"><path d="M536.5-503.5Q560-527 560-560t-23.5-56.5Q513-640 480-640t-56.5 23.5Q400-593 400-560t23.5 56.5Q447-480 480-480t56.5-23.5ZM480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>
        </symbol>
    </svg> 
</body>
 </html>
