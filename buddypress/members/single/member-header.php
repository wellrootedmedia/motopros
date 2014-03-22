<?php

/**
 * BuddyPress - Users Header
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

global $bp;
global $current_user;
global $friends_template;

get_currentuserinfo();
$currentLoggedinUserId = $current_user->ID;
$user_id = $bp->displayed_user->id;
$location = xprofile_get_field_data ('Location', $user_id);
?>

<?php do_action( 'bp_before_member_header' ); ?>

<div id="item-header-avatar">
	<a href="<?php bp_displayed_user_link(); ?>">
		<?php bp_displayed_user_avatar( 'type=full' ); ?>
	</a>
</div><!-- #item-header-avatar -->

<div id="item-header-content">

    <img src="http://localhost/xampp/motopros/motopros.wellrootedmedia.com/wp-content/uploads/2014/03/Screen-Shot-2014-03-16-at-11.10.07-PM.png" />

    <div class="clear"></div>

    <a href="<?php bloginfo('url'); ?>/members/?s=<?php echo $location; ?>"><?php echo $location; ?></a>

	<?php if ( bp_is_active( 'activity' ) && bp_activity_do_mentions() ) : ?>
		<h2 class="user-nicename">

            <?php
            // Todo: This should be an option if they are friends
            // Not to be used if not friends.
//            if ( is_user_logged_in() ) :
//                if ($currentLoggedinUserId != $user_id) : ?>
<!--                    <a href="--><?php //bloginfo('url'); ?><!--/activity/?r=--><?php //bp_displayed_user_mentionname(); ?><!--">-->
<!--                        @--><?php //bp_displayed_user_mentionname(); ?>
<!--                    </a>-->
<!--                --><?php //else: ?>
<!--                    @--><?php //bp_displayed_user_mentionname(); ?>
<!--                --><?php
//                endif;
//            else:
//            ?>
<!--                @--><?php //bp_displayed_user_mentionname(); ?>
<!--            --><?php //endif; ?>
            @<?php bp_displayed_user_mentionname(); ?>
        </h2>
	<?php endif; ?>

	<span class="activity"><?php bp_last_activity( bp_displayed_user_id() ); ?></span>

	<?php do_action( 'bp_before_member_header_meta' ); ?>

	<div id="item-meta">

		<?php if ( bp_is_active( 'activity' ) ) : ?>

			<div id="latest-update">

				<?php bp_activity_latest_update( bp_displayed_user_id() ); ?>

			</div>

		<?php endif; ?>

		<div id="item-buttons">

			<?php do_action( 'bp_member_header_actions' ); ?>

		</div><!-- #item-buttons -->

		<?php
		/***
		 * If you'd like to show specific profile fields here use:
		 * bp_member_profile_data( 'field=About Me' ); -- Pass the name of the field
		 */
        //echo $location;
        do_action( 'bp_profile_header_meta' );
        ?>

        <div class="clear"></div>
        <br/>
        <div class="social-media">
            Social Media icons would go here...
        </div>

	</div><!-- #item-meta -->

</div><!-- #item-header-content -->

<?php do_action( 'bp_after_member_header' ); ?>

<?php do_action( 'template_notices' ); ?>