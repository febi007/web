<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WebController extends BaseController
{
	 public function index()
    {
        $title = 'Home';
        $content = 'Selamat Datang Bro';
 
        return view('index', compact('title', 'content'));
    }
     public function getPage()
    {
        $title = 'Ini halaman HTML';
        $content = 'Saat ini kita ';
 
        return view('index2', compact('title', 'content'));
    }
}
