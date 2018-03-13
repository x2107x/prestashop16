<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 19:26:48
         compiled from "C:\wamp\www\prestashop16\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38445aa825f882b166-00422228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0887cda6cd340e33c2f78e42a463696777e8dd' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop16\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38445aa825f882b166-00422228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa825f886b331_28601163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa825f886b331_28601163')) {function content_5aa825f886b331_28601163($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
