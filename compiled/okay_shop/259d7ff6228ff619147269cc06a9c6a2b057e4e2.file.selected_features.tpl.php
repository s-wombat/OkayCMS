<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:32:48
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\selected_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6234324985d762a50425c41-38431287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259d7ff6228ff619147269cc06a9c6a2b057e4e2' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\selected_features.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6234324985d762a50425c41-38431287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_filter_page' => 0,
    'lang' => 0,
    'prices' => 0,
    'other_filters' => 0,
    'f' => 0,
    'furl' => 0,
    'category' => 0,
    'brand' => 0,
    'b' => 0,
    'features' => 0,
    'fv' => 0,
    'config' => 0,
    'lang_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762a504ae7e0_50321766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762a504ae7e0_50321766')) {function content_5d762a504ae7e0_50321766($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_filter_page']->value) {?>
<div class="sidebar_top">
    <div class="filters">
        <div class="h2 filter_name">
            <span data-language="selected_features_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_heading;?>
</span>
        </div>
        <div class="filter_group">
            <div class="selected_filter_boxes">

                <?php if ($_smarty_tpl->tpl_vars['prices']->value->current->min!=''&&$_smarty_tpl->tpl_vars['prices']->value->current->max!='') {?>
                    <div class="selected_filter_box">
                        <form class="selected_filter_item" method="post">
                            <button type="submit" name="prg_seo_hide" class="fn_filter_reset s_filter_link checked" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array(),$_smarty_tpl);?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prices']->value->current->min, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prices']->value->current->max, ENT_QUOTES, 'UTF-8', true);?>

                                <svg class="remove_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                    <path fill="currentColor" d="M15.833 5.346l-1.179-1.179-4.654 4.654-4.654-4.654-1.179 1.179 4.654 4.654-4.654 4.654 1.179 1.179 4.654-4.654 4.654 4.654 1.179-1.179-4.654-4.654z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                <?php }?>
                
                
                <?php if ($_smarty_tpl->tpl_vars['other_filters']->value&&$_GET['filter']) {?>
                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['f']->value->url,$_GET['filter'])) {?>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('filter'=>$_smarty_tpl->tpl_vars['f']->value->url,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp1, null, 0);?>
                            <div class="selected_filter_box">
                                <form class="selected_filter_item" method="post">
                                    <button type="submit" name="prg_seo_hide" class="s_filter_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
                                        <svg class="remove_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                            <path fill="currentColor" d="M15.833 5.346l-1.179-1.179-4.654 4.654-4.654-4.654-1.179 1.179 4.654 4.654-4.654 4.654 1.179 1.179 4.654-4.654 4.654 4.654 1.179-1.179-4.654-4.654z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        <?php }?>
                    <?php } ?>
                <?php }?>
        
                
                <?php if ($_smarty_tpl->tpl_vars['category']->value->brands&&$_GET['b']) {?>
                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->brands; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['brand']->value->id==$_smarty_tpl->tpl_vars['b']->value->id||in_array($_smarty_tpl->tpl_vars['b']->value->id,$_GET['b'])) {?>
                            <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp2, null, 0);?>
                            <div class="selected_filter_box">
                                <form class="selected_filter_item" method="post">
                                    <button type="submit" name="prg_seo_hide" class="s_filter_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <svg class="remove_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                            <path fill="currentColor" d="M15.833 5.346l-1.179-1.179-4.654 4.654-4.654-4.654-1.179 1.179 4.654 4.654-4.654 4.654 1.179 1.179 4.654-4.654 4.654 4.654 1.179-1.179-4.654-4.654z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        <?php }?>
                    <?php } ?>
                <?php }?>
                
                
                <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
                        <?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key]) {?>
                            <?php  $_smarty_tpl->tpl_vars['fv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['f']->value->features_values; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fv']->key => $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->_loop = true;
?>
                                <?php if (in_array($_smarty_tpl->tpl_vars['fv']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key],true)) {?>
                                    <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['fv']->value->translit,'page'=>null)),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['furl'] = new Smarty_variable($_tmp3, null, 0);?>
                                    <div class="selected_filter_box">
                                        <form class="selected_filter_item" method="post">
                                            <button type="submit" name="prg_seo_hide" class="s_filter_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                <svg class="remove_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                                    <path fill="currentColor" d="M15.833 5.346l-1.179-1.179-4.654 4.654-4.654-4.654-1.179 1.179 4.654 4.654-4.654 4.654 1.179 1.179 4.654-4.654 4.654 4.654 1.179-1.179-4.654-4.654z"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                    <?php } ?>
                <?php }?>
            </div>
    
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <form method="post">
                    <button type="submit" name="prg_seo_hide" class="fn_filter_reset filter_reset" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['category']->value->url;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_reset;?>

                    </button>
                </form>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <form method="post">
                    <button type="submit" name="prg_seo_hide" class="fn_filter_reset filter_reset" value="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['brand']->value->url;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_reset;?>

                    </button>
                </form>
            <?php }?>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
