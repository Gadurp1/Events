<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use Spatie\Analytics\Period;
class EventController extends Controller
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
      $events=\App\ArtistEvent::orderBy('date','ASC')
      ->join('events', 'artists.event_id', '=', 'events.id')
      ->selectRaw('events.image_url as image_url,events.id as event_id,artists.name,artists.mbid,events.name as title,events.date,artists.image_url')
          ->where('ticket_status','available')
          ->where('artists.name','LIKE', '%'.$search.'%')
          ->groupBy('event_id')
          ->get();
      return view('events.index',compact('events'));
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
      $event=Event::find($id);
      $artists=\App\ArtistEvent::where('event_id',$id)->get();
      $venue=\App\Venue::where('id',$event->venue_id)->first();
      return view('events.show',compact('event','artists','venue'));
    }
}
