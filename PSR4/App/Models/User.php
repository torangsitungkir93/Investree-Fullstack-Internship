<?php
namespace App\Models;

class User {

    public function all(){
        return [
            'users' => [
                ['id' => 1, 'name' => 'Jhon'],
                ['id' => 2, 'name' => 'Doe'],
            ]
        ];
    }
}