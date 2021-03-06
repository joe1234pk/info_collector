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

    public function create($id){

        $tour = Tour::find($id);
        $tour->dates = explode(',',$tour->departure_date);
        $tour->bedding_availability = explode(',',$tour->bedding_config);
       //return $tour;
        return view('passenger_info_form')->with(compact('tour'));
    }

    public function save_booking (PassengerRequest $request)
    {
    	
    	//return $request;
    	$tour = Tour::find(1);

    	$data =[
		'deal' => $tour->tour_name,
		'product' => $tour->tour_description,
		'bedding_config' =>$request->bedding_config,
        'departure_date' => $request->tour_date,
        'voucher' => $request->voucher,
        'early_arrival' => $request->early_arrival,
        'stay_night' => $request->stay_night,
        'preferred_airline' => $request->preferred_airline,
        'travel_class' => $request->travel_class,

			];

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

		$m->to('operations@tomatotravel.com.au','joesitu123@gmail.com')->subject('[Webjet Exclusives] Booking Notification - '.date("F j, Y"));
		$m->from('bookings@webjetexclusives.com.au','Webjet Exclusives');
		//Webjet Exclusives <bookings@webjetexclusives.com.au>
	   return  'Details have been submitted and mailed. Thanks for choosing Tomato Travel.';

    });
    	//return 'Fail';
    }
}
