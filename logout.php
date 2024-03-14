<?php
session_start();
session_destroy();
header_destroy();
header("Location: index.php");
?>