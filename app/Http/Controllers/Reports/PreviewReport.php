<?php

namespace App\Http\Controllers\Reports;
use Request;
use App\Http\Requests;
use App\Report;

class ReportController extends Controller
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
 * Show an html preview of the report
 *
 * @return \Illuminate\Http\Response
 */
 public function show(Requests\ReportRequest  $request)
{
  $pending_claims=null;
  if($request->pending=='on'){
      $pending_claims=Auth()->user()->pendingClaimsReport;
  }
  $claims=null;
  if($request->filed=='on'){
      $claims=Auth()->user()->claims;
  }
  $checks=null;
  if($request->paid=='on'){
      $checks=Auth()->user()->checksReport;
  }
  $name=$request->report_name;
  return view('reports.html2Pdf',compact(
      'claims','checks','pending_claims','name'
    ));
  }
