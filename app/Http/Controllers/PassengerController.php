<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PassengerRequest;

class PassengerController extends Controller
{
    //

    public function create(){

    	return view('passenger_info_form');
    }

    public function save_booking (PassengerRequest $request)
    {

    	return $request;
    }
}
