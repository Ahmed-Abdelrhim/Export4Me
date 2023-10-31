<?php
namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Models\Insurance;

class AdminInsuranceController extends Controller
{
    public function index()
    {
        $insurance = Insurance::orderBy('id' , 'desc')->paginate(1);
        return view('backend.insurance.index', compact('insurance'));
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
