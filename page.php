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
        </div>
        
        <!--This is the navigation to the child page-->
        <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));

        if ($theParent or $testArray) { ?>
        <div class="col" >
            <nav class="container navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo get_the_permalink($theParent) ?>"><?php echo get_the_title($theParent); ?></a>
                <hr>
                <ul class="child-pages-links">
                    <?php

                    if ($theParent) {
                        $findChildren = $theParent;
                    } else {
                        $findChildren = get_the_id();
                    }

                    wp_list_pages(array(
                        'title_li' => null,
                        'child_of' => $findChildren
                    ));
                    ?>
                </ul>
            </nav>
        </div>
        <?php 
    } ?>
    </div>     
</div>
<?php get_footer(); ?>