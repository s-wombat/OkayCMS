<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:01:47
         compiled from "backend\design\html\include_languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5626661925d76230b618101-68850965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e95fc87242e3533d32721f821bf497e763c564' => 
    array (
      0 => 'backend\\design\\html\\include_languages.tpl',
      1 => 1568022999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5626661925d76230b618101-68850965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'category' => 0,
    'brand' => 0,
    'feature' => 0,
    'order' => 0,
    'user' => 0,
    'group' => 0,
    'page' => 0,
    'post' => 0,
    'banner' => 0,
    'banners_image' => 0,
    'delivery' => 0,
    'payment_method' => 0,
    'm' => 0,
    'language' => 0,
    'translation' => 0,
    'menu' => 0,
    'languages' => 0,
    'lang' => 0,
    'lang_id' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d76230b66a199_16704899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d76230b66a199_16704899')) {function content_5d76230b66a199_16704899($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['product']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['brand']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['brand']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['group']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['group']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['post']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['banner']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['banners_image']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['banners_image']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['delivery']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['payment_method']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['payment_method']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['m']->value->id&&$_GET['module']=="ManagerAdmin") {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['m']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['language']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['translation']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['translation']->value->id, null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value->id) {?>
    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['menu']->value->id, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
?>
        <a class="flag flag_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
 <?php if ($_smarty_tpl->tpl_vars['lang']->value->id==$_smarty_tpl->tpl_vars['lang_id']->value) {?> focus<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('lang_id'=>$_smarty_tpl->tpl_vars['lang']->value->id,'id'=>$_smarty_tpl->tpl_vars['id']->value),$_smarty_tpl);?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value->label;?>
">
            <img src="../files/lang/<?php echo $_smarty_tpl->tpl_vars['lang']->value->label;?>
.png" width="32px;" height="32px;">
        </a>
    <?php } ?>
<?php }?>
<?php }} ?>
