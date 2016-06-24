<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Venue;
use Spatie\Analytics\Period;
class VenueController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)

    {
      $now = \Carbon\Carbon::now();

      $future = \Carbon\Carbon::now()->addWeeks(2);
      $search=null;
      $search=$request->search;

      $venues=DB::table('unique_venues')->orderBy('upcoming_events','DESC')->paginate(20);
      return view('venues.index',compact('venues'));
    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show($id)

    {
      $now = \Carbon\Carbon::now();
      $future = \Carbon\Carbon::now()->addWeeks(2);
      $venue=Venue::find($id);
      $events=\App\Event::where('name','LIKE','%'.$venue->name.'%')->get();
      return view('venues.show',compact('venue','events'));
    }
}
