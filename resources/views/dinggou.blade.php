@extends('layout')
@section('content')
@include('header')
<div style='clear: both'></div>
<div style="width:65%;margin:0 auto;">
	<div class="dinggouInfo">订购信息</div>
	<form action="" id="usrform">
		<div class="dinggouinput">
			<div class="col-xs-6 col-md-3 col-lg-3">日期：<input type="text"></div>
			<div class="col-xs-6 col-md-3 col-lg-3">项目：<input type="text"></div>
			<div class="col-xs-6 col-md-3 col-lg-3">价格：<input type="text"></div>
			<div class="col-xs-6 col-md-3 col-lg-3">数量：<input type="text"></div>
		</div>	
		<hr style="height: 1px;
    background: #333;">
		<div id="dinggoutext">
			<textarea form="usrform"></textarea>	
		</div>
 		<div class="fr dinggouCount">总计:<input type="text"></div>
	</form>
	<div style='clear: both'></div>
	<img class="fr" style="width:24%; height:auto; margin:2% 5%;" src="/images/youxue/exchange/paypal.jpg"/>
	<div style='clear: both'></div>
</div>
@include('footer')