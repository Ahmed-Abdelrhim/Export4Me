<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Shipping;

class AdminShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::orderBy('id' , 'desc')->paginate(25);
        return view('backend.shipping.index', compact('shippings'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        if ($shipping) {
            $shipping->delete();
            return redirect()->route('admin.shipping.index')->withSuccess('Shipping deleted successfully');
        }
        return redirect()->route('admin.shipping.index')->withSuccess('Shipping was not found');
    }
}
