<?php

namespace App\controllers;

use App\BaoChe;
use App\BenhDanh;
use App\Blade\Blade;
use App\database\Database;
use App\PhuongThang;
use App\QuyKinh;
use App\TinhVi;
use App\User;
use App\ViThuoc;
use Illuminate\Database\Capsule\Manager as DB;

new Database;
class AdminViThuocController
{
     public function index()
     {
          $vithuoc = ViThuoc::all();
          $quykinh = QuyKinh::all();
          $tinhvi = TinhVi::all();
          Blade::render('admin/vithuoc/index', compact('vithuoc', 'quykinh', 'tinhvi'));
     }

     public function create()
     {
          $quykinh = QuyKinh::all();
          $tinhvi = TinhVi::all();
          Blade::render('admin/vithuoc/add', compact('quykinh', 'tinhvi'));
     }

     public function store()
     {

          $HinhVT = "";

          if (is_uploaded_file($_FILES['imgupload']['tmp_name'])) {
               $HinhVT =  uploadFile($_FILES['imgupload'], 'vithuoc');
          }

          $vithuoc = ViThuoc::create([
               "TenVT" => $_POST['TenVT'],
               "TinhVi" => $_POST['TinhVi'],
               "QuyKinh" => $_POST['QuyKinh'],
               "TacDung" => $_POST['TacDung'],
               "UngDung" => $_POST['UngDung'],
               "LieuLuong" => $_POST['LieuLuong'],
               "KiengKi" => $_POST['KiengKi'],
               "HinhVT" => $HinhVT
          ]);
          header('location: /admin/vithuoc');
     }

     public function update($id)
     {

          $HinhVT = "";

          if (is_uploaded_file($_FILES['imgupload']['tmp_name'])) {
               $HinhVT =  uploadFile($_FILES['imgupload'], 'vithuoc');
          }

          ViThuoc::where('MaVT', $id['MaVT'])->update([
               "TenVT" => $_POST['TenVT'],
               "TinhVi" => $_POST['TinhVi'],
               "QuyKinh" => $_POST['QuyKinh'],
               "TacDung" => $_POST['TacDung'],
               "UngDung" => $_POST['UngDung'],
               "LieuLuong" => $_POST['LieuLuong'],
               "KiengKi" => $_POST['KiengKi'],
               "HinhVT" => $HinhVT
          ]);

          header('location: /admin/vithuoc');
     }
     public function edit($id)
     {

          $vithuoc = ViThuoc::where('MaVT', $id['MaVT'])->first();
          $quykinh = QuyKinh::all();
          $tinhvi = TinhVi::all();

          Blade::render('admin/vithuoc/edit', compact('vithuoc', 'quykinh', 'tinhvi'));
     }
     public function delete($id)
     {
          ViThuoc::where('MaVT', $id['MaVT'])->delete();
          header('location: /admin/vithuoc');
     }
}
