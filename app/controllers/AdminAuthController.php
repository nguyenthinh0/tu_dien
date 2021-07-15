<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\JWT;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class AdminAuthController
{

    public function index()
    {
        Blade::render('admin/auth/login');
    }

    public function login()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "" || $password === "") {
            echo "<script>alert('Missing!'); window.location = '/login';</script>";
        } else {

            $qtv = DB::table("quantrivien")
                ->where(['username' => $username, 'password' => md5($password)])
                ->first();

            if ($qtv !== NULL) {

                $_SESSION['TenQTV'] = $qtv->TenQTV;

                $data = [
                    'TenQTV' => $qtv->TenQTV,
                    'MaQTV' => $qtv->MaQTV,
                    'Quyen' => $qtv->Quyen
                ];

                $jwt = JWT::encode(
                    $data,
                    "kaito",
                    'HS512'
                );

                $_SESSION['jwt'] = $jwt;

                echo "<script>alert('Login success!'); window.location = '/admin';</script>";

            } else {
                echo "<script>alert('Wrong username/password!'); window.location = '/admin/login';</script>";
            }
        }
    }

    public function logout()
    {
        unset($_SESSION["TenQTV"]);
        unset($_SESSION["MaQTV"]);
        unset($_SESSION["jwt"]);
        echo "<script>window.location = '/';</script>";
    }
}
