<?php get_header(); ?>
<div class="jumbotron jumbotron-fluid" id="header">
  <div id="header-container">
    <div class="d-flex justify-content-center heading" id="main-title">
      <h4 id="web-title"><?php echo bloginfo('description') ?></h4>
    </div>
    <img class="img-responsive" src= "<?php echo get_template_directory_uri() . '/img/blurred-background-close-up-coffee-cup-908284.jpg' ?>" 
    alt="Apple laptop with coffee mug" id="header-image">
  </div>
</div>
<div class="jumbotron jumbotron-fluid bg-dark text-white">
  <div class="container" id="design-image">
    <h1 class="display-4 d-flex justify-content-center heading">Design</h1>
    <div class="container justify-content-center">
      <div class="row" id="design-maxim">
        <div class="col-lg-2 col-sm-12"><img class="rounded" src="<?php echo get_template_directory_uri() . '/img/stones-801756_1920.jpg' ?>" alt="Stacked stones" width="150" height="150"></div>
        <div class="col-lg-10" id="maxim"><p>Websites need a central simple focus.<p></div>
      </div>
      <div class="row" id="design-maxim">
        <div class="col-lg-2 col-sm-12"><img class="rounded" src="<?php echo get_template_directory_uri() . '/img/boat-1992136_1920.jpg' ?>" alt="Row boat in still water" width="150" height="150"></div>
        <div class="col-lg-10" id="maxim"><p>Visuals are greatly enhanced by empty space.</p></div>
      </div>
      <div class="row" id="design-maxim">
        <div class="col-lg-2 col-sm-12"><img class="rounded" src="<?php echo get_template_directory_uri() . '/img/birds-2037459_1920.png' ?>" alt="Birds perched on a tree at night time" width="150" height="150"></div>
        <div class="col-lg-10" id="maxim"><p>The careful use of color brings emotions that engage the audience.</p></div>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron jumbotron-fluid" id="services">
<h1 class="display-4 d-flex justify-content-center heading">Services</h1>
<div class="container" id="services_container">
  <div class="row">
    <div class="card col-lg-4 col-md-12" style="width: 18rem;" id="service_card">
        <img class="card-img-top" id="service_image" src="<?php echo get_template_directory_uri() . '/img/business-cellphone-communication-248512.jpg' ?>" alt="cellphone communication">
      <div class="card-body">
        <p class="card-text">Websites that work on all devices</p>
      </div>
    </div>
    <div class="card col-lg-4 col-md-12" style="width: 18rem;" id="service_card">
        <img class="card-img-top" id="service_image" src="<?php echo get_template_directory_uri() . '/img/business-close-up-commerce-266176.jpg' ?>">
      <div class="card-body">
        <p class="card-text">Search Engine Optimization that increases web traffic to your site</p>
      </div>
    </div>
      <div class="card col-lg-4 col-md-12" style="width: 18rem;" id="service_card">
        <img class="card-img-top" id="service_image" src="<?php echo get_template_directory_uri() . '/img/bandwidth-close-up-computer-1148820.jpg' ?> ?>">
      <div class="card-body">
        <p class="card-text">Proper hosting so that your site can handle the traffic</p>
      </div>
    </div> 
  </div>  
</div>
<?php get_footer(); ?>