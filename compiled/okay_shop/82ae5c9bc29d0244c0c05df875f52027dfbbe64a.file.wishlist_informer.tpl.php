<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:00:56
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\wishlist_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4690677185d7622d8c6d933-03957235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82ae5c9bc29d0244c0c05df875f52027dfbbe64a' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\wishlist_informer.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4690677185d7622d8c6d933-03957235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wished_products' => 0,
    'lang_link' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d7622d8c7d335_89874609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7622d8c7d335_89874609')) {function content_5d7622d8c7d335_89874609($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['wished_products']->value)>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
wishlist">
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span> <span class="informer_counter">(<?php echo count($_smarty_tpl->tpl_vars['wished_products']->value);?>
)</span>
    </a>
<?php } else { ?>
    <span>
        <i class="wish_icon"></i>
        <span class="informer_name tablet-hidden" data-language="wishlist_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->wishlist_header;?>
</span>
    </span>
<?php }?>
<?php }} ?>
