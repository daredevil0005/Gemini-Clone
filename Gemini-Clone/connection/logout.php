<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.html"); // send back to login
exit();
?>

