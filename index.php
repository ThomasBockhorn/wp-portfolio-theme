<?php get_header(); ?>
<header>
    <div class="text-center container">
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
    
