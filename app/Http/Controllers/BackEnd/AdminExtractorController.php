<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Extractor;

class AdminExtractorController extends Controller
{
    public function index()
    {
        $extractors = Extractor::paginate(1);
        return view('admin.extractors.index', compact('extractors'));
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
