<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\QuanTriVien;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class AdminQTVController extends Controller
{
    /**
     * @function index()
     * List All data from database
     */
    public function index()
    {

        $qtv = QuanTriVien::all();

        Blade::render('admin/users/index', compact('qtv'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     */
    public function create()
    {
        Blade::render('admin/users/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     */
    public function store()
    {
        $TenQTV = $_POST['TenQTV'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $Quyen = $_POST['Quyen'];
        $NgaySinh = $_POST['NgaySinh'];
        $SDT = $_POST['SDT'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $GhiChu = $_POST['GhiChu'];

        if ($TenQTV === "" || $Quyen === "") {
            echo "<script>alert('Missing!'); window.location = '/admin/user/add';</script>";
        } else {
            $qtv = new QuanTriVien();
            $qtv->TenQTV = $TenQTV;
            $qtv->username = $username;
            $qtv->password = md5($password);
            $qtv->Quyen = $Quyen;
            $qtv->NgaySinh = $NgaySinh;
            $qtv->SDT = $SDT;
            $qtv->Email = $Email;
            $qtv->DiaChi = $DiaChi;
            $qtv->GhiChu = $GhiChu;

            $qtv->save();
            $_SESSION['success'] = "add";
            header('Location: /admin/users');
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
        $qtv = QuanTriVien::where('MaQTV', $id['MaQTV'])->first();
        Blade::render('/admin/users/edit', compact('qtv'));
    }
    /**
     * @function update()
     * Update data with id to database
     * Type id :number
     * Get id from URL
     * Type data : Array
     */
    public function update($id)
    {

        $TenQTV = $_POST['TenQTV'];
        $Quyen = $_POST['Quyen'];
        $username = $_POST['username'];
        $NgaySinh = $_POST['NgaySinh'];
        $SDT = $_POST['SDT'];
        $Email = $_POST['Email'];
        $DiaChi = $_POST['DiaChi'];
        $GhiChu = $_POST['GhiChu'];

        if ($TenQTV === "" || $Quyen === "") {
            echo "<script>alert('Missing!'); window.location = '/admin/user/add';</script>";
        } else {
            QuanTriVien::where('MaQTV', $id['MaQTV'])
                ->update([
                    'TenQTV' => $TenQTV,
                    'username' => $username,
                    'Quyen' => $Quyen,
                    'SDT' => $SDT,
                    'NgaySinh' => $NgaySinh,
                    'Email' => $Email,
                    'DiaChi' => $DiaChi,
                    'GhiChu' => $GhiChu
                ]);

            $_SESSION['success'] = "edit";
            header('Location: /admin/users');
        }
    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     */
    public function delete($id)
    {
        QuanTriVien::where('MaQTV', $id['MaQTV'])->delete();

        $_SESSION['success'] = "delete";
        header('location: /admin/users');
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
