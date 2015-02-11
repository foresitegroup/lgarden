
  <div style="clear: both;"></div>
</div> <!-- END content -->

<hr>

<div id="spiffs">
  <div id="spiff-left">
    <a href="<?php echo $TopDir; ?>where-to-buy.php">
      <img src="<?php echo $TopDir; ?>images/lg-pin.jpg" alt="" style="float: left; margin-right: 30px;">

      <h1 style="margin-top: 13px;">Where to Buy</h1>
      Find Your Garden Center or E-tailer!
    </a>
  </div>

  <div class="vr" style="left: 333px;"></div>

  <div id="spiff-mid">
    <a href="<?php echo $TopDir; ?>products.php">
      <img src="<?php echo $TopDir; ?>images/spiff-mid.jpg" alt="" style="margin-top: 5px;">

      <h1 style="margin: 5px 0;">LGarden Products</h1>
      See All Our Fantastic Elevated Gardening Options
    </a>
  </div>

  <div class="vr" style="left: 666px;"></div>

  <div id="spiff-right">
    <a href="<?php echo $TopDir; ?>blog">
      <img src="<?php echo $TopDir; ?>images/spiff-right.jpg" alt="" style="float: left; margin-right: 20px;">

      <div style="float: right; width: 182px;">
        <h1 style="line-height: 0.8em;">Great Ideas For Your LGarden</h1>
        <ul>
          <li style="line-height: 1.2em; margin-bottom: 6px;">Grow Herbs on your Balcony</li>
          <li style="line-height: 1.2em; margin-bottom: 6px;">Learn how to make a Pizza Garden</li>
          <li style="line-height: 1.2em;">How Is LGarden Perfect for Golden Age Gardeners</li>
        </ul>
      </div>
    </a>
  </div>

  <div style="clear: both;"></div>
</div> <!-- END spiffs -->

<hr>

<div id="vegtrug">
  <a href="<?php echo $TopDir; ?>vegtrug.php"><img src="<?php echo $TopDir; ?>images/vegtrug.jpg" alt="VegTrug" style="margin-right: 20px; vertical-align: middle;"> Importers of the popular VegTrug elevated garden.</a>
</div> <!-- END vegtrug -->

<hr>

<div id="footer">
  <div id="copyright">
    &copy; <?php echo date("Y"); ?> | All Rights Reserved
  </div>

  <?php include "menu.php"; ?>

  <a href="<?php echo $TopDir; ?>blog" id="wordpress"></a>
</div> <!-- END footer -->

<?php
if (basename(dirname($_SERVER['PHP_SELF'])) == "blog") {
  wp_footer();
}
?>

</body>
</html>