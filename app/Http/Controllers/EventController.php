<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Event;
use Spatie\Analytics\Period;
class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // $this->middleware('subscribed');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)

    {
      $now = \Carbon\Carbon::now();

      $future = \Carbon\Carbon::now()->addWeeks(2);
      $events=Event::orderBy('date','ASC')
          ->where('date','<',$future)
          ->where('date','>',$now)
          ->where('ticket_status','available')
          ->groupBy('name')
          ->paginate(50);
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
      return view('events.show',compact('event','artists'));
    }
}
