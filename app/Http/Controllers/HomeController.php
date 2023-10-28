<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Manager;
use App\Models\myVistorsManager;
use App\Models\Vistor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function adminHome()
    {
        $managerCount = Manager::count();
        $agentCount = Agent::count();
        $vistorCount = Vistor::count();
        $vistorMCount = myVistorsManager::count();
        return view('admin.dashboard', compact('managerCount', 'agentCount', 'vistorCount', 'vistorMCount'));
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
