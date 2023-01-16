<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArchivesController extends Controller
{
    public function archives(){
        $archive = Archive::latest()->get();

return view('archives.archives',
    ['title' => 'Archive List',
'text' => 'There all the archives here']

)->with('archives', $archive);
    }
public function archive_opened($id){
        $id = Archive::
        $name = Archive::archive()->get();
             $description = Archive::archive()->get();
        return View('ArchiveTemplate.archive_template',
        ['title'=> ($name),
        'text' => 'current archive'])->with('archives', $id) ->with('archives', $description)
            ->with('archives', $name);

}
}
