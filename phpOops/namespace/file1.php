<?php
//defining namespace
namespace User\Profile;

class UserData{
    private $user_id, $user_name;
    public function __construct($id, $name){
            $this->user_id = $id;
            $this->user_name = $name;

        echo 'name: ' . $this->user_name . " is with id:" . $this->user_id;
    }



    public function details(){
        echo 'name: ' . $this->user_name . " is with id:" . $this->user_id;
    }
}


?>