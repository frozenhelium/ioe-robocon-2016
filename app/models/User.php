<?php

require_once "../classes/Model.php";

class User extends Model {
    public function get_schema() {
        return array(
            array("username", "string", "extra"=>"UNIQUE"),
            array("password", "string", "max_length"=>255),
            array("privilege", "integer", "max_length"=>3),
            array("created_at", "datetime")
        );
    }

    // default values
    public $privilege = 0;  // 0 == normal 1 == admin

    public function presave() {
        if (!isset($this->created_at)) {
            $this->created_at = new DateTime();
        }
    }
}

 ?>