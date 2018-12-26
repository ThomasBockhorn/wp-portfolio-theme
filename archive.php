<?php get_header(); ?>
<header class="jumbotron jumbotron-fluid" id="header">
    <div class="d-flex justify-content-center heading">
        <img class="title-image" src="<?php echo get_template_directory_uri() . '/img/boat-1992136_1920.jpg' ?>" alt="Row boat in still water">
        <h1 id="centered" class="blog-title">Welcome to <?php echo single_cat_title(); ?></h1>
    </div>
</header>
<div class="container">
    <?php 
    while (have_posts()) {
        the_post(); ?>
    <div>
        <h2 class="blog-posts links"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </div>
    <div>
        <p id="blog-project-info">Posted by <?php the_author(); ?> on <?php the_time('n.j.y'); ?></p>
    </div>
    <div>
        <?php the_excerpt(); ?>
        <p><a class="badge badge-primary" href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></p>
    </div>
    <?php 
}
echo paginate_links(); ?>
</div>
<?php get_footer(); ?>