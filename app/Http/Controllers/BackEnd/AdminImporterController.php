<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Importer;

class AdminImporterController extends Controller
{
    public function index()
    {
        $importers = Importer::orderBy('id' , 'desc')->paginate(25);
        return view('backend.importers.index',['importers' => $importers]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function destroy($id)
    {
        $importer = Importer::find($id);
        if ($importer) {
            $importer->delete();
            return redirect()->route('admin.importer.index')->withSuccess('importer deleted successfully');
        }
        return redirect()->route('admin.importer.index')->withSuccess('importer was not found');
    }
}
