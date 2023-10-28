<?php

namespace App\Http\Controllers\Admin;

use App\Exports\VistorsExport;
use App\Exports\MVistors;
use App\Http\Controllers\Controller;
use App\Models\myVistorsManager;
use App\Models\Vistor;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminVistorsController extends Controller
{
    public function index($page)
    {
        if ($page == 'Allvistors') {
            $Allreports = Vistor::latest()->get();
        } else {
            $Allreports = myVistorsManager::latest()->get();
        }
        return view('admin.vistors.index', compact('Allreports', 'page'));
    }
    public function exportExcel($type)
    {
        if($type == 'manager'){
            return Excel::download(new MVistors, 'VistorsManagers.xlsx');
        }
        return Excel::download(new VistorsExport, 'Vistors.xlsx');
    }
    public function destory($id)
    {
        Vistor::where('id', $id)->delete();
        return back()->with('success', 'تم حذف التقرير بنجاح');
    }
    public function destoryAll(Request $request)
    {
        $recardsIds = json_decode($request->recardsIds);
        if ($request->usersType == 'Allvistors') {
            $vistors = Vistor::whereIn('id', $recardsIds);
            $vistors->delete();
        } else {
            $vistors = myVistorsManager::whereIn('id', $recardsIds);
            $vistors->delete();
        }
        return back()->with('success', 'تم حذف جميع التقارير بنجاح');
    }
}
