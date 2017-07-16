<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable=['travelDate','numAdult','numChild','numBaby','Name','Phone','Email','numPass','ProductName'];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
