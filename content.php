<div class="col-6 col-sm-6 col-lg-12">
    <header class="entry-header">
        <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) /*&& motopros_categorized_blog()*/ ) : ?>
            <div class="entry-meta">
                <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'motopros' ) ); ?></span>
            </div>
        <?php
        endif;

        if ( is_single() ) :
            the_title( '<h2 class="entry-title">', '</h2>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;
        ?>

        <div class="entry-meta">
            <?php
            if ( 'post' == get_post_type() )
                //motopros_posted_on();

                if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                    ?>
                    <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'motopros' ), __( '1 Comment', 'motopros' ), __( '% Comments', 'motopros' ) ); ?></span>
                <?php
                endif;

            edit_post_link( __( 'Edit', 'motopros' ), '<span class="edit-link">', '</span>' );
            ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <?php if ( is_search() ) : ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'motopros' ) );
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'motopros' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ) );
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>

    <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</div>