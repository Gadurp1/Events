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

/* Documentation */
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
Route::resource('Events', 'EventController');
Route::get('Events/{venue}/{artist}', 'EventController@show');

Route::resource('Venues', 'VenueController');
Route::resource('festivals', 'FestivalsController');
Route::resource('eventdays', 'EventDaysController');
Route::resource('stage', 'StageController');
Route::resource('band', 'BandController');
Route::resource('ticketprices', 'TicketPricesController');

/*
|
|--------------------------------------------------------------------------
| Report Generation Routes
|--------------------------------------------------------------------------
|
*/
Route::resource('Reports', 'ReportController');

Route::get('Comprehensive-Report', function(ReportRepository $reportz){
  return $reportz->comprehensiveReport();
});


Route::get('Comprehensive-Report/{year}', 'ReportController@comprehensiveReport');



/* Documentation */
Route::get('Docs',function(){
  return view('documentation.index');
});

/*
 *  =============
 *  Forum Routes
 *  =============
*/

Route::resource('forum', 'Forum\ForumController');
Route::resource('forum/category', 'Forum\CategoryController');
Route::resource('forum/topic', 'Forum\TopicController');
Route::resource('forum/post', 'Forum\PostController');
