<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:19:06
  from 'C:\wamp64\www\prestashop\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66952fda994c27_95669341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29bfe4fdd6cc29b4842ac6e17f25e44c168cd188' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1718411060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66952fda994c27_95669341 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
