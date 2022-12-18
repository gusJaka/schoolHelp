<?php

namespace App\Http\Controllers\Volunteer;

use App\Http\Controllers\Controller;
use App\Models\mRequest;
use App\Models\mVolunteer;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class VolunteerDashboard extends Controller
{
    public function index()
    {
        $volunteer_data = mVolunteer::where('id_volunteer', Auth::user()->id_volunteer)->first();

        $school = \App\Models\School::all();
        $schoolCount = \App\Models\School::count();
        $user = \App\Models\User::all();
        $user_count = \App\Models\User::count();

        $request_tutorial = mRequest::where('req_type', 'tutorial')
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('tutorial_request', 'tutorial_request.id_tutorial_request','=','request.id_tutorial_request')
            ->get();
        $request_tutorial_count = mRequest::where('req_type', 'tutorial')
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('tutorial_request', 'tutorial_request.id_tutorial_request','=','request.id_tutorial_request')
            ->count();

        $request_resource = mRequest::where('req_type', 'resource')
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('resource_request', 'resource_request.id_resource_request','=','request.id_resource_request')
            ->get();
        $request_resource_count = mRequest::where('req_type', 'resource')
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('resource_request', 'resource_request.id_resource_request','=','request.id_resource_request')
            ->count();

        $data = [
            'user' => $user,
            'user_count' => $user_count,
            'school' => $school,
            'school_count' => $schoolCount,
            'volunteer_data' => $volunteer_data,
            'request_tutorial' => $request_tutorial,
            'request_tutorial_count' => $request_tutorial_count,
            'request_resource' => $request_resource,
            'request_resource_count' => $request_resource_count,
        ];

        return view('volunteer/volunteerDashboard', $data);
    }

    public function view_detail_request_tutorial($id)
    {
        $id = Crypt::decrypt($id);
        $request = mRequest
            ::where('request.id_request', $id)
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('tutorial_request', 'tutorial_request.id_tutorial_request','=','request.id_tutorial_request')
            ->first();

        $data = [
            'request' => $request,
        ];

        return view('volunteer/viewRequestTutorial', $data);
    }

    public function view_detail_request_resource($id)
    {
        $id = Crypt::decrypt($id);
        $request = mRequest
            ::where('request.id_request', $id)
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('resource_request', 'resource_request.id_resource_request','=','request.id_resource_request')
            ->first();

        $data = [
            'request' => $request,
        ];

        return view('volunteer/viewRequestResource', $data);
    }
}
