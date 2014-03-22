
</div><!-- /col-xs-12 col-sm-9 -->

<?php get_sidebar(); ?>

</div><!-- /.container -->
</div>

<div id="footer">
    <div class="footer-container">
        <p class="text-muted credit">&copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <?php _e(date('Y')); ?></p>
    </div>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-48552147-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/holder.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/jquery/jquery-hover.js"></script>


<script type="text/javascript">
    jQuery(function(){
        jQuery( "#tabs" ).tabs();

        jQuery("#menu-main-menu .menu-item").DropDownAddClass();

        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this)
                .find('.dropdown-menu')
                .stop(true, true)
                .delay(200)
                .fadeIn();
        }, function() {
            jQuery(this)
                .find('.dropdown-menu')
                .stop(true, true)
                .delay(200)
                .fadeOut();
        });
    });
</script>