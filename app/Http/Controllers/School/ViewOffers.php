<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\mOffer;
use App\Models\mRequest;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ViewOffers extends Controller
{
    public function index()
    {
        $school_data = School::where('id_school', Auth::user()->id_school)->first();

        $request_tutorial_count = mRequest::where('id_school', Auth::user()->id_school)
            ->where('req_type', 'tutorial')
            ->leftjoin('tutorial_request', 'tutorial_request.id_tutorial_request','=','request.id_tutorial_request')
            ->count();

        $request_resource_count = mRequest::where('id_school', Auth::user()->id_school)
            ->where('req_type', 'resource')
            ->leftjoin('resource_request', 'resource_request.id_resource_request','=','request.id_resource_request')
            ->count();

        $request = mRequest::where('id_school', Auth::user()->id_school)
            ->where('req_request_status','new')
            ->get();

        $offer_count = mOffer::leftjoin('request', 'request.id_request','=','offer.id_request')
            ->where('request.id_school', Auth::user()->id_school)->count();


        $data = [
            'school_data' => $school_data,
            'request_tutorial_count' => $request_tutorial_count,
            'request_resource_count' => $request_resource_count,
            'offer_count' => $offer_count,
            'request' => $request,
        ];

        return view('schoolAdmin/offers/offers', $data);
    }

    public function view_offers($id)
    {
        $id = Crypt::decrypt($id);
        $request = mRequest
            ::where('request.id_request', $id)
            ->leftjoin('school', 'school.id_school','=','request.id_school')
            ->leftjoin('tutorial_request', 'tutorial_request.id_tutorial_request','=','request.id_tutorial_request')
            ->leftjoin('resource_request', 'resource_request.id_resource_request','=','request.id_resource_request')
            ->first();

        $offer = mOffer::where('id_request', $id)
            ->where('offer_status', 'pending')
            ->leftjoin('volunteer', 'volunteer.id_volunteer', '=', 'offer.id_volunteer')
        ->get();

        $data = [
            'request' => $request,
            'offer' => $offer,
        ];

        return view('schoolAdmin/offers/viewOffers', $data);
    }
}