<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class ArchivesController extends Controller
{
    public function archives(){
        $archive = Archive::latest()->get();
return view('archives.archives',
    ['title' => 'Archive List',
'text' => 'There all the archives here']

) ->with('archives', $archive);
}
}
