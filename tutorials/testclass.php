<?php

class User {
    private $user_id = NULL;
    public function __construct($user_id = NULL) {
        if(is_numeric($user_id))
            $this->setUserID($user_id);
    }

    public static function create($info = []) {

    }

    public function get($fields = []) {

    }

    public function setUserID($id) {
        //$this->user_id = is_numeric($id) ? intval($id) : NULL;

        if(is_numeric($id))
            $this->user_id = intval($id);
        else if(is_null($id))
            $this->user_id = NULL;
    }

    public function getUserID() {
        return is_integer($this->user_id) ? $this->user_id : NULL;
    }
}