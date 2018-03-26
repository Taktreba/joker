<?php

namespace application\models;

use application\core\Model;

class User extends Model
{
    public function checkUserName()
    {
        $name = trim($_POST['name']);
        $result = $this->db->query("SELECT * FROM users WHERE name LIKE '" . $name . "'");
        if ($result->rowCount() > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }

    public function checkUserEmail()
    {
        $email = trim($_POST['email']);
        $result = $this->db->query("SELECT * FROM users WHERE email LIKE '" . $email . "'");
        if ($result->rowCount() > 0) {
            return 'false';
        } else {
            return 'true';
        }
    }

    public function addUser()
    {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $region = trim($_POST['region']);
        $city = trim($_POST['city']);
        $districts = trim($_POST['districts']);

        $result = $this->db->row("INSERT INTO users (name, email, region_id, city_id, district_id) VALUES ('" . $name . "', '" . $email . "', '" . $region . "', '" . $city . "', '" . $districts . "')");
        return $result;
    }

    public function getUser()
    {
        $email = trim($_POST['email']);
        $result = $this->db->row("SELECT u.name  AS u_name, u.email AS u_email, r.name  AS r_name, c.name  AS c_name, d.name  AS d_name FROM users u 
                                        INNER JOIN regions r ON u.region_id = r.id
                                        INNER JOIN city c ON u.city_id = c.id
                                        INNER JOIN districts d ON u.district_id = d.id
                                      WHERE u.email LIKE '" . $email . "'
                                        ORDER BY u_name ASC");
        return $result;
    }

}
