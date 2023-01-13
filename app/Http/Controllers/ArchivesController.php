<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    public function ArchivesApp(){
return view('ArchivesList.archives', ['title' => 'List with all Archives',
'text' => 'There all the archives']);
}
}
