<?php

namespace App\Controllers;

use App\Models\User;

class LoginController
{
    public function index()
    {
        view('auth.login');
    }

    public function login()
    {
        $user = new User;
        $user->email=$_POST['email'];
        $user->password=$_POST['password'];
        $user->rememberMe=$_POST['remember_me'];

        if ($user->login()) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            setcookie('remember_me',$_POST['remember_me'], time() + (86400 * 30));

            redirect('dashboard');
            // header('Location: dashboard.php');
            exit();
        } else {
            echo 'Unable to login user';
        }
    }
}
