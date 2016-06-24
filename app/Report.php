<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
  protected $fillable=['name','storage_path','description','type','user_id'];

  /**
   * Get the user that created the Report.
   */
  public function user()
  {
    return $this->belongsTo(User::class, 'Client_ID');
  }

  public function scopePending(){
    return \App\ClaimAccounts::where('Client_ID',Auth()->user()->id)
        ->where('Status','Pending')
        ->join('mon_cases','rep_summary.case_id','=','mon_cases.ID')
        ->selectRaw('COUNT(subclient) as accounts,mon_cases.Case_Name as case_name,status,Deadline')
        ->groupBy('mon_cases.case_name');
  }

  public function scopeClaims(){
    return \App\ClaimAccounts::where('Client_ID',Auth()->user()->id)
        ->join('mon_cases','rep_summary.case_id','=','mon_cases.ID')
        ->selectRaw('COUNT(subclient) as accounts,mon_cases.Case_Name as case_name,status,mon_cases.Deadline as deadline')
        ->groupBy('mon_cases.case_name');
  }

  public function scopeChecks(){
    return \App\Check::where('Client_ID',Auth()->user()->id)
        ->join('mon_cases','rep_checks.Case_ID','=','mon_cases.ID')
        ->selectRaw('mon_cases.Case_Name,sum(Amount) as sum,COUNT(rep_checks.Number) as accounts,rep_checks.Date')
        ->groupBy('Case_ID');
    }
}
