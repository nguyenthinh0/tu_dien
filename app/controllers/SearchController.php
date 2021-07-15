<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\ThuatNgu;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class SearchController
{

    public function index()
    {

        Blade::render('search/index');
    }

    public function search()
    {
        if (isset($_POST["LoaiTN"])) {

            $LoaiTN = $_POST["LoaiTN"];

            $result = null;

            switch ($LoaiTN) {

                case 'benh-danh':

                    $TenBD = $_POST["search"];

                    $benhdanh = DB::table("benhdanh")
                        ->select(DB::raw('benhdanh.*, phuongthang.TenPT as TenPT'))
                        ->where("TenBD", "like", "%" . $TenBD . "%")
                        ->join("phuongthang", "benhdanh.MaPT", "=", "phuongthang.MaPT")
                        ->get();

                    if (count($benhdanh) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('benhdanh/index', compact('benhdanh'));
                    }

                    break;

                case 'vi-thuoc':

                    $TenVT = $_POST["search"];

                    $vithuoc = DB::table("vithuoc")
                        ->select(DB::raw('vithuoc.*, quykinh.TenQK as TenQK, tinhvi.TenTV as TenTV'))
                        ->where("TenVT", "like", "%" . $TenVT . "%")
                        ->join("quykinh", "quykinh.MaQK", "=", "vithuoc.QuyKinh")
                        ->join("tinhvi", "tinhvi.MaTV", "=", "vithuoc.TinhVi")
                        ->get();

                    if (count($vithuoc) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('vithuoc/index', compact('vithuoc'));
                    }

                    break;

                case 'phuong-thang':

                    $TenPT = $_POST["search"];

                    $phuongthang = DB::table("phuongthang")
                        ->select(DB::raw('phuongthang.*, baoche.PPBC as PPBC, group_concat(thanhphan.TenTP,"-", thanhphan.TyLe)  as TenTP'))
                        ->where("TenPT", "like", "%" . $TenPT . "%")
                        ->join("baoche", "baoche.MaBaoChe", "=", "phuongthang.MaBaoChe")
                        ->join("thanhphan", "thanhphan.MaPT", "=", "phuongthang.MaPT")
                        ->groupBy("phuongthang.MaPT")
                        ->get();


                    if (count($phuongthang) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('phuongthang/index', compact('phuongthang'));
                    }

                    break;

                case 'thuat-ngu-khac':

                    $TenTN = $_POST["search"];

                    $thuatngu = DB::table("thuatngu")
                        ->where("TenTN", "like", "%" . $TenTN . "%")
                        ->get();

                    if (count($thuatngu) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('thuatngu/index', compact('thuatngu'));
                    }

                    break;

                default:
                    Blade::render('search/description');
                    break;
            }
        }
    }

    public function filter()
    {

        if (isset($_POST["LoaiTN"])) {

            $LoaiTN = $_POST["LoaiTN"];

            $result = null;

            switch ($LoaiTN) {

                case 'benh-danh':

                    $TenBD = $_POST["TenBD"];
                    $NguyenNhan = $_POST["NguyenNhan"];
                    $TheBenh = $_POST["TheBenh"];
                    $Phap = $_POST["Phap"];
                    $PhuongThang = $_POST["PhuongThang"];

                    $benhdanh = DB::table("benhdanh")
                        ->select(DB::raw('benhdanh.*, phuongthang.TenPT as TenPT, "Bệnh Danh" as TenTable'))
                        ->where("TenBD", "like", "%" . $TenBD . "%")
                        ->where("NguyenNhan", "like", "%" . $NguyenNhan . "%")
                        ->where("TheBenh", "like", "%" . $TheBenh . "%")
                        ->where("Phap", "like", "%" . $Phap . "%")
                        ->join("phuongthang", "phuongthang.MaPT", "=", "benhdanh.MaPT")
                        ->where("TenPT", "like", "%" . $PhuongThang . "%")
                        ->get();

                    if (count($benhdanh) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('benhdanh/index', compact('benhdanh'));
                    }

                    break;

                case 'vi-thuoc':

                    $TenVT = $_POST["TenVT"];
                    $MaTV = $_POST["TinhVi"];
                    $MaQK = $_POST["QuyKinh"];
                    $TacDung = $_POST["TacDung"];
                    $UngDung = $_POST["UngDung"];
                    $LieuLuong = $_POST["LieuLuong"];
                    $KiengKi = $_POST["KiengKi"];

                    $vithuoc = DB::table("vithuoc")
                        ->select(DB::raw('vithuoc.*, tinhvi.TenTV as TenTV, quykinh.TenQK as TenQK'))
                        ->where("TacDung", "like", "%" . $TacDung . "%")
                        ->where("TenVT", "like", "%" . $TenVT . "%")
                        ->where("UngDung", "like", "%" . $UngDung . "%")
                        ->where("LieuLuong", "like", "%" . $LieuLuong . "%")
                        ->where("KiengKi", "like", "%" . $KiengKi . "%")
                        ->join("tinhvi", "TinhVi.MaTV", "=", "vithuoc.TinhVi")
                        ->join("quykinh", "QuyKinh.MaQK", "=", "vithuoc.QuyKinh")
                        ->where("MaTV", $MaTV)
                        ->where("MaQK", $MaQK)
                        ->get();

                    if (count($vithuoc) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('vithuoc/index', compact('vithuoc'));
                    }

                    break;

                case 'phuong-thang':

                    $TenPT = $_POST["TenPT"];
                    $PPBC = $_POST["PPBC"];
                    $ThanhPhan = $_POST["ThanhPhan"];
                    $TacDung = $_POST["TacDung"];
                    $LieuLuong = $_POST["LieuLuong"];
                    $KiengKi = $_POST["KiengKi"];

                    $phuongthang = DB::table("phuongthang")
                        ->select(DB::raw('phuongthang.*, baoche.PPBC as PPBC, group_concat(thanhphan.TenTP,"-", thanhphan.TyLe)  as TenTP'))
                        ->where("TenPT", "like", "%" . $TenPT . "%")
                        ->where("TacDung", "like", "%" . $TacDung . "%")
                        ->where("LieuLuong", "like", "%" . $LieuLuong . "%")
                        ->where("KiengKi", "like", "%" . $KiengKi . "%")
                        ->groupBy("phuongthang.MaPT")
                        ->join("baoche", "baoche.MaBaoChe", "=", "phuongthang.MaBaoChe")
                        ->join("thanhphan", "thanhphan.MaPT", "=", "phuongthang.MaPT")
                        ->where("PPBC", "like", "%" . $PPBC . "%")
                        ->where("TenTP", "like", "%" . $ThanhPhan . "%")
                        ->get();


                    if (count($phuongthang) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('phuongthang/index', compact('phuongthang'));
                    }

                    break;

                case 'thuat-ngu-khac':

                    $TenTN = $_POST["TenTN"];
                    $NoiDung = $_POST["NoiDung"];

                    $thuatngu = DB::table("thuatngu")
                        ->select(DB::raw('thuatngu.*, "Thuật Ngữ Khác" as TenTable'))
                        ->where("TenTN", "like", "%" . $TenTN . "%")
                        ->where("NoiDung", "like", "%" . $NoiDung . "%")
                        ->get();

                    if (count($thuatngu) == 0) {
                        Blade::render('search/description');
                    } else {
                        Blade::render('thuatngu/index', compact('thuatngu'));
                    }

                    break;

                default:
                    # code...
                    break;
            }
        }
    }
}
