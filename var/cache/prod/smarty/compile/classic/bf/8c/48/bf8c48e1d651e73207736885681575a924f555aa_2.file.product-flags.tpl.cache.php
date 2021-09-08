<?php
/* Smarty version 3.1.39, created on 2021-09-08 08:38:06
  from 'C:\MAMP\htdocs\Presta\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61385a4e39cbe1_69249780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8c48e1d651e73207736885681575a924f555aa' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Presta\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1631081039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61385a4e39cbe1_69249780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '110158798961385a4e381660_27764106';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20140503661385a4e398d67_21825044', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_20140503661385a4e398d67_21825044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_20140503661385a4e398d67_21825044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
