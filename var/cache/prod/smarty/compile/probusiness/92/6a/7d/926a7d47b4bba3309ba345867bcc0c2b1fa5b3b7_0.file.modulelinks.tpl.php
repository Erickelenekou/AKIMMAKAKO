<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:19:08
  from 'C:\wamp64\www\prestashop\modules\ybc_themeconfig\views\templates\hook\modulelinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66952fdcaab365_35378665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926a7d47b4bba3309ba345867bcc0c2b1fa5b3b7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_themeconfig\\views\\templates\\hook\\modulelinks.tpl',
      1 => 1720712958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66952fdcaab365_35378665 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['modules']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function(){
            var ybc_tc_links = '<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
if ($_smarty_tpl->tpl_vars['module']->value['installed']) {?><li <?php if ($_smarty_tpl->tpl_vars['module']->value['id'] == $_smarty_tpl->tpl_vars['active_module']->value) {?> class="active" <?php }?> id="ybc_tc_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id'],'html','UTF-8' ));?>
"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['link'],'html','UTF-8' ));?>
"><?php echo addslashes($_smarty_tpl->tpl_vars['module']->value['name']);?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>';
            if($('#subtab-AdminYbcTC').length > 0)
            {
                $('#subtab-AdminYbcTC').after(ybc_tc_links);
            }
            else
            if($('#subtab-AdminPayment').length > 0)
            {
                $('#subtab-AdminPayment').after(ybc_tc_links);
            }
            else 
            if($('#subtab-AdminModules').length > 0)
            {
                $('#subtab-AdminModules').after(ybc_tc_links);
            }
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
