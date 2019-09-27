<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-16 09:57:32
         compiled from "backend\design\html\min_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6605235395d7f2d73821ff3-30952728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df857ee93dd7219f8d4d4764bfd9bed58ab4aca4' => 
    array (
      0 => 'backend\\design\\html\\min_admin.tpl',
      1 => 1568617051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6605235395d7f2d73821ff3-30952728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d7f2d73825e79_08342033',
  'variables' => 
  array (
    'btr' => 0,
    '_POST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7f2d73825e79_08342033')) {function content_5d7f2d73825e79_08342033($_smarty_tpl) {?>    <div class="okay_list_footer">
        Минимальная сумма заказа:
        <input class="input" type="text" name="min_price" placeholder="min_price_order">

        <button type="submit" value="labels" class="btn btn_small btn_blue">
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->topic_send, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </button>
        <div>
            <?php echo var_dump($_smarty_tpl->tpl_vars['_POST']->value['min_price']);?>

        </div>
    </div>
<?php }} ?>
