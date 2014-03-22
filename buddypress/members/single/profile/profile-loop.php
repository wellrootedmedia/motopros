<?php do_action( 'bp_before_profile_loop_content' ); ?>

<?php
//echo getBpUserFirstLastName();

$user_id = $bp->displayed_user->id;
$profession = display_user_profession();

switch($profession) {
    case "Media Pro" :
        bp_get_template_part( 'members/media-pro' );
        break;
    default:
        echo "no here";

}
?>
<style>
    .services-items {
        border:1px solid #000; padding: 10px; float: left; width: 232px;
    }
</style>
<div>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <div class="mp-widget">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Services Avalable</a></li>
                        <li><a href="#tabs-2">Other Services</a></li>
                        <li><a href="#tabs-3">Work History</a></li>
                    </ul>
                    <div id="tabs-1">
                        <div class="services-items">Brakes, Rebuilds, Bleeding</div>
                        <div class="services-items">Clutch, Ajust, Replace</div>
                        <div class="services-items">Clutch, Ajust, Replace</div>
                        <div class="services-items">Clutch, Ajust, Replace</div>
                        <div class="services-items">Clutch, Ajust, Replace</div>
                        <div class="services-items">Clutch, Ajust, Replace</div>
                        <div class="clear"></div>
                    </div>

                    <div id="tabs-2">
                        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                    </div>

                    <div id="tabs-3">
                        <table style="width: 100%">
                            <tr>
                                <td style="padding: 7px; background: lightblue; border: 1px solid #000;">Employer</td>
                                <td style="padding: 7px; background: lightblue; border: 1px solid #000;">Date</td>
                                <td style="padding: 7px; background: lightblue; border: 1px solid #000;">Job Description</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #000; padding: 7px;">Billy Laninovich</td>
                                <td style="border: 1px solid #000; padding: 7px;">Feb 8 2012 - Present</td>
                                <td style="border: 1px solid #000; padding: 7px;">Race Mechanic</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>