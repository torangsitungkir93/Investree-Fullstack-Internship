<?php

namespace App\Controllers;

use App\Models\User;

class UserController{
    public function index (){
        $user = new User();

        var_dump($user);
        echo "Test apakah sudah masuk ";

        return $user ->all();
    }
}
?>