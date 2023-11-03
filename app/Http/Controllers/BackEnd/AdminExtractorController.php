<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Extractor;

class AdminExtractorController extends Controller
{
    public function index()
    {
        $extractors = Extractor::orderBy('id' , 'desc')->paginate(25);
        return view('backend.extractors.index', compact('extractors'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function destroy($id)
    {
        $extractor = Extractor::find($id);
        if ($extractor) {
            $extractor->delete();
            return redirect()->route('admin.extractor.index')->withSuccess('Extractor deleted successfully');
        }
        return redirect()->route('admin.extractor.index')->withSuccess('Extractor was not found');
    }
}
