<?php
session_start();
include"db.php";

  $id = @$_GET['id'];

mysqli_query($con, "delete from viral_ones where id = '$id'");

?>
<script type="text/javascript">
window.location = "home.php";
</script>