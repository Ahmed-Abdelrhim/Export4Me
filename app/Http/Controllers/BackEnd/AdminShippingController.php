<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Shipping;

class AdminShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::paginate(1);
        return view('backend.shipping.index', compact('shippings'));
    }

    public function create()
    {
    }

    public function store()
    {
    }
}
