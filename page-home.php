<?php
/* Template Name: Shop-CustomHomePage */
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




		<?php
		while ( have_posts() ) :
			the_post();

            //the_title();
             //the_content();  


		endwhile; // End of the loop.
        ?>

        <!-- Featured Products -->

        <section id="featured-products" class="text-center">
            <div class="section-heading">
                <span class="underline-left"></span>
                <h2>Featured Products</h2>
                <span class="underline-right"></span>
                </div>
                <h4>Must have products from our top sellers</h4>
                <div class="container text-left">
                <div class="row">



                <?php
                $meta_query  = WC()->query->get_meta_query();
                $tax_query   = WC()->query->get_tax_query();
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                );
                
                $args = array(
                    'post_type'           => 'product',
                    'post_status'         => 'publish',
                    'posts_per_page'      => 10,
                    'meta_query'          => $meta_query,
                    'tax_query'           => $tax_query,
                );
                
                $featured_query = new WP_Query( $args );
                    
                if ($featured_query->have_posts()) {
                
                    while ($featured_query->have_posts()) : 
                    
                        $featured_query->the_post();
                        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );                        
                        $product = wc_get_product( $featured_query->post->ID );
                        $price = $product->get_price_html();
                        
                ?>

                <div class="col-6 col-md-3 col-sm-6">
                <a href="<?php the_permalink(); ?>">
                        <?php //echo woocommerce_get_product_thumbnail(); ?>
                        <img src="<?php echo $backgroundImg[0]; ?>" alt="Featured Products">
                        
                </a>
                    <h5><?php the_title(); ?></h5>
                    <p>Accessories, Men</p>
                    <p class="price"><?php echo $price; ?></p>
                </div>
                
                



                <?php   endwhile;             
                }
                ?>

                </div>
            </div>
        </section>

        <!-- End Featured Products -->


        <!-- Seasonal Collection -->
        <section id="seasonal-collection-2">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-sm-4 seasonal-box-2">
                        <div class="seasonal-box-text box-1">
                            <h2>Winter Collection</h2>
                            <h4>STYLISH AND WARM</h4>
                            <a class="btn btn-carousel" href="#">VIEW MORE</a>
                        </div>
                        <img class="seasonal-img-1" src="<?php bloginfo('stylesheet_directory'); ?>/images/winter-collection.jpg" alt="Winter Collection">
                    </div>
                    <div class="col-sm-4 seasonal-box-2">
                        <div class="seasonal-box-text box-2">
                            <h2>Spring Collection</h2>
                            <h4>BRIGHT AND COLOURFUL</h4>
                            <a class="btn btn-carousel" href="#">VIEW MORE</a>
                        </div>  
                        <img class="seasonal-img-2" src="<?php bloginfo('stylesheet_directory'); ?>/images/spring-collection.jpg" alt="Spring Collection">  
                    </div>
                    <div class="col-sm-4 seasonal-box-2">
                        <div class="seasonal-box-text box-3">
                            <h2>Autumn Collection</h2>
                            <h4>RICH AND COMFORTABLE</h4>
                            <a class="btn btn-carousel" href="#">VIEW MORE</a>
                        </div>
                        <img class="seasonal-img-3" src="<?php bloginfo('stylesheet_directory'); ?>/images/autumn-collection.jpg" alt="Autumn Collection">    
                    </div>
                </div>
            </div>        
        </section>
        <!-- Seasonal Collection --> 



        <!-- Best Sellers -->
        <section id="best-seller" class="text-center">
            <div class="section-heading">
                <span class="underline-left"></span>
                <h2>Best Sellers</h2>
                <span class="underline-right"></span>
            </div>
            <h4>Must have products from our top sellers..</h4>
            <div class="container text-left">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme">



                            <?php
                            $number = 10;
                                $args = array(
                                    'posts_per_page' => $number,
                                    'post_status'    => 'publish',
                                    'post_type'      => 'product',
                                    'no_found_rows'  => 1,
                                    'meta_key'       => 'total_sales',
                                    'orderby'        => 'meta_value_num',
                                    'order'          => 'desc',
                                    'meta_query'     => array(),
                                    'tax_query'      => array(
                                        'relation' => 'AND',
                                    ),
                                );
                                
                                $featured_query = new WP_Query( $args );
                                    
                                if ($featured_query->have_posts()) {
                                
                                    while ($featured_query->have_posts()) : 
                                    
                                        $featured_query->the_post();
                                        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
                                        $product = wc_get_product( $featured_query->post->ID );
                                        $price = $product->get_price_html();
                                        
                                ?>



                                <div class="item">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php //echo woocommerce_get_product_thumbnail(); ?>
                                        <img src="<?php echo $backgroundImg[0]; ?>" alt="Featured Products">
                                    </a>
                                </div>            


                                <?php
                                    endwhile;
                                }
                                ?>


                        </div>
                    </div>

                </div>
            </div>
            </section>
    
    <!-- End Best Sellers -->       



    <!-- Two Panels -->
    <section id="two-panels">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 promo-wrapper">
                    <div class="promo-box-text box-1">
                        <h2>70% Off</h2>
                        <p>Vivamus tempor leo lacus, feugiat ut magna aliquam erat.</p>
                        <a class="btn btn-carousel">VIEW MORE</a>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/promo-box-1.jpg" class="two-panels-img-1">
                </div>
                <div class="col-sm-6">
                    <div class="promo-box-text box-2">
                        <h2>Free Shipping</h2>
                        <p>Vivamus tempor leo lacus, feugiat ut magna aliquam erat.</p>
                        <a class="btn btn-carousel">VIEW MORE</a>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/promo-box-2.jpg" class="two-panels-img-2">
                </div>
            </div>
        </div>
    </section>
    <!-- Two Panels -->




        <!-- Testimonials -->
        <section id="testimonials">
        <div class="container testimonials text-center">

            <div id="carouselExampleControls2" class="carousel slide carousel-fade" data-ride="carousel">

 

                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <div class="carousel-text">
                          <div class="profile-pic"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profile-pic-1.png"></div>
                        <em>Curabitur non tristique tortor. Vestibulum aliquet suscipit ipsum in volutpat. Donec vel lacinia sem, vitae semper nulla. In hac habitasse platea dictumst. Mauris consectetur est et nibh sadip hendrerit bibendum. </em>
                        <h5>Elana Jones, Bletchley MK</h5>

                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="carousel-text">
                        <div class="profile-pic"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/profile-pic-2.png"></div>
                        <em>Proin blandit metus vel magna dignissim varius. Morbi enim lorem, sollicitudin vitae ante nec, rutrum venenatis neque. In mi augue, iaculis nec dui ac, condimentum consequat velit. Ut et metus justo. </em>
                        <h5>Lisa Smith, Peterborough</h5>
    
                    </div>
                  </div>

                </div>

                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                  </ol>

              </div>
                <!-- <img src="images/testimonial-bg.jpg" alt="testimonials"> -->
        </div>
    </section>
    <!-- Testimonials -->


    <!-- From Our Blog -->
    <section id="blog" class="text-center">
        <div class="section-heading">
            <span class="underline-left"></span>
            <h2>From Our Blog</h2>
            <span class="underline-right"></span>
        </div>
        <h4>The latest Classic Shop news</h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-1.jpg" alt="Blog 1">
                    <h5>Aenean lobortis sapien enim viverra</h5>
                    <p class="date">September 9th, 2015|0 Comments</p>
                    <p>Donec finibus sit amet orci eget ultricies. Praesent posuere ante ut erat fringilla</p>
                </div>
                <div class="col-sm-4 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-2.jpg" alt="Blog 2">
                    <h5>Aenean lobortis sapien enim viverra</h5>
                    <p class="date">September 9th, 2015|0 Comments</p>
                    <p>Donec finibus sit amet orci eget ultricies. Praesent posuere ante ut erat fringilla,</p>
                </div>
                <div class="col-sm-4 text-left">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/blog-3.jpg" alt="Blog 3">
                    <h5>Aenean lobortis sapien enim viverra</h5>
                    <p class="date">September 9th, 2015|0 Comments</p>
                    <p>Donec finibus sit amet orci eget ultricies. Praesent posuere ante ut erat fringilla,</p>
                </div>
            </div>
        </div>
    </section>
    <!-- From Our Blog -->

    <!-- Brand Logos -->
    <section id="brand-logos" class="text-center">
        <h4>BRAND LOGOS</h4>
        <div class="container text-left">
            <div class="row">

                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-1.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-2.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-3.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-4.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-5.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-6.png" alt="Brand Logo" class="brand-logo">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-7.png" alt="Brand Logo" class="brand-logo">
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- Brand Logos -->




<?php
//get_sidebar();
get_footer();
