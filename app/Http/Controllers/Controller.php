<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Exports\LeadsExport;
use Maatwebsite\Excel\Facades\Excel;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('new.dashboard.import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new LeadsExport, 'leads.xlsx');
    }
     


}
