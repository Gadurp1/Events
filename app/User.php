<?php

namespace App;

use Laravel\Spark\User as SparkUser;
use Spatie\Permission\Traits\HasRoles;

class User extends SparkUser
{
  use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'authy_id',
        'country_code',
        'phone',
        'card_brand',
        'card_last_four',
        'card_country',
        'billing_address',
        'billing_address_line_2',
        'billing_city',
        'billing_zip',
        'billing_country',
        'extra_billing_information',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'trial_ends_at' => 'date',
        'uses_two_factor_auth' => 'boolean',
    ];
    protected function following()
    {
    /**
     *
     * A user can have many unique claims
     *
     */
        return $this->hasMany('App\Following','user_id');
    }

    protected function claims()
    {
    /**
     *
     * A user can have many unique claims
     *
     */
        return $this->hasMany('App\ClaimAccounts','Client_ID')
            ->join('mon_cases','rep_summary.case_id','=','mon_cases.ID')
            ->selectRaw('COUNT(subclient) as accounts,mon_cases.Case_Name as case_name,status,Deadline')
            ->groupBy('mon_cases.case_name');
    }


    protected function checksTotals()
    {
      /**
      *
      * A user can have many unique claims
      *
      */
      return $this->hasOne('App\Check','Client_ID')
          ->selectRaw('Sum(Amount) as sum_checks,count(id) as total_checks');
    }

    protected function checks()
    {
      /**
      *
      * A user can have many unique claims
      *
      */
      return $this->hasMany('App\Check','Client_ID');
    }

    public function lastDataUpdate()
    {
      /**
       * Users last data update
       */
        return \App\Data::select('received')
            ->where('client_id',Auth()->user()->id)
            ->orderBy('received','DESC')
            ->first();
    }

    protected function sumRecLoss()
    {
      /**
      *
      * A user can have many unique claims
      *
      */
      return $this->hasOne('App\RecLoss','client_id')
          ->selectRaw('Sum(rec_loss) as sum_rec_loss');
    }

    protected function totalClaimsWithRecLoss()
    {
      /**
      *
      * A user can have many unique claims
      *
      */
      return $this->hasOne('App\RecLoss','client_id')
          ->selectRaw('count(claim_id) as total_claims')
          ->groupBy('claim_id');
    }
}
