<?php

namespace App\User\Controller\Front;

use App\User\Model\User;

class UserController
{
    public function show($request, $response)
    {
        $user_id = 1;

        $user = new User();

        if ($user->find($user_id))
        {
            $text = 'Your name!!: ' . $user->username;
        }
        else
        {
            $text = 'User not found :(';
        }
var_dump($user);
        return $text;
    }
}
