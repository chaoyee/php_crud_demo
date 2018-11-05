<?php
/* Smarty version 3.1.32, created on 2018-11-05 07:33:33
  from '/Users/chaoyee/Sites/php_crud_demo/templates/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdff24d220553_51402711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24977f50f6d244cf6ed50fc66a91ffcd54478d8a' => 
    array (
      0 => '/Users/chaoyee/Sites/php_crud_demo/templates/index.html',
      1 => 1537602535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:show_product.html' => 1,
    'file:new_product.html' => 1,
    'file:edit_product.html' => 1,
    'file:list_products.html' => 1,
  ),
),false)) {
function content_5bdff24d220553_51402711 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;" id="shop_head">
        <a class="navbar-brand" href="index.php">CRUD-DEMO</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">首頁 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">功能表
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?op=new_product">新增產品</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item disabled" href="#">其他功能</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="index.php" method="GET" role="form">
            <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="請輸入關鍵字" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
          </form>
        </div>
      </nav>

      <br/>
      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
          <!-- Flow Control -->
          <?php if ($_smarty_tpl->tpl_vars['op']->value == 'show_product') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:show_product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'new_product') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:new_product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == 'edit_product') {?>
            <?php $_smarty_tpl->_subTemplateRender("file:edit_product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:list_products.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
        </div>
      </div>

      <div id="shop_foot" >
        <div>地址：XX市XX區XX路XX巷XX號</div>
        <div>電話：(02)12345678</div>
        <div>版權所有 copyright © 2018 CRUD-DEMO SHOP. All Rights Reserved. </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
