<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-09-10 14:31:36
         compiled from "backend\design\html\currency.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7645890145d7789985cee94-32073376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0192f81e2d56276790c4493ee0ecc5059c230d8f' => 
    array (
      0 => 'backend\\design\\html\\currency.tpl',
      1 => 1568022999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7645890145d7789985cee94-32073376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'message_error' => 0,
    'wrong_iso' => 0,
    'w_iso' => 0,
    'lang_id' => 0,
    'currencies' => 0,
    'c' => 0,
    'is_mobile' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d778998780884_78897096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d778998780884_78897096')) {function content_5d778998780884_78897096($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->currency_currencies, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_currencies, ENT_QUOTES, 'UTF-8', true);?>

            </div>
            <div class="box_btn_heading">
                <a id="add_currency" class="btn btn_small btn-info" href="#">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='wrong_iso') {?>
                        Недопустимый код ISO в
                        <?php  $_smarty_tpl->tpl_vars['w_iso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w_iso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wrong_iso']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w_iso']->key => $_smarty_tpl->tpl_vars['w_iso']->value) {
$_smarty_tpl->tpl_vars['w_iso']->_loop = true;
?>
                            <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w_iso']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php } ?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <form method=post class="fn_form_list">
                <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
                <div class="okay_list">
                    <div class="currencies_wrap clearfix">
                        
                        <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_currency_num">ID</div>
                            <div class="okay_list_heading okay_list_currency_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_currency_sign"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_symbol, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_currency_iso"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_iso, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_currency_exchange"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_rate, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_status hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading cur_settings"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        
                        <div id="currencies_block" class="okay_list_body sortable">
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['c']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->index++;
 $_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->index === 0;
?>
                                <div class="okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>
                                        <div class="okay_list_boding okay_list_currency_num">
                                            <span><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</span>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_name">
                                            <input class="form-control" name="currency[id][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                            <input name="currency[name][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>

                                            <?php if ($_smarty_tpl->tpl_vars['c']->first) {?>
                                                <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_base, ENT_QUOTES, 'UTF-8', true);?>
" class="currency_name_active hint-bottom-middle-t-info-s-small-mobile  hint-anim"><?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>
</span>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value==true) {?>
                                            <div class="hidden-md-up mt-q">
                                                <div class="okay_list_currency_exchange_item">
                                                    <?php if (!$_smarty_tpl->tpl_vars['c']->first) {?>
                                                        <div class="input-group">
                                                            <div class="input-group-qw cur_input_exchange">
                                                                <div class="input-group">
                                                                    <input class="form-control"  name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                                    <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                </div>
                                                            </div>

                                                            <div class="input-group-qw"><span class="equality">=</span></div>

                                                            <div class="input-group-qw cur_input_exchange">
                                                                <div class="input-group">
                                                                   <input class="form-control"  name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                                   <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <input name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                        <input name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_iso">
                                            <input class="form-control" name="currency[sign][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_sign">
                                            <input class="form-control" name="currency[code][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value==false) {?>
                                        <div class="okay_list_boding okay_list_currency_exchange">
                                            <div class="okay_list_currency_exchange_item">
                                                <?php if (!$_smarty_tpl->tpl_vars['c']->first) {?>
                                                    <div class="input-group">
                                                        <div class="input-group-qw cur_input_exchange">
                                                            <div class="input-group">
                                                                <input class="form-control"  name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
</span>
                                                            </div>
                                                        </div>

                                                        <div class="input-group-qw"> <span class="equality">=</span> </div>

                                                        <div class="input-group-qw cur_input_exchange">
                                                            <div class="input-group">
                                                               <input class="form-control"  name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                               <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <input name="currency[rate_from][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                    <input name="currency[rate_to][<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
]" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="okay_list_boding okay_list_status hidden-md-down">
                                            <label class="switch switch-default ">
                                                <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>fn_active_class<?php }?>" data-module="currency" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <div class="cur_settings">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_cents_display, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex hint-bottom-middle-t-info-s-small-mobile hint-anim fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['c']->value->cents) {?>fn_active_class<?php }?>" data-module="currency" data-action="cents" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" name="cents">
                                                <i class="fa fa-database fa-sm m-t-2"></i>
                                            </button>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            
                                            <?php if (!$_smarty_tpl->tpl_vars['c']->first) {?>
                                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class=" btn_close fn_remove_currency hint-bottom-right-t-info-s-small-mobile  hint-anim" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" data-toggle="modal" data-target="#fn_currency_delete">
                                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                                </button>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            <div id="new_currency" class="okay_list_body sortable" style="display: none">
                                <div class="okay_list_body_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                                        </div>
                                        <div class="okay_list_boding okay_list_currency_num"></div>
                                        <div class="okay_list_boding okay_list_currency_name">
                                            <input name="currency[id][]" type="hidden" value=""/>
                                            <input name="currency[name][]" class="form-control" type="text" value=""/>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_iso">
                                            <input class="form-control" name="currency[sign][]" type="text" value=""/>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_sign">
                                            <input class="form-control" name="currency[code][]" type="text" value=""/>
                                        </div>
                                        <div class="okay_list_boding okay_list_currency_exchange">
                                            <div class="okay_list_currency_exchange_item">
                                                <div class="input-group">
                                                    <div class="input-group-qw cur_input_exchange">
                                                        <div class="input-group">
                                                            <input class="form-control"  name="currency[rate_from][]" type="text" value=""/>
                                                            <span class="input-group-addon"></span>
                                                        </div>
                                                    </div>

                                                    <div class="input-group-qw"> <span class="equality">=</span> </div>

                                                    <div class="input-group-qw cur_input_exchange">
                                                        <div class="input-group">
                                                            <input class="form-control"  name="currency[rate_to][]" type="text" value=""/>
                                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="okay_list_boding okay_list_status"></div>
                                        <div class="okay_list_setting cur_settings"></div>
                                        <div class="okay_list_boding okay_list_close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="action" class="okay_list_footer">
                            <div class="okay_list_foot_left"></div>
                            <input type=hidden name=recalculate value='0'>
                            <input type=hidden name=action value=''>
                            <input type=hidden name=action_id value=''>
                            <button id="apply_action" type="submit" class="btn btn_small btn_blue">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="boxed boxed_attention">
            <div class="">
               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_message, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>

<a data-toggle="modal" data-target="#fn_currency_recalculate" class="hidden"></a>
<div id="fn_currency_delete" class="modal fade show" role="document">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="card-header">
                <div class="heading_modal"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_confirm_delete, ENT_QUOTES, 'UTF-8', true);?>
</div>
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn_small btn_blue fn_delete_currency_confirm mx-h">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_yes, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>

                <button type="button" class="btn btn_small btn-danger fn_dismiss_currency mx-h" data-dismiss="modal">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_no, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="fn_currency_recalculate" class="modal fade show" role="document">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="card-header">
                <div class="heading_modal"></div>
            </div>
            <div class="modal-body">
                <button type="submit" class="btn btn_small btn_blue fn_recalculate_currency_confirm mx-h">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_yes, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>

                <button type="button" class="btn btn_small btn-danger fn_recalculate_currency_dismiss mx-h" data-dismiss="modal">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->index_no, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    var сurrency_recalculate = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_recalculate, ENT_QUOTES, 'UTF-8', true);?>
';
    var сurrency_recalculate_rate = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->currency_recalculate_rate, ENT_QUOTES, 'UTF-8', true);?>
';
</script>




<script>
    $(function() {

        var confirm = true;
        // Добавление валюты
        var curr = $('#new_currency').clone(true);
        $('#new_currency').remove().removeAttr('id');
        $('a#add_currency').click(function() {
            $(curr).clone(true).appendTo('#currencies_block').fadeIn('slow').find("input[name*=currency][name*=name]").focus();
            return false;
        });

        var currency_to_delete;
        $(document).on("click", ".fn_remove_currency", function () {
            currency_to_delete = $(this).data("id");
        });
        
        $(document).on("click", ".fn_delete_currency_confirm", function () {
            $('input[type="hidden"][name="action"]').val('delete');
            $('input[type="hidden"][name="action_id"]').val(currency_to_delete);
            $(".fn_form_list").submit();
        });
        
        // Подтвердили пересчет валюты
        $(document).on("click", ".fn_recalculate_currency_confirm", function () {
            $('input[name="recalculate"]').val(1);
            confirm = false;
            $(".fn_form_list").submit();
        });
        
        // Отменили пересчет валют
        $(document).on("click", ".fn_recalculate_currency_dismiss", function () {
            $('input[name="recalculate"]').val(0);
            confirm = false;
            $(".fn_form_list").submit();
        });

        // Запоминаем id первой валюты, чтобы определить изменение базовой валюты
        var base_currency_id = $('input[name*="currency[id]"]').val();

        $(".fn_form_list").submit(function() {
            if(base_currency_id != $('input[name*="currency[id]"]:first').val() && confirm) {
                $('#fn_currency_recalculate .heading_modal').text(сurrency_recalculate + ' ' + $('input[name*="name"]:first').val() + ' ' + сurrency_recalculate_rate);
                $('[data-target="#fn_currency_recalculate"]').trigger('click');
                return false;
            }
        });
    });

</script>

<?php }} ?>
