<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PassengerDetails extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        //$name = 'Webjet Exclusives';
        //$address = 'bookings@webjetexclusives.com.au';
         $tour=['deal'=>'1','product'=>'1'];
         $passengers = [];
        if(!empty($request->new_passengers)){
          for($i=0;$i<count($new_passengers['given_name']);$i++) {
           $passenger = [
            'given_name' => '',//$new_passengers['given_name'][$i],
            'surname' => '',//$new_passengers['surname'][$i],
            'mid_name' => '',//$new_passengers['mid_name'][$i],
            'title' => '',//$new_passengers['title'][$i],
            'gender' => '',//$new_passengers['gender'][$i],
            'email' => '',//$new_passengers['email'][$i],
            'mobile' => '',//$new_passengers['mobile'][$i],
            'passport' => '',//$new_passengers['passport'][$i],
            'birth_date' => '',//$new_passengers['birth_date'][$i],
            'emgcy_contact' => '',//$new_passengers['emgcy_contact'][$i],
            'passport_num' => '',//$new_passengers['passport_num'][$i],
            'passport_nationality' => '',//$new_passengers['passport_nationality'][$i],
            'passport_date_of_issue' => '',//$new_passengers['passport_date_of_issue'][$i],
            'passport_expiry_date' => '',//$new_passengers['passport_expiry_date'][$i],
            'place_of_birth' => '',//$new_passengers['place_of_birth'][$i],
            'address' => '',//$new_passengers['addreess'][$i],
            'address_sub' => '',//$new_passengers['address_sub'][$i],
            'address_state' => '',//$new_passengers['address_state'][$i],
            'address_postcode' => '',//$new_passengers['address_postcode'][$i]
        ];

        $passengers[] = $passenger;
         
         }

        //return $this->view('emails.email');
         return view('emails.email')->with(compact('tour','passengers'));
    }
}
}
