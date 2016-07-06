<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function index()
    {
      $festivals=\App\Event::where('name','LIKE','%fest%')
      ->groupBy('name')
      ->where('date','>','2016-07-08 00:00:00')
      ->orderBy('date','asc')
      ->paginate(6);
        return view('welcome',compact('festivals'));
    }
}
