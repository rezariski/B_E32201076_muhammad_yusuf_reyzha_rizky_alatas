<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index() 
    {
        //return "ini adalah method index dalam penggunaan controller management user";
        $nama = "Muhammad Yusuf Reyzha";

        $pelajaran = ["Algoritma & Pemrograman","Kalkuls","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }

    public function create() 
    {
        return "ini adalah method menambahkan user dalam penggunaan controller";
    }

    public function store(Request $request) 
    {
        return "ini adalah method menambahkan user dalam penggunaan controller";
    }

    public function show($id) {
        return "ini adalah method mengambil data user dalam id";
    }
    
    public function edit($id) {
        return "ini adalah method menampilkan form untuk di edit dengan id";
    }

    public function update(Request $request, $id) {
        return "ini adalah method mengubah data user dengan id";
    }

    public function destroy($id) {
        return "ini adalah method menghapus data user dengan id";
    }
}