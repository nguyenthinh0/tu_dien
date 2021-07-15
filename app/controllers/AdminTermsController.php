<?php

namespace App\controllers;

use App\Blade\Blade;
use App\database\Database;
use App\ThuatNgu;
use Illuminate\Database\Capsule\Manager as DB;

new Database;

class AdminTermsController extends Controller
{
    /**
     * @function index()
     * List All data from database
     */
    public function index()
    {
        $terms = ThuatNgu::all();
        Blade::render('admin/terms/index', compact('terms'));
    }
    /**
     * @function create()
     * View form create
     * Type data : Array
     */
    public function create()
    {
        Blade::render('admin/terms/add');
    }
    /**
     * @function store()
     * Insert data to database
     * Type data : Array
     */
    public function store()
    {
        $TenTN = $_POST['TenTN'];
        $NoiDung = $_POST['NoiDung'];

        if ($TenTN === "" || $NoiDung === "") {
            echo "<script>alert('Missing!'); window.location = '/admin/term/add';</script>";
        } else {
            $terms = new ThuatNgu();
            $terms->TenTN = $TenTN;
            $terms->NoiDung = $NoiDung;

            $terms->save();
            $_SESSION['success'] = "add";
            header('Location: /admin/terms');
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
        $term = ThuatNgu::where('MaTN', $id['MaTN'])->first();
        Blade::render('/admin/terms/edit', compact('term'));
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

        $TenTN = $_POST['TenTN'];
        $NoiDung = $_POST['NoiDung'];

        if ($TenTN === "" || $NoiDung === "") {
            echo "<script>alert('Missing!'); window.location = '/admin/term/add';</script>";
        } else {
            ThuatNgu::where('MaTN', $id['MaTN'])
                ->update([
                    'TenTN' => $TenTN,
                    'NoiDung' => $NoiDung
                ]);

            $_SESSION['success'] = "edit";
            header('Location: /admin/terms');
        }
    }
    /**
     * @function delete()
     * Delete data with id
     * Type id : number
     */
    public function delete($id)
    {
        ThuatNgu::where('MaTN', $id['MaTN'])->delete();

        $_SESSION['success'] = "delete";
        header('location: /admin/terms');
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
