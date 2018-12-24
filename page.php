<?php get_header(); ?>
<header class="jumbotron jumbotron-fluid" id="header">
    <div class="d-flex justify-content-center heading">
        <img class="title-image" src="<?php echo get_template_directory_uri() . '/img/boat-1992136_1920.jpg' ?>" alt="Row boat in still water">
        <h1 id="centered" class="blog-title"><?php echo the_title(); ?></h1>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col">
            <!--If you are on a child page, the breadcrumb appears-->
            <?php
            $theParent = wp_get_post_parent_id(get_the_ID(get_the_ID()));

            if ($theParent) { ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                    </ol>
                </nav>
            <?php 
        } ?>
        </div>
    </div>
    
    <!--This row creates the spacing needed for the content and child page navigation-->
    <div class="row">
        <div class="col">
            <?php
            while (have_posts()) {
                the_post();
            }
            the_content(); ?> 
        </div class="col">
            <!--This is the navigation to the child page-->
            <div >
                <nav class="container navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo get_the_permalink($theParent) ?>"><?php echo get_the_title($theParent); ?></a>
                    <hr>
                    <div id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#">Features</a>
                            <a class="nav-item nav-link" href="#">Pricing</a>
                            <a class="nav-item nav-link disabled" href="#">Disabled</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>     
</div>
<?php get_footer(); ?>