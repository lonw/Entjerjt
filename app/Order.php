<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable=['FName','LName','sex','note','address','city','province','nation','Email','ContactPassport','detail','tourmate','TotalPrice'];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
