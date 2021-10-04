<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Lead;

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
            $validator = \Validator::make($request->all(), [ 
                'fname' => 'required|regex:/^[a-zA-Z]+$/u',
                'lname' => 'required|regex:/^[a-zA-Z]+$/u',
            ]);
            if($validator->fails()){
                return response()->json($validator->errors());
            } 
            else{
                $data = $request->session()->get('leadData');
                $transferData = $fname . ':' . $lname . ':' . $data;
                $request->session()->put('leadData', $transferData);
                return response()->json(array('status' => 's2'));
            }        
    }

    public function stepTwoProcess(Request $request){

        $email = $request->query('email');

        $validator = \Validator::make($request->all(), [ 
            'email' => 'required|email',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
        $data = $request->session()->get('leadData');
            $transferData = $email . ':' . $data;
            $request->session()->put('leadData', $transferData);
            return response()->json(array('status' => 's3'));
        }
    }

    public function stepThreeProcess(Request $request){
        $mobile = $request->query('mobile');
            $data = $request->session()->get('leadData');
            $transferData = $mobile . ':' . $data;
            $request->session()->put('leadData', $transferData);
            $data = $request->session()->get('leadData');
            return response()->json(array('status' => 'success', 'leadData' => $data));
    }

    public function fullName(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.one');
    }else{  
        return redirect()->route('home');
    }
    }

    public function emailAddress(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.two');
        }else{
            return redirect()->route('home');
        }
    }

    public function mobileNumber(Request $request){
        if($request->session()->has('leadData')){
        return View('form.step.three');
        }else{
            return redirect()->route('home');
        }
    }

    public function closeSteps(Request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }



    public function process(Request $request){
        return response()->json(array('status' => 's3'));
    }



    public function saveOne(Request $request){
        $address = $request->input('address');

        $validator = \Validator::make($request->all(), [ 
            'address' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leads = new Lead();
            $leads->address = $address;
            $leads->save();
            $current_id = $leads->id;
            $request->session()->put('leadID', $current_id);
            return response()->json(array('status' => true, 'gotostep' => '2', 'currentID' => '0'));
        }

    }



    public function saveTwo(Request $request){
        $leadID = $request->session()->get('leadID');

        $sqft = $request->input('sqft');

        $validator = \Validator::make($request->all(), [ 
            'sqft' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
           
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }







    public function saveThree(Request $request){

        $sqft = $request->input('steep');

        $validator = \Validator::make($request->all(), [ 
            'steep' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
           
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }










    public function saveFour(Request $request){

        $is_commercial = $request->input('existing_material');

        $validator = \Validator::make($request->all(), [ 
            'existing_material' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
           
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }
}
