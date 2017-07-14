@extends('layout')
@section('content')
@include('header')
<div style='clear: both'></div>
<div id="youxueBackground">
  <img src="/images/youxue/background.jpg">
  </div>

  <div class="youxueContent">
    <div class="youxue1">
      <div class="fl youxue1L">
        <img src="/images/youxue/flag.jpg" />
      </div>
      <div class="fr youxue1R">
        <img id="bookLogo" src="/images/youxue/book.jpg" /><br>
        <div class="bookLine"></div>
        <span class="bookText">&#8203;游学·留学</span>
      </div>
    </div>

    <div style="clear:both;"></div>
    <div class="youxue1" >
      <div class="fl youxue1L youxueIntro">
        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随着中国经济的腾飞，越来越多的家长和孩子意识到出国学习对于他们的改变和帮助，更多的人愿意走出国门，体验不一样的教育方式。迦途国际为学生提供夏令营、冬令营、交换生、以及留学等服务。通过优质资源来帮助学生提升自己，开启他们发现和探索世界之旅。致力于为处于世界观、人生观、价值观成长阶段的中国青少年提供了解加拿大的机会。</b>
      </div>
      <div class="fr youxue1R">
        <img src="/images/youxue/library.jpg" />
      </div>
    </div>

    <div style="clear:both;"></div>

    <div class="youxue2" style="background:url('/images/youxue/youxue.jpg');background-size:cover;">
      <div class="fr youxue">
        <div class="titleText">游&nbsp;学</div>
        <div class="detailInfo"><a class="infoText" href="summerCamp">详细信息</a></div>
      </div>
    </div>

    <div style="clear:both;"></div>

    <div class="youxue2" style="background:url('/images/youxue/exchange.jpg');background-size:cover;">
      <div class="fl youxue">
        <div class="titleText boldFont">交换生</div>
        <div class="detailInfo"><a class="infoText" href="exchangeStudents">详细信息</a></div>
      </div>
    </div>

    <div style="clear:both;"></div>

    <div class="youxue2" style="background:url('/images/youxue/apply.jpg');background-size:cover;">
      <div class="fr youxue">
        <div class="titleText">留学申请</div>
        <div class="detailInfo"><a class="infoText" href="#">Coming soon</a></div>
      </div>
    </div>

    <div style="clear:both;"></div>

    <div class="youxue2" style="background:url('/images/youxue/house.jpg');background-size:cover; margin-bottom:10%;">
      <div class="fl youxue">
        <div class="titleText">置&nbsp;业</div>
        <div class="detailInfo"><a class="infoText" href="#">Coming soon</a></div>
      </div>
    </div>



  </div>

@include('footer')
@stop

@section('scripts')




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  @endsection