<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Exporter;

class AdminExporterController extends Controller
{
    public function index()
    {
        $exporters = Exporter::orderBy('id' , 'desc')->paginate(1);
        return view('backend.exporters.index',['exporters' => $exporters]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function destroy($id)
    {
        $exporter = Exporter::find($id);
        if ($exporter) {
            $exporter->delete();
            return redirect()->route('admin.exporter.index')->withSuccess('Exporter deleted successfully');
        }
        return redirect()->route('admin.exporter.index')->withSuccess('Exporter was not found');
    }
}
