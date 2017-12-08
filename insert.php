<?php

$con = mysql_connect("localhost","USERNAME","PASSWORD");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("mysqltutorial", $con);
$sql="INSERT INTO TABLENAME (COLUMNNAME1, COLUMNNAME2, COLUMNNAME3)

VALUES
('$_POST[COLUMNNAME1]','$_POST[COLUMNNAME2]','$_POST[COLUMNNAME3]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)

?>

<script>
setTimeout(function () {
   window.location.href= 'index.php';

},10);
</script>
