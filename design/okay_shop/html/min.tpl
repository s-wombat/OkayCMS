{$minpriceorder->min}
Минимум = {var_dump($min)}
{*{if ($cart->total_price < 15000.00)}*}
    {*<div class="o_notify_v2_content">*}
        {*<div class="o_notify_v2_content_inner" data-language="order_min">*}
            {*<p>{$lang->order_min}15000 {$currency->sign|escape}*}
            {*</p>*}
        {*</div>*}
    {*</div>*}
    {*</div>*}

{*{else}*}
    {*<div class="o_notify_v2_content">*}
        {*<div class="o_notify_v2_content_inner" data-language="order_min">*}
        {*</div>*}
    {*</div>*}
{*{/if}*}
