<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:20:21
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3552192375d7627656f1b81-40642296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd3c65daa21f03de75b3537b96706707650eaaa' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\register.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3552192375d7627656f1b81-40642296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'error' => 0,
    'name' => 0,
    'email' => 0,
    'phone' => 0,
    'address' => 0,
    'settings' => 0,
    'captcha_register' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d7627657bcdb5_87490765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d7627657bcdb5_87490765')) {function content_5d7627657bcdb5_87490765($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/user/register", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->register_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<h1 class="h1">
    <span data-language="register_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_header;?>
</span>
</h1>

<div class="padding block clearfix">
    <div class="col-md-8 col-lg-6 col-xl-5 no_padding">
        
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
            <div class="message_error">
                <?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
                    <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
                    <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='empty_password') {?>
                    <span data-language="form_enter_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='user_exists') {?>
                    <span data-language="register_user_registered"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_user_registered;?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
                    <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                <?php }?>
            </div>
        <?php }?>

        <form id="captcha_id" method="post" class="fn_validate_register">

            
            <div class="form_group">
                <input class="form_input placeholder_focus" type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_name" />
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
            </div>

            
            <div class="form_group">
                <input class="form_input placeholder_focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_email"/>
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
            </div>

            
            <div class="form_group">
                <input class="form_input placeholder_focus" type="text" name="phone" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_phone" />
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
            </div>

            
            <div class="form_group">
                <input class="form_input placeholder_focus" type="text" name="address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="form_address" />
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
            </div>

            
            <div class="form_group">
                <input class="form_input placeholder_focus" type="password" name="password" value="" data-language="form_enter_password" />
                <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
*</span>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_register) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v3") {?>
                    <div class="captcha row" style="display: none;">
                        <div class="fn_recaptchav3">
                            <input type="hidden" name="recaptcha_token"  value="" class="fn_recaptcha_token" />
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>
                    <div class="captcha">
                        <div id="recaptcha1"></div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0][0]->get_captcha_plugin(array('var'=>"captcha_register"),$_smarty_tpl);?>

                    <div class="captcha">
                        <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_register']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_register']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <span class="form_captcha">
                            <input class="form_input input_captcha placeholder_focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha" >
                            <span class="form_placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                          </span>
                    </div>
                <?php }?>
            <?php }?>
            <input name="register" type="hidden" value="1">
            
            <input type="submit" class="button md-right g-recaptcha" name="register" data-language="register_create_account" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->register_create_account;?>
">
        </form>
    </div>
</div>
<?php }} ?>
