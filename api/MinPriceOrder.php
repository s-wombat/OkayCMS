<?php

require_once('Okay.php');

class MinPriceOrder extends Okay
{

    /*select record*/
    public function get_min($id)
    {
        if (empty($id)) {
            return false;
        }
        $query = $this->db->placehold("SELECT 
                min.min_price_order  
                FROM __min_price_order min
                WHERE 1              
                LIMIT 1
                ");
        if($this->db->query($query)) {
            return $this->db->result();
        } else {
            return false;
        }
    }

    /*add record*/
    public function add_min($min_price) {
        if(empty($min_price->min_price_order)) {
            $min_price->min_price_order = 0;
        }
        $query = $this->db->placehold("INSERT INTO __min_price_order SET ?%", $min_price);
        if(!$this->db->query($query)) {
            return false;
        }
        $id = $this->db->insert_id();
        return $id;
    }

    /*update record*/
    public function update_min($min_price) {
        $query = $this->db->placehold("UPDATE __min_price_order SET ?% WHERE id in(?@) LIMIT ?", $min_price);
        $this->db->query($query);

        return $min_price;
    }
}
