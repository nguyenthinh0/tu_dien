<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\ThuatNgu;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class ThuatNguKhacController
{

    public function index()
    {
        $thuatngu = ThuatNgu::all();
        Blade::render('thuatngu/index', compact('thuatngu'));
    }

}
