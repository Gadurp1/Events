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
Route::resource('Events', 'EventController');
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
