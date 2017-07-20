@extends('layout')
@section('content')
@include('header')
<div style='clear: both'></div>
<div class="springContainer" style="color:#333333;">
  <div class="seasonHeader">
    <span class="title1" style="color:#68B02E; padding-left:10%;">迦途·春</span>
    <br>
    <span class="title2" style="padding-left:25%;">&ndash; &ndash;巴里&ndash;多伦多七日游</span>
  </div>

  <div class="info content1">
    <ul>
      <li class="lidot">
        出发城市： 上海浦东
      </li>
      <li class="lidot">
        往返交通： 飞机+豪华专车
      </li>
      <li class="lidot">
        付款方式：
      </li>
      <li class="lidot">
        出发日期：
      </li>
    </ul>
  </div>


  <div class="scroller">
    <div class="snext"><img src="/images/jiatu/left.png"></div>
    <div class="innerScrollArea" id="fullContainer">
      <ul>
        <li><a class="fullsizable" href="/images/jiatu/spring/1.jpg"><img src="/images/jiatu/spring/1.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/2.jpg"><img src="/images/jiatu/spring/2.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/3.jpg"><img src="/images/jiatu/spring/3.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/4.jpg"><img src="/images/jiatu/spring/4.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/5.jpg"><img src="/images/jiatu/spring/5.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/6.jpg"><img src="/images/jiatu/spring/6.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/7.jpg"><img src="/images/jiatu/spring/7.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/8.jpg"><img src="/images/jiatu/spring/8.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/9.jpg"><img src="/images/jiatu/spring/9.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/10.jpg"><img src="/images/jiatu/spring/10.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/11.jpg"><img src="/images/jiatu/spring/11.jpg" /></a></li>
        <li><a class="fullsizable" href="/images/jiatu/spring/12.jpg"><img src="/images/jiatu/spring/12.jpg" /></a></li>
      </ul>
    </div>
    <div class="sprev"><img src="/images/jiatu/right.png"></div>
  </div>

    <div class="row" style="margin: 3vw;background-color: rgba(255, 255, 255, 0.9);padding: 2vw">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12" id='calendar'></div>
            <div class=" col-md-8 col-sm-8 col-lg-8 col-xs-12" >
                <div class="room" style="margin-bottom: 1vw">
                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3" style="text-align: center">
                    <img src="/images/3beds.png" width="40px">
                        <p>四人间</p>
                        <p>$219.99/人</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3" style="text-align: center">
                    <img src="/images/3beds.png" width="40px">
                        <p>三人间</p>
                        <p>$269.99/人</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3" style="text-align: center">
                    <img src="/images/2beds.png" width="40px">
                        <p>双人间</p>
                        <p>$349.99/人</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3" style="text-align: center">
                    <img src="/images/1bed.png" width="40px">
                        <p>单人间</p>
                        <p>$449.99/人</p>
                    </div>
                    <div style='clear: both'></div>
                </div>
                <div style="background-color: rgba(252, 249, 226, 1)">
                <h4 style="text-align: center">产品预订表</h4>
                <form method="POST" action="{{route('yuding-post')}}" enctype="multipart/form-data" style="padding: 2vw">
                {{ csrf_field() }}
                    <div class="row">
                      <input type="hidden" name="title" value="迦途·春– –巴里–多伦多七日游">
                    <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" ><img src="/images/No1.png"></div>
                    <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5 form-group" style="margin-bottom: 10px;padding-left: 0;">
                    <label class="col-md-4 col-sm-4 col-lg-4 col-xs-4 control-label" for="travelDate" style="margin-top: 10px">出发日期</label>
                    <input type="text" class="form-control nobottom_pad" id="start" placeholder="" name="travelDate"  required></div>

                    <!-- <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5 form-group" style="margin-bottom: 10px;padding-left: 0;">
                        <label class="col-md-4 col-sm-4 col-lg-4 col-xs-4 control-label" for="roomNum" style="margin-top: 10px">房间数</label>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8">
                            <input type="number" class="form-control nobottom_pad" id="roomNum" placeholder="" name="roomNum"  required>
                        </div>
                    </div> -->
                    </div>
                    <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" ><img src="/images/No2.png"></div>
                    <div class="col-md-11 col-sm-11 col-lg-11 col-xs-11 yuding_row2">
                    <div class="roomRow">
                        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5 form-group" style="margin-bottom: 10px;padding-left: 0;">
                            <label for="numAdult"  style="margin-top: 10px">成人人数</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="numAdult" required>
                            <label for="numChild" style="margin-top: 10px ">儿童人数</label>
                            <input type="number" class="form-control nobottom_pad"   placeholder="" name="numChild" required>
                            <label for="numBaby"  style="margin-top: 10px">婴儿人数</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="numBaby" required>
                            <label for="numBaby"  style="margin-top: 10px">姓名</label>
                            <input type="text" class="form-control nobottom_pad" placeholder="" name="gName" required>
                            <label for="numBaby"  style="margin-top: 10px">联系电话</label>
                            <input type="text" class="form-control nobottom_pad" placeholder="" name="gPhone" required>
                            <label for="inputEmail"  style="margin-top: 10px">邮箱地址</label>
                            <input type="email" class="form-control nobottom_pad" placeholder="" name="gEmail" data-error="Bruh, that email address is invalid" required>
                            <label for="numBaby"  style="margin-top: 10px">护照号码</label>
                            <input type="text" class="form-control nobottom_pad" placeholder="" name="gPP" required>
                            </div>
                        </div>
                        <!-- <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5 form-group" style="margin-bottom: 10px;padding-left: 0;">
                            <label class="col-md-3 col-sm-3 col-lg-3 col-xs-3 control-label" style="margin-top: 10px">房型</label>
                            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7">
                                <select type="text" class="form-control nobottom_pad" placeholder="" name="roomType[]" required>
                                    <option value="1">单人间</option>
                                    <option value="2">双人间</option>
                                    <option value="3">三人间</option>
                                    <option value="4">四人间</option>
                                </select>
                            </div> -->
                        </div>
                        </div>
                    </div>

                    </div>
                    <div class="row">
                    <!-- <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" ><img src="/images/No3.png" ></div> -->
                    <div class="form-group" style="margin-bottom: 10px;">
                        <!-- <label class="col-md-3 col-sm-3 col-lg-3 col-xs-3 control-label" for="location" style="margin-top: 10px">上车地点</label>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
                            <select type="text" class="form-control nobottom_pad" id="location" placeholder="" name="location" required>
                                <option value="CA">加拿大</option>
                                <option value="US">美国</option>
                                <option value="CN">中国</option>
                            </select>
                        </div> -->
                    </div>
                    </div>
                    <div class="form-group" style="float: right">
                        <label class="control-label" id="money" style="background-color: rgb(217,243,216);color: rgb(103,169,119);">总金额:</label>
                        <label class="control-label" id="peopleNum" style="background-color: rgb(217,243,216);color: rgb(103,169,119);">总人数:</label>
                    </div><div style='clear: both'></div>
                    <button type="submit" class="btn btn-sm btn-yuding"
                            id="btnSave" style="float: right">立即预订
                    </button><div style='clear: both'></div>
                </form>
            </div>
            </div>

        </div>

<div class="info">
    <ul>
      <li class="title3">
         <b>线路特色 :</b>
      </li>
      <li class="content2">
       <b>专享特色民宿</b>
      </li>
      <li class="content2">
       <b>豪华专车接送</b>
      </li>
      <li class="content2">
       <b>顶级赏花美景</b>
      </li>
      <li class="content2">
       <b>多项定制活动</b>
      </li>
      <li class="content2">
       <b>精品酒庄参观及特色冰酒品尝</b>
      </li>
    </ul>
  </div>

  <div class="boldFont">
    <div class="tipBtn">旅途Tips</div>
    <div class="tipContent">
      春季加拿大为夏令时，<br>
      与中国时差12个小时。
    </div>
  </div>

  <div class="info">
    <ul>
      <li class="title3">
        行程安排
      </li>
      <li class="content3">
        <p> 第一天:（上海—多伦多）
        <p>从上海搭乘飞机至多伦多，入住希尔顿酒店。
      </li>
      <li class="content3">
        <p> 第二天:（多伦多—酒庄—锡姆科湖)
        <p>游览加拿大顶级葡萄酒庄，品尝特色葡萄酒、冰酒。入住锡姆科附近民宿。
      </li>
      <li class="content3">
        <p> 第三天:（巴里)
        <p>参观自然风光名城巴里及加拿大驰名啤酒厂。
      </li>
      <li class="content3">
        <p> 第四天: （锡姆科湖）
        <p>休闲游览锡姆科湖周边景点和著名电影取景点卡萨罗马城堡。晚上返回多伦多入住威斯汀海景宾馆。
      </li>
      <li class="content3">
        <p> 第五天: （海柏公园）
        <p>前往大多伦多最著名的樱花观赏点——海柏公园观赏樱花盛景。
      </li>
      <li class="content3">
        <p> 第六天: （多伦多）
        <p>多伦多downtown游览。
      </li>
      <li class="content3">
        <p> 第七天: （多伦多—上海）
        <p>行程结束，返回中国。
      </li>
    </ul>
  </div>

  <div class="info">
    <span class="content4"><b>【费用详情】</b></span>
    <div><img style="width:50%;" src='/images/jiatu/spring/feeTable.jpg' /></div>
  </div>

  <div class="info">
    <ul>
      <li class="content4">
        【价格包括】：
      </li>
      <li class="content5">
         -乘坐豪华游巴士，或其它交通工具，团体接送观光。
      </li>
      <li class="content5">
         -由经验丰富的华人领队随团服务，并带领作游览观光。
      </li>
      <li class="content5">
         -公司安排中各景点庄园费用。
      </li>
       <li class="content5">
         -特色民宿或高级住宿。
      </li>
       <li class="content5">
         -行程安排中一切计划内餐饮费用。
      </li>
    </ul>
  </div>

  <div class="info">
    <ul>
      <li class="content4">
        【价格不包括】：
      </li>
      <li class="content5">
        -签证费用。
      </li>
      <li class="content5">
        -司机及导游服务费。(全团每天每人合共$10，以当地货币计算)
      </li>
      <li class="content5">
        -行程中所列外各个人娱乐等消费。
      </li>
       <li class="content5">
        -各种旅游，及相关保险。
      </li>
       <li class="content5">
        -因交通阻延, 罢工, 天气恶劣 (如台风, 暴风雪, 水灾) 等, 航机取消或更改时间, 或其它情况而超出本公司控制范围所引致之额外费用。
      </li>
       <li class="content5">
        -离团后一切费用。
      </li>
    </ul>
  </div>

  <div class="info content6">
    <div class="fl info2">
      <div>如果您需要任何帮助，请发送电子邮件至我们的</div>
      <div>客户服务团队</div>
      <div>或拨打客服电话：</div><br>
      <div>迦途真诚的期望您旅途愉快！</div>
    </div>

  </div>
  <div style='clear: both'></div>

  <div class="content7" style="float: left;margin-bottom: 5%"><a class="content8" href="useterm">责任详情: </a></div>
  <div class="fr fanhuibtn" style="margin-top: 3%;margin-bottom: 5%">
      <div class="triangle-left"></div><div class="returnBtn"><a class="retuenBtn2" href="jiatu">返回</a>
    </div>
    </div>
  <div style='clear: both'></div>

</div>

@include('footer')
@stop

@section('scripts')





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="https://cdn.rawgit.com/mattbryson/TouchSwipe-Jquery-Plugin/1.6.6/jquery.touchSwipe.min.js"></script>
  <script src="/js/jquery-fullsizable.js"></script>
  <link href='/css/fullcalendar.css' rel='stylesheet' />
  <link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='/js/jquery-ui.custom.min.js'></script>
  <script src='/js/fullcalendar.min.js'></script>


<script type="text/javascript">
    $(function(){

      $('.fanhuibtn').hover(function(){
        $('.triangle-left').css('border-right','40px solid rgba(188, 182, 181,1)');
        $('.returnBtn').css('background-color','rgba(188, 182, 181,1)');
      }, function(){
        $('.triangle-left').css('border-right','40px solid rgba(48, 197, 227,1)');
        $('.returnBtn').css('background-color','rgba(48, 197, 227,1)');
        });

        var scroller = $('.scroller div.innerScrollArea');
        var preBtn = $('.sprev');
        var nextBtn = $('.snext');
        var imgNow = $('.innerScrollArea ul li img')
        var scrollerContent = scroller.children('ul');
        var leftclicked=false;
        var rightclicked=false;
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.outerWidth(true);
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        imgNow.hover(function(){
            var $this = $(this);
            $this.css('opacity', 0.5);
        }, function(){
            var $this = $(this);
            $this.css('opacity', 1);
        });



        $(document).click(function(e){
            e = window.event || e; // 兼容IE7
            obj = $(e.srcElement || e.target);
            if ($(obj).is(".scroller,.scroller *")) {
            } else {
                if(leftclicked || rightclicked){
                  leftclicked=false;
                  rightclicked=false;
                  tweenToNewSpeed(0);
                }
            }
        });
        preBtn.click(function(){
          if(rightclicked){
            rightclicked=false;
            tweenToNewSpeed(0);
          }
          if(!leftclicked){
            tweenToNewSpeed(controller.fullSpeed);
            leftclicked=true;
          }else{
            tweenToNewSpeed(0);
            leftclicked=false;
          }
        });
        nextBtn.click(function(){
          if(leftclicked){
            leftclicked=false;
            tweenToNewSpeed(0);
          }
          if(!rightclicked){
              tweenToNewSpeed(-controller.fullSpeed);
              rightclicked=true;
            }else{
              tweenToNewSpeed(0);
          rightclicked=false;
            }
        });

        // Scrolling management; start the automatical scrolling

        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 20);
        //tweenToNewSpeed(controller.fullSpeed);


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
    $(document).ready(function() {



        var date = new Date();

        var d = date.getDate();

        var m = date.getMonth();

        var y = date.getFullYear();



        var calendar = $('#calendar').fullCalendar({

            header: {

                left: '',

                center: 'title',

                right: 'prev,next today'

            },

            selectable: true,

            selectHelper: true,

            select: function(start, end, allDay) {
                $('#start').val(start);
            },

            editable: true,

            events: [



            ]

        });



    });
$('#roomNum').change(function(){
        $('.yuding_row2').html($('.roomRow').clone());
        var j=1;
    for(i=$(this).val();i>1;i--){
        j++;
        roomRowNew=$('.roomRow').clone();
        roomRowNew.children().first().children().first().text('房间'+j);
        roomRowNew.removeClass('roomRow').appendTo('.yuding_row2');
    }

});
</script>
@endsection
