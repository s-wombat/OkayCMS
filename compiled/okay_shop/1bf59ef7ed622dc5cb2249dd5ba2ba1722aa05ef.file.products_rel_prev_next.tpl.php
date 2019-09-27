<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:32:48
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\products_rel_prev_next.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11205069205d762a502b2a67-45985147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf59ef7ed622dc5cb2249dd5ba2ba1722aa05ef' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\products_rel_prev_next.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11205069205d762a502b2a67-45985147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_pages_num' => 0,
    'current_page_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762a50320085_04517331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762a50320085_04517331')) {function content_5d762a50320085_04517331($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['total_pages_num']->value>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==$_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>2),$_smarty_tpl);?>
"/>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==2) {?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>null),$_smarty_tpl);?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl);?>
"/>
        <?php }?>
        <link rel="next" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl);?>
"/>
    <?php }?>
<?php }?><?php }} ?>
