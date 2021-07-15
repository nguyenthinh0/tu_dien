<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\PhuongThang;
use App\ViThuoc;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class PhuongThangController
{

    public function index()
    {
        // $phuongthang = PhuongThang::all();
        $phuongthang = DB::table("phuongthang")
            ->select(DB::raw('phuongthang.*, baoche.PPBC as PPBC, group_concat(thanhphan.TenTP,"-", thanhphan.TyLe)  as TenTP'))
            ->join("baoche", "baoche.MaBaoChe", "=", "phuongthang.MaBaoChe")
            ->join("thanhphan", "thanhphan.MaPT", "=", "phuongthang.MaPT")
            ->groupBy("phuongthang.MaPT")
            ->get();

        Blade::render('phuongthang/index', compact('phuongthang'));
    }

    public function indexById($id)
    {
        // $phuongthang = PhuongThang::all();
        $id = $id["MaPT"];
        $phuongthang = DB::table("phuongthang")
            ->select(DB::raw('phuongthang.*, baoche.PPBC as PPBC, group_concat(thanhphan.TenTP,"-", thanhphan.TyLe)  as TenTP'))
            ->join("baoche", "baoche.MaBaoChe", "=", "phuongthang.MaBaoChe")
            ->join("thanhphan", "thanhphan.MaPT", "=", "phuongthang.MaPT")
            ->groupBy("phuongthang.MaPT")
            ->get();

        Blade::render('phuongthang/index', compact('phuongthang', 'id'));
    }
}
