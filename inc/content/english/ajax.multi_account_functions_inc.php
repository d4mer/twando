<?php
/*
Twando.com Free PHP Twitter Application
http://www.twando.com/
*/
//Show content here
 if ($_REQUEST['tab_id']) {
  //Show content based on tab ID
  switch ($_REQUEST['tab_id']) {
    case 'tab1':
?>
<div class="panel panel-default">
    <div class="panel-heading">
<h2>Cross Follow Accounts</h2>
<?=$response_msg?>
            </div>

<form method="post"  class="form-horizontal" action="" name="crossfollow_form" id="crossfollow_form" onsubmit="ajax_multi_account_update('tab1','crossfollow_form'); return false;">
    <div class="form-group">
        <div class="col-md-8">
            <br />&nbsp;&nbsp;<select name="cross_op" id="cross_op" class="btn btn-primary dropdown-toggle" style="width: 95px;">
             <option value="1" selected="selected">Follow</option>
             <option value="2">Unfollow</option>
            </select>&nbsp;&nbsp;all your accounts from all your other accounts?<br />
            <input type="hidden" name="a" value="cross_go" />
        </div>

        <br /><input type="submit" value="Cross Follow Accounts" class="btn btn-primary dropdown-toggle" onclick="ajax_multi_account_update('tab1','crossfollow_form');" />

    </div>
</form>
<?php
      break;
    case 'tab2':
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>All Follow / Unfollow</h2>
    </div>
<?=$response_msg?>
<form method="post"  class="form-horizontal" action="" name="allfollow_form" id="allfollow_form"
      onsubmit="ajax_multi_account_update('tab2','allfollow_form'); return false;">
    <div class="col-md-12">
        <br />&nbsp;&nbsp;<select name="cross_op" id="cross_op" class="btn btn-primary dropdown-toggle" style="width: 95px;">
         <option value="1" selected="selected">Follow</option>
         <option value="2">Unfollow</option>
        </select>&nbsp;&nbsp;all the following&nbsp;&nbsp;<select name="cross_type" id="cross_type" class="btn btn-primary dropdown-toggle" style="width: 120px;">
         <option value="1" selected="selected">screen names</option>
         <option value="2">Twitter ids</option>
        </select>&nbsp;&nbsp;from all your Twitter accounts (enter one screen name / Twitter id per line):<br />
    </div>
</form>
        <textarea name="twitter_ids_list" id="twitter_ids_list" class="form-control" style="height: 249px; margin: 6px 0px 0px 0px;"></textarea><br />

        <input type="hidden" name="a" value="allfollow_go" />

        <input type="submit" value="All Follow / Unfollow" class="btn btn-primary"
               onclick="ajax_multi_account_update('tab2','allfollow_form');" />

<?php
   break;
   case 'tab3':
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Multi Tweet</h2>
    </div>
<?=$response_msg?>
Post the following tweet from all your Twitter accounts at once:<br />
<form method="post"  class="form-horizontal" action="" name="quicktweet_form" id="quicktweet_form" onsubmit="ajax_multi_account_update('tab3','quicktweet_form'); return false;">
<textarea name="tweet_content" id="tweet_content" class="form-control" style="height: 70px; width: 400px;" onkeyup="$('#count_box').val($('#tweet_content').val().length);"></textarea><br />
Characters: <input type="text" name="count_box" id="count_box" size="6" value="0" class="form-control" style="width: 35px;"  />
<br style="clear: both;" />
<input type="hidden" name="a" value="quicktweet" />
</form>
<input type="submit" value="Post Tweet" class="btn btn-primary" onclick="ajax_multi_account_update('tab3','quicktweet_form');" />

</div>
<?php
   break;
  //End of switch
  }
 //End of if $_REQUEST['tab_id']
 }
?>

