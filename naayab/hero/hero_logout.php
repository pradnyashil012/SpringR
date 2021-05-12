<?php

session_start();

session_destroy();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token']))
    {
        die('Invalid CSRF');
    }
}

$_SESSION['_token'] = bin2hex(random_bytes(16));


?>
<script type="text/javascript">
window.location = "hero_login.php";
</script>