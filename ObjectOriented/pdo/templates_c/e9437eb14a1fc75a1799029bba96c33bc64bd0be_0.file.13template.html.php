<?php
/* Smarty version 3.1.33, created on 2020-09-01 09:58:43
  from 'F:\www\ObjectOriented\pdo\13template.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4daad34f6e92_59127470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9437eb14a1fc75a1799029bba96c33bc64bd0be' => 
    array (
      0 => 'F:\\www\\ObjectOriented\\pdo\\13template.html',
      1 => 1598925520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4daad34f6e92_59127470 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty_config/config.txt', 'customer', 0);
?>

<html>
<head>
	<title><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
</head>
<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bgColor');?>
">
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>


<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>


<?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>

<?php echo $_smarty_tpl->tpl_vars['p']->value->age;?>

<?php echo $_GET['username'];?>

<?php echo dirname($_smarty_tpl->source->filepath);?>

<?php echo basename($_smarty_tpl->source->filepath);?>

<?php $_smarty_tpl->_assignInScope('test', 'hello world');
echo $_smarty_tpl->tpl_vars['test']->value;?>


<br/>

</body>
</html><?php }
}
