<?php get_header(); ?>
<header class="jumbotron jumbotron-fluid" id="header">
    <div class="d-flex justify-content-center heading">
        <img class="title-image" src="<?php echo get_template_directory_uri() . '/img/boat-1992136_1920.jpg' ?>" alt="Row boat in still water">
        <h1 id="centered" class="blog-title"><?php echo the_title(); ?></h1>
    </div>
</header>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><?php the_category('/ '); ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
        </ol>
    </nav>
    <?php
    while (have_posts()) {
        the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?> 
    <?php 
} ?>
</div>
<?php get_footer(); ?>