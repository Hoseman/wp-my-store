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
                <div class="col-sm-12"><img src="images/ach-logo.png" alt="ACH Creative Photography" width="150"> </div>
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
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>





<?php wp_footer(); ?>

</body>
</html>
