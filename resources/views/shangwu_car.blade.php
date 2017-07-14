@extends('layout')
@section('content')
@include('header')

	<div style="position: fixed;z-index: -1000;top: 0;">
	<img src="/images/shangwu/1.jpg">
	
	</div>

	<div style="background-color: rgba(255, 255, 255, 0.5);width: 100%;margin: 0 auto;color: black;">

		<div style="width: 100%;height: 5vh"></div>
      <div class="shangwu_subContent" style="width: 94%;margin: 0 auto;font-weight: bold;">
        <p style="font-size: 5vw;text-align: center;">专业商旅用车</p></br>
        迦途拥有6至16座，多款豪华德国原装奔驰商务车，配备专业外籍司机，专业中英文导游。 
      </div>
      <div style="width: 100%;height: 5vh"></div>
    
    <div class="row">
      <div class="col-md-5 col-sm-5 col-lg-5 col-xs-11 shangwu_content" style="font-weight: bold;padding: 5vw;border-radius: 2vw;border:2px solid black;margin: 3vw;background-color: rgba(255,255,255,0.8);">
        <p class="shangwu_subTitle">奔驰唯雅诺3.5豪华加长型</p>
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6">车重：</br>颜色：</br>车辆类型：</br>最大车速：</br>车辆类型：</br>座位数量：</div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">3.05吨</br>金属黑/金属灰</br>自动挡</br>217 km / h</br>M1</br>6 -16座包含司机</div>
         <div style='clear: both'></div>
           <p class="shangwu_subTitle"> 车辆特点:  </p>              
            分子材料隔音外壳</br>
            32寸液晶电视</br>
            车载石英时钟</br>
            VIP室麂皮内饰</br>
            18寸合金轮毂</br>
            高亮氙气大灯</br>
            顶级安全电子移门</br>
            VIP室气温智能调控</br>
            后视镜加热</br>
            尾气温智能调控设备</br>
            360°行车摄像头</br>
            高清行车记录仪</br>
            欧洲定制雪茄盒</br>
            ﻿﻿﻿陆地巡航</br>
            全车车座智能加热</br>
            全车车座电动调整</br>
            VIP 车座智能通风</br>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" id="fullContainer" style="padding: 2vw;margin-top: 3vw;">
      <ul>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" >
        
          <li><a class="fullsizable" href="/images/shangwu/meeting/car/1.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/1.jpg);background-size: cover;background-position: 50% 50% "><img src="/images/shangwu/meeting/car/1.jpg" style="opacity: 0"></div></a></li>
          <li><a class="fullsizable" href="/images/shangwu/meeting/car/2.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/2.jpg);background-size: cover;background-position: 50% 50% "><img src="/images/shangwu/meeting/car/2.jpg"  style="opacity: 0"></div></a></li>
          <li><a class="fullsizable" href="/images/shangwu/meeting/car/3.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/3.jpg);background-size: cover;background-position: 50% 50% "><img src="/images/shangwu/meeting/car/3.jpg"  style="opacity: 0"></div></a></li>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" >
          <li><a class="fullsizable" href="/images/shangwu/meeting/car/4.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/4.jpg);background-size: cover;background-position: 50% 50% "><img src="/images/shangwu/meeting/car/4.jpg"  style="opacity: 0"></div></a></li>
         <li><a class="fullsizable" href="/images/shangwu/meeting/car/5.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/5.jpg);background-size: cover;background-position: 50% 50% "><img src="/images/shangwu/meeting/car/5.jpg"  style="opacity: 0"></div></a></li>
          <li><a class="fullsizable" href="/images/shangwu/meeting/car/6.jpg"><div class="shangwu_car" style="height: 20vw;margin:2vw 0;border:5px solid #2f2e2e;overflow: hidden;background-image:url(/images/shangwu/meeting/car/6.jpg);background-size: cover;background-position: 50% 50%"><img src="/images/shangwu/meeting/car/6.jpg"  style="opacity: 0"></div></a></li>
        </div>
        
      </div></ul>
    </div>

    <a href="shangwu_meeting" class="reYiyou"></a>
    <div style='clear: both'></div>
    <div style="width: 100%;height: 10vh"></div>
   
  </div>
		

	

	

   
		
		
	</div>
	

	




	

<div style='clear: both'></div>


@include('footer')

@stop
@section('scripts')





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/jquery-1.7.2.js"></script>
  <script src="https://cdn.rawgit.com/mattbryson/TouchSwipe-Jquery-Plugin/1.6.6/jquery.touchSwipe.min.js"></script>
  <script src="/js/jquery-fullsizable.js"></script>


<script type="text/javascript">
    $(function(){
$('a.fullsizable').fullsizable({
        detach_id: 'fullContainer'
      });

      $(document).on('fullsizable:opened', function(){
        $("#jquery-fullsizable").swipe({
          swipeLeft: function(){
            $(document).trigger('fullsizable:next')
          },
          swipeRight: function(){
            $(document).trigger('fullsizable:prev')
          },
          swipeUp: function(){
            $(document).trigger('fullsizable:close')
          }
        });
      });
      });
</script>
@endsection