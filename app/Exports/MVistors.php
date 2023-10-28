<?php

namespace App\Exports;

use App\Models\myVistorsManager;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MVistors implements FromCollection, WithHeadings
{
    public function collection()
    {
        return myVistorsManager::join('managers', 'my_vistors_managers.manager_id', '=', 'managers.id')->select("vistor_code", "name", "lat", "long", "vistor_date", "vistor_time", "notes")->get();
    }

    public function headings(): array
    {
        return ["كود اليوزر", "اسم المشرف", "خطوط الطول", "خطوط العرض", "تاريخ الزيارة", "وقت الزيارة", "ملاحظات"];
    }
}
