<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function extract()
    {
        return view('frontend.forms.extract');
    }

    public function export()
    {
        return view('frontend.forms.export');
    }

    public function import()
    {
        return view('frontend.forms.import');
    }
    public function shippingCompany()
    {
        return view('frontend.forms.shipping');
    }

    public function insuranceCompany()
    {
        return view('frontend.forms.insurance');
    }
}
