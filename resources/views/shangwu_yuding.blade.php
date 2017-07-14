@extends('layout')
@section('content')
@include('header')

	<div style="position: fixed;z-index: -1000;top: 0;">
	<img src="/images/shangwu/meeting/meeting/12.jpg">
	
	</div>

<div style="font-size: 1.5vw;color: black;">
  
  <div class="col-md-6 col-sm-6 col-lg-6 col-xs-2"></div>


  <div class="col-md-5 col-sm-5 col-lg-5 col-xs-9" style="background-color: rgba(255,255,255,0.5);height: 100%">

    <div style="width: 100%;height: 5vw"></div>
    
    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" ><img src="/images/shangwu/10.png" style="width: 100%"></div>
   
    <div style='clear: both'></div>
        
   <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10" ><img src="/images/shangwu/11.png" style="width: 100%"></div>
    <div style='clear: both'></div>
    <form class="yuding" style="">
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="姓：" style=""><i style="">Last Name:</i>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="名："><i>First Name:</i>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="联系方式："><i>Contact information:</i>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="目的地："><i>Destination:</i>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="人数："><i>Number of people:</i>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 shangwu_content" style="padding: 0 3vw 1vw;">
      <input type="" name="" placeholder="天数："><i>Number of days:</i>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 shangwu_content" style="padding: 0 3vw 1vw;">
      <textarea name="" placeholder="备注：" ></textarea><i>Other instructions:</i>
    </div>
       <div style='clear: both'></div>
       <div style="width: 100%;height: 2vw"></div>
      
      <div class="row yuding_btn_font">
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 " style="text-align: center;">
      <input class="yuding_btn" type="submit" name="submit" value="点击提交" style="font-style: italic"><i>Submit</i>
      </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 yuding_btn2_wrapper" style="text-align: center;">
      <a class="yuding_btn2"    style="font-style: italic">在线咨询</a><br><i>Online Consultation</i>
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 yuding_btn2_wrapper" style="text-align: center;">
      <a class="yuding_btn2"  href="shangwu"  style="font-style: italic">返回</a><br><i>Return</i>
      </div><div style='clear: both'></div>
      </div>
      
      
    </form>
     <div style="width: 100%;height: 3vw"></div>
  </div>
  <div style='clear: both'></div>
</div>


@include('footer')
@stop
