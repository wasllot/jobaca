<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Venue;
use App\Hotel;
use App\Gallery;
use App\Sponsor;
use App\Faq;
use App\Price;
use App\Amenity;
use App\Subscribe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $speakers = Speaker::all();
        $schedules = Schedule::with('speaker')
            ->orderBy('start_time', 'asc')
            ->get()
            ->groupBy('day_number');
        $venues = Venue::all();
        $hotels = Hotel::all();
        $galleries = Gallery::all();
        $sponsors = Sponsor::all();
        $faqs = Faq::all();
        $prices = Price::with('amenities')->get();
        $amenities = Amenity::with('prices')->get();

        return view('home', compact('settings', 'speakers', 'schedules', 'venues', 'hotels', 'galleries', 'sponsors', 'faqs', 'prices', 'amenities'));
    }

    public function view(Speaker $speaker)
    {
        $settings = Setting::pluck('value', 'key');
        
        return view('speaker', compact('settings', 'speaker'));
    } 

    public function webDetails($id)
    {
        $settings = Setting::pluck('value', 'key');
        $website = Hotel::find($id);
        return view('website', compact('settings', 'website'));
    }

    public function subscribe(Request $request){

        $subscribe =  [
            'email' => json_encode($request->json('email')),
        ];

       Subscribe::create($subscribe);
        

        $response = [
            'status' => 'success',
            'message' => 'Subscribed',
            'email' => json_encode($request->json('email'))
        ];

     return response()->json($response);


    }
}
