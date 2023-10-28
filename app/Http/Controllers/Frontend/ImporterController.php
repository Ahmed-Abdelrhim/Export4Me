<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImporterRequest;
use App\Services\ImporterService;

class ImporterController extends Controller
{
    protected ImporterService $importerService;
    public function __construct(ImporterService $importerService)
    {
        $this->importerService = $importerService;
    }

    public function store(ImporterRequest $request)
    {
        $data = $request->validated();
        $storeData = $this->importerService->store($data);
        if (!$storeData) {
            return redirect()->route('frontend.home')->with('error', 'حدث خطأ ما');
        }
        return redirect()->route('frontend.home')->with('success', 'تم إنشاء الاستماره بنجاح');
    }
}
