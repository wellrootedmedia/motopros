<?php
/*
 * Template Name: homepage
 */


$getCurrentGeoLoc = getCurrentGeoLocation();
$newData = json_decode($getCurrentGeoLoc, true);

$currentLat = $newData['lat'];
$currentLong = $newData['long'];

//echo $currentLat . " " . $currentLong;

?>
<?php get_header(); ?>
    <!-- Todo: need to add the google maps thing here -->

<!--    <div class="jumbotron">-->
<!--        --><?php //get_template_part('inc/content', 'googlemap'); ?>
<!--    </div>-->

    <div class="jumbotron">
<!--        <h1>Jumbotron heading</h1>-->
<!--        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
        <p><a class="btn btn-lg btn-success" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Register' ) ) ); ?>">Sign up today</a></p>
    </div>

    <div class="starter-template">
<!--        <h1>Bootstrap starter template</h1>-->
<!--        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>-->

    </div>

<?php get_footer(); ?>