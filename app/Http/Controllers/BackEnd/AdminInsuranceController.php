<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Insurance;

class AdminInsuranceController extends Controller
{
    public function index()
    {
        $insurance = Insurance::orderBy('id' , 'desc')->paginate(25);
        return view('backend.insurance.index', compact('insurance'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function destroy($id)
    {
        $insurance = Insurance::find($id);
        if ($insurance) {
            $insurance->delete();
            return redirect()->route('admin.insurance.index')->withSuccess('Insurance deleted successfully');
        }
        return redirect()->route('admin.insurance.index')->withSuccess('Insurance was not found');
    }
}
