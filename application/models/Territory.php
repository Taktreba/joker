<?php

namespace application\models;

use application\core\Model;

class Territory extends Model
{

    public function getRegion()
    {
        $result = $this->db->row("SELECT * from regions");
        return $result;
    }

    public function getCity()
    {

        $region = trim($_POST['region']);
        $result = $this->db->row("SELECT id, name from city WHERE region_id = " . $region);
        return $result;
    }

    public function getDistricts()
    {
        $city = trim($_POST['city']);
        $result = $this->db->row("SELECT id, name from districts WHERE sity_id = " . $city);
        return $result;
    }

}
