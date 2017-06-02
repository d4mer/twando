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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Scripts -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="inc/scripts/ajax_scripts.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
</style>
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
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidenav hidden-xs">
                <!--<a href="<?=BASE_LINK_URL?>"></a>--><h2><strong>TWANDO</strong></h2>
                <!--<h2>Logo</h2>-->
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="http://twando:9001/">Dashboard</a></li>
                <li><a href="#section2">Accounts</a></li>
                <li><a href="/multi_account_functions.php">Multi-Account Functions</a></li>
                <li><a href="/cron_instructions.php">Cron Job Instructions</a></li>
              </ul>
            </div>

            <div class="col-md-9">



