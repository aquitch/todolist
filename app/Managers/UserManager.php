<?php 
namespace App\Managers;

use App\Models\User;

class UserManager {

    public function getUserById($user_id){
        $user = User::find($user_id);
        return $user;
    }
}