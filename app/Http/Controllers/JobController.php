<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job(){
        return view('Fornt/job_details');
}
}
