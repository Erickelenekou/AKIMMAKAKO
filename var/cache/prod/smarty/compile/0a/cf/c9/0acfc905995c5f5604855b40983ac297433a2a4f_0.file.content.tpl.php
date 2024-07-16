<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:20:39
  from 'C:\wamp64\www\prestashop\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_669530371e28f0_86233389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0acfc905995c5f5604855b40983ac297433a2a4f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1718411060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669530371e28f0_86233389 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
