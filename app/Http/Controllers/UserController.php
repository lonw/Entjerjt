<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Session;


class UserController extends Controller
{
    public function getSignup()
    {
      return view('signup');
    }

    public function postSignup(Request $request){
      $this->validate($request,[
        'email'=>'email|required|unique:users',
        'password'=>'required|min:4'
      ]);
      $user=new User([
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password'))
      ]);

      $user->save();
      Auth::login($user);

      // if (Session::has('oldUrl')) {
      //      $oldUrl = Session::get('oldUrl');
      //      Session::forget('oldUrl');
      //      return redirect()->to($oldUrl);
      //  }
      return redirect()->route('profile');
    }

    public function getSignin(){
      return view('signin');
    }
    public function postSignin(Request $request){
      $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
    return redirect()->route('profile');
}
return redirect()->back();
        // if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        //     if (Session::has('oldUrl')) {
        //         $oldUrl = Session::get('oldUrl');
        //         Session::forget('oldUrl');
        //         return redirect()->to($oldUrl);
        //     }

      //  }
      //  return redirect()->back();
 }
 public function getProfile(){
  $orders = Auth::user()->orders;
    $orders->transform(function($order, $key) {
   //     $order->cart = unserialize($order->cart);
        return $order;
    });
    return view('profile', ['orders' => $orders]);
 return view('profile');
 }
      public function getLogout(){
      Auth::logout();
      return redirect()->route('signin');
 }
}
