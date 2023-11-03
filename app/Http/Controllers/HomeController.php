<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\ContactUs;
use App\Models\Exporter;
use App\Models\Extractor;
use App\Models\Importer;
use App\Models\Insurance;
use App\Models\Manager;
use App\Models\myVistorsManager;
use App\Models\Shipping;
use App\Models\Vistor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function adminHome()
    {
        // $managerCount = Manager::count();
        // $agentCount = Agent::count();
        // $vistorCount = Vistor::count();
        // $vistorMCount = myVistorsManager::count();
        $exportersCount = Exporter::count();
        $importersCount = Importer::count();
        $extractorsCount = Extractor::count();
        $shippingsCount = Shipping::count();
        $insuranceCount = Insurance::count();
        $contactUsCount = ContactUs::count();
        return view('admin.dashboard', compact('exportersCount', 'importersCount', 'extractorsCount', 'shippingsCount' , 'insuranceCount' ,'contactUsCount', 'contactUsCount'));
    }

    public function managerHome()
    {
        $agentCount = Agent::where('manager_id', auth('manager')->user()->id)->count();
        $vistorCount = Vistor::where('manager_id', auth('manager')->user()->id)->count();
        $myvistorCount = myVistorsManager::count();
        return view('manager.dashboard', compact('agentCount', 'vistorCount', 'myvistorCount'));
    }

    public function agentHome()
    {
        $vistorCount = Vistor::where('Agent_id', auth('agent')->user()->id)->count();
        return view('Agent.dashboard', compact('vistorCount'));
    }
}
