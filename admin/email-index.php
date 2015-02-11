<?php
include "login.php";
$PageTitle = "Email";
include "header.php";
?>

<h1>Email</h1>

<table celppading="0" cellspacing="0" width="100%">
<?php
$result = mysql_query("SELECT * FROM email ORDER BY id DESC");

while ($row = mysql_fetch_array($result)) {
  $bg = ($bg == "") ? " style=\"background: #F3F3F3;\"" : "";
?>
  <tr<?php echo $bg; ?>>
    <td width="4%" rowspan="3" valign="top" style="padding: 13px 0 0 10px;">
      <a href="email-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><img src="images/delete.png" alt="Delete" title="Delete"></a>
    </td>
    <td width="36%" style="font-size: 90%; font-weight: bold; padding-top: 10px;"><?php echo stripslashes($row['name']); ?></td>
    <td width="40%" style="font-size: 90%; font-weight: bold; padding-top: 10px;"><?php echo stripslashes($row['email']); ?></td>
    <td width="20%" style="font-size: 90%; font-weight: bold; padding: 10px 10px 0 0; text-align: right;"><?php echo $row['date']; ?></td>
  </tr>
  <tr<?php echo $bg; ?>>
    <td colspan="3" style="font-size: 90%; line-height: 1.3em; padding: 0 10px 10px 0;"><strong>Please send me:</strong> <?php echo stripslashes(nl2br($row['sendme'])); ?></td>
  </tr>
  <tr<?php echo $bg; ?>>
    <td colspan="3" style="font-size: 90%; line-height: 1.3em; padding: 0 10px 10px 0;"><?php echo stripslashes(nl2br($row['comment'])); ?></td>
  </tr>
<?php } ?>
</table>

<?php include "footer.php"; ?>