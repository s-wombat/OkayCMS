<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:32:48
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\products_sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19846208325d762a50625833-02097981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8986cb1570d074a37904c9879552c615ad734ca6' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\products_sort.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19846208325d762a50625833-02097981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'lang' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762a506584c5_43013063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762a506584c5_43013063')) {function content_5d762a506584c5_43013063($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['products']->value)>0) {?>
    <div class="fn_ajax_buttons sort clearfix">
        <span class="fn_sort_pagination_link sort_title" data-language="products_sort_by"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_sort_by;?>
:</span>

        <form method="post">
            <button type="submit" name="prg_seo_hide" class="fn_sort_pagination_link sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='position') {?> active_up<?php }?> no_after" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'position','page'=>null),$_smarty_tpl);?>
">
                <span data-language="products_by_default"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_default;?>
</span>
            </button>
        </form>

        <form method="post">
            <button type="submit" name="prg_seo_hide" class="fn_sort_pagination_link sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='price_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='price') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'price','page'=>null),$_smarty_tpl);?>
<?php }?>">
                <span data-language="products_by_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_price;?>
</span>
            </button>
        </form>

        <form method="post">
            <button type="submit" name="prg_seo_hide" class="fn_sort_pagination_link sort_link<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='name_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='name') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'name','page'=>null),$_smarty_tpl);?>
<?php }?>">
                <span data-language="products_by_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_name;?>
</span>
            </button>
        </form>

        <form method="post">
            <button type="submit" name="prg_seo_hide" class="fn_sort_pagination_link sort_link <?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?> active_up<?php } elseif ($_smarty_tpl->tpl_vars['sort']->value=='rating_desc') {?> active_down<?php }?>" value="<?php if ($_smarty_tpl->tpl_vars['sort']->value=='rating') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating_desc','page'=>null),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0][0]->filter_chpu_url(array('sort'=>'rating','page'=>null),$_smarty_tpl);?>
<?php }?>">
                <span data-language="products_by_rating"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_by_rating;?>
</span>
            </button>
        </form>
    </div>
<?php }?>
<?php }} ?>
