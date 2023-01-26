<?php
session_start();
 
require './check.php';

if ($_SESSION['win'] == 0){
    header("Location: ./bot.php");
}
else{
    header("Location: ../index.php");
}