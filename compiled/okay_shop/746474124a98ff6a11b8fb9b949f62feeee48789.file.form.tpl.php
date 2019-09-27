<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:33:42
         compiled from "payment\Webmoney\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4128480265d762a866e15f4-67273014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746474124a98ff6a11b8fb9b949f62feeee48789' => 
    array (
      0 => 'payment\\Webmoney\\form.tpl',
      1 => 1568023007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4128480265d762a866e15f4-67273014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'amount' => 0,
    'order' => 0,
    'payment_settings' => 0,
    'success_url' => 0,
    'fail_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762a866f0ff5_01619140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762a866f0ff5_01619140')) {function content_5d762a866f0ff5_01619140($_smarty_tpl) {?><form accept-charset="cp1251" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
    <input type="hidden" name="LMI_PAYMENT_AMOUNT"      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="LMI_PAYMENT_DESC_BASE64" value="<?php echo base64_encode("Оплата заказа "+$_smarty_tpl->tpl_vars['order']->value->id+'');?>
" >
    <input type="hidden" name="LMI_PAYMENT_NO"          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="LMI_PAYEE_PURSE"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_settings']->value['purse'], ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="LMI_SIM_MODE"            value="0" >
    <input type="hidden" name="LMI_SUCCESS_URL"         value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['success_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="hidden" name="LMI_FAIL_URL"            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fail_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_to_pay;?>
"   class="button" >
</form>
<?php }} ?>
