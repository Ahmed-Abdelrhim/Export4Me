<?php

namespace App\Http\Controllers\Manager;

use App\Exports\myVistorsM;
use App\Exports\VistorsExport;
use App\Exports\vistorsManagerExport;
use App\Http\Controllers\Controller;
use App\Models\myVistorsManager;
use App\Models\Vistor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class VistorsController extends Controller
{
    public function index($page)
    {
        if ($page == 'Allvistors') {
            $Allreports = Vistor::where('status', 1)->where('manager_id', auth('manager')->user()->id)->latest()->get();
        } else {
            $Allreports = myVistorsManager::where('manager_id', auth('manager')->user()->id)->where('status', 1)->latest()->get();
        }
        return view('manager.vistors.index', compact('Allreports', 'page'));
    }

    public function create()
    {
        return view('manager.vistors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'vistor_code' => 'required'
        ]);

        myVistorsManager::create([
            'vistor_code' => $request->vistor_code,
            'vistor_date' => Carbon::today()->format('Y-m-d'),
            'vistor_time' => Carbon::now()->format('g:i A'),
            'lat' => $request->lat,
            'long' => $request->long,
            'notes' => $request->notes,
            'manager_id' => auth('manager')->user()->id,
        ]);

        return redirect()->route('manager.vistor.index', 'myvistors')->with('success', 'تم إضافة التقرير بنجاح');
    }

    public function exportExcel($type)
    {

        $user_id = auth('manager')->user()->id;

        if ($type == 'All') {
            return Excel::download(new vistorsManagerExport($user_id), 'AllVistors.xlsx');
        } else {
            return Excel::download(new myVistorsM($user_id), 'myVistors.xlsx');
        }
    }

    public function destory($id)
    {
        Vistor::where('id', $id)->update([
            'status' => 0
        ]);
        return back()->with('success', 'تم حذف التقرير بنجاح');
    }

    public function deleteAll(Request $request)
    {
        $recardsIds = json_decode($request->recardsIds);

        if ($request->usersType == 'myvistors') {
            $vistors = myVistorsManager::whereIn('id', $recardsIds)->update([
                'status' => 0
            ]);
        } else {
            $vistors = Vistor::whereIn('id', $recardsIds);
            $vistors->update([
                'status' => 0
            ]);
        }

        return back()->with('success', 'تم حذف جميع التقارير بنجاح');
    }
}
