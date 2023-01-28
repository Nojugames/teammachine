<?php //get_sidebar(); ?>
</div>
<footer id="footer" class="" role="contentinfo">
    <div class="container">
        <div class="row footer-center">
            <div class="text-center text-md-start col-md-4">
                <?php
                $footer_logo_id = get_theme_mod('teammachine_footer_logo');
                $footer_logo = wp_get_attachment_image_src($footer_logo_id, 'full');

                if (has_custom_logo()) {
                    echo '<a href="' . esc_url(home_url('/')) . '"><img class="footer-logo" src="' . esc_url($footer_logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
                <?php //get_template_part('elements/social', 'media'); ?>
                <p>
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.
                    © 2018 Qode Interactive, All Rights Reserved
                </p>
                <p class="text-white">
                    &copy; <?php echo esc_html(date_i18n(__('Y', 'teammachine'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
                    Oy</p>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>

        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>