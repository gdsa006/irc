<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use App\Models\Rate;
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

    public function getRates(Request $request){
        $val = $request->input('val');
        $rate = new Rate(); 
        if($val == 'asphalt'){
            $rate = $rate->select('af as 1', 'am as 2', 'as as 3', 'ao as 4')->first();
        }
        else if($val == 'metal'){
            $rate = $rate->select('mf as 1', 'mm as 2', 'ms as 3', 'mo as 4')->first();
        }
        else{
            $rate =  $rate->select('of as 1', 'om as 2', 'os as 3', 'oo as 4')->first();
        }
        return response()->json(array('status' => true, 'data' => $rate, 'type' => $val));
    }

    public function saveRates(Request $request){
        $type = $request->input('type');

        $flat = $request->input('flat');
        $mellow = $request->input('mellow');
        $steep = $request->input('steep');
        $unsure = $request->input('unsure');

        $rate = new Rate();
        $rate = $rate->first();

        if($type == 'asphalt'){
            $rate->af = $flat;
            $rate->am = $mellow;
            $rate->as = $steep;
            $rate->ao = $unsure;
        }

        else if($type == 'metal'){
            $rate->mf = $flat;
            $rate->mm = $mellow;
            $rate->ms = $steep;
            $rate->mo = $unsure;
        }

        else{
            $rate->of = $flat;
            $rate->om = $mellow;
            $rate->os = $steep;
            $rate->oo = $unsure;
        }

        
        $rate->save();

        return response()->json(array('status' => true, 'data' => $type));
    }
}
