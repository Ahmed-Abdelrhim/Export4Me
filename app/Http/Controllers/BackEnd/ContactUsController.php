<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::paginate(25);
        return view('backend.contact.index',compact('contacts'));
    }

    public function create()
    {

    }

    public function store(ContactUsRequest $request)
    {
        try {
            DB::beginTransaction();
            $contactUs = ContactUs::create([
                'name' => $request->get('contact_name'),
                'email' => $request->get('contact_email'),
                'phone' => $request->get('contact_phone'),
                'message' => $request->get('contact_message'),
                'created_at' => Carbon::now(),
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('frontend.home')->withSuccess('Something Went Wrong');
        }
        return redirect()->route('frontend.home')->withSuccess('Successfully Transaction, we will get in touch very soon');
    }

    public function destroy(Request $request, $id)
    {
        $contactUs = ContactUs::find($id);
        if ($contactUs) {
            $contactUs->delete();
            return redirect()->route('admin.dashboard')->withSuccess('Deleted successfully');
        }
        return redirect()->route('admin.dashboard')->withSuccess('This Contact was not found');
    }
}
