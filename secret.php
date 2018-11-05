<?php
// Heroku
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  define('DBHOST',    $url["host"]);
  define('DBUSER',    $url["user"]);
  define('DBPASSWD',  $url["pass"]);
  define('DBNAME',    substr($url["path"], 1));

?>
