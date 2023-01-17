<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArchiveRequest;
use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArchivesController extends Controller
{
    public function archives(){
        $archive = Archive::latest()->get();


return view('archives.archives',
    ['title' => 'All stored archives',]
)->with('archives', $archive);
    }
public function create() {
        return view('archives.create');
}
public function store(ArchiveRequest $request){
        echo $request;
        $data = $request->except('method', '_token');
        Archive::create($data->post());
        return redirect(route('archives.archive'));
}
public function edit($id){
        $archive = Archive::find($id);
        return view('archive.edit')->with('archive', $archive);
}
public function update(ArchiveRequest $request, $id)
{
    $data = $request->except('_method', '_token');
    $archive = Archive::find($id);
    if ($archive != null) {
        $archive->update($data);
    }
    return redirect()->action(ArchivesController::class, 'index');
}
        public function delete($id){
            $archive = Archive::find($id);
            if ($archive != null){
                $archive -> delete();
            }
            return redirect()->route('archives.archive')->with('Your action was successful', 'archive deleted!');
    }
}
