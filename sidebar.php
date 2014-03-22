<div class="col-md-4">
    <div class="advertisement">
        <img
            data-src="<?php echo get_template_directory_uri(); ?>/assets/js/holder.js/300x250/#a3e29e:#82b47e/text:Advertisement 300x250"
            alt="728x90" src="data:image/jpg;base64,">
    </div>

    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <div class="mp-widget">
            <div class="mp-widget-top">
                <div class="mp-widget-title">OUR SPONSORS</div>
            </div>
            <div class="textwidget">
                <p>
                    <a href="http://www.lanomx.com/" target="_blank&quot;">
                        <img src="http://motopros.com/wp-content/uploads/2013/05/Screen-shot-2013-05-01-at-10.20.14-AM.png" border="0">
                    </a>
                </p>
                <p>
                    <a href="http://thrivemotorsportsmarketing.com/" target="_blank&quot;" title="Thrive Motorsport Marketing">
                        <img src="http://motopros.com/wp-content/uploads/2014/03/thrive_logo_large.png" border="0">
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <div class="mp-widget">
            <div class="mp-widget-top">
                <div class="mp-widget-title">Trainer of the week</div>
            </div>
            <div class="trainer-wrapper">
                <?php $location = bp_get_profile_field_data('field=Location&user_id=1'); ?>
                <a href="<?php echo bp_core_get_user_domain( 1 ) ?>" title="<?php echo bp_core_get_user_displayname( $member ) ?>">
                    <?php echo bp_core_fetch_avatar ( array( 'item_id' => 1, 'type' => 'full', 'width' => 290, 'height' => 192 ) ) ?>
                    <br />
                    <span class="trainer-name"><?php echo bp_core_get_username(1); ?><br/><?php _e($location); ?></span>
                    <br/>
                </a>
            </div>
        </div>
    </div>

    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>

    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <div class="mp-widget">
            <div class="mp-widget-top">
                <div class="mp-widget-title">Search Users</div>
            </div>
            <div class="search-user-wrapper">
                <form action="<?php echo bloginfo('url'); ?>/members/" method="get" id="search-members-form">
                    <input type="text" name="s" id="members_search" class="search-by-user" placeholder="<?php _e('Search By Name', 'buddypress'); ?>" />
                    <input type="submit" id="members_search_submit" class="search-user-submit" name="members_search_submit" value="<?php _e( 'Search', 'buddypress' ); ?>" />
                </form>
            </div>
        </div>
    </div>

</div>