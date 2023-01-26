<?php
session_start();
$_SESSION['who'] = rand(0,1) == 0 ? 'o' : 'x';
$mode = $_GET['mode'];
$_SESSION['mode'] = $mode;  
header("Location: ../index.php");
$_SESSION['win'] = 0; // 0 - game, 1 - win, 2 - draw
?>