<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\InsuranceCompanyRequest;
use App\Services\InsuranceService;

class InsuranceController extends Controller
{
    protected InsuranceService $insuranceService;
    public function __construct(InsuranceService $insuranceService)
    {
        $this->insuranceService = $insuranceService;
    }

    public function store(InsuranceCompanyRequest $request)
    {
        $data = $request->validated();
        $storeData = $this->insuranceService->store($data);
        if (!$storeData) {
            return redirect()->route('frontend.home')->with('error', 'حدث خطأ ما');
        }
        return redirect()->route('frontend.home')->with('success', 'تم إنشاء الاستماره بنجاح');
    }
}
