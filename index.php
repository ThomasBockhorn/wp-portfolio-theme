<?php get_header(); ?>
<header>
    <div class="text-center container">
        <h1>Welcome to my Blog</h1>
    </div>
</header>
<div class="container">
    <?php 
    while (have_posts()) {
        the_post(); ?>
    <div>
        <h2 class="blog-posts"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <?php 
} ?>
</div>




<?php paginate_links(); ?>
<?php get_footer(); ?>
    
