<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExporterRequest;
use App\Services\ExporterService;

class ExporterController extends Controller
{
    protected ExporterService $exporterService;
    public function __construct(ExporterService $exporterService)
    {
        $this->exporterService = $exporterService;
    }

    public function store(ExporterRequest $request)
    {
        $data = $request->validated();
        $storeData = $this->exporterService->store($data);
        if (!$storeData) {
            return redirect()->route('frontend.home')->with('error', 'حدث خطأ ما');
        }
        return redirect()->route('frontend.home')->with('success', 'تم إنشاء الاستماره بنجاح');
    }
}
