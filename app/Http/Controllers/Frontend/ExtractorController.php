<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExtractorRequest;
use App\Services\ExtractorService;

class ExtractorController extends Controller
{

    protected ExtractorService $extractorService;
    public function __construct(ExtractorService $extractorService)
    {
        $this->extractorService = $extractorService;
    }
    public function store(ExtractorRequest $request)
    {
        $request->validated();
        $extractor =  $this->extractorService->store($request);
        if (!$extractor) {
            return redirect()->route('frontend.home')->with('error', 'حدث خطأ ما');
        }
        return redirect()->route('frontend.home')->with('success', 'تم إنشاء الاستماره بنجاح');
    }
}
