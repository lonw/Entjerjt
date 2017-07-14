@extends('layout')
@section('content')
@include('header')

<div style="position: fixed;z-index: -1000;top: 0;">
	<img src="/images/tanxian/tanxian-6.jpg">
	</div>

<div style="width: 100%;height: 10vw"></div>
<div style="background-image: url(/images/tanxian/Picture1.png);background-size: 75% 75%;background-position: 55% 25%;background-repeat: no-repeat;text-align: center;width: 100%;">
	
	<div class="tanxian_left" >
		<img src="/images/tanxian/21.png" style="width: 100%;transform: rotate(-10deg);">
		<img src="/images/tanxian/tanxian-2.jpg" style="width: 100%;transform: rotate(15deg);">
	</div> 
	<div class="tanxian_middle" style="position: relative;">
		
		<div class="tanxian_title" >极致探险</div>
	<div class='tanxian_content' >狩猎是人类祖先最先掌握的生存技能之一，它植根于人类文明的源头。在人类漫长的文明进程中，狩猎的工具、方式都逐步得到了完善，狩猎的目的也不再是为了生存。在如今这个科技迅猛发展的时代，狩猎与我们日常生活愈离愈远，我们渐渐淡忘了如何与大自然亲近。但在加拿大，狩猎仍被视为一项重要的活动，代表着人与自然的平衡和交流。在这里，人们把都市生活中的喧嚣缤纷抛之脑后，只为寻找内心深处最原始的野性。</div>

	</div>
	<div class="tanxian_right" ><img src="/images/tanxian/22.png" style="width: 100%;transform: rotate(10deg);"><img src="/images/tanxian/tanxian-11.png" style="width: 100%"></div>
	<div style='clear: both'></div>	
	<div style="float: right;height: 20vw;margin-right: 10%"><img src="/images/tanxian/tanxian-9.png" style="height: 100%"></div>
	<div style='clear: both'></div>
</div>

<!-- <div style="height: 10vw;width: 100%"></div>
 -->
<div style="">
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">		
			<img src="/images/tanxian/1.png" style="width: 100%;">		
	</div>
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">		
			<img src="/images/tanxian/2.png" style="width: 100%">
			<a class="tanxian_more" href="tanxian_zhulu" style="position: absolute;right: 20%;bottom: 40%;">详情</a>	
	</div>
	<div style='clear: both'></div>
</div>

<!-- <div style="height: 10vw;width: 100%"></div>
 -->
<div style="">
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">		
		<div  style="">
				<img src="/images/tanxian/3.png" style="width: 100%">
				<a class="tanxian_more2" href="tanxian_shouxiong"  style="position: absolute;right: 35%;bottom: 30%;">详情</a>	
		</div>
	</div>
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">	
			<img src="/images/tanxian/4.png" style="width: 100%">		
	</div>
	<div style='clear: both'></div>
</div>

<!-- <div style="height: 10vw;width: 100%"></div>

 --><div style="">
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">			
			<img src="/images/tanxian/5.png" style="width: 100%">		
	</div>
	<div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="">
			<img src="/images/tanxian/6.png" style="width: 100%">
			<a class="tanxian_more" href="tanxian_lieyu" style="position: absolute;right: 20%;bottom: 44%;">详情</a>
	</div>
	<div style='clear: both'></div>
</div>
<div style="height: 10vw;width: 100%"></div>

@include('footer')
@stop