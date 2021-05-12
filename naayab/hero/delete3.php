<?php
session_start();
include"db.php";

  $id = @$_GET['id'];

mysqli_query($con, "delete from lyricist where id = '$id'");

?>
<script type="text/javascript">
window.location = "home.php";
</script>