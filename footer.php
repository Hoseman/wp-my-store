<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Store
 */

?>


    <!-- Footer -->
    <footer id="footer">
        <div class="container-fluid footer-container">
            <div class="row">
                <div class="col-sm-12"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-white.svg" alt="ACH Creative Photography" width="150"> </div>
                <div class="col-md-9 col-sm-12">
                    <span class="footer-copyright">
                        Copyright 2020 <a target="_blank" href="#" >ACH Creative. All rights reserved. All images &copy; 2017-2020 Andrew Hosegood</a><br><br>
                        All images on this website are under the copyright of Andrew Hosegood. You may not sell, publish, licence, copy, store digitally or otherwise distribute any of these images without the written permission of the photographer. Copyright in all Material is retained worldwide by the Photographer at all times and nothing shall be deemed as a release, transfer, assignment or other disposal of the Photographer’s rights in the Material.
                    </span>
                </div>
                <div class="col-md-3 col-sm-12">
                    <ul class="pull-right">
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                        <!-- <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li> -->
                    </ul>
                    <!-- <a onclick="scrollToTop()" href="#">scroll to top</a> -->
                    
                </div>
                <div class="col-sm-12 mt-5">
                    <a class="scrolltop pull-right" onclick='window.scrollTo({top: 0, behavior: "smooth"});'><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
    






<?php wp_footer(); ?>

</body>
</html>
