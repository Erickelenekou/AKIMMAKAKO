<?php
/* Smarty version 4.3.4, created on 2024-07-15 16:11:53
  from 'C:\wamp64\www\prestashop\modules\ybc_blog_free\views\templates\hook\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66954a49f13fc4_18106086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15c8437794986ce8ff569ffa51ff4fc8055dd15' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ybc_blog_free\\views\\templates\\hook\\admin.tpl',
      1 => 1720712956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66954a49f13fc4_18106086 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ybc_blog_free_error_message']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_free_error_message']->value;?>

<?php }
echo '<script'; ?>
 type="text/javascript"> 
    var ybc_blog_free_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['ybc_blog_free_ajax_url']->value;?>
';
    var ybc_blog_free_default_lang = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_free_default_lang']->value ));?>
;
    var ybc_blog_free_is_updating = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_free_is_updating']->value ));?>
;
    var ybc_blog_free_is_config_page = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_free_is_config_page']->value ));?>
;
    var ybc_blog_free_invalid_file = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_free_invalid_file']->value,'html','UTF-8' ));?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ybc_blog_free_module_dir']->value,'html','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
>
<div class="bootstrap">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php echo $_smarty_tpl->tpl_vars['ybc_blog_free_sidebar']->value;?>

                <div class="blog_center_content col-lg-10">
                    <?php echo $_smarty_tpl->tpl_vars['ybc_blog_free_body_html']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }
}
