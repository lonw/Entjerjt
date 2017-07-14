@extends('layout')
@section('content')
@include('header')

	<div style="position: fixed;z-index: -1000;top: 0;">
	<img src="/images/shangwu/1.jpg">
	
	</div>

	<div style="background-color: rgba(255, 255, 255, 0.5);width: 80%;margin: 0 auto;color: black;">

		<div>
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12" style="padding: 0"><img src="/images/shangwu/meeting/2.jpg" style="width: 100%;"></div>
			<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="color: black;background-color: rgba(255, 255, 255, 0.7);text-align: center;padding: 0">
        <div class="meeting_dizhi" style="">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1.5148514851485189 -1.128712871287128 123.02970297029704 116.25742574257426" preserveAspectRatio="xMidYMid meet" style="stroke-width: 2px;">
              <g>
                  <path d="M109.5 21H85V10.5C85 4.71 80.29 0 74.5 0h-30C38.71 0 34 4.71 34 10.5V21H10.5C4.71 21 0 25.71 0 31.5v72c0 5.79 4.71 10.5 10.5 10.5h99c5.79 0 10.5-4.71 10.5-10.5v-72c0-5.79-4.71-10.5-10.5-10.5zM88 24v87H32V24h56zm-16-3H46v-6.017A3.987 3.987 0 0 1 49.982 11h18.035A3.987 3.987 0 0 1 72 14.983V21zM37 10.5C37 6.364 40.364 3 44.5 3h30c4.136 0 7.5 3.364 7.5 7.5V21h-7v-6.017C75 11.133 71.868 8 68.018 8H49.982C46.132 8 43 11.133 43 14.983V21h-6V10.5zm-34 93v-72c0-4.136 3.364-7.5 7.5-7.5H18v87h-7.5c-4.136 0-7.5-3.364-7.5-7.5zm18 7.5V24h8v87h-8zm70 0V24h8v87h-8zm26-7.5c0 4.136-3.364 7.5-7.5 7.5H102V24h7.5c4.136 0 7.5 3.364 7.5 7.5v72z"></path>
              </g>
          </svg>
        </div>
        
        <p class="shangwu_subTitle2">会 议 定 制</p></br>
			</div>
			
			<div style='clear: both'></div>
		</div>

    <div>
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12 shangwu_subContent" style="color: black;padding: 4vh"><span ><strong>&emsp;&emsp;迦途国际集团长期以来为广大客户提供各项会议和节事活动策划，主要涉及经贸合作、文化、旅游、历史、艺术等领域。我们的专业传媒团队与公关团队拥有丰富的策划及实施经验，策划活动秉持高端、精品风格，深受加国华人社会好评。 在过去几年中我们成功组织、举办多次再生能源、生态环境等经济论坛，同时也举办了国际新闻发布会、中加两国企业庆典等事宜。成功的经验使我们能保证给您完美的体验。</strong></span>
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="background-color: rgba(255, 255, 255, 0.8);padding: 0;"><img src="/images/shangwu/meeting/5.jpg" style="width: 100%;height: 40vh"></div>
      <div style='clear: both'></div>
    </div>
	

  <div style="background-color: rgba(255, 255, 255, 0.7);">
    <div style="width: 100%;height: 10vw"></div>
    <div class="shangwu_title" style="width: 100%;margin: 0 auto;text-align: center;">可定制项目</div>
    <div style="width: 100%;height: 10vh"></div>
    <div class="shangwu_content" style="height: 45vh;">
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="height: 100%">
          <img src="/images/shangwu/meeting/4.jpg" style="width: 80%;border-radius: 50%;height: 70%;margin-left: 10%;">
          <div style="text-align: center;padding: 3vh 0"><i>会议场地</i></div>
          <div style="text-align: center;"><a href="shangwu_place" class="shangwu_search">详细</a></div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="height: 100%">
          <img src="/images/shangwu/meeting/3.jpg" style="width: 80%;border-radius: 50%;height: 70%;margin-left: 10%;">
          <div style="text-align: center;padding: 3vh 0"><i>商务车队</i></div>
          <div style="text-align: center;"><a href="shangwu_car" class="shangwu_search">详细</a></div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="height: 100%">
          <img src="/images/shangwu/meeting/1.jpg" style="width: 80%;border-radius: 50%;height: 70%;margin-left: 10%;">
          <div style="text-align: center;padding: 3vh 0"><i>私人飞机</i></div>
          <div style="text-align: center;"><a class="shangwu_search" href="shangwu_feiji" >详细</a></div>
        </div>
        <div style='clear: both'></div>
    </div>
    
    <div style="width: 100%;height: 20vh"></div>

     <div >
    <a class="reShangwu shangwu_content"  href="shangwu" >返回</a>
    <div style='clear: both'></div>
    </div>
  </div>
		

	

	

   
		
		
	</div>
	

	




	

<div style='clear: both'></div>


@include('footer')
@stop
