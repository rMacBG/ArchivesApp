<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view ('index.index',[
            'title' => 'Archives for everyone',
            'text' => '<p>Here an archive</p>',
            'imgURL' => 'assets/images/about/about-part.jpg',
        ]);
    }
}
