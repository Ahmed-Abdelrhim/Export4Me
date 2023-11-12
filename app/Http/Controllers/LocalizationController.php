<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LocalizationController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'ar'])) {
            session(['locale' => $locale]);
        }
        if ($locale == 'ar') {
            return redirect()->back()->withSuccess('تم تغيير اللغة بنجاح');
        }
        return redirect()->back()->withSuccess('Language changed successfully');
    }
}
