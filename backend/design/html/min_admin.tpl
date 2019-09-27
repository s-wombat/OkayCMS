    <div class="okay_list_footer">
        Минимальная сумма заказа:
        <input class="input" type="text" name="min_price" placeholder="min_price_order">

        <button type="submit" value="labels" class="btn btn_small btn_blue">
            <span>{$btr->topic_send|escape}</span>
        </button>
        <div>
            {var_dump($_POST['min_price'])}
        </div>
    </div>
