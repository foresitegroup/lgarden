<?php include_once "../inc/dbconfig.php"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <title>LGarden Administration<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Remedi Creative">

  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
  <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../inc/lg2012.css" type="text/css" media="screen,print">
  <link rel="stylesheet" href="inc/admin.css" type="text/css" media="screen,print">

  <script type="text/javascript" src="../inc/jquery-1.7.2.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
    });

    function toggle() {
      for (var i = 0, j = arguments.length; i < j; i++) {
      document.getElementById(arguments[i]).style.display = (document.getElementById(arguments[i]).style.display != "none" ? "none" : "" );
      }
    }
  </script>
  <!--[if lt IE 9 ]>
  <script type="text/javascript" src="../inc/IE9.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="../inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->
</head>
<body>

<div id="header">
  <a href="."><img src="../images/logo.png" alt="LGarden" id="logo"></a>

  <div id="header-right">
    <div style="clear: both; height: 50px;"></div>

    <?php if ($PageTitle != "Login") { ?>
    <ul class="menu">
      <li><a href="email-index.php">Email</a></li>
      <li><a href="../blog/wp-login.php">Blog</a></li>
    </ul> <!-- END menu -->
    <?php } ?>
  </div> <!-- END header-right -->
</div> <!-- END header -->

<div id="banner"></div>

<div id="content">
