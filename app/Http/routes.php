<?php
use App\Repositories\ReportRepository;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| All Routes for our application
|
*/
Route::get('', 'WelcomeController@index');

/* Documentation *///
Route::get('Blogs',function(Illuminate\Http\Request $request){
  $blogs=\App\Blog::first();
  return view('blogs.index',compact('blogs'));
});

/* Documentation */
Route::get('Blog/{id}',function(Illuminate\Http\Request $request){
  $blog=\App\Blog::find($id);
  return view('blogs.index',compact('blog'));
});
/* Documentation */
Route::get('Map',function(Illuminate\Http\Request $request){

        $query=\App\ArtistEvent::upcomingEvents()
            ->join('venues', 'venues.id', '=', 'events.venue_id')
            ->selectRaw('venues.lat as lat,venues.long as lon,artists.tracker_count,events.id,events.image_url as image_url,events.id as event_id,artists.name as name,artists.mbid,events.name as title,events.date,artists.image_url');
            $search=null;
            if($request->search){
              $search=$request->search;
              $query->where('artists.name','LIKE','%'.$search.'%')
                  ->orWhere('events.name','LIKE','%'.$search.'%');
            }
        $events=$query->orderBy('date','asc')
            ->orderBy('tracker_count','desc')
            ->groupBy('event_id')
            ->paginate(500);
  return view('events.map',compact('events'));
});
