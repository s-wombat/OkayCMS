<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:20:06
         compiled from "G:\OSPanel\domains\OkayCMS\design\okay_shop\html\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16441168385d76275627d969-01756295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '350df5925f824a5a788826b5159a2a13944a3936' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\design\\okay_shop\\html\\breadcrumb.tpl',
      1 => 1568023006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16441168385d76275627d969-01756295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module' => 0,
    'lang_link' => 0,
    'config' => 0,
    'lang' => 0,
    'category' => 0,
    'keyword' => 0,
    'cat' => 0,
    'brand' => 0,
    'page' => 0,
    'product' => 0,
    'order' => 0,
    'type_post' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762756329783_36503157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762756329783_36503157')) {function content_5d762756329783_36503157($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['module']->value!="MainView") {?>
    <ol class="breadcrumbs">

        
        <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="<?php if (!empty($_smarty_tpl->tpl_vars['lang_link']->value)) {?><?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php }?>" data-language="breadcrumb_home">
                <span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
</span>
            </a>
        </li>

        
        <?php if ($_GET['module']=="ProductsView") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value&&!$_smarty_tpl->tpl_vars['keyword']->value) {?>
                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                                    <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
                    <?php }?>
                <?php } ?>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
brands" data-language="breadcrumb_brands">
                        <span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                    </a>
                </li>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                <li data-language="breadcrumb_search"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_search;?>
</li>
            <?php } else { ?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php }?>

        
        <?php } elseif ($_GET['module']=="BrandsView") {?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

        
        <?php } elseif ($_GET['module']=="ProductView") {?>
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value->path; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
?>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['cat']->value->url;?>
">
                            <span itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

        
        <?php } elseif ($_GET['module']=="FeedbackView"||$_GET['module']=="PageView") {?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</li>

        
        <?php } elseif ($_GET['module']=="CartView") {?>
            <li data-language="breadcrumb_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</li>

        
        <?php } elseif ($_GET['module']=="OrderView") {?>
            <li data-language="breadcrumb_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</li>

        
        <?php } elseif ($_GET['module']=="LoginView"&&$_GET['action']=="password_remind") {?>
            <li data-language="breadcrumbs_password_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</li>

        
        <?php } elseif ($_GET['module']=="LoginView") {?>
            <li data-language="breadcrumbs_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</li>

        
        <?php } elseif ($_GET['module']=="RegisterView") {?>
            <li data-language="breadcrumbs_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</li>

        
        <?php } elseif ($_GET['module']=="UserView") {?>
            <li data-language="breadcrumbs_user"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</li>

        
        <?php } elseif ($_GET['module']=="BlogView") {?>
            <?php if ($_GET['url']) {?>
                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a itemprop="url" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['type_post']->value;?>
" data-language="breadcrumbs_blog">
                        <span itemprop="title">
                            <?php if ($_smarty_tpl->tpl_vars['type_post']->value=="news") {?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                            <?php }?>
                        </span>
                    </a>
                </li>
                <li>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                </li>
            <?php } else { ?>
                <li data-language="breadcrumbs_blog">
                    <?php if ($_smarty_tpl->tpl_vars['type_post']->value=="news") {?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>

                    <?php }?>
                </li>
            <?php }?>
        <?php } elseif ($_GET['module']=='ComparisonView') {?>
            <li data-language="breadcrumb_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</li>
        <?php } elseif ($_GET['module']=='WishlistView') {?>
            <li data-language="breadcrumb_wishlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</li>
        <?php }?>
    </ol>
<?php }?>
<?php }} ?>
