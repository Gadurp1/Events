<?php


namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Newsletters;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
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
    $newsletters=Newsletters::orderBy('created_at','DESC')->get();
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
    $newsletter=Newsletters::findOrFail($id);
    return view('newsletters.show',
      compact('newsletter')
    );
  }

  /**May-4-2016
  * Show form for creating a newsletter.
  *
  * @return Response
  */
  public function create()
  {
    return view('newsletters.create');
  }

  /**
  * Show the accounts grid view.
  *
  * @return Response
  */
  public function store(Requests\NewslettersRequest  $request)
  {
    $input=$request->all();
    $new=Newsletters::create($input);
    session()->flash('flash_message',''.$new->title.' Newsletter Has Been Created!');
    return redirect('/Monitoring/Newsletters/'.$new->id.'');
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      // Show a page to edit and existing template
      $newsletter=Newsletters::findorFail($id);
      return view('newsletters.edit',compact('newsletter'));
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
  */
  public function update($id, Requests\NewslettersRequest  $request)
  {

      $newsletter=Newsletters::findorFail($id)->first();
      $newsletter->update($request->all());
      session()->flash('flash_message','Template Successfully Saved!');
      return redirect('Monitoring/Newsletters/'.$id.'');

  }
}
