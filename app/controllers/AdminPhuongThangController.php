<?php

namespace App\controllers;

use App\BaoChe;
use App\BenhDanh;
use App\Blade\Blade;
use App\database\Database;
use App\PhuongThang;
use App\User;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class AdminPhuongThangController
{
     public function index()
     {
          $baoche = BaoChe::all();
          $phuongthang = PhuongThang::all();
          Blade::render('admin/phuongthang/index', compact('phuongthang', 'baoche'));
     }
     public function create()
     {
          $baoche = BaoChe::all();

          Blade::render('admin/phuongthang/add', compact('baoche'));
     }
     public function store()
     {
          PhuongThang::create([
               "TenPT" => $_POST["TenPT"],
               "MaBaoChe" => $_POST["MaBaoChe"],
               "TacDung" => $_POST["TacDung"],
               "LieuLuong" => $_POST["LieuLuong"],
               "KiengKi" => $_POST["KiengKi"],
          ]);

          header('location: /admin/phuongthang');
     }
     public function update($id)
     {
          PhuongThang::where('MaPT', $id['MaPT'])
               ->update([
                    "TenPT" => $_POST["TenPT"],
                    "MaBaoChe" => $_POST["MaBaoChe"],
                    "TacDung" => $_POST["TacDung"],
                    "LieuLuong" => $_POST["LieuLuong"],
                    "KiengKi" => $_POST["KiengKi"],

               ]);

          header('location: /admin/phuongthang');
     }
     public function edit($id)
     {
          $baoche = BaoChe::all();
          $phuongthang = PhuongThang::where('MaPT', $id['MaPT'])->first();

          Blade::render('admin/phuongthang/edit', compact('phuongthang', 'baoche'));
     }
     public function delete($id)
     {
          
          PhuongThang::where('MaPT', $id['MaPT'])->delete();

          header('location: /admin/phuongthang');
     }
}
