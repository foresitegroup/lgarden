<?php
$TopDir = basename(dirname($_SERVER['PHP_SELF'])) == "blog" ? "../" : "";
if ($Description == "") $Description = "Importers of the popular VegTrug elevated garden, Venture Products proudly introduces the LGarden, an innovative mobile gardening bed that promotes a satisfying garden experience for the 21st century lifestyle.";
if ($Keywords == "") $Keywords = "LGarden, VegTrug, raised garden, gardening system, healthy gardening, USA, garden on wheels, vegetable, deep rooted vegetables, victory garden, elderly, teachers, grow your own, gardeners, patio, porch, balcony, home grown, active life style, wheel chair accessible";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <title>
    LGarden
    <?php
    if (basename(dirname($_SERVER['PHP_SELF'])) == "blog") {
      // Print the <title> tag based on what is being viewed.
	    global $page, $paged;

      echo " | ";

      // Add the blog name.
      bloginfo( 'name' );

      wp_title( '|', true, 'left' );

      // Add a page number if necessary:
      if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    } else {
      if ($PageTitle != "") echo " | " . $PageTitle;
    }
    ?>
  </title>
  <meta name="description" content="<?php echo $Description; ?>">
  <meta name="keywords" content="<?php echo $Keywords; ?>">
  <meta name="author" content="Foresite Group">
  <meta name="p:domain_verify" content="51e28ea0eb59a5997b37b8a166553577"/>

  <link rel="shortcut icon" href="<?php echo $TopDir; ?>images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">
  <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/lg2012.css" type="text/css" media="screen,print">
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/jplayer/jplayer.blue.monday.css" type="text/css" media="screen,print">

  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.7.2.js"></script>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle.all.js"></script>
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/fancybox/jquery.fancybox.css?v=2.0.6" type="text/css" media="screen">
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/fancybox/jquery.fancybox.js?v=2.0.6"></script>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jplayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      $("#rotating").cycle({ fx: 'fade', speed: 2000, timeout: 6500 });
      $('a[rel="fancybox"]').fancybox({loop: false, nextEffect: 'fade', prevEffect: 'fade'});
      $('a[rel="fancybox"] img').each(function() {$(this).parent().attr("title", $(this).attr("alt"))});
      $('a[rel="fancybox-text"]').fancybox({'width':'75%','height': '75%','autoScale': false,'transitionIn': 'none','transitionOut': 'none','type': 'iframe'});
    });
  </script>
  <!--[if lt IE 9 ]>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/IE9.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->

  <?php
  if (basename(dirname($_SERVER['PHP_SELF'])) == "blog") {
    wp_head();
    echo '<link rel="stylesheet" type="text/css" media="all" href="' . $TopDir . 'blog/wp-content/themes/lgarden/style.css" />';
  }
  ?>

  <!-- BEGIN Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37155915-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- BEGIN Google Analytics -->
</head>
<body>

<div id="header">
  <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="LGarden" id="logo"></a>

  <div id="header-right">
    <a href="http://pinterest.com/thelgarden" id="pinterest"></a>
    <a href="http://www.facebook.com/pages/LGarden/280717412049549" id="facebook"></a>

    <div id="topmenu-wrap">
      <img src="<?php echo $TopDir; ?>images/topmenu-left.png" alt="" style="float: left;">
      <div id="topmenu">
        <ul>
          <li><a href="<?php echo $TopDir; ?>retailers.php">Retailer Login</a></li>
          <li><a href="<?php echo $TopDir; ?>.">Home</a></li>
        </ul>
      </div> <!-- END topmenu -->
      <img src="<?php echo $TopDir; ?>images/topmenu-right.png" alt="" style="float: left;">
    </div> <!-- END topmenu-wrap -->

    <div style="clear: both; height: 14px;"></div>

    <?php include "menu.php"; ?>
  </div> <!-- END header-right -->
</div> <!-- END header -->

<?php if ($PageTitle == "") { ?>
<div id="banner-main">
  <div id="rotating">
    <a href="our-gardens.php"><img src="images/banner-main1.jpg" alt=""></a>
    <a href="lgarden-details.php"><img src="images/banner-main2.jpg" alt=""></a>
    <a href="blog"><img src="images/banner-main3.jpg" alt=""></a>
  </div> <!-- END rotating -->
</div> <!-- END banner-main -->
<?php } else { ?>
<div id="banner"<?php if ($Banner != "") echo " style=\"background-image: url(" . $TopDir . "images/" . $Banner . ")\";"; ?>></div>
<?php } ?>

<div id="content">
