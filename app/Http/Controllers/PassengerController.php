<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PassengerRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PassengerDetails;
use App\Tour;

class PassengerController extends Controller
{
    //

    public function create(){

    	
        $tour = Tour::find(1);
        return view('passenger_info_form')->with(compact('tour'));
    }

    public function save_booking (PassengerRequest $request)
    {
    	
    	//return $request;
    	$tour = Tour::find(1);

    	$data =[
		'deal' => $tour->tour_name,
		'product' => $tour->tour_description,
		'bedding_config' =>$tour->bedding_config,
        'departure_date' => $tour->departure_date

			];

	     // $tour=['deal'=>'1','product'=>'1'];
         $passengers = [];
        if(!empty($request->new_passengers)){
          $new_passengers = $request->new_passengers;
          for($i=0;$i<count($new_passengers['given_name']);$i++) {
           $passenger = [
            'given_name' => $new_passengers['given_name'][$i],
            'surname' => $new_passengers['surname'][$i],
            'mid_name' => $new_passengers['mid_name'][$i]?:'N/A',
            'title' => $new_passengers['title'][$i],
            'gender' => $new_passengers['gender'][$i],
            'email' => $new_passengers['email'][$i],
            'mobile' => $new_passengers['mobile'][$i],
            'birth_date' => $new_passengers['birth_date'][$i],
            'emgcy_contact' => $new_passengers['emgcy_contact'][$i],
            'passport_num' => $new_passengers['passport_num'][$i],
            'passport_nationality' => $new_passengers['passport_nationality'][$i],
            'passport_date_of_issue' => $new_passengers['passport_date_of_issue'][$i],
            'passport_expiry_date' => $new_passengers['passport_expiry_date'][$i],
            'place_of_birth' => $new_passengers['place_of_birth'][$i],
            'address' => $new_passengers['address'][$i]?:'',
            'address_sub' => $new_passengers['address_sub'][$i]?:'',
            'address_state' => $new_passengers['address_state'][$i]?:'',
            'address_postcode' => $new_passengers['address_postcode'][$i]?:''
        ];

        $passengers[] = $passenger;
         
        }}

         $data['passengers'] =$passengers;

	Mail::send('emails.email',$data,function($m){

		$m->to('joesitu123@gmail.com')->subject('[Tomato Travel] Booking Notification - '.date("F j, Y"));
		$m->from('bookings@webjetexclusives.com.au','Webjet Exclusives');
		//Webjet Exclusives <bookings@webjetexclusives.com.au>
	});
    	//return $data;
    }
}
