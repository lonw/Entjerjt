@extends('layout')
@section('content')
@include('header')
<link rel="stylesheet" type="text/css" href="/css/hexagons.css">

<div style="position: fixed;z-index: -1000;top: 0;">
	<img src="/images/shangwu/1.jpg">
</div>
<div style="width: 80%;margin: 0 auto;">
<p class="" style="font-size: 5vw;color: black;font-family: 'SimSun';margin-top: 5vh;margin-bottom: 5vh">可选会议场所展示：</p>
            
<div class="demo-gallery" style="text-align:center;clear:both;">
    <ul id='lightgallery' class="list-unstyled row hexGrid"> 

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/1.jpg 375, /images/shangwu/meeting/meeting/1.jpg 480, /images/shangwu/meeting/meeting/1.jpg 800" data-src="/images/shangwu/meeting/meeting/1.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"><img class="img-responsive"  class="img-responsive" src="/images/shangwu/meeting/meeting/1.jpg" alt="" /></a></li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/2.jpg 375, /images/shangwu/meeting/meeting/2.jpg 480, /images/shangwu/meeting/meeting/2.jpg 800" data-src="/images/shangwu/meeting/meeting/2.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/2.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/3.jpg 375, /images/shangwu/meeting/meeting/3.jpg 480, /images/shangwu/meeting/meeting/3.jpg 800" data-src="/images/shangwu/meeting/meeting/3.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/3.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/4.jpg 375, /images/shangwu/meeting/meeting/4.jpg 480, /images/shangwu/meeting/meeting/4.jpg 800" data-src="/images/shangwu/meeting/meeting/4.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/4.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/5.jpg 375, /images/shangwu/meeting/meeting/5.jpg 480, /images/shangwu/meeting/meeting/5.jpg 800" data-src="/images/shangwu/meeting/meeting/5.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/5.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/6.jpg 375, /images/shangwu/meeting/meeting/6.jpg 480, /images/shangwu/meeting/meeting/6.jpg 800" data-src="/images/shangwu/meeting/meeting/6.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/6.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/7.jpg 375, /images/shangwu/meeting/meeting/7.jpg 480, /images/shangwu/meeting/meeting/7.jpg 800" data-src="/images/shangwu/meeting/meeting/7.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/7.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/8.jpg 375, /images/shangwu/meeting/meeting/8.jpg 480, /images/shangwu/meeting/meeting/8.jpg 800" data-src="/images/shangwu/meeting/meeting/8.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/8.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/9.png 375, /images/shangwu/meeting/meeting/9.png 480, /images/shangwu/meeting/meeting/9.png 800" data-src="/images/shangwu/meeting/meeting/9.png" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/9.png" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/10.jpg 375, /images/shangwu/meeting/meeting/10.jpg 480, /images/shangwu/meeting/meeting/10.jpg 800" data-src="/images/shangwu/meeting/meeting/10.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/10.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/11.jpg 375, /images/shangwu/meeting/meeting/11.jpg 480, /images/shangwu/meeting/meeting/11.jpg 800" data-src="/images/shangwu/meeting/meeting/11.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/11.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/12.jpg 375, /images/shangwu/meeting/meeting/12.jpg 480, /images/shangwu/meeting/meeting/12.jpg 800" data-src="/images/shangwu/meeting/meeting/12.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/12.jpg" alt="" /></a> </li>

        <li class="hex" data-responsive="/images/shangwu/meeting/meeting/13.jpg 375, /images/shangwu/meeting/meeting/13.jpg 480, /images/shangwu/meeting/meeting/13.jpg 800" data-src="/images/shangwu/meeting/meeting/13.jpg" data-sub-html="" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1"><a class="hexIn"> <img class="img-responsive" src="/images/shangwu/meeting/meeting/13.jpg" alt="" /></a> </li>
        
    </ul>
</div>


	<div style="padding: 5vh"></div>

	<a href="shangwu_meeting" class="reYiyou"></a>
    <div style='clear: both'></div>
    <div style="width: 100%;height: 10vh"></div>

</div>

<div style='clear: both'></div>
@include('footer')
@stop
@section('scripts')

<script src="/js/jquery-fullsizable.js"></script>
  <script src="/js/picturefill.min.js"></script>
        <script src="/js/lightgallery.js"></script>
        <script src="/js/lg-pager.js"></script>
        <script src="/js/lg-autoplay.js"></script>
        <script src="/js/lg-fullscreen.js"></script>
        <script src="/js/lg-zoom.js"></script>
        <script src="/js/lg-share.js"></script>


<script type="text/javascript">
lightGallery(document.getElementById('lightgallery'));
</script>
@endsection