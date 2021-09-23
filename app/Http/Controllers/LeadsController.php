<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LeadsController extends Controller
{
    public function Steps(Request $request){
        $address = $request->address;
        $findAddress = Location::where('Address', $address)->count();
        if($findAddress){
            // return View('form.step.one');
            $request->session()->put('leadData', $address);
            return response()->json(array('status' => 'found'));
        }
        else{
            return response()->json(array('status' => 'not found'));
        }
    }

    public function stepOneProcess(Request $request){
            $fname = $request->fname;
            $lname = $request->lname;
            if($fname && $lname){
                $data = $request->session()->get('leadData');
                $transferData = $fname . ':' . $lname . ':' . $data;
                $request->session()->put('leadData', $transferData);
                return response()->json(array('status' => 's2'));
            }else{
                return response()->json(array('status' => 'false'));
            }
        
    }

    public function stepTwoProcess(Request $request){

        $email = $request->query('email');
        if($email){
            $data = $request->session()->get('leadData');
            $transferData = $email . ':' . $data;
            $request->session()->put('leadData', $transferData);
            return response()->json(array('status' => 's3'));
        }
    else{
        return response()->json(array('status' => 'false'));
    }
    }

    public function stepThreeProcess(Request $request){
        $mobile = $request->query('mobile');
        if($mobile){
            $data = $request->session()->get('leadData');
            $transferData = $mobile . ':' . $data;
            $request->session()->put('leadData', $transferData);
            $data = $request->session()->get('leadData');
            return response()->json(array('status' => 'success', 'leadData' => $data));
        }else{
            return response()->json(array('status' => 'false'));
        }
    }

    public function stepOne(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.one');
    }else{  
        return redirect()->route('home');
    }
    }

    public function stepTwo(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.two');
        }else{
            return redirect()->route('home');
        }
    }

    public function stepThree(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.three');
        }else{
            return redirect()->route('home');
        }
    }

}
