<?php

require_once('View.php');

class MinPriceOrderView extends View {


    /*Выбираем минимальную сумму заказа из базы*/
    public function fetch() {

        $min = $this->minpriceorder->get_min();
        
       //  Если не найден - ошибка
        if(!$min) {
            return false;
        }
        return $this->design->assign('min', $min);
        return $this->design->fetch('min.tpl');

    }
    // testtesttesttesttest
    
}
