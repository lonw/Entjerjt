<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cycle;
use Mail;
use Auth;
use Input;
use Log;
use View;
use Session;
use DB;
use Carbon\Carbon;
use AWS;
use App\Order;
use Config;



class YudingController extends Controller
{


    /**
     * Display a list of orders.
     */
    public function yudingPost(Request $request){


      $order=new Order([
              'travelDate'=>$request->input('travelDate'),
              'numAdult'=>$request->input('numAdult'),
              'numChild'=>$request->input('numChild'),
              'numBaby'=>$request->input('numBaby'),
              'Name'=>$request->input('gName'),
              'Phone'=>$request->input('gPhone'),
              'Email'=>$request->input('gEmail'),
              'numPass'=>$request->input('gPP'),
              'ProductName'=>$request->input('title'),


            ]);

  $order->save();
      echo "success!";
        //return view('yuding_detail');
    }

}
