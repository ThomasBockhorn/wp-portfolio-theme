<?php get_header(); ?>
<header>
    <div class="text-center container">
        <img src="<?php echo get_template_directory_uri() . '/img/abstract-1278044_1920.jpg' ?>" alt="">
        <h1>Welcome to my Blog</h1>
    </div>
</header>
<?php 
while (have_posts()) {
    the_post(); ?>
    
<?php 
} ?>





<?php paginate_links(); ?>
<?php get_footer(); ?>
    
