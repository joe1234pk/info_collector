<?php
use Illuminate\Support\Facades\Mail;
use App\Mail\PassengerDetails;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/form','PassengerController@create')->name('passenger.create');

Route::post('/form/save','PassengerController@save_booking')->name('passenger.save');

Route::get('/send', function(){
	// $data =[
	// 	'title' =>'hi,',
	// 	'content' => 'this is it',

	// ];

	// Mail::send('emails.email',$data,function($m){

	// 	$m->to('joesitu123@gmail.com','')->subject('Hello test');
	// 	$m->from('bookings@webjetexclusives.com.au','Webjet Exclusives');
	// 	//Webjet Exclusives <bookings@webjetexclusives.com.au>
	// });
	// ini_set("SMTP","ssl://smtp.gmail.com");
	// ini_set("smtp_port","465");
	// ini_set("username","joetomatotech@gmail.com");
	// ini_set("password","Tomato1234");

	$to = "joesitu123@gmail.com";
	$subject = "[Tomato Travel] Booking Notification - November 14, 2017";
	$txt = "Hello world!";
	$headers = "From: bookings@webjetexclusives.com.au";

	mail($to,$subject,$txt,$headers);
// $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465))
//   ->setUsername('joetomatotech@gmail.com')
//   ->setPassword('Tomato1234');
//   $mailer = new Swift_Mailer($transport);

//   $message = (new Swift_Message('Wonderful Subject'))
//   ->setFrom(['bookings@webjetexclusives.com.au' => 'Webjet Exclusives'])
//   ->setTo(['joesitu123@gmail.com', 'joetomatotech@gmail.com' => 'joe'])
//   ->setBody('Here is the message itself')
//   ;

// // Send the message
// $result = $mailer->send($message);
	//Mail::to('joesitu123@gmail.com')->send(new PassengerDetails);
});