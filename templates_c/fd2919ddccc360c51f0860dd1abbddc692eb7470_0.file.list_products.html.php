<?php
/* Smarty version 3.1.32, created on 2018-11-05 07:33:33
  from '/Users/chaoyee/Sites/php_crud_demo/templates/list_products.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdff24d23cb33_68254919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2919ddccc360c51f0860dd1abbddc692eb7470' => 
    array (
      0 => '/Users/chaoyee/Sites/php_crud_demo/templates/list_products.html',
      1 => 1537598765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdff24d23cb33_68254919 (Smarty_Internal_Template $_smarty_tpl) {
?><h4>產品列表</h4>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>產品名稱</th>
        <th>產品內容</th>
        <th>價格</th>
        <th>人氣</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <tr>
          <td><a href="index.php?op=show_product&prod_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_name'];?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_desc'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_price'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['product']->value['prod_counter'];?>
</td>
        <tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
<div class="container">
  共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件商品
  <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

</div>
<?php }
}
