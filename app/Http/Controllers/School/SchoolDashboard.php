<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolDashboard extends Controller
{
    public function index()
    {
        $school = \App\Models\School::all();
        $schoolCount = \App\Models\School::count();
        $user = \App\Models\User::all();
        $user_count = \App\Models\User::count();

        $data = [
            'user' => $user,
            'user_count' => $user_count,
            'school' => $school,
            'school_count' => $schoolCount
        ];

        return view('schoolAdmin/dashboardSchool', $data);
    }
}
