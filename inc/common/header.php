<?php
global $header_info;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?=BASE_LINK_URL?>" />
<title>Twando</title>
<meta name="robots" content="noindex, follow" />
<!-- Style
<link href="inc/style/style.css" rel="stylesheet" type="text/css" />-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Scripts -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="inc/scripts/ajax_scripts.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?=$header_info['js_scripts']?>
<!-- Favicon -->
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<? if (!empty($header_info['js_scripts']))
{
$header_info['js_scripts'];
}?>
<script type="text/javascript">
$(document).ready(function() {
 <?=$header_info['on_load']?>

});
</script>
<?php

?>
<body>

<!-- Start of container -->
<div id="container" class="container-fluid">

<!-- Header -->

<div id="header_main" class="navbar navbar-inverse">
    <div class="navbar-header">
 <!-- <a href="<?=BASE_LINK_URL?>"><img src="inc/images/logo.gif" width="407" height="65" alt="Twando" /></a>-->
    </div>
</div>

<!-- Centre main -->
<div id="centre_main" class="container-fluid">
    <div class="col-md-3 sidenav hidden-xs">
        <a href="<?=BASE_LINK_URL?>"><img src="inc/images/logo.gif" width="407" height="65" alt="Twando" /></a>
        <!--<h2>Logo</h2>-->
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Accounts</a></li>
        <li><a href="/multi_account_functions.php">Multi-Account Functions</a></li>
        <li><a href="/cron_instructions.php">Cron Job Instructions</a></li>
      </ul>

    </div>
