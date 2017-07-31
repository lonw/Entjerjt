@extends('layout')
@section('content')
@include('header')
<div style="position: fixed;z-index: -1000;top: 0;width: 100%;height: 100%">
  <!-- <img src="/images/jiatu/jiatu-background.jpg" style="width: 100%;height: 100%"> -->
</div>
<div class="comContainer">
    <div class="comWrapper" style="width:80%; padding-top: 1px;">
        <!-- <div class="comTitle"><img src="/images/1.png" ></div> -->

    </div>
    <div  class="" style="width:80%; margin:0 auto;">
      <div class="col-sm-6 col-md-6 col-sm-6 col-lg-6 right">


      <a href="jiatu">
          <div class="iteji">
              <img class="img-responsive" src="/images/main_page/teji/1.png">
              <div class="comWrapper" style="width:80%; padding-top: 3%;">
                  <div class="comInfo" style="font-size: 2vw;line-height: 2;margin-left:15%;">
                  不同风景，不同的感概；<br>
                  不同的季节，不同的旅途。<br>
                  旅途之景，在于心；旅途之美，在于情。<br>
                  迦途四季，感旅行之美；一程一游，悟心中之景。
                </div>
              </div>

          </div>
      </a>
      <a href="#">
        <div class="iteji">
            <img class="img-responsive" src="/images/main_page/teji/3.png">
            <div class="comWrapper" style="width:80%; padding-top: 0%;">
                <div class="comInfo" style="font-size: 2vw;line-height: 2;margin-left:28%;">
                  敬请期待
                </div>
            </div>
        </div>
      </a>
      </div>
      <div class="col-sm-6 col-md-6 col-sm-6 col-lg-6">


      <a href="yinxiang">
        <div class="iteji">
            <img class="img-responsive" src="/images/main_page/teji/2.png">
            <div class="comWrapper" style="width:80%; padding-top: 3%;">
                <div class="comInfo" style="font-size: 2vw;line-height: 2;margin-left:15%;">
                  旅途，总在不经意的回眸中，追寻到心中的向往；<br>
                  而，景则是人心中未填满的空缺；<br>
                  谷，心之所向，即为印象。<br><br>

                </div>
            </div>

        </div>
      </a>
      <a href="#">
        <div class="iteji">
            <img class="img-responsive" src="/images/main_page/teji/3.png">
            <div class="comWrapper" style="width:80%; padding-top: 0%;">
                <div class="comInfo" style="font-size: 2vw;line-height: 2;margin-left:28%;">
                敬请期待
              </div>
            </div>

        </div></a>
        <div style='clear: both'></div>

          </div>
    </div>
    <div style='clear: both'></div>
</div>
@include('footer')
@stop
