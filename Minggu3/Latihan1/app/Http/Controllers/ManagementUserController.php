<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        //return "Halo ini adalah method index, dalam controller ManagementUser.";
        return "Method ini nantinya akan digunakan mengambil semua data user";
    }
    public function create()
    {
        return "Methode ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(request $request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=". $id;
    }
    public function edit($id){
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=". $id;
    }
    public function update(request $request, $id){
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=". $id;
    }
    public function destroy($id){
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=". $id;
    }
}