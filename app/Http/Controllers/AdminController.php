<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function admin(){
        return view('admin');
    }

    function createAdmin(Request $request){

        $request->validate([
            'namaProduk' => ['required'],
            'gambarProduk' => ['required'],
            'deskripsiProduk' => ['required'],
            'hargaProduk' => ['required'],
            'stokProduk' => ['required'],
        ]);

        $filename = $request->file('gambarProduk')->getClientOriginalName();
        $request->file('gambarProduk')->storeAs('/public'.'/'.$filename);

        Admin::create([
            'namaProduk'=>$request->namaProduk,
            'gambarProduk' => $filename,
            'deskripsiProduk'=>$request->deskripsiProduk,
            'hargaProduk'=>$request->hargaProduk,
            'stokProduk'=>$request->stokProduk,
        ]);
        return redirect('/admin');
    }

    function readAdmin(){
        $data = Admin::all();
        return view('readAdmin', compact('data'));
    }

    function editAdmin($id){
        $data = Admin::find($id);
        return view('editAdmin', compact('data'));
    }

    function  updateAdmin(Request $request, $id){
        $request->validate([
            'namaProduk' => ['required'],
            'gambarProduk' => ['required'],
            'deskripsiProduk' => ['required'],
            'hargaProduk' => ['required'],
            'stokProduk' => ['required'],
        ]);

        $filename = $request->file('gambarProduk')->getClientOriginalName();
        $request->file('gambarProduk')->storeAs('/public'.'/'.$filename);

        Admin::find($id)->update([
            'namaProduk'=>$request->namaProduk,
            'gambarProduk' => $filename,
            'deskripsiProduk'=>$request->deskripsiProduk,
            'hargaProduk'=>$request->hargaProduk,
            'stokProduk'=>$request->stokProduk,
        ]);

        return redirect('/read-admin');
    }

    function deleteAdmin($id){
        $dataImage = Admin::find($id)->gambarProduk;
        Admin::destroy($id);
        Storage::delete('/public'.'/'.$dataImage);
        return redirect('/read-admin');

    }
}
