<?php
/* Smarty version 3.1.33, created on 2020-09-01 10:37:44
  from 'F:\www\ObjectOriented\pdo\14template.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4db3f8a37dd8_09471077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e054e7b3642af0cbe5341c05d08155246690f05a' => 
    array (
      0 => 'F:\\www\\ObjectOriented\\pdo\\14template.html',
      1 => 1598927538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4db3f8a37dd8_09471077 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if (isset($_POST['username'])) {?>
	<?php echo $_POST['username'];?>

<?php } else { ?>
	没有数据
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
	<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br/>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
