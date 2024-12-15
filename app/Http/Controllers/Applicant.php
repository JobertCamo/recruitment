<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class Applicant extends Controller
{
    public function show(Job $job){
        return view('appform', ['job' => $job]);
    }
}
