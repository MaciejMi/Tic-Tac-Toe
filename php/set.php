<?php
session_start();
$y = intval($_GET['field_y']) ?? NULL;
$x = intval($_GET['field_x']) ?? NULL;
$_SESSION['broad'][$y][$x] = $_SESSION['who'] == 'o' ? 'o' : 'x';
$_SESSION['who'] = $_SESSION['who'] == 'o' ? 'x' : 'o';
header('Location: ./win_check.php');
?>