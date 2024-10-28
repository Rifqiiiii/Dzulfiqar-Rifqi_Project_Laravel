<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); // ke halaman index.blade.php
    }
    public function login(){
        return view('login'); // ke halaman login.blade.php
    } 
    public function about(){
        $data = [
            'name' => 'Dzulfiqar Rifqi',
            'address' => 'Purbaalingga',
            'email' => '541231057@smktelkom-pwt.sch.id'
        ];
        return view('about',$data);
    }
}

