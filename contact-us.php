<?php
$PageTitle = "Contact Us";
$Banner = "banner-sub-balcony.jpg";
include "header.php";
include_once "inc/dbconfig.php";
?>

<div id="main">
  <h2>Contact Us</h2>

  <?php
  if (isset($_POST['submit'])) {
    date_default_timezone_set('America/Chicago');

    $sendme = ($_POST['sendme'] != "") ? implode(", ", $_POST['sendme']) : "";

    mysql_query("INSERT INTO email (name, email, comment, sendme, date) VALUES('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['comment'] . "','" . $sendme . "','" . date('m/d/Y h:i:s a') . "')");

    //$SendTo = "info@elevatedgardening.com";
    $SendTo = "info@dls-lawnandgarden.com";
    $Subject = "Contact From Website";
    $From = "From: Contact Form <contactform@elevatedgardening.com>\r\n";
    $From .= "Reply-To: " . $_POST['email'] . "\r\n";

    $Message = $_POST['name'] . "\n";
    if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";

    $Message .= "\n";

    if (!empty($_POST['comment'])) $Message .= $_POST['comment'] . "\n";

    $Message .= "\n";

    if (!empty($_POST['sendme'])) $Message .= "Please send me: " . implode(", ", $_POST['sendme']) . "\n";

    $Message = stripslashes($Message);

    mail($SendTo, $Subject, $Message, $From);
    //echo "<pre>".$Message."</pre>";

    echo "<strong>Thank you for your interest in LGarden.<br>You will be contacted soon.</strong>";
  } else {
  ?>
    Please use the form below to contact us.<br>
    <br>

    <script type="text/javascript">
      <!--
      function checkform (form) {
        if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
        if (form.email.value == "") { alert('Email required.'); form.email.focus(); return false; }
        if (form.comment.value == "") { alert('Comment required.'); form.comment.focus(); return false; }
        return true;
      }
      //-->
    </script>

    <form action="contact-us.php" method="POST" onSubmit="return checkform(this)">
      <div style="float: left;">
        <div style="float: left; width: 45px;"><strong>Name</strong></div>
        <input type="text" name="name" style="width: 300px; border: 1px solid #525252;"><br>
        <br>

        <div style="float: left; width: 45px;"><strong>Email</strong></div>
        <input type="text" name="email" style="width: 300px; border: 1px solid #525252;"><br>
        <br>

        <strong>Comments/Questions</strong><br>
        <textarea name="comment" rows="8" cols="30" style="width: 345px; height: 100px; border: 1px solid #525252;"></textarea>
      </div>

      <div style="float: right;">
        <strong>Please send me:</strong><br>
        <input type="checkbox" name="sendme[]" value="News about LGarden" checked> News about LGarden<br>
        <input type="checkbox" name="sendme[]" value="Gardening Ideas"> Gardening Ideas<br>
        <input type="checkbox" name="sendme[]" value="New Product and Accessories Available"> New Product and Accessories Available<br>
        <input type="checkbox" name="sendme[]" value="Additional Retail Locations"> Additional Retail Locations<br>
        <input type="checkbox" name="sendme[]" value="Specialty Food"> Special Offers
      </div>

      <div style="clear: both; padding-top: 15px;">
        <input type="submit" name="submit" value="Submit" style="display: block; margin: 0 auto; font-weight: bold;">
      </div>
    </form>
  <?php } ?>
</div> <!-- END main -->

<div id="sidebar">
  <br><br>
  LGarden<br>
  5800 N. Bayshore Dr.<br>
  Suite B206<br>
  Milwaukee, WI 53217<br>
  414-964-7977
</div> <!-- END sidebar -->

<?php include "footer.php"; ?>