<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:32:48
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3583781745d762a50337784-29700817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ea6ff40aeed5c5b79d734566fdc1a7dd257286' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\products.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3583781745d762a50337784-29700817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set_canonical' => 0,
    'self_canonical' => 0,
    'category' => 0,
    'brand' => 0,
    'page' => 0,
    'keyword' => 0,
    'lang' => 0,
    'seo_filter_pattern' => 0,
    'filter_meta' => 0,
    'current_page_num' => 0,
    'is_filter_page' => 0,
    'products' => 0,
    'browsed_products' => 0,
    'lang_link' => 0,
    'browsed_product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762a503e7435_54888592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762a503e7435_54888592')) {function content_5d762a503e7435_54888592($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['set_canonical']->value||$_smarty_tpl->tpl_vars['self_canonical']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/catalog/".((string)$_smarty_tpl->tpl_vars['category']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/brands/".((string)$_smarty_tpl->tpl_vars['brand']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->url=='discounted') {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/discounted", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value->url=='bestsellers') {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/bestsellers", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/all-products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/all-products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
    <?php }?>
<?php }?>


<div class="sidebar">
    <div class="fn_selected_features">
        <?php echo $_smarty_tpl->getSubTemplate ('selected_features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <div class="sidebar_top fn_features">
    <?php echo $_smarty_tpl->getSubTemplate ('features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>

<div class="products_container">
    
    <?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
        <h1 class="h1"><span data-language="products_search"><?php echo $_smarty_tpl->tpl_vars['lang']->value->products_search;?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value) {?>
        <h1 class="h1">
            <span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
        </h1>
    <?php } elseif ($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->h1) {?>
        <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->h1, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    <?php } else { ?>
        <h1 class="h1"><span data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->h1, ENT_QUOTES, 'UTF-8', true);?>
</h1>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1&&($_smarty_tpl->tpl_vars['category']->value->annotation||$_smarty_tpl->tpl_vars['brand']->value->annotation)&&!$_smarty_tpl->tpl_vars['is_filter_page']->value&&!$_GET['page']&&!$_GET['sort']) {?>
        <div class="block padding">
            
            <?php echo $_smarty_tpl->tpl_vars['category']->value->annotation;?>


            
            <?php echo $_smarty_tpl->tpl_vars['brand']->value->annotation;?>

        </div>
    <?php }?>


    
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        
        <div class="fn_products_sort">
            <?php echo $_smarty_tpl->getSubTemplate ("products_sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>

    
    <div id="fn_products_content" class="fn_categories products clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("products_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        
        <div class="fn_pagination">
            <?php echo $_smarty_tpl->getSubTemplate ('chpu_pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1&&$_smarty_tpl->tpl_vars['page']->value->description) {?>
        <div class="block padding">
            <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value==1) {?>
        
        <?php if ($_smarty_tpl->tpl_vars['seo_filter_pattern']->value->description) {?>
            <div class="block padding">
                <?php echo $_smarty_tpl->tpl_vars['seo_filter_pattern']->value->description;?>

            </div>
        <?php } elseif ((!$_smarty_tpl->tpl_vars['category']->value||!$_smarty_tpl->tpl_vars['brand']->value)&&($_smarty_tpl->tpl_vars['category']->value->description||$_smarty_tpl->tpl_vars['brand']->value->description)&&!$_smarty_tpl->tpl_vars['is_filter_page']->value&&!$_GET['page']&&!$_GET['sort']) {?>
            <div class="block padding">
                
                <?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>


                
                <?php echo $_smarty_tpl->tpl_vars['brand']->value->description;?>

            </div>
        <?php }?>
    <?php }?>

</div>


<div class="sidebar sidebar_bottom block">
    
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0][0]->get_browsed_products(array('var'=>'browsed_products','limit'=>4),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
        <div class="h2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_browsed;?>
</div>
        <div class="browsed clearfix">
            <?php  $_smarty_tpl->tpl_vars['browsed_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['browsed_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['browsed_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['browsed_product']->key => $_smarty_tpl->tpl_vars['browsed_product']->value) {
$_smarty_tpl->tpl_vars['browsed_product']->_loop = true;
?>
                <div class="browsed_item col-xs-6 col-sm-3 col-lg-6">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['browsed_product']->value->url;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename) {?>
                            <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['browsed_product']->value->image->filename,50,50);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php } else { ?>
                            <img width="50" height="50" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['browsed_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        <?php }?>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php }?>
</div>
<?php }} ?>
