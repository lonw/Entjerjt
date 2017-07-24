<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cycle;
use Auth;
use Input;
use Log;
use View;
use Session;
use DB;
use Carbon\Carbon;
use AWS;
use App\Order;
use App\User;
use Config;
use App\Mail\OrderProcess;




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

            $name = $request->input('gName');
            $email = $request->input('gEmail');
            $date = $request->input('travelDate');
            $adult = $request->input('numAdult');
            $children = $request->input('numChild');
            $baby = $request->input('numBaby');
            $tel = $request->input('gPhone');
            $passport = $request->input('gPP');
            $title = $request->input('title');
            if(Auth::check()){
      Auth::user()->orders()->save($order);
    }else{
      $order->save();
    }
      echo '<center><h1>提交成功！订单已经寄到您填写的邮箱地址，谢谢!</h1><br>
        <a href="/profile"> <button type="button" name="button">完成</button></a></center>';

      \Mail::to($email)->send(new OrderProcess($name));
      // return redirect()->back();
    }

    public function yudingPost2(Request $request){

      $numAdult=$request->input('numAdult');
      $numChild=$request->input('numChild');
      $numBaby=$request->input('numBaby');
      $titlePrice=$request->input('titlePrice');
      $num1R=$request->input('num1R');
      $num2R=$request->input('num2R');
      $num3R=$request->input('num3R');
      $num4R=$request->input('num4R');
      $P4R=$request->input('4R');
      $P3R=$request->input('3R');
      $P2R=$request->input('2R');
      $P1R=$request->input('1R');
      $Rnight=$request->input('Rnight');
      $priceBase=$titlePrice*($numAdult+$numChild*0.3+$numBaby*0.1);
      $priceRoom=($P4R*$num4R+$P3R*$num3R+$P2R*$num2R+$P1R*$num1R)*$Rnight;

      $numTour= array(
              'travelDate'=>$request->input('travelDate'),
              'numAdult'=>$numAdult,
              'numChild'=>$numChild,
              'numBaby'=>$numBaby,
            'ProductName'=>$request->input('title'),
              '4R'=>$P4R,
              '3R'=>$P3R,
              '2R'=>$P2R,
              '1R'=>$P1R,
              'Rnight'=>$Rnight,
              'titlePrice'=>$titlePrice,
                'num1R'=>$request->input('num1R'),
                  'num2R'=>$request->input('num2R'),
                    'num3R'=>$request->input('num3R'),
                      'num4R'=>$request->input('num4R'),
                   'priceRoom'=>$priceRoom,
                   'priceBase'=>$priceBase

            );


            return view('Booking')->with('numTour', $numTour);
    }

}
