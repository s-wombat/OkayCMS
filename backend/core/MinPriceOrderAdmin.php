<?php

require_once('api/Okay.php');

class OrderSettingsAdmin extends Okay {

    /**
     * @return mixed
     */
    public function fetch() {

        if($this->request->post('min_price')) {

            /*Создание*/
            if($this->request->post('min_price')){
                $new_min = $this->request->post('min_price');

                        $new = new stdClass();
                        $new->min_price_order = $new_min;
                        $this->minpriceorder->add_min($new);
                }



            /*Обновление*/
            if($this->request->post('min_price')) {
                $current_min = $this->request->post('min_price');
                $update_min = new stdClass();
                $update_min->min_price_order = $current_min;
                $this->minpriceorder->update_min($update_min);
            }

        }
        // Отображение
        $min_price_order = $this->minpriceorder->get_min();
        $this->design->assign('min_price_order', $min_price_order);



        return $this->design->fetch('min_admin.tpl');
    }

}

