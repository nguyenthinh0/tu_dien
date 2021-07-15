<?php

namespace App\controllers;

use App\BenhDanh;
use App\Blade\Blade;
use App\database\Database;
use App\PhuongThang;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class AdminBenhdanhController
{
     public function index()
     {
          // $benhdanh = BenhDanh::all();
          // $phuongthang = PhuongThang::all();

          $benhdanh = DB::table("benhdanh")
               ->select(DB::raw('benhdanh.*, phuongthang.TenPT as TenPT'))
               ->join("phuongthang", "phuongthang.MaPT", "=", "benhdanh.MaPT")
               ->get();

          Blade::render('admin/benhdanh/index', compact('benhdanh'));
     }
     public function create()
     {
          $phuongthang = PhuongThang::all();
          Blade::render('admin/benhdanh/add', compact('phuongthang'));
     }

     public function store()
     {

          BenhDanh::create([
               "TenBD" => $_POST['TenBD'],
               "NguyenNhan" => $_POST['NguyenNhan'],
               "TheBenh" => $_POST['TheBenh'],
               "Phap" => $_POST['Phap'],
               "MaPT" => $_POST['MaPT'],
          ]);
          
          header('location: /admin/benhdanh');

     }

     public function update($id)
     {
          BenhDanh::where('MaBD', $id['MaBD'])->update([
               "TenBD" => $_POST['TenBD'],
               "NguyenNhan" => $_POST['NguyenNhan'],
               "TheBenh" => $_POST['TheBenh'],
               "Phap" => $_POST['Phap'],
               "MaPT" => $_POST['MaPT'],
          ]);

          header('location: /admin/benhdanh');
     }
     public function edit($id)
     {
          $phuongthang = PhuongThang::all();
          $benhdanh = BenhDanh::where('MaBD', $id['MaBD'])->first();
          Blade::render('admin/benhdanh/edit', compact('benhdanh', 'phuongthang'));
     }
     public function delete($id)
     {
          BenhDanh::where('MaBD', $id['MaBD'])->delete();
          header('location: /admin/benhdanh');
     }
}
