<?php
/* Smarty version 3.1.32, created on 2018-11-05 07:33:40
  from '/Users/chaoyee/Sites/php_crud_demo/templates/show_product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdff254b100c0_72688094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8583562eb3cb8195a31927ce7106a39126bc804' => 
    array (
      0 => '/Users/chaoyee/Sites/php_crud_demo/templates/show_product.html',
      1 => 1537601579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdff254b100c0_72688094 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row">
    <div class="col-md-9 offset-md-2">
      <div class="row">
        <h2><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_name'];?>
</h2>
      </div>
      <hr>
      <div class="row">
        <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_desc'];?>
</h4>
      </div>
      <div class="row">
        <h5>售價：</h5>
        <h5>新台幣 &nbsp</h5>
        <h4 style="color: red"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>
</h4>
        <h5>&nbsp 元整</h5>
      </div>
      <div class="row">
          <h5>人氣： &nbsp</h5>
          <h5 style="color: red"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_counter'];?>
</h5>
      </div>
      <br/>
      <div class="row">
        <a href="index.php?op=edit_product&prod_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" class="btn btn-warning">編輯產品</a>
        &nbsp;
        <a href="index.php?op=delete_product&prod_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
" class="btn btn-danger" >刪除產品</a>
      </div>
    </div>
  </div>
</div>
<?php }
}
