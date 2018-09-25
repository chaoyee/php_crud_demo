<?php
  require "secret.php";

  define('_SHOP_NAME', 'CRUD-DEMO SHOP');
  define('_DBNAME',    'mini_shop');
  define('_DBUSER',     DBUSER);
  define('_DBPASSWD',   DBPASSWD);
  define('_DBHOST',    '127.0.0.1');

  // PageBar 分頁工具
  define('_NUMBER_PER_PAGE', 5 );    // 每頁呈現幾筆資料
  define('_PAGE_LIMIT', 10);         // 分頁工具呈現幾頁
?>
