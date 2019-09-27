<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-10 09:47:45
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14783389605d774711ee2ce6-92521189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c179c571333c39c3aeeac0e4d4e76495b3481baa' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14783389605d774711ee2ce6-92521189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d774711f3ca75_53974017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d774711f3ca75_53974017')) {function content_5d774711f3ca75_53974017($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
