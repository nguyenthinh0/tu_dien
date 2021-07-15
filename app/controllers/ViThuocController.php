<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\ViThuoc;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class ViThuocController
{

    public function index()
    {
        // $vithuoc = ViThuoc::all();
        $vithuoc = DB::table("vithuoc")
            ->select(DB::raw('vithuoc.*, quykinh.TenQK as TenQK, tinhvi.TenTV as TenTV'))
            ->join("quykinh", "quykinh.MaQK", "=", "vithuoc.QuyKinh")
            ->join("tinhvi", "tinhvi.MaTV", "=", "vithuoc.TinhVi")
            ->get();
            
        Blade::render('vithuoc/index', compact('vithuoc'));
    }
}
