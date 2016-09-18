<?php /* Smarty version 3.1.27, created on 2016-09-18 16:22:12
         compiled from "/var/www/html/shop.com/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165815862057debf34844ba8_39626479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba6894ba1986755fda7432857658829ce6c0f5c' => 
    array (
      0 => '/var/www/html/shop.com/manager/templates/default/welcome.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165815862057debf34844ba8_39626479',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57debf34871af8_00736196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57debf34871af8_00736196')) {
function content_57debf34871af8_00736196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '165815862057debf34844ba8_39626479';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>