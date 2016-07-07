<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Festivals;
use App\Venue;
use App\Event;
use App\ArtistEvent;

use App\Http\Controllers\Controller;


class FestivalsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $festivals=\App\Event::where('name','LIKE','%fest%')
    ->groupBy('name')
    ->where('date','>','2016-07-08 00:00:00')
    ->orderBy('date','asc')
    ->paginate(30);
    return view('festivals.index')->with('festivals',$festivals);
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function home()
  {
    $festivals=\App\Event::where('name','LIKE','%fest%')
    ->groupBy('name')
    ->where('date','>','2016-07-08 00:00:00')
    ->orderBy('date','asc')
    ->paginate(6);
    return view('welcome')->with('festivals',$festivals);
  }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexs()
  {
    for ($i = 51; $i <= 100; $i++)
{
  $festivals=file_get_contents('http://api.bandsintown.com/events/search.json?api_version=2.0&app_id=YOUR_APP_ID&location=chicago,il&date=2016-06-23,2018-01-01&page='.$i.'');

   foreach(json_decode($festivals) as $festival){

     /*
      *
      * Logging Venues
      *
      */
     $venue=new Venue;
     $venue->name=  $festival->venue->name;

     $venue->city=  $festival->venue->city;
     $venue->region=  $festival->venue->region;
     $venue->country=  $festival->venue->country;
     $venue->long=  $festival->venue->longitude;
     $venue->lat=  $festival->venue->latitude;
     $venue->save();
     $venue_id=$venue->id;

     /*
      *
      * Logging Events
      *
      */
      $event=new Event;
      $event->venue_id=$venue_id;
      if(isset($festival->title)){
        $event->name= $festival->title;

      }
      else{
        $event->name=  $festival->venue->name;
      }
      $event->date=  $festival->datetime;
      $event->ticket_url=  $festival->ticket_url;
      $event->ticket_status=  $festival->ticket_status;
      $event->on_sale_datetime=  $festival->on_sale_datetime;
      if(isset($festival->description))
      {
        $event->description=$festival->description;
      }
      if(ISSET($event->facebook_rsvp_url))
      {
        $event->facebook_rsvp_url=$event->facebook_rsvp_url;
      }
      $event->save();
      $event_id=$event->id;

      /*
       *
       * Logging Artists
       *
       */
      foreach($festival->artists as $artist){
        $artist_event=new ArtistEvent;
        $artist_event->event_id=  $event_id;

        $artist_event->name= $artist->name;
        $artist_event->mbid= $artist->mbid;

        if(ISSET($artist->image_url))
        {
          $artist_event->image_url= $artist->image_url;
        }
        if(ISSET($artist->thumb_url))
        {
          $artist_event->image_url= $artist->thumb_url;
        }

        if(ISSET($artist->facebook_tour_dates_url))
        {
          $artist_event->facebook_tour_dates_url= $artist->facebook_tour_dates_url;
        }
        if(ISSET($artist->tracker_count))
        {
          $artist_event->tracker_count= $artist->tracker_count;
        }
        if(ISSET($artist->upcoming_events_count))
        {
          $artist_event->upcoming_events_count= $artist->upcoming_events_count	;
        }
          $artist_event->save();
      }

  }
}

  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('festivals.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {

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
        $fuzzies=Event::where('name','Like','%'.$event->name.'%')->lists('id');
        $artists=\App\ArtistEvent::whereIn('event_id',$fuzzies)->get();
        $venue=\App\Venue::where('id',$event->venue_id)->first();
        return view('festivals.show',compact('event','artists','venue'));
      }

  /**

   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $festival=Festivals::find($id);
    return view('festivals.edit',compact('festival'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Requests\FestivalsRequest  $request)
  {
    $festival=Festivals::findorFail($id);
    $festival->update($request->all());
    session()->flash('flash_message','Festival Successfully Saved!');
    return redirect('festivals/'.$id.'');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
