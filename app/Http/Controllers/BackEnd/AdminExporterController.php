<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Exporter;

class AdminExporterController extends Controller
{
    public function index()
    {
        $exporters = Exporter::paginate(1);
        return view('backend.exporters.index',['exporters' => $exporters]);
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
