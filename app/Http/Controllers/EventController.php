<?php

namespace App\Http\Controllers;
use App\Http\Requests;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $event=Event::find($id);
      return view('events.edit',compact('event'));
    }

      /**
       * Update the specified resource in storage.
       *
       * @param  int  $id
       * @return Response
       */
      public function update($id, Requests\EventsRequest  $request)
      {
        $event=Event::findorFail($id);
        $event->update($request->all());
        session()->flash('flash_message','Event Successfully Saved!');
        return redirect('Events/'.$id.'');
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
