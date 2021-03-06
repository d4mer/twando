<?php
/*
Twando.com Free PHP Twitter Application
http://www.twando.com/
*/

if (!$content_id) {
exit;
}
global $db, $ap_creds;

if (!empty($_GET['msg']))
{
if ((int)$_GET['msg']>0) {
 $response_msg = mainFuncs::push_response((int)$_GET['msg']);
}
} else {
$response_msg = "";
}
?>
<?php
if ( (!$ap_creds['consumer_key']) or (!$ap_creds['consumer_secret']) ) {
?>
<h2>Register Your Application</h2>
Before you can start using Twando, you must first register your application with Twitter.
<ol>
 <li>First, <a href="install_tables.php">click here to install the MySQL tables</a> if you have not done so already.</li>
 <li>Next, visit <a href="https://dev.twitter.com/apps/new" target="_blank">https://dev.twitter.com/apps/new</a>;  you will need to sign in to your Twitter account to register an app.</li>
 <li>Enter the values as demonstrated in <a href="inc/images/reg_ap.jpg" target="_blank">this picture</a>; your application URL is <b><?=BASE_LINK_URL?></b>; your callback URL is <b><?=BASE_LINK_URL . 'callback.php'?></b>.</li>
 <li>You will then be given a consumer key and consumer secret (<a href="inc/images/reg_ap2.jpg" target="_blank">example</a>). Enter these in the boxes below to complete the setup of your Twitter app.</li>
 <li>You must also make sure your application is set with <b>read/write access</b> on the settings page; <a href="inc/images/reg_ap3.jpg" target="_blank">click here to view</a>.</li>
</ol>
<form method="post" class="form-horizontal" action="<?=BASE_LINK_URL?>">
<label>Consumer Key:</label><br />
<input type="text" name="consumer_key" size="20" class="form-control" value="<?=$_POST['consumer_key']?>" style="width: 350px;" />
<br />
<label>Consumer Secret:</label><br />
<input type="text" name="consumer_secret" size="20" class="form-contrl" value="<?=$_POST['consumer_secret']?>" style="width: 350px;"  />
<br />
<input type="submit" value="Save Values!" name="login" id="login" class="btn btn-default" />
<input type="hidden" name="a" value="savekeys2" />
</form>
<?php
} else {
?>

<h2>Application Details</h2>
<p class="alert alert-success">Your application has been registered with a consumer key and a consumer secret. If you would like to update
these credentials, please <a href="javascript:void(0);" onclick="$('#cred_update_div').toggle();">click here</a>.</p>
<div id="cred_update_div" class="form-group" style="display: none;">
<form method="post" class="form-horizontal" action="<?=BASE_LINK_URL?>">
<label>Consumer Key:</label><br />
<input type="text" name="consumer_key" size="20" class="form-control" value="<?=$ap_creds['consumer_key']?>"  />
<br />
<label>Consumer Secret:</label><br />
<input type="text" name="consumer_secret" size="20" class="form-control" value="<?=$ap_creds['consumer_secret']?>"   />
<br />
<input type="submit" value="Save Values!" name="login" id="login" class="btn btn-default" />
<input type="hidden" name="a" value="savekeys2" />
</form>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Authorized Twitter Accounts</h2>
    </div>
    <?php
     if ($response_msg) {
      echo '<div id="index_resp_msg">' . $response_msg . '</div>';
     }
    ?>
    <div id="twitter_user_table" class="panel-body">
     &nbsp;
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Account Authorizations</h2>
    </div>
    <div class="panel-body">
        <p class="alert alert-success">To authorize another account, make sure you are either signed out of all accounts or signed into the account you want to authorize on <a href="https://twitter.com/" target="_blank">Twitter</a> before clicking the button below.</p>
    </div>

    <a href="redirect.php"><button type="submit" value="Sign in With Twitter" class="btn btn-primary btn-lg btn-block" ><i class="fa fa-twitter-square" style="font-size:24px;" aria-hidden="true"></i> Sign in With Twitter</button></a>

</div>
<!--<h2>Further Options</h2>
<a href="multi_account_functions.php">Multi account functions</a><br />  
<a href="cron_instructions.php">Cron job instructions</a><br />-->
<?php
//End of application registered
}
?>
