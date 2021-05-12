<?php
session_start();
include"db.php";

  $id = @$_GET['id'];

mysqli_query($con, "delete from new_artists where id = '$id'");

?>
<script type="text/javascript">
window.location = "home.php";
</script>