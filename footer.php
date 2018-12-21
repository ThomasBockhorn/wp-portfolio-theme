<!--The footer template-->
<div class="footer" id="footer-space">
  <div class="container">
    <div class="row">
        <div class= "col-lg-4 col-md-6">
            <h1 class="display-4"><?php echo get_bloginfo('name') ?></h1>
            <div>113 Sweet Hollow Way NW</div>
            <div>Madison, AL 35757</div>
            <div>(256)679-6197</div>
            <div>ThomasBockhorn@Tecktonet.com</div>
        </div>
        <div class="col-lg-2" id="footer-tags">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerLocationOne',
                'menu_class' => 'navbar-nav'
            ));
            ?>
        </div>
        <div class="col-lg-2" id="footer-tags">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footerLocationTwo',
            'menu_class' => 'navbar-nav'
        ));
        ?>
        </div>
        <div class="col-lg-4 col-md-6" id="social-media">
            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>