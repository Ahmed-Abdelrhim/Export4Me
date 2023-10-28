<?php
namespace  App\Services;
use App\Models\Exporter;
use App\Traits\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ExporterService
{
    use Image;

    public function store($data)
    {
        $company_name = $data['company_name'];
        $owner_name = $data['owner_name'];
        $manager_name = $data['manager_name'];
        $factory_address = $data['factory_address'];

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

        $product_description = NULL;
        if (isset($data['product_description'])) {
            $product_description = $data['product_description'];
        }

        $production_quantity = NULL;
       if (isset($data['production_quantity'])) {
           $production_quantity= $data['production_quantity'];
       }

        $local_selling = NULL;
       if (isset($data['local_selling'])) {
           $local_selling = $data['local_selling'];
       }

        $country_export_to_before = NULL;
        if (isset($data['country_export_to_before'])) {
            $country_export_to_before = $data['country_export_to_before'];
        }


        $country_export_to_before_value = NULL;
        if (isset($data['country_export_to_before_value'])) {
            $country_export_to_before_value = $data['country_export_to_before_value'];
        }



        $exporter_place = $data['exporter_place'];
        $shipping_worked_before = NULL;
        if (isset($data['shipping_worked_before'])) {
            $shipping_worked_before = $data['shipping_worked_before'];
        }

        $sector = NULL;
        if (isset($data['sector'])) {
            $sector = $data['sector'];
        }

        $exporter_record = $data['exporter_record'];
        $export_paper = $data['export_paper'];
        $photo_team = $data['photo_team'];

        $commercial_record = NULL;
        if (isset($data['commercial_record'])) {
            $product_brochureArray = $this->storeImage($data['product_brochure'] , 'images/exporters/commercial_records', false , '200' ,'200');
            $commercial_record = $product_brochureArray['hashName'];
        }

        $product_brochure = NULL;
        if (isset($data['product_brochure'])) {
            $product_brochureArray = $this->storeImage($data['product_brochure'] , 'images/exporters/product_brochure' , false , '200' , '200');
            $product_brochure = $product_brochureArray['hashName'];
        }

       try {
            DB::beginTransaction();
           Exporter::create([
               'company_name' => $company_name,
               'owner_name' => $owner_name,
               'manager_name' => $manager_name,
               'factory_address' => $factory_address,


               'country' => $country,
               'website' => $website,
               'media' => $media,
               'email' => $email,

               'landline' => $landline,
               'mobile_phone' => $phone_number,


               'product_name' => $product_name,
               'product_description' => $product_description,
               'production_quantity' => $production_quantity,


               'local_selling' => $local_selling,
               'country_export_to_before' => $country_export_to_before,
               'country_export_to_before_value' => $country_export_to_before_value,


               'exporter_place' => $exporter_place,
               'shipping_worked_before' => $shipping_worked_before,


               'sector' => $sector,
               'exporter_record' => $exporter_record,
               'export_paper' =>  $export_paper,
               'photo_team' => $photo_team,

               'commercial_record' => $commercial_record,
               'product_brochure' => $product_brochure,
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
