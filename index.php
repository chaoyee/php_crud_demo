<?php
require_once "header.php";

// flow control
//
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_MAGIC_QUOTES) : '';
$prod_id = isset($_REQUEST['prod_id']) ?  filter_var($_REQUEST['prod_id'], FILTER_SANITIZE_NUMBER_INT) : '';
$keyword = isset($_REQUEST['keyword']) ? filter_var($_REQUEST['keyword'], FILTER_SANITIZE_MAGIC_QUOTES) : '';
switch ($op) {
  case 'show_product':
    show_product($prod_id);
    break;

  case 'new_product':
    new_product();
    break;
  case 'create_product':
    $prod_id = create_product();
    header("Location:index.php?op=show_product&prod_id={$prod_id}");
    exit;
    break;
  case 'edit_product':
    edit_product($prod_id);
    break;
  case 'update_product':
    update_product($prod_id);
    header("Location:index.php?op=show_product&prod_id={$prod_id}");
    exit;
    break;
  case 'delete_product':
    delete_products($prod_id);
    header("Location:index.php");
    exit;
    break;
  default:
    list_products($keyword);
    break;
}

// output
//
require_once "footer.php";

// functions
//
// index: list all products
function list_products($keyword = "") {
  global $smarty, $mysqli;
  include_once "class/PageBar.php";

  $where = !empty($keyword) ? "where prod_name like '%{$keyword}%' or prod_desc like '%{$keyword}%'" : "";
  $sql = "SELECT * FROM products $where ORDER BY prod_start_date DESC";

  // PageBar 分頁工具
  //  _NUMBER_PER_PAGE:  每頁呈現幾筆資料
  //  _PAGE_LIMIT:       分頁工具呈現幾頁

  $PageBar = getPageBar($sql, _NUMBER_PER_PAGE, _PAGE_LIMIT);
  $bar     = $PageBar['bar'];
  $sql     = $PageBar['sql'];
  $total   = $PageBar['total'];

  $result  = $mysqli->query($sql) or die($mysqli->connect_error);
  $products  = $result->fetch_all(MYSQLI_ASSOC);

  $smarty->assign('products', $products);
  $smarty->assign('total', $total);
  $smarty->assign('bar', $bar);
}

// show product
function show_product($prod_id = '') {
  global $mysqli, $smarty;
  $sql = "SELECT * FROM products WHERE prod_id = '{$prod_id}'";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $product = $result->fetch_assoc();

  $smarty->assign('product', $product);
}

// new product
function new_product() {
  global $mysqli, $smarty;

  $product['prod_id']         = "";
  $product['prod_name']       = "";
  $product['prod_desc']       = "";
  $product['prod_price']      = "";
  $product['prod_counter']    = "";
  $product['prod_start_date'] = "";
  $smarty->assign('product', $product);
}


// create product
function create_product(){
  global $mysqli;

  if (empty($_POST['prod_name'])) {
    return;
  }

  $prod_name  = $mysqli->real_escape_string($_POST['prod_name']);
  $prod_desc  = $mysqli->real_escape_string($_POST['prod_desc']);
  $prod_price = $mysqli->real_escape_string($_POST['prod_price']);
  $prod_start_date  = date("Y-m-d H:i:s");

  $sql = "INSERT INTO products (prod_name, prod_desc, prod_price, prod_counter ,prod_start_date)
          VALUES ('{$prod_name}', '{$prod_desc}', '{$prod_price}', '0','{$prod_start_date}')";

  if ($mysqli->query($sql)) {
  } else {
    die($mysqli->connect_error);
  }
    $prod_id = $mysqli->insert_id;
    // save_prod_pic($prod_id);
  return $prod_id;
}

// edit product
function edit_product($prod_id) {
  global $mysqli, $smarty;

  if (empty($prod_id)) {
    return;
  }

  $sql = "SELECT * FROM products WHERE prod_id = {$prod_id}";
  $result = $mysqli->query($sql) or die($mysqli->connect_error);
  $product = $result->fetch_assoc();
  $smarty->assign('product', $product);
}

// update product
function update_product($prod_id) {
  global $mysqli;

  $prod_name  = $mysqli->real_escape_string($_POST['prod_name']);
  $prod_desc  = $mysqli->real_escape_string($_POST['prod_desc']);
  $prod_price = $mysqli->real_escape_string($_POST['prod_price']);
  $prod_start_date = date("Y-m-d H:i:s");

  $sql = "UPDATE products SET
      prod_name       = '{$prod_name}',
      prod_desc       = '{$prod_desc}',
      prod_price      = '{$prod_price}',
      prod_start_date = '{$prod_start_date}'
    WHERE prod_id = {$prod_id}";

  $mysqli->query($sql) or die($mysqli->connect_error);
}

// delete product
function delete_products($prod_id) {
  global $mysqli;
  $sql = "DELETE FROM products WHERE prod_id = {$prod_id}";
  $mysqli->query($sql) or die($mysqli->connect_error);
}

?>
