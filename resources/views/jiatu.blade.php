@extends('layout')
@section('content')
@include('header')
<div style="position: fixed;z-index: -1000;top: 0;width: 100%;height: 100%">
  <img src="/images/jiatu/jiatu-background.jpg" style="width: 100%;height: 100%">
</div>
<div class="comContainer">
    <div class="comWrapper" style="width:80%; padding-top: 3%;">
        <div class="comTitle"><img src="/images/1.png" ></div>
        <div class="comInfo" style="font-size: 3vh;line-height: 2;">「迦途四季」是由迦途公司重点打造的精品旅游项目。产品秉持着“一程一地”的旅游概念，结合各季节的特点和当地风土。汇集成最具代表性的四季路线，使游客在休闲放松中深度领略加拿大的特色风光。</div>
    </div>
    <div  class="comContent" style="width:80%; margin:0 auto;">
      <a href="spring">
          <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
              <img class="imgBorder" src="/images/main_page/season/spring.jpg" >
              <div class="comName" ><img src="/images/6.png" style="width:  125%"></div>
              <div>
                  <img src="/images/2.png" style="width: 50%;margin-left: 25%">
              </div>
          </div>
      </a>
      <a href="summer">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/summer.jpg" style="width:  100%">
            <div class="comName"  ><img src="/images/7.png" style="width:  90%"></div>
            <div>
                  <img src="/images/3.png" style="width: 50%;margin-left: 25%">
              </div>
        </div>
      </a>
      <a href="autumn">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/autumn.jpg" style="width:  100%">
            <div class="comName" ><img src="/images/8.png" style="width:  100%"></div>
            <div>
                  <img src="/images/4.png" style="width: 50%;margin-left: 25%">
              </div>
        </div>
      </a>
      <a href="winter">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/winter.jpg" style="width:  100%">
            <div class="comName" ><img src="/images/9.png" style="width:  100%"></div>
            <div>
                  <img src="/images/5.png" style="width: 50%;margin-left: 25%">
              </div>
        </div></a>
        <div style='clear: both'></div>
    </div>
    <div style='clear: both'></div>
</div>
@include('footer')
@stop

