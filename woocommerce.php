<?php
/* Template Name: Shop-Page */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Store
 */

get_header();
?>

<!-- Main Carousel -->
<section id="carousel" class="text-center">
    
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item slide-1 active">
              <div class="carousel-text">
                <h1>Avada Classic Shop</h1>
                <h4>SHOW YOUR PRODUCTS WITH STYLE</h4>
                <a class="btn btn-carousel" href="#">FIND OUT MORE</a>
            </div>
          </div>
          <div class="carousel-item slide-2">
            <div class="carousel-text">
                <h1>Lookbook 2015</h1>
                <h4>SHOW YOUR PRODUCTS WITH STYLE</h4>
                <a class="btn btn-carousel" href="#">FIND OUT MORE</a>
            </div>
          </div>
          <div class="carousel-item slide-3">
            <div class="carousel-text">
                <h1>Brand New Arrivals</h1>
                <h4>NEW COLLECTION FROM NEW YORK</h4>
                <a class="btn btn-carousel" href="#">FIND OUT MORE</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</section>
<!-- End Main Carousel -->

<section id=shop class="aaa">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-3 col-lg-4">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-md-12 col-xl-9 col-lg-8 shop-column">
                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</section>








<?php

get_footer();
