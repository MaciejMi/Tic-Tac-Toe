<?php 
    session_start();
    if ($_SESSION['mode'] == 'ai'){
        do{
            $x = rand(0,2);
            $y = rand(0,2);
        }while($_SESSION['broad'][$x][$y] != '');
        $_SESSION['broad'][$x][$y] = $_SESSION['who'];
        $_SESSION['who'] = $_SESSION['who'] == 'o' ? 'x' : 'o';
    }
  
    require './check.php';

    header("Location: ../index.php");
?>