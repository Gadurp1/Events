<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Event;
use Spatie\Analytics\Period;
use App\ArtistEvent;

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

      $query=\App\ArtistEvent::upcomingEvents()
          ->selectRaw('artists.tracker_count,events.id,events.image_url as image_url,events.id as event_id,artists.name as name,artists.mbid,events.name as title,events.date,artists.image_url');
      $search=null;
      if($request->search){
        $search=$request->search;
        $query->where('artists.name','LIKE','%'.$search.'%')
            ->orWhere('events.name','LIKE','%'.$search.'%');
      }
      $events=$query->orderBy('date','asc')
          ->orderBy('tracker_count','desc')
          ->groupBy('event_id')
          ->paginate(50);

      return view('events.index',compact('events','search'));
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
    public function show($venue,$artist)
    {
      /* De-Sluggify Url Params */
      $event=str_replace('-', ' ', $venue);
      $artist=str_replace('-', ' ', $artist);

      /* Date Time Stuff */
      $now = \Carbon\Carbon::now();
      $future = \Carbon\Carbon::now()->addWeeks(2);

      /* De-Sluggify Url Params */
      $event=Event::where('name',$event)->first();
      $fuzzies=Event::where('name','Like','%'.$event->name.'%')->lists('id');

      $artist_detail=\App\ArtistEvent::where('name',$artist)->first();

      $artists=\App\ArtistEvent::whereIn('event_id',$fuzzies)
          ->orderBy('tracker_count','DESC')
          ->paginate(5);
      $venue=\App\Venue::where('id',$event->venue_id)->first();
      return view('events.show',compact('event','artists','venue','artist_detail','additional_events'));
    }
}
