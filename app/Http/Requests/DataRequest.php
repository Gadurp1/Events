<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class DataRequest extends Request
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
  public function rules()
  {
    return [
      'name'        => 'required',
      'sku'         => 'required|unique:products,sku,' . $this->get('id'),
      'image'       => 'required|mimes:png'
    ];
  }
}
