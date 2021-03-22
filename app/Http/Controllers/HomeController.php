<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'123456',
            'nama'=>'Dika Priyatna'
        );
        $data['user']='';
        return view('admin.beranda', compact('title','data'));

    }
    public function dashboard(){
        $title="Data Dasboard";
        
        return view('admin.beranda', compact('title'));

    }
}
