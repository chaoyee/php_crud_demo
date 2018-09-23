<?php
  session_start();
  require_once "config.php";
  require_once "smarty/libs/Smarty.class.php";
  $smarty = new Smarty;

  $mysqli = new mysqli( _DBHOST, _DBUSER, _DBPASSWD, _DBNAME);
  if ($mysqli->connect_error){
    die ('DB Error: ('.$mysqli->connect_errno.' )'.$mysqli->connect_error);
  } else {
    $mysqli->set_charset('utf8');
  }
?>
