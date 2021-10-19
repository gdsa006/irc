<?php

namespace App\Http\Controllers;
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
}
