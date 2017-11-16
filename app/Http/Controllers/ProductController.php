<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class ProductController extends Controller
{
    //
     public function index()
    {
        //
        $tours = Tour::all();
        return view('tour.index')->with(compact('tours'));
    }

    public function save(Request $request)
    {
        //return count($request->get('new_dates'));


        //$new_dates='';
    //     $tour =  $request->all();

    //     $curr_tour = Tour::find($tour['id']);
    //     $curr_tour->name = $tour['name'];
    //     $curr_tour->itinerary = $tour['itinerary'];
    //     $curr_tour->save();

    //    if(!empty($tour['tour_dates']))
    //    {
    //     $update_dates = $tour['tour_dates'];
    //     $dates = $curr_tour->tour_dates;
    //     foreach($dates as $date)
    //     {
    //         $date->status = $update_dates[$date->id]['status'];
    //         $date->save();
    //     }
    //     }

    //     if(!empty($tour['new_dates']))
    //     {
    //         $added = $this->add_dates($tour['id'], $tour['new_dates']); 
    //     }

    //         return redirect()->action('TourController@index');

    }

     public function add(Request $request)
    {

       // echo $request['name'];
        if(!empty($request->all()))
        {
                   		
            $new_tour = new Tour();
            $new_tour->tour_name = $request['tour_name'];
            $new_tour->tour_description = $request['tour_description']; 
      		 if(!empty($request->input('new_dates')))
        	{
           		$new_dates = $request->input('new_dates');
            	$new_tour->departure_date = implode(',',$new_dates); 
       		 }

            $new_tour->save();
        
           return redirect()->action('ProductController@index');
        }
    }

     public function create()
    {
        //
        return view('tour.add_tour');
    }

    
}
