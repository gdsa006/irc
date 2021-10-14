<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Lead;
use View;

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
            return response()->json(array('status' => true, 'gotostep' => '2', 'currentID' => $current_id));
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
            $lead_find = Lead::find($leadID);
            $lead_find->sqft = $sqft;
            $lead_find->save();
            return response()->json(array('status' => true, 'leadID' => $lead_find));
        }

    }







    public function saveThree(Request $request){

        $steep = $request->input('steep');

        $validator = \Validator::make($request->all(), [ 
            'steep' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->steep = $steep;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }










    public function saveFour(Request $request){

        $existing_material = $request->input('existing_material');

        $validator = \Validator::make($request->all(), [ 
            'existing_material' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->existingmaterial = $existing_material;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }









    public function saveFive(Request $request){

        $is_commercial = $request->input('is_commercial');

        $validator = \Validator::make($request->all(), [ 
            'is_commercial' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->iscommercial = $is_commercial;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }








    public function saveSix(Request $request){

        $urgency = $request->input('urgency');

        $validator = \Validator::make($request->all(), [ 
            'urgency' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->urgency = $urgency;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }




    public function saveSeven(Request $request){

        $true = $request->input('true');

        $validator = \Validator::make($request->all(), [ 
            'true' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->true = $true;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }







    public function saveEight(Request $request){

        $material = $request->input('material');

        $validator = \Validator::make($request->all(), [ 
            'material' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->material = $material;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }






    public function saveNine(Request $request){

        $is_interested_in_financing = $request->input('is_interested_in_financing');

        $validator = \Validator::make($request->all(), [ 
            'is_interested_in_financing' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->isinterestedinfinancing = $is_interested_in_financing;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }



    public function saveTen(Request $request){

        $email = $request->input('email');
        $fname = $request->input('fname');
        $mobile = $request->input('mobile');

        $validator = \Validator::make($request->all(), [ 
            'email' => 'required|email|unique:leads,email',
            'fname' => 'required',
            'mobile' => ''
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        } 
        else{
            $leadID = $request->session()->get('leadID');
            $lead_find = Lead::find($leadID);
            $lead_find->email = $email;
            $lead_find->fname = $fname;
            $lead_find->mobile = $mobile;
            $lead_find->save();
            return response()->json(array('status' => true, 'gotostep' => ''));
        }

    }

    public function estimate(Request $request){
        $leadID = $request->session()->get('leadID');
        $lead_find = Lead::find($leadID);
        $data = new Lead();
        $data = $data->where('id', $leadID)->get();
        return View::make('new.final')->with('data', $data);

    }

    public function destroySession(Request $request){
        $request->session()->forget('leadID');
        return response()->json(array('status' => true));
    }

    public function termsOfService(){
        return View::make('new.terms-of-service');
    }


    public function privacyPolicy(){
        return View::make('new.privacy-policy');
    }

}
