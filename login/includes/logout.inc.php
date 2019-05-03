<?php
setcookie("user", "uidinput", time() - 86400*39, "/");
header("location: ../index.php");
?>
