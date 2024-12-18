<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        return view('template.base');
    }  
    // public function dataUser(){
    //     return view('admin.datauser.index');
    // }  
}
