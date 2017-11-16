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
    //return view('welcome');
    return redirect()->route('tour');
});

Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form/{id}','PassengerController@create')->name('passenger.create');
Route::post('/form/save','PassengerController@save_booking')->name('passenger.save');


Route::get('/tour','ProductController@index')->name('tour');
Route::get('/tour/edit/{id}','ProductController@edit')->name('tour.edit');
Route::get('/tour/create','ProductController@create')->name('tour.create');
Route::post('/tour/save','ProductController@save')->name('tour.save');
Route::post('/tour/add','ProductController@add')->name('tour.add');

Route::get('/send', function(){
	
	
	// ini_set("SMTP","ssl://smtp.gmail.com");
	// ini_set("smtp_port","465");
	// ini_set("username","joetomatotech@gmail.com");
	// ini_set("password","Tomato1234");

	// $to = "joesitu123@gmail.com";
	// $subject = "[Tomato Travel] Booking Notification - November 14, 2017";
	// $txt = "Hello world!";
	// $headers = "From: bookings@webjetexclusives.com.au";

	// mail($to,$subject,$txt,$headers);
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