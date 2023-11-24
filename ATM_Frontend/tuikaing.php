<?php
include 'infdeal/conn.php';
require 'infdeal/comm.php';
session_start();
unset($_SESSION['username']);
page_jump("ÍË¿¨³É¹¦£¡","index.php");
?>