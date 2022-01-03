<?php

namespace App\Http\Controllers;

use App\MenuModel;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index(){
        $menu = MenuModel::all();
        return view('pesan', compact('menu'));
    }
    public function sukses(){
        return view('sukses');
    }
}
