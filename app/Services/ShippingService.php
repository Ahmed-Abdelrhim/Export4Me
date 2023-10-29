<?php
namespace App\Services;
use App\Models\Shipping;
use App\Traits\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ShippingService
{
    use Image;
    public function store($data)
    {
        $company_name = $data['company_name'];
        $owner_name = $data['owner_name'];
        $manager_name = $data['manager_name'];
        $address = $data['address'];

        $website = NULL;
        if (isset($data['website'])) {
            $website = $data['website'];
        }

        $media = NULL;
        if (isset($data['media'])) {
            $media = $data['media'];
        }

        $email = $data['email'];
        $landline = $data['landline'];
        $phone_number = $data['phone_number'];

        $shipping_types = $data['shipping_types'];

        $commercial_record = NULL;
        if (isset($data['commercial_record'])) {
            $commercial_recordArray = $this->storeImage($data['commercial_record'], 'images/shipping/commercial_records', false, '200', '200');
            $commercial_record = $commercial_recordArray['hashName'];
        }


        try {
            DB::beginTransaction();
            Shipping::create([
                'company_name' => $company_name,
                'owner_name' => $owner_name,
                'manager_name' => $manager_name,
                'address' => $address,

                'website' => $website,
                'media' => $media,
                'email' => $email,
                'landline' => $landline,
                'mobile_phone' => $phone_number,

                'shipping_types' => $shipping_types,

                'commercial_record' => $commercial_record,
                'created_at' => Carbon::now(),
            ]);
            DB::Commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
        return true;
    }
}
