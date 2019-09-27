<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 18:16:35
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8439718045d766cd39c6d20-70267781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deefbc6212cf27b2124968470e44ea1f095c4bc7' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\brands.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8439718045d766cd39c6d20-70267781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'brands' => 0,
    'b' => 0,
    'lang_link' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d766cd3a6ae48_54024124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d766cd3a6ae48_54024124')) {function content_5d766cd3a6ae48_54024124($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>


<h1 class="h1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></h1>


<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
    <div class="brands clearfix block">
        <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
?>
            <div class="brand_item no_padding col-xs-6 col-sm-4 col-lg-3">
                <a class="brand_link" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands/<?php echo $_smarty_tpl->tpl_vars['b']->value->url;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
                        <div class="brand_image">
                            <img class="brand_img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['b']->value->image,250,250,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        </div>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php } else { ?>
                        <div class="brand_name">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                    <?php }?>    
                </a>
            </div>
        <?php } ?>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['page']->value->description) {?>
    <div class="block padding">
        <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

    </div>
<?php }?>
<?php }} ?>
