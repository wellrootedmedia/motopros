<?php get_header(); ?>

        <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg">Learn more »</a></p>
        </div>

        <div class="starter-template">
            <?php
            if ( have_posts() ) :
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );

                endwhile;
                // Previous/next post navigation.
                //twentyfourteen_paging_nav();

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif;
            ?>
        </div>

<?php get_footer(); ?>