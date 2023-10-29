<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingCompanyRequest;
use App\Services\ShippingService;

class ShippingController extends Controller
{
    protected ShippingService $shippingService;
    public function __construct(ShippingService $shippingService)
    {
        $this->shippingService = $shippingService;
    }

    public function store(ShippingCompanyRequest $request)
    {
        $data = $request->validated();
        $storeData = $this->shippingService->store($data);
        if (!$storeData) {
            return redirect()->route('frontend.home')->with('error', 'حدث خطأ ما');
        }
        return redirect()->route('frontend.home')->with('success', 'تم إنشاء الاستماره بنجاح');
    }
}
