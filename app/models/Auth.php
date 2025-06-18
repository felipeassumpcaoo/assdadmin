<?php
namespace app\models;


use app\models\User;

class Auth extends User {


    
   public static function checkToken() 
   { 
      if(!empty($_SESSION['token'])) {
         $token = $_SESSION['token'];
         
         $userToken = new User;
         $user = $userToken->find('token', $token);

         if($user) {

             $_SESSION['user'] = [
                'id' => $user->id,
                'name' => $user->name
            ];

            return $user;
         }
      }

      header("Location: /");
       exit;
   }

   public static function user() {
    if (isset($_SESSION['user'])) {
        return (object) $_SESSION['user'];
    }
    return null;
}

}