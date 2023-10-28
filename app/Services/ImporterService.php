<?php
namespace  App\Services;
use App\Models\Exporter;
use App\Models\Importer;
use App\Traits\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ImporterService
{
    use Image;

    public function store($data)
    {
        $company_name = $data['company_name'];
        $owner_name = $data['owner_name'];
        $manager_name = $data['manager_name'];
        $address = $data['address'];

        $country = $data['country'];

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


        $product_name = $data['product_name'];
        $harbor_name = NULL;
        if (isset($data['harbor_name'])) {
            $harbor_name = $data['harbor_name'];
        }

        $origin = NULL;
        if (isset($data['origin'])) {
            $origin = $data['origin'];
        }
        $product_description = NULL;
        if (isset($data['product_description'])) {
            $product_description= $data['product_description'];
        }

        $size = NULL;
        if (isset($data['size'])) {
            $size = $data['size'];
        }
        $imported_before_value = NULL;
        if (isset($data['imported_before_value'])) {
            $imported_before_value = $data['imported_before_value'];
        }


        $sector = NULL;
        if (isset($data['sector'])) {
            $sector = $data['sector'];
        }
        $is_agreed_to_import = $data['is_agreed_to_import'];



        $commercial_record = NULL;
        if (isset($data['commercial_record'])) {
            $commercial_recordArray = $this->storeImage($data['commercial_record'] , 'images/importers/commercial_records', false , '200' ,'200');
            $commercial_record = $commercial_recordArray['hashName'];
        }

        $product_catalog = NULL;
        if (isset($data['product_catalog'])) {
            $product_catalogArray = $this->storeImage($data['product_catalog'] , 'images/importers/product_catalog' , false , '200' , '200');
            $product_catalog = $product_catalogArray['hashName'];
        }

        try {
            DB::beginTransaction();
            Importer::create([
                'company_name' => $company_name,
                'owner_name' => $owner_name,
                'manager_name' => $manager_name,
                'address' => $address,


                'country' => $country,
                'website' => $website,
                'media' => $media,
                'email' => $email,

                'landline' => $landline,
                'mobile_phone' => $phone_number,

                'product_name' => $product_name,
                'harbor_name' => $harbor_name,

                'origin' => $origin,
                'product_description' => $product_description,

                'size' => $size,
                'imported_before_value' => $imported_before_value,

                'sector' => $sector,
                'is_agreed_to_import' => $is_agreed_to_import,

                'commercial_record' => $commercial_record,
                'product_catalog' => $product_catalog,

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
