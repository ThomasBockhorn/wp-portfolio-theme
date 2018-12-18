<!--The footer template-->
<div class="jumbotron jumbotron-fluid sticky-bottom">
  <div class="container">
    <div class="row">
        <div class= "col-lg-4 col-md-12">
            <h1 class="display-4"><?php echo get_bloginfo('name') ?></h1>
            <div>113 Sweet Hollow Way NW</div>
            <div>Madison, AL 35757</div>
            <div>(256)679-6197</div>
            <?php echo date('Y'); ?>
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
        <div class="col-lg-4 col-md-12">
            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>