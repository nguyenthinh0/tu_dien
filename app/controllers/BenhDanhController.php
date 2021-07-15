<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\BenhDanh;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class BenhDanhController
{

    public function index()
    {
        // $benhdanh = BenhDanh::all();
        $benhdanh = DB::table("benhdanh")
            ->select(DB::raw('benhdanh.*, phuongthang.TenPT as TenPT'))
            ->join("phuongthang", "benhdanh.MaPT", "=", "phuongthang.MaPT")
            ->get();

        Blade::render('benhdanh/index', compact('benhdanh'));
    }
}
