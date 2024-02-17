<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HospitalformController extends Controller
{
    //
    public function add()
    {

        //dd('ok');
        return view('backend.hospital-report.hospital_report_entry');

    }

}
