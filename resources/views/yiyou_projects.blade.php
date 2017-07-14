@extends('layout')
@section('content')
@include('header')

<div style="width: 90%;margin: 0 auto;color: black">
	<div style="font-size: 10vh;margin: 5vh;font-family: 'SimSun'">我们的项目</div>
	<div >
		<div><div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-31.jpg" style="width: 100%">
			<a href="yiyou_project_fuzhu"><div class="YiyouPro" style="">辅助生育</div></a>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-25.jpg" style="width: 100%">
			<a href="yiyou_project_liangxin"><div class="YiyouPro" style="">两性健康</div></a>
		</div> <div style='clear: both'></div></div>
		
		<div><div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-28.jpg" style="width: 100%">
			<a href="yiyou_project_weichuang"><div class="YiyouPro" >微创手术</div></a>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-29.jpg" style="width: 100%">
			<a href="yiyou_project_3"><div class="YiyouPro" >疝气修复</div></a>
		</div> <div style='clear: both'></div></div>
		
		<div><div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-26.jpg" style="width: 100%">
			<a href="yiyou_project_ertong"><div class="YiyouPro" >儿童健康</div></a>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-27.jpg" style="width: 100%">
			<a href="yiyou_project_feiai"><div class="YiyouPro" >肺癌治疗</div></a>
		</div> <div style='clear: both'></div></div>
		
		<div><div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-24.png" style="width: 100%">
			<a href="yiyou_project_jiguang"><div class="YiyouPro" >激光矫正</div></a>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
			<img src="/images/yiyou/yiyou-30.jpg" style="width: 100%">
			<a href="yiyou_project_ruxian"><div class="YiyouPro" >乳腺癌治疗</div></a>
		</div> <div style='clear: both'></div></div>
		
	</div>
	<div style="margin: 5vh;font-size: 4vh;">***更多项目请咨询客服</div>
	<a href="yiyou" class="reYiyouPro" >返回</a>
</div>

@include('footer')
@stop