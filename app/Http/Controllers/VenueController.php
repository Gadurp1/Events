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

      $venues=DB::table('all_venues')->orderBy('upcoming_events','DESC')->paginate(20);
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
      $tomorrow = \Carbon\Carbon::now()->addDays(1);

      $future = \Carbon\Carbon::now()->addWeeks(2);
      $venue=Venue::find($id);
      $events=\App\Event::where('events.name','LIKE','%'.$venue->name.'%')
          ->join('artists', 'events.id', '=', 'artists.event_id')
          ->selectRaw('artists.image_url as image_url,events.id as event_id,artists.name,artists.mbid,events.name as title,events.date')
          ->where('events.date','>',$tomorrow)
          ->orderBy('events.date','asc')
          ->get();
      return view('venues.show',compact('venue','events'));
    }
}
