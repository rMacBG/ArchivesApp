<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index() {
        return view ('index.index',[
            'title' => 'Archives Hub',
            'text' => '<p>kek</p>',
           // 'imgURL' => 'assets/images/about/about-part.jpg',
        ]);
    }
}
