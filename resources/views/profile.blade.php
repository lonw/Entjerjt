@extends('layout')
@section('content')
@include('header')
    <div class="row" style="height:505px;">
        <div class="col-md-8 col-md-offset-2"><br><br>

          <h1 style="box-shadow: none;"> 欢迎， {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h1> <hr>
            <h3 style="box-shadow: none;">用户资料 -- 订单</h3>




        </div>
    </div>
    @include('footer')
    @stop

    @section('scripts')
    @endsection
