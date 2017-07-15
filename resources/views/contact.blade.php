@extends('layout')
@section('content')
@include('header')
<div style="position: fixed;z-index: -1000;top: 0;width: 100%;height: 100%">
  <img src="https://static.wixstatic.com/media/bfb291_dae6b9924f1446b0bbd5de2fd07df054~mv2.jpg/v1/fill/w_1920,h_1080,al_c,q_85/bfb291_dae6b9924f1446b0bbd5de2fd07df054~mv2.jpg" style="width: 100%;height: 100%">
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 hidden-xs">

<div class="" style="float:right;margin-top:13%;">
  <div class="btn-group-vertical">
    <a href="about" type="button" class="btn btn-primary btn-lg hidden-sm" style="background-color: rgba(0, 108, 109, 1);">关于迦途</a><p></p>
    <a href="culture" type="button" class="btn btn-primary btn-lg hidden-sm" style="background-color: rgba(0, 108, 109, 1);">迦途文化</a><p></p>
    <a href="mission" type="button" class="btn btn-primary btn-lg hidden-sm" style="background-color: rgba(0, 108, 109, 1);">迦途使命</a><p></p>
    <a href="concept" type="button" class="btn btn-primary btn-lg hidden-sm" style="background-color: rgba(0, 108, 109, 1);">核心理念</a><p></p>
    <a href="contact" type="button" class="btn btn-primary btn-lg hidden-sm" style="background-color: rgba(0, 108, 109, 1);">联系我们</a>
  </div>
</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="float:right;">
  <div class="container">
    <div class="comWrapper" style="width:90;margin: 0;padding-top: 7%;min-height: 680px;text-shadow: 1px 1px 1px #fff;">
        <div  style="font-size:18px;line-height: 2;"></div>
    </div>
    <div style='clear: both'></div>
  </div>


</div>

</div>
@include('footer')
@stop
