<?php
if (!isset($TopDir)) $TopDir = "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>DrWichman.com<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="Mark Wichman MD and Matthew Wichman MD have been practicing orthopedic surgeons for over 30 years combined. Both doctors have families and close ties to Southeastern Wisconsin. Both Wichmans specialize in Sports Medicine and work closely with local and national sports teams.">
    <meta name="keywords" content="orthopedic surgeons, sports medicine, hip, knee, shoulder, arthritis, replacement, Wichman, rotator cuff, impingement, team doctor">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime(realpath(dirname(__FILE__)) . "/inc/main.css"); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120785284-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120785284-1');
    </script>
  </head>
  <body>

    <div class="dw-header">
      <div class="site-width">
        <div class="header-left">
          <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Drwichman.com" id="logo"></a>
        </div>

        <div class="header-right">
          <div class="top-menu">
            FOR APPOINTMENTS: <span>414-479-7000</span>
          </div>

          <input type="checkbox" id="show-menu" role="button">
          <label for="show-menu" id="menu-toggle"></label>
          <div class="menu"><?php include "menu.php"; ?></div>
        </div>
      </div>
    </div>
