<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:01:47
         compiled from "backend\design\html\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7056249305d76230b3937f1-59835672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8991d1bca22af101ebab9e41ee0c7e7dc5305d6' => 
    array (
      0 => 'backend\\design\\html\\pagination.tpl',
      1 => 1568022999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7056249305d76230b3937f1-59835672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages_count' => 0,
    'current_page' => 0,
    'visible_pages' => 0,
    'page_from' => 0,
    'page_to' => 0,
    'p' => 0,
    'btr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d76230b3e5883_15220120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d76230b3e5883_15220120')) {function content_5d76230b3e5883_15220120($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pages_count']->value>1) {?>
<!-- Листалка страниц -->
<ul class="pagination fn_pagination">
    
    
    <?php $_smarty_tpl->tpl_vars['visible_pages'] = new Smarty_variable(5, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(1, null, 0);?>
    
    
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value>floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
        <?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['current_page']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1), null, 0);?>
    <?php }?>    
    
    
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value>$_smarty_tpl->tpl_vars['pages_count']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
        <?php $_smarty_tpl->tpl_vars['page_from'] = new Smarty_variable(max(1,$_smarty_tpl->tpl_vars['pages_count']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1), null, 0);?>
    <?php }?>
    
    
    <?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_variable(min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['pages_count']->value-1), null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['current_page']->value>1) {?>
    <li class="page-item">
        <a id="PrevLink" href="<?php if ($_smarty_tpl->tpl_vars['current_page']->value==2) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page']->value-1),$_smarty_tpl);?>
<?php }?>">&lt;</a>
    </li>
    <?php }?>

    
    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value==1) {?>active<?php }?>">
        <a class="page-link <?php if ($_smarty_tpl->tpl_vars['current_page']->value==1) {?>selected<?php } else { ?>droppable<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>null),$_smarty_tpl);?>
">1</a>
    </li>
        
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) $_smarty_tpl->tpl_vars['page_from']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
            
        <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']+1, null, 0);?>    
        
    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['current_page']->value) {?>active<?php }?>">
        <?php if (($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_from']->value+1&&$_smarty_tpl->tpl_vars['p']->value!=2)||($_smarty_tpl->tpl_vars['p']->value==$_smarty_tpl->tpl_vars['page_to']->value&&$_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['pages_count']->value-1)) {?>    
        <a class="page-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl);?>
">...</a>
        <?php } else { ?>
        <a class="<?php if ($_smarty_tpl->tpl_vars['p']->value!=$_smarty_tpl->tpl_vars['current_page']->value) {?>droppable<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
        <?php }?>
    </li>
    <?php endfor; endif; ?>

    
    <li class="page-item <?php if ($_smarty_tpl->tpl_vars['current_page']->value==$_smarty_tpl->tpl_vars['pages_count']->value) {?>active<?php }?>">
        <a class="<?php if ($_smarty_tpl->tpl_vars['current_page']->value!=$_smarty_tpl->tpl_vars['pages_count']->value) {?>droppable<?php }?>"  href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['pages_count']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['pages_count']->value;?>
</a>
    </li>

    <?php if ($_smarty_tpl->tpl_vars['current_page']->value<$_smarty_tpl->tpl_vars['pages_count']->value) {?>
    <li class="page-item">
        <a id="NextLink" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>$_smarty_tpl->tpl_vars['current_page']->value+1),$_smarty_tpl);?>
">&gt;</a>
    </li>
    <?php }?>
    <li class="page-item">
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('page'=>'all'),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->pagination_show_all, ENT_QUOTES, 'UTF-8', true);?>
</a>
    </li>
    
</ul>
<!-- Листалка страниц (The End) -->
<?php }?>
<?php }} ?>
