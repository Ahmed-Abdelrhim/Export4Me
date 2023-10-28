<?php

namespace App\Exports;

use App\Models\myVistorsManager;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class myVistorsM implements FromCollection, WithHeadings
{
    public $user;

    public function __construct($user_id)
    {
        $this->user = $user_id;
    }
    public function collection()
    {
        return myVistorsManager::where('my_vistors_managers.manager_id', $this->user)->join('managers', 'my_vistors_managers.manager_id', '=', 'managers.id')->select("vistor_code", "name", "lat", "long", "date", "vistor_time", "notes")->get();
    }

    public function headings(): array
    {
        return ["كود اليوزر", "اسم المشرف", "خطوط الطول", "خطوط العرض", "تاريخ الزيارة", "وقت الزيارة", "ملاحظات"];
    }
}
