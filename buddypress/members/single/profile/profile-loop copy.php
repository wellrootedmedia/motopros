<?php do_action( 'bp_before_profile_loop_content' ); ?>

<?php
global $bp;

$userid = $bp->loggedin_user->id;
$user_info = get_userdata($userid);
echo $user_info->first_name . $user_info->last_name . "\n";

//$userFullName = $bp->loggedin_user->fullname;
//echo $userFullName . "<br/>";
//echo "display name " . bp_core_get_user_displayname( $userid ) . "<br/>";
//echo $bp->displayed_user->fullname . "<br/>";
?>

<?php if ( bp_has_profile() ) : ?>

    <?php if ( is_user_logged_in() ) : ?>

        <?php bp_get_template_part( 'activity/post-form' ); ?>

    <?php endif; ?>

	<?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

		<?php if ( bp_profile_group_has_fields() ) : ?>

			<?php do_action( 'bp_before_profile_field_content' ); ?>

			<div class="bp-widget <?php bp_the_profile_group_slug(); ?>">

				<h4><?php bp_the_profile_group_name(); ?></h4>

				<table class="profile-fields">

                    <?php
                    //echo '<pre>';
                    //print_r(bp_profile_fields());
                    //echo '</pre>';
                    ?>

					<?php $i = 0; while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

						<?php if ( bp_field_has_data() ) :

                            if ($i % 2 == 0) : ?>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?php bp_the_profile_field_name(); ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php bp_the_profile_field_value(); ?>
                                    </div>
                                </div>

                            <?php endif; ?>

						<?php endif; ?>

						<?php do_action( 'bp_profile_field_item' ); ?>

					<?php $i++; endwhile; ?>

				</table>
			</div>

			<?php do_action( 'bp_after_profile_field_content' ); ?>

		<?php endif; ?>

	<?php endwhile; ?>

	<?php do_action( 'bp_profile_field_buttons' ); ?>

<?php endif; ?>

<?php do_action( 'bp_after_profile_loop_content' ); ?>
