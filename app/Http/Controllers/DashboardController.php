<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use View;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return View::make('new.dashboard.dashboard');
    }

    public function rates(){
        return View::make('new.dashboard.rates');
    }

    public function leads(){
        $lead = new Lead();
        $leads = $lead->paginate(10);
        return View::make('new.dashboard.leads', compact('leads'));
    }

    public function showLead($id){
        $lead = Lead::find($id);
        return VIew::make('new.dashboard.show-lead', compact('lead'));
    }
}
