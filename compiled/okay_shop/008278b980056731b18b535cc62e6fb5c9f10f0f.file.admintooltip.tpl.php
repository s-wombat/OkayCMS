<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-09 13:20:06
         compiled from "G:\OSPanel\domains\OkayCMS\backend\design\html\admintooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14064003555d762756095465-71905434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '008278b980056731b18b535cc62e6fb5c9f10f0f' => 
    array (
      0 => 'G:\\OSPanel\\domains\\OkayCMS\\backend\\design\\html\\admintooltip.tpl',
      1 => 1568022999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14064003555d762756095465-71905434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_version' => 0,
    'btr' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d762756129b90_38185869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d762756129b90_38185869')) {function content_5d762756129b90_38185869($_smarty_tpl) {?><link href="backend/design/js/admintooltip/styles/admin.css<?php if ($_smarty_tpl->tpl_vars['css_version']->value) {?>?v=<?php echo $_smarty_tpl->tpl_vars['css_version']->value;?>
<?php }?>" rel="stylesheet">

<div class="admTools">
    <a href="javascript:void(0);" class="openTools"></a>
    <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_title_1;?>
</p>
    <p class="tool-descr"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_descr;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="admin_bookmark"></a>
    <p class="tool-title"><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_fast_edit;?>
</p>
    <a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_enable;?>
" href="javascript:void(0);" class="changeTools"><span></span></a>
</div>

<div class="fn_tooltip tooltip"></div>

<a title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_go_to_admin;?>
" href="backend/" class="top_admin_bookmark"></a>


<script>
    $(function() {
        tooltip = $(".fn_tooltip");
        $(document).on('mouseleave', '.tooltip', function(){tooltipcanclose=true;setTimeout("close_tooltip();", 300);});
        $(document).on('mouseover', '.tooltip', function(){tooltipcanclose=false;});
        $(document).on('click', '.openTools', function() {
            $(this).closest('.admTools').toggleClass('open');
        });

        if(typeof(Storage) !== "undefined") {

            function setTools() {
                if ( localStorage.getItem("adminTooltip") == "set" ) {
                    $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').on('mouseover', show_tooltip);
                    $('.changeTools').addClass('on').attr('title', '<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_disable;?>
');
                } else {
                    $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').off('mouseover', show_tooltip);
                    $('.changeTools').removeClass('on').attr('title', '<?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_enable;?>
');
                }
            }

            setTools();

            $(document).on('click', '.changeTools', function() {
                if ( localStorage.getItem("adminTooltip") == "set" ) {
                    localStorage.setItem("adminTooltip", "unset");
                    setTools();
                } else {
                    localStorage.setItem("adminTooltip", "set");
                    setTools();
                }
            });

        } else {
            $('[data-page], [data-category], [data-brand], [data-product], [data-post], [data-feature], [data-language], [data-languages]').on('mouseover', show_tooltip);
        }
    });

    function show_tooltip()
    {
        tooltipcanclose=false;
        tooltip.show();
        $(this).on('mouseleave', function(){tooltipcanclose=true;setTimeout("close_tooltip();", 500);});

        flip = !($(this).offset().left+tooltip.width()+25 < $('body').width());

        tooltip.css('top',  $(this).outerHeight() + 5 + $(this).offset().top + 'px');
        tooltip.css('left', ($(this).offset().left + $(this).outerWidth()*0.5 - (flip ? tooltip.width()-40 : 0)  + 0) + 'px');

        from = encodeURIComponent(window.location);
        tooltipcontent = '';
        var lang = '&lang_id=<?php echo $_smarty_tpl->tpl_vars['language']->value->id;?>
';
        if(typeof  lang_id != 'undefined') {
            lang = '&lang_id=' + lang_id;
        }

        if(id = $(this).attr('data-page'))
        {
            tooltipcontent = "<a href='backend/index.php?module=PageAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_page;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=PageAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_page;?>
</a>";
        }

        if(id = $(this).attr('data-category'))
        {
            tooltipcontent = "<a href='backend/index.php?module=CategoryAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_category;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=CategoryAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_category;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=ProductAdmin&category_id="+id+"&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_product;?>
</a>";
        }

        if(id = $(this).attr('data-brand'))
        {
            tooltipcontent = "<a href='backend/index.php?module=BrandAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_brand;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=BrandAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_brand;?>
</a>";
        }

        if(id = $(this).attr('data-product'))
        {
            tooltipcontent = "<a href='backend/index.php?module=ProductAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_product;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=ProductAdmin&category_id="+id+"&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_product;?>
</a>";
        }

        if(id = $(this).attr('data-post'))
        {
            tooltipcontent = "<a href='backend/index.php?module=PostAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_post;?>
</a>";
        }

        if(id = $(this).attr('data-feature'))
        {
            tooltipcontent = "<a href='backend/index.php?module=FeatureAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_feature;?>
</a>";
            tooltipcontent += "<a href='backend/index.php?module=FeatureAdmin&return="+from+lang+"' class=admin_tooltip_add><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_add_feature;?>
</a>";
        }

        if(id = $(this).attr('data-language'))
        {
            tooltipcontent = "<a href='backend/index.php?module=TranslationAdmin&id="+id+"&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_translarion;?>
</a>";
        }

        if(id = $(this).attr('data-languages'))
        {
            tooltipcontent = "<a href='backend/index.php?module=LanguagesAdmin&return="+from+lang+"' class=admin_tooltip_edit><?php echo $_smarty_tpl->tpl_vars['btr']->value->admintooltip_edit_language;?>
</a>";
        }

        $('.tooltip').html(tooltipcontent);
    }

    function close_tooltip()
    {
        if(tooltipcanclose)
        {
            tooltipcanclose=false;
            tooltip.hide();
        }
    }

    function SetTooltips() {
        elements = document.getElementsByTagName("body")[0].getElementsByTagName("*");

        for (i = 0; i <elements.length; i++)
        {
            tooltip = elements[i].getAttribute('tooltip');
            if(tooltip)
            {
                elements[i].onmouseout = function(e) {tooltipcanclose=true;setTimeout("CloseTooltip();", 1000);};
                switch(tooltip)
                {
                    case 'product':
                        elements[i].onmouseover = function(e) {AdminProductTooltip(this,  this.getAttribute('product_id'));tooltipcanclose=false;}
                        break;
                    case 'hit':
                        elements[i].onmouseover = function(e) {AdminHitTooltip(this,  this.getAttribute('product_id'));tooltipcanclose=false;tooltipcanclose=false;}
                        break;
                    case 'category':
                        elements[i].onmouseover = function(e) {AdminCategoryTooltip(this,  this.getAttribute('category_id'));tooltipcanclose=false;}
                        break;
                    case 'news':
                        elements[i].onmouseover = function(e) {AdminNewsTooltip(this,  this.getAttribute('news_id'));tooltipcanclose=false;}
                        break;
                    case 'article':
                        elements[i].onmouseover = function(e) {AdminArticleTooltip(this,  this.getAttribute('article_id'));tooltipcanclose=false;}
                        break;
                    case 'page':
                        elements[i].onmouseover = function(e) {AdminPageTooltip(this,  this.getAttribute('id')); tooltipcanclose=false;}
                        break;
                    case 'currency':
                        elements[i].onmouseover = function(e) {AdminCurrencyTooltip(this); tooltipcanclose=false;}
                        break;
                }
            }
        }
    }


    function ShowTooltip(i, content) {

        tooltip = document.getElementById('tooltip');

        document.getElementById('tooltip').innerHTML = content;
        tooltip.style.display = 'block';

        var xleft=0;
        var xtop=0;
        o = i;

        do {
            xleft += o.offsetLeft;
            xtop  += o.offsetTop;

        } while (o=o.offsetParent);

        xwidth  = i.offsetWidth  ? i.offsetWidth  : i.style.pixelWidth;
        xheight = i.offsetHeight ? i.offsetHeight : i.style.pixelHeight;

        bwidth =  tooltip.offsetWidth  ? tooltip.offsetWidth  : tooltip.style.pixelWidth;

        w = window;

        xbody  = document.compatMode=='CSS1Compat' ? w.document.documentElement : w.document.body;
        dwidth = xbody.clientWidth  ? xbody.clientWidth   : w.innerWidth;
        bwidth = tooltip.offsetWidth ? tooltip.offsetWidth  : tooltip.style.pixelWidth;

        flip = !( 25 + xleft + bwidth < dwidth);

        tooltip.style.top  = xheight - 3 + xtop + 'px';
        tooltip.style.left = (xleft - (flip ? bwidth : 0)  + 25) + 'px';

        return false;
    }
</script>

<?php }} ?>
