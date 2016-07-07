<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class ChecksChart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artists:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $artists=\App\ArtistEvent::orderBy('name','asc')
          ->groupBy('name')
          ->where('name','>','Jenny')
          ->where('name','<','John Carpenter Updated')
          ->get();

      foreach($artists as $artist)
      {
        $name=str_replace(' ', '%20', $artist->name);
        $name=str_replace('/', '%20', $name);
        $name=str_replace(':', '', $name);
        $name=str_replace('"', '', $name);
        $name=str_replace('(', '', $name);
        $name=str_replace(')', '', $name);


        $artist_info=file_get_contents('http://api.bandsintown.com/artists/'.$name.'.json?api_version=2.0&app_id=YOUR_APP_ID');
        $artist_info=json_decode($artist_info);
        /*
          * Logging artists
        */
        $artist->image_url=$artist_info->image_url;
        $artist->thumb_urlCopy=$artist_info->thumb_url;
        $artist->facebook_tour_dates_url=$artist_info->facebook_tour_dates_url;
        $artist->facebook_page_url=$artist_info->facebook_page_url;
        $artist->tracker_count=$artist_info->tracker_count;
        $artist->upcoming_events_count=$artist_info->upcoming_event_count;
        $artist->update();
        $i=1;
        $this->info($artist->name.' Updated ');
      }
    }
}
