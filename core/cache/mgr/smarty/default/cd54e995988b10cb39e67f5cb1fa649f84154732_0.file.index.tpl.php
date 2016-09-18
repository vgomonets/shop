<?php /* Smarty version 3.1.27, created on 2016-09-18 16:24:53
         compiled from "/var/www/html/shop.com/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:140110476157debfd5c75622_92213515%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd54e995988b10cb39e67f5cb1fa649f84154732' => 
    array (
      0 => '/var/www/html/shop.com/manager/templates/default/workspaces/index.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140110476157debfd5c75622_92213515',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57debfd5c97939_30330597',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57debfd5c97939_30330597')) {
function content_57debfd5c97939_30330597 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '140110476157debfd5c75622_92213515';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>