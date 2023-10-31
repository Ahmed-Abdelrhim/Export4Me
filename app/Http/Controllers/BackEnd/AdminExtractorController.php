<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Extractor;

class AdminExtractorController extends Controller
{
    public function index()
    {
        $extractors = Extractor::orderBy('id' , 'desc')->paginate(1);
        return view('backend.extractors.index', compact('extractors'));
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
