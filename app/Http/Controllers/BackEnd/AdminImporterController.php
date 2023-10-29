<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Importer;

class AdminImporterController extends Controller
{
    public function index()
    {
        $importers = Importer::get();
        return view('backend.importers.index',['importers' => $importers]);
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
