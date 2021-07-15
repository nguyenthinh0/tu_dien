<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\PhuongThang;
use App\DanhGia;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class HomeController
{

    public function index()
    {

        Blade::render('index/index');
    }

    public function rate()
    {
        Blade::render('rate/index',);
    }

    public function rateAdmin()
    {
        $danhgia = DanhGia::all();
        Blade::render('admin/rate/index', compact('danhgia'));
    }


    public function submitRate()
    {
        $CLTN = "";
        $MDSD = "";
        $TDTT = "";
        $GD = "";
        $TGVH = "";
        $BCTB = "";

        if (isset($_POST["CLTN"])) {
            $CLTN = $_POST["CLTN"];
        }

        if (isset($_POST["MDSD"])) {
            $MDSD = $_POST["MDSD"];
        }

        if (isset($_POST["TDTT"])) {
            $TDTT = $_POST["TDTT"];
        }

        if (isset($_POST["GD"])) {
            $GD = $_POST["GD"];
        }

        if (isset($_POST["TGVH"])) {
            $TGVH = $_POST["TGVH"];
        }

        if (isset($_POST["BCTB"])) {
            $BCTB = $_POST["BCTB"];
        }

        $rate = new DanhGia();
        $rate->ChatLuongTN = $CLTN;
        $rate->MucDoSD = $MDSD;
        $rate->TocDoTT = $TDTT;
        $rate->GiaoDien = $GD;
        $rate->ThoiGianVH = $TGVH;
        $rate->BoCucTB = $BCTB;

        $rate->save();

        header("Location: /");
    }

    public function setSession()
    {
        if (isset($_POST["id"]) && isset($_POST["type"])) {
            $_SESSION["id"] = $_POST["id"];
            $_SESSION["type"] = $_POST["type"];
        }
    }

    public function getName()
    {
        // if (isset($_SESSION["id"]) && isset($_SESSION["type"])) {
        //     $_SESSION["id"] = $_POST["id"];
        //     $_SESSION["type"] = $_POST["type"];
        // }else{
        //     $_SERVER['REQUEST_URI']
        // }
    }
}
