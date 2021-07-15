<?php

namespace App\controllers;

use App\BenhDanh;
use App\Blade\Blade;
use App\database\Database;
use App\GopY;
use App\PhuongThang;
use App\ThuatNgu;
use App\ViThuoc;
use App\JWT;
use App\QuanTriVien;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class AdminFeedbackController
{
    /**
     * @function index()
     * List All data from database
     */
    public function index()
    {

        $feedback = GopY::all();
        $qtv = QuanTriVien::all();

        Blade::render('admin/feedback/index', compact('feedback', 'qtv'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     */
    public function create()
    {
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     */
    public function store()
    {

        if (isset($_POST["DoiTuongGY"]) && isset($_POST["NoiDungGY"])) {

            $DoiTuongGY = $_POST["DoiTuongGY"];
            $NoiDungGY = $_POST["NoiDungGY"];

            if ($DoiTuongGY == "" || $NoiDungGY == "") {
                echo "<script>alert('Missing!'); window.location = '/';</script>";
            } else {

                $id = null;
                $type = null;

                if (isset($_SESSION["id"]) && isset($_SESSION["type"])) {
                    $id = $_SESSION["id"];
                    $type = $_SESSION["type"];
                } else {
                    $id = 1;
                    $type = explode("/", $_SERVER['REQUEST_URI'])[1];
                }

                switch ($type) {
                    case 'phuong-thang':
                        $MaTN = $id;
                        $TenTN = PhuongThang::where("MaPT", $id)->first("TenPT")->TenPT;
                        $LoaiTN = "Phương Thang";
                        break;

                    case 'benh-danh':
                        $MaTN = $id;
                        $TenTN = BenhDanh::where("MaBD", $id)->first("TenBD")->TenBD;
                        $LoaiTN = "Bệnh Danh";
                        break;

                    case 'vi-thuoc':
                        $MaTN = $id;
                        $TenTN = ViThuoc::where("MaVT", $id)->first("TenVT")->TenVT;
                        $LoaiTN = "Vị Thuốc";
                        break;

                    case 'thuat-ngu-khac':
                        $MaTN = $id;
                        $TenTN = ThuatNgu::where("MaTN", $id)->first("TenTN")->TenTN;
                        $LoaiTN = "Thuật Ngữ Khác";
                        break;

                    default:
                        $id = 1;
                        $MaTN = $id;
                        $typeTN = explode("/", $_SERVER['REQUEST_URI'])[1];

                        switch ($typeTN) {
                            case 'phuong-thang':
                                $TenTN = PhuongThang::where("MaPT", $id)->first("TenPT")->TenPT;
                                $LoaiTN = "Phương Thang";
                                break;

                            case 'benh-danh':
                                $TenTN = BenhDanh::where("MaBD", $id)->first("TenBD")->TenBD;
                                $LoaiTN = "Bệnh Danh";
                                break;

                            case 'vi-thuoc':
                                $TenTN = ViThuoc::where("MaVT", $id)->first("TenVT")->TenVT;
                                $LoaiTN = "Vị Thuốc";
                                break;

                            case 'thuat-ngu-khac':
                                $TenTN = ThuatNgu::where("MaTN", $id)->first("TenTN")->TenTN;
                                $LoaiTN = "Thuật Ngữ Khác";
                                break;

                            default:
                                $TenTN = PhuongThang::where("MaPT", $id)->first("TenPT")->TenPT;
                                $LoaiTN = "Phương Thang";
                        }
                        break;
                }



                $feedback = new GopY();
                $feedback->MaTN = $MaTN;
                $feedback->TenTN = $TenTN;
                $feedback->LoaiTN = $LoaiTN;
                $feedback->DoiTuongGY = $DoiTuongGY;
                $feedback->NoiDungGY = $NoiDungGY;
                $feedback->TrangThai = 0;

                $feedback->save();

                $_SESSION['success'] = "add";
                header('Location: /');
            }
        }
    }
    /**
     * @function show()
     * Get detail a data in database
     * Type id : number
     * Get id from URl
     */
    public function show($id)
    {
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     */
    public function update()
    {

        $status = $_POST['status'];
        $id = $_POST['id'];
        $MaQTV = null;

        if ($status) {
            $status = 0;
        } else {
            $status = 1;

            if (isset($_SESSION['jwt']) && isset($_SESSION['TenQTV'])) {

                $jwt = $_SESSION['jwt'];
                $user = JWT::decode($jwt, 'kaito', ['HS512']);

                print_r($user);
                echo $_SESSION['TenQTV'];
                echo $user->TenQTV == $_SESSION['TenQTV'];

                if ($user->TenQTV == $_SESSION['TenQTV']) {
                    $MaQTV = $user->MaQTV;
                }
            }
        }

        if ($status !== "" && $id !== "") {

            GopY::where('MaGY', $id)
                ->update([
                    'TrangThai' => $status,
                    'MaQTV' => $MaQTV,
                ]);

            echo json_encode("1");
        } else {
            echo json_encode("");
        }
    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     */
    public function delete($id)
    {
    }
    public function search()
    {
    }
    public function check()
    {
    }
    public function changeStatus($id)
    {
    }
}
