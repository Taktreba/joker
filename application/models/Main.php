<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{

    public function getUsers()
    {
        $result = $this->db->row("SELECT u.name as u_name, u.email as u_email, r.name as r_name, c.name as c_name, d.name as d_name FROM users u INNER JOIN regions r ON u.region_id = r.id INNER JOIN city c ON u.city_id = c.id INNER JOIN districts d ON u.district_id = d.id ORDER BY u_name ASC");
        return $result;
    }


    public function getRegion()
    {
        $result = $this->db->row("SELECT * from regions");
        return $result;
    }

}