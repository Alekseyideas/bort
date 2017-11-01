<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bort
 */

?>






<script>

    function initMap(){var e=new google.maps.Map(document.getElementById("map"),{zoom:13,center:{lat:55.75601919,lng:37.61747156},styles:[{featureType:"all",elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#000000"},{lightness:40}]},{featureType:"all",elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#000000"},{lightness:16}]},{featureType:"all",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:17},{weight:1.2}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#000000"},{lightness:20}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#000000"},{lightness:21}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#000000"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#000000"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#000000"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#000000"},{lightness:16}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#000000"},{lightness:19}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"},{lightness:17}]}]});new google.maps.Marker({position:{lat:55.75601919,lng:37.61747156},map:e,icon:"<?php echo get_template_directory_uri()?>/images/page-6/baloon.svg"})}
</script>



    <div class="site-lines">
        <div class="site-line site-line--1"></div>
        <div class="site-line site-line--2"></div>
        <div class="site-line site-line--3"></div>
        <div class="site-line site-line--4"></div>
    </div>



    <div class="popUpForm">
        <div class="container">
            <div class="flex flex--j-between popUpLogoBtn">
                <div class="popUplogo">
                    <img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="logo">
                </div>
                <div class="btn_close"><img src="<?php echo get_template_directory_uri()?>/images/close.svg" alt="close"></div>



            </div>
            <div class="page-5">
                <h1 class="page-5__title">
                    Станьте нашим водителем
                </h1>

		        <?php
		        echo  do_shortcode('[contact-form-7 id="63" title="Оставить заявку" html_class="page-5__form"]');
		        ?>
            </div>
        </div>



    </div>
<div class="menu-toggle"><img src="<?php echo get_template_directory_uri()?>/images/icon-menu.svg" alt=""></div>
<?php wp_footer(); ?>

</body>
</html>
