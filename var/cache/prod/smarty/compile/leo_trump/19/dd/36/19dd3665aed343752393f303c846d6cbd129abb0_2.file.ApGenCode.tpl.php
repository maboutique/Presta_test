<?php
/* Smarty version 3.1.39, created on 2021-09-08 14:48:27
  from 'C:\MAMP\htdocs\Presta\modules\appagebuilder\views\templates\hook\ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138b11b17d9f6_44537867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19dd3665aed343752393f303c846d6cbd129abb0' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Presta\\modules\\appagebuilder\\views\\templates\\hook\\ApGenCode.tpl',
      1 => 1631105105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138b11b17d9f6_44537867 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
