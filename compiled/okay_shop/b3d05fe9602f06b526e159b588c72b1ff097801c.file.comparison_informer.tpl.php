<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:00:56
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\comparison_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4152928845d7622d8c90bb8-26012972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d05fe9602f06b526e159b588c72b1ff097801c' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\comparison_informer.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4152928845d7622d8c90bb8-26012972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparison' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d7622d8ca05b6_07885275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7622d8ca05b6_07885275')) {function content_5d7622d8ca05b6_07885275($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
comparison">
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
        <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
)</span>
    </a>
<?php } else { ?>
    <div>
        <i class="compare_icon"></i>
        <span class="informer_name tablet-hidden" data-language="index_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_comparison;?>
</span>
    </div>
<?php }?>
<?php }} ?>
