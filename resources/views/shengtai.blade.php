@extends('layout')
@section('content')
@include('header')

	<div style="position: fixed;z-index: -1000;top: 0;">
	<video preload="auto" style="height: 150%" autoplay loop>
	<source src="/images/shengtai/file.mp4" type="video/mp4">
	</video>
	</div>

<div style="background-color: rgba(241, 220, 146, 0.72);width: 80%;margin: 0 auto;color: black;">
    <div style="background-color: rgba(86, 176, 230, 0.88);">
        <div style="width: 100%;overflow: hidden;">
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" style="text-align: center; padding: 0;">
        <div style="margin: 5vw auto 0;"><img src="https://static.wixstatic.com/media/bfb291_d7e055e0a63d4e43ab67f5222519a53d~mv2.png/v1/fill/w_140,h_140,al_c,usm_0.66_1.00_0.01/bfb291_d7e055e0a63d4e43ab67f5222519a53d~mv2.png" style="height: 8vw;"><br><span class="shengtai_subTitle" style="border-top: 1px solid black;">生 态 游</span></div>
      </div>
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="padding: 0;">
        <img src="/images/shengtai/10.jpg" style="height: 23vw;" />  
      </div><div style="clear:both;"></div>
        </div>
        <div style="width: 100%;">
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" style="padding: 0;overflow: hidden;">
      <img src="/images/shengtai/13.jpg" style="height: 23vw;"/>
        
      </div>
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8 shengtai_subContent" style="padding: 0;">
        <p style="">&emsp;&emsp;&emsp;&emsp;你是否厌倦了城市的喧嚣与繁杂？是否在快节奏的生活和工作中疲惫不堪？是否在社会上要戴上你不喜欢的假面？<br>
        &emsp;&emsp;&emsp;&emsp;我想你需要一片辽阔的天地，放轻压力，用清新的空气和美丽的山水洗涤自己的内心。</p>
      </div><div style="clear:both;"></div>
      </div>
	</div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/1.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12" style=""><p class="shengtai_subTitle">国家公园游 <img class="hot_icon" src="/images/shengtai/1.png" style=""><br>National park trip</p><p class="shengtai_content">出发地：上海​</p></div>
    	</div>
    	<div class="shengtai_more" style="">
    		<p class="shengtai_subTitle">C$ 2888</p><br>
    		<a class="shengtai_content shengtai_btn" href="shengtai_National" style="">详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/5.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">峡谷赏枫<br>Maple trees in canyon</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 666</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/6.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">相约北极熊<br>Churchill polar bear</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 3988</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/4.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">安大略露营<br>Ontario Camping trip</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 434</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/8.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">蓝山滑雪三日游（冬季特制）<br>Blue Mountain</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 400</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/7.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">花瓶岛一日游<br>Flowerpot Island</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 102</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/3.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">大西洋省七日游<br>Atlantic province tour</p><p class="shengtai_content">出发地：多伦多</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 666</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row">
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/9.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">黄刀极光探险四日游<br>Yellowknife </p><p class="shengtai_content">出发地：多伦多​</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 870</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div class="row shengtai_row" >
    	<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
    		<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12"><img src="/images/shengtai/2.jpg" style="width: 100%"></div>
    		<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12"><p class="shengtai_subTitle">尼亚加拉大瀑布一日游<br>Niagara Falls</p><p class="shengtai_content">出发地：多伦多​</p></div>
    	</div>
    	<div class="shengtai_more">
    		<p class="shengtai_subTitle">C$ 88</p><br>
    		<a class="shengtai_content shengtai_btn"  >详情</a>
    	</div>
    </div>

    <div style="width: 100%;padding: 5vw 0;"><img src="/images/shengtai/12.jpg" style="width: 100%; height: 10vw"></div>


    


</div>

@include('footer')
@stop