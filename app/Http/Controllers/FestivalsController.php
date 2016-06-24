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
    $festivals=Festivals::orderBy('start','ASC')
    ->where('start','>','00-00-00 00:00:00')

    ->get();
    return view('festivals.index')->with('festivals',$festivals);
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexs()
  {
    for ($i = 100; $i <= 150; $i++)
{
  $festivals=file_get_contents('http://api.bandsintown.com/events/search.json?api_version=2.0&app_id=YOUR_APP_ID&location=chicago,il&date=2016-06-23,2017-01-01&page='.$i.'');

   foreach(json_decode($festivals) as $festival){
     // Set Venue Values
     $venue=new Venue;

     $venue->name=  $festival->venue->name;
     $venue->city=  $festival->venue->city;
     $venue->region=  $festival->venue->region;
     $venue->country=  $festival->venue->country;
     $venue->long=  $festival->venue->longitude;
     $venue->lat=  $festival->venue->latitude;
     $venue->save();
     $venue_id=$venue->id;

      $event=new Event;
      // Set Event Values
      $event->venue_id=$venue_id;
      if(isset($festival->description)){
        $event->name=  $festival->title;
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
      $event->save();
      $event_id=$event->id;


      //Set Artist Values
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
          $artist_event->thumb_url= $artist->thumb_url;
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
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $festival=Festivals::find($id);
    $bands=\App\Band::where('festival_id',$id)->get();
    return view('festivals.show')->with('festival',$festival)->with('bands',$bands);
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
