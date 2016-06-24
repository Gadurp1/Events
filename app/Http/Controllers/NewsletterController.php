<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requests;

class NewsletterController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('subscribed');
  }
  /**
  * Show the accounts grid view.
  *
  * @return Response
  */
  public function index()
  {
    $newsletters=\App\Newsletter::orderBy('posted','DESC')->get();
    return view('newsletters.index',
      compact('newsletters')
    );
  }
  /**
  * Show the accounts grid view.
  *
  * @return Response
  */
  public function show($id)
  {
    $newsletter=\App\Newsletter::find($id)->first();
    return view('newsletters.show',
      compact('newsletter')
    );
  }
}
