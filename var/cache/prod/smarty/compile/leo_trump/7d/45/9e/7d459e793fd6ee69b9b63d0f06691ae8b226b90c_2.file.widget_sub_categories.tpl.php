<?php
/* Smarty version 3.1.39, created on 2021-09-08 14:48:27
  from 'C:\MAMP\htdocs\Presta\modules\leobootstrapmenu\views\templates\hook\widgets\widget_sub_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6138b11b4d5237_08876804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d459e793fd6ee69b9b63d0f06691ae8b226b90c' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Presta\\modules\\leobootstrapmenu\\views\\templates\\hook\\widgets\\widget_sub_categories.tpl',
      1 => 1631105109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6138b11b4d5237_08876804 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leo-widget" data-id_widget="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value))) {?>
    <div class="widget-subcategories">
        <?php if ((isset($_smarty_tpl->tpl_vars['widget_heading']->value)) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
        <div class="widget-heading">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
        <?php }?>
        <div class="widget-inner">
            <?php if ($_smarty_tpl->tpl_vars['cat']->value->id_category != '') {?>
                <div class="menu-title">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat']->value->id_category,$_smarty_tpl->tpl_vars['cat']->value->link_rewrite),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
                    </a>
                </div>
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                    <li class="clearfix <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['subsubcategories']))) {?>level2 dropdown<?php }?>">
                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subcategory']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
                        </a>
                        <?php if ((isset($_smarty_tpl->tpl_vars['subcategory']->value['subsubcategories'])) && $_smarty_tpl->tpl_vars['subcategory']->value['subsubcategories']) {?>
                            <b class="caret <?php if ($_smarty_tpl->tpl_vars['level3_only_mobile']->value) {?>hidden-md-up<?php }?>"></b>
                            <ul class="dropdown-sub dropdown-menu <?php if ($_smarty_tpl->tpl_vars['level3_only_mobile']->value) {?>hidden-md-up<?php }?>">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategory']->value['subsubcategories'], 'subsubcategory');
$_smarty_tpl->tpl_vars['subsubcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsubcategory']->value) {
$_smarty_tpl->tpl_vars['subsubcategory']->do_else = false;
?>
                                    <li class="clearfix level3" <?php if ($_smarty_tpl->tpl_vars['show_widget_bo']->value == 'admin') {?>style="margin-left: 20px;"<?php }?>>
                                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subsubcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subsubcategory']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subsubcategory']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img">
                                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subsubcategory']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
                                        </a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                
                            </ul>
                        <?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php } else { ?>
                <div class="alert alert-warning">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The ID category does not exist','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
        </div>
    </div>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['show_widget_bo']->value == 'admin') {?>
    <div class="w-name">
        <select name="inject_widget" class="inject_widget_name">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['key_widget'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php }?>
</div><?php }
}
