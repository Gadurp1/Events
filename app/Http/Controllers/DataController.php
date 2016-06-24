<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;
use DB;

class DataController extends Controller
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
      if(Auth()->user()->hasRole('admin')){
        $client_uploads=\App\ClientUpload::latest()
            ->get();
        $data=\App\Data::orderBy('received','DESC')
            ->paginate(25);
      }
      else{
        $client_uploads=\App\ClientUpload::where('user_id',Auth()->user()->id)
            ->latest()
            ->get();
        $data=\App\Data::orderBy('received','DESC')
            ->where('client_id',Auth()->user()->id)
            ->paginate(25);
      }
      /*
       * Check for data update
       * TODO:: Should be a query scope on user
      */
      $six_months=\Carbon\Carbon::now()->subMonth(6);
      $updateNeeded=0;
      if(Auth()->user()->lastDataUpdate() < $six_months)
      {
        $updateNeeded=1;
      }

      /* Return View */
      return view('data.index',
          compact('data','client_uploads','updateNeeded')
      );
    }
    /**
     * Show the accounts grid view.
     *
     * @return Response
     */
    public function pending()
    {
      $client_uploads=\App\ClientUpload::where('user_id',Auth()->user()->id)
          ->latest()->get();
      return view('data.pending',
          compact('client_uploads')
      );
    }
    /**
     * Show the accounts grid view.
     *
     * @return Response
     */
    public function show($id)
    {
      $data=\App\Data::find($id);
      $data_summary=DB::table('data_summary')->where('data_id',$id)->first();
      return view('data.show',
          compact('data','data_summary')
      );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
       * Validate request
      */
      $this->validate($request,[
        'file' => 'required | mimes:csv,txt,xls',
        'name' => 'required',
        'type' => 'required'
      ]);

      /*
       * Rename file and store in uploads folder
      */
      $fileName = Auth()->user()->name.'-'.$request->type.''.\Carbon\Carbon::now().'.'.$request->file('file')->getClientOriginalExtension();
      $request->file('file')->move(
          base_path() . '/public/files/catalog/', $fileName
      );

      /*
       * Create new client upload record
      */
      $client_upload=new \App\ClientUpload;
      $client_upload->name=$request->name;
      $client_upload->file_path=$fileName;
      $client_upload->description=$request->description;
      $client_upload->type=$request->type;
      $client_upload->original_name=$request->file('file')->getClientOriginalName();
      $client_upload->size=$request->file('file')->getClientSize();
      $client_upload->file_type=$request->file('file')->getClientOriginalExtension();
      $client_upload->team_id=Auth()->user()->team_id;
      $client_upload->user_id=Auth()->user()->id;

      /*
       * Save new upload record
      */
      $client_upload->save();

      /*
       * Show success message and redirect
      */
      session()->flash('flash_message','New File Uploaded!');
      return redirect('Data-Pending');
    }
}
