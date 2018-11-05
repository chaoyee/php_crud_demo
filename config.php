<?php
  if (getenv("CLEARDB_DATABASE_URL") == '') {
    require "secret_local.php";
  } else {
    require "secret.php";
  }

  define('_SHOP_NAME', 'CRUD-DEMO SHOP');
  define('_DBNAME',   DBNAME);
  define('_DBUSER',   DBUSER);
  define('_DBPASSWD', DBPASSWD);
  define('_DBHOST',   DBHOST);

  // PageBar 分頁工具
  define('_NUMBER_PER_PAGE', 5 );    // 每頁呈現幾筆資料
  define('_PAGE_LIMIT', 10);         // 分頁工具呈現幾頁
?>
