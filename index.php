<?php get_header(); ?>
<header class="jumbotron jumbotron-fluid" id="header">
    <div class="d-flex justify-content-center heading">
        <img class="title-image" src="<?php echo get_template_directory_uri() . '/img/code-1839406_1920.jpg' ?>" alt="Coding">
        <h1 id="centered" class="blog-title"><?php echo single_cat_title(); ?></h1>
    </div>
</header>
<div class="container">
    <?php 
    while (have_posts()) {
        the_post(); ?>
    <div>
        <h2 class="blog-posts"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
    <?php 
} ?>
</div>




<?php paginate_links(); ?>
<?php get_footer(); ?>
    
