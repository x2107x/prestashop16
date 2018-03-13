<?php /* Smarty version Smarty-3.1.19, created on 2018-03-13 22:15:33
         compiled from "C:\wamp\www\prestashop16\admin048znhc4t\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32765aa83f7592df73-81807040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ac672c074512ba4300f62273d08b36ebc653c9' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop16\\admin048znhc4t\\themes\\default\\template\\content.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32765aa83f7592df73-81807040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa83f7594dc03_37924540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa83f7594dc03_37924540')) {function content_5aa83f7594dc03_37924540($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
