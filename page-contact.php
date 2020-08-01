<?php
/* Template Name: Shop-ContactUs */
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

<?php
		while ( have_posts() ) :
			the_post();
?>

<section id="contact" class="text-center">
    <div class="container">
        <div class="section-heading">
            <span class="underline-left"></span>
                <h2><?php the_title(); ?></h2>
            <span class="underline-right"></span>
        </div>
        <h4>Can't find what your looking for in our store? Why not get in touch!</h4>
        <div class="row text-left">
            <div class="col-sm-12">
                <form>
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="" placeholder="Add your name...">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="" placeholder="Add your email address...">
                    <label>Telephone</label>
                    <input class="form-control" type="email" name="telephone" value="" placeholder="Add your telephone...">

                    <input class="btn btn-carousel" type="submit" name="submit" value="submit">
                </form>
            <p><?php the_content(); ?></p>
            
            </div>
        </div>
    </div>
</section>

<?php
		endwhile; // End of the loop.
		?>

<?php
//get_sidebar();
get_footer();
