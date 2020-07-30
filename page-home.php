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

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

            //the_title();
             //the_content();  


		endwhile; // End of the loop.
        ?>
        

        <!-- FEATURED PRODUCTS -->
        <h1>Featured Products</h1>
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
                    
                    $product = wc_get_product( $featured_query->post->ID );
                    $price = $product->get_price_html();
                    
            ?>
            <div class="featured-product">
                <a href="<?php the_permalink(); ?>">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <?php echo $price; ?>
            </div>
            <?php
                    
                    
                endwhile;
                
            }
            ?>
        <!-- FEATURED PRODUCTS -->



        <!-- BEST SELLING PRODUCTS -->
        <h1>Best Selling Products</h1>
        <?php
        $number = 6;
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
                    
                    $product = wc_get_product( $featured_query->post->ID );
                    $price = $product->get_price_html();
                    
            ?>
            <div class="featured-product">
                <a href="<?php the_permalink(); ?>">
                    <?php echo woocommerce_get_product_thumbnail(); ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <?php echo $price; ?>
            </div>
            <?php
                    
                    
                endwhile;
                
            }
            ?>
        <!-- BEST SELLING PRODUCTS -->


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
