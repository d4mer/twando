<?php
/*
Twando.com Free PHP Twitter Application
http://www.twando.com/
*/

if (!$content_id) {
exit;
}
global $q1a, $response_msg;
?>
<h2>Follow / Unfollow Settings for <?=htmlentities($q1a['screen_name'])?></h2>
<?php
if ($q1a['id'] == "")  {
 echo mainFuncs::push_response(7);
} else {
?>
<div class="nav nav-tabs">
    <input type="hidden" name="twitter_id" id="twitter_id" value="<?=$q1a['id']?>" />
    <li class="tab_main" id="tab1">
        <a href="javascript:ajax_follow_settings_tab('tab1');">Auto Follow Settings</a>
    </li>
    <li class="tab_main" id="tab2">
        <a href="javascript:ajax_follow_settings_tab('tab2');">Unfollow Exclusions</a>
    </li>
    <li class="tab_main" id="tab3">
        <a href="javascript:ajax_follow_settings_tab('tab3');">Follow Exclusions</a>
    </li>
    <li class="tab_main" id="tab4">
        <a href="javascript:ajax_follow_settings_tab('tab4');">Auto DM Message</a>
    </li>
    <li class="tab_main" id="tab5">
        <a href="javascript:ajax_follow_settings_tab('tab5');">Search to Follow</a>
    </li>
</div>

<br style="clear: both;" />
<div id="update_div">
 &nbsp;
</div>
<?php
//End of valid id
}
?>
<br style="clear: both;" />
<a href="<?=BASE_LINK_URL?>">Return to main admin screen</a>

