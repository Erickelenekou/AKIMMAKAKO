<?php
/* Smarty version 4.3.4, created on 2024-07-15 14:22:15
  from 'C:\wamp64\www\prestashop\themes\probusiness\templates\catalog\_partials\product-discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66953097305077_18416806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fe688da5505df3bcdc5f88d9dfadffdcd6a1506' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\probusiness\\templates\\catalog\\_partials\\product-discounts.tpl',
      1 => 1720712959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66953097305077_18416806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
<section class="product-discounts">
    <h3 class="h6 product-discounts-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2025624388669530972eb420_04775064', 'product_discount_table');
?>

</section>
<?php }
}
/* {block 'product_discount_table'} */
class Block_2025624388669530972eb420_04775064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount_table' => 
  array (
    0 => 'Block_2025624388669530972eb420_04775064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <table class="table-product-discounts">
        <thead>
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
          <th><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configuration']->value['quantity_discount']['label'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['quantity_discounts'], 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
          <tr data-discount-type="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-discount="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-discount-quantity="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <td><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['quantity_discount']->value['discount'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to %discount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%discount%'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['save'])),$_smarty_tpl ) );?>
</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    <?php
}
}
/* {/block 'product_discount_table'} */
}
