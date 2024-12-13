<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobCreate extends Controller
{
    public function show(Job $job){
        return view('pages.job-result', ['job' => $job]);
    }
}
