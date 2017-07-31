@extends('layout')
@section('content')
@include('header')
<div style="position: fixed;z-index: -1000;top: 0; height: 100%;width: 100%">
</div>
<div style="position: fixed;z-index: -999;top: 0;background: rgba(255,255,255,0.4);width: 100%;height: 100%">
    </div>
<div style="background-color: rgba(255, 255, 255, 0.8);width: 100%;">
<div style="padding: 1vh"></div>
<div class="row">
    <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12">

        <div id="slider2_container" style="position:relative;margin:0 auto;top:0px;left:0px;width:300px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
            <div u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('/images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
            </div>
            <div u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:300px;height:300px;overflow:hidden;">
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/1.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/1.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/2.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/2.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/3.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/3.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/4.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/4.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/5.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/5.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/6.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/6.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/7.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/7.jpg" />
                </div>
                  <a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/8.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/8.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/9.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/9.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/10.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/10.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/11.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/11.jpg" />
                </div>
                <div>
                    <img u="image" src="/images/jiatu/yinxiang/gallery/12.jpg" />
                    <img u="thumb" src="/images/jiatu/yinxiang/gallery/12.jpg" />
                </div>


            </div>
            <!-- Thumbnail Navigator -->
            <div u="thumbnavigator" class="jssort03" style="position:absolute;left:0px;bottom:0px;width:600px;height:60px;" data-autocenter="1">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:#fff;filter:alpha(opacity=30.0);opacity:0.8;"></div>
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="cursor: default;">
                    <div u="prototype" class="p">
                        <div class="w">
                            <div u="thumbnailtemplate" class="t"></div>
                        </div>
                        <div class="c"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!-- Arrow Navigator -->

        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-lg-7 col-xs-12" style="padding-left: 4vw;padding-top:5vh;">
        <div style="color: #333;font-size: 4vw;text-align: center;"><strong>迦途印象·季秋之加</strong>​</div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">


        </div>
    </div>


	</div>



<div class="row" style="margin: 3vw;background-color: rgba(244, 251, 237, 0.9);padding: 2vw;border-style: solid;border-width: 1px;border-color: #CACACA;">
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
								<form method="POST" action="{{route('yuding-post2')}}" enctype="multipart/form-data" style="padding: 2vw">
                {{ csrf_field() }}
                    <div class="row">
                      <input type="hidden" name="title" value="迦途印象·季秋之加">
                      <input type="hidden" name="titlePrice" value="520">
                      <input type="hidden" name="4R" value="240">
                      <input type="hidden" name="3R" value="300">
                      <input type="hidden" name="2R" value="400">
                     <input type="hidden" name="1R" value="500">
                     <input type="hidden" name="Rnight" value="8">
                    <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" ><img src="/images/No1.png"></div>
                    <div class="col-md-11 col-sm-11 col-lg-11 col-xs-11 form-group" style="margin-bottom: 10px;padding-left: 0;">
                    <label class="col-md-4 col-sm-4 col-lg-4 col-xs-4 control-label" for="travelDate" style="margin-top: 10px">出发日期</label>
                    <input type="text" class="form-control nobottom_pad" id="start" placeholder="" name="travelDate"  required></div>


                  </div><hr>
                    <div class="row">
                    <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" ><img src="/images/No2.png"></div>
                    <div class="col-md-11 col-sm-11 col-lg-11 col-xs-11 yuding_row2">
                    <div class="roomRow">


                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 form-group" style="margin-bottom: 10px;padding-left: 0;">
                        <div class="col-md-8" style="border-radius: 3px;box-shadow: 1px 1px 10px rgba(0, 0, 0, .3);border-style: solid;border-width: 1px;border-color: #CACACA;padding-bottom: 20px;">
                          <div class="col-md-6">
                            <label for="numBaby"  style="margin-top: 10px">单人间</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="num1R" value="0" id="num1R" required>
                            <label for="numAdult"  style="margin-top: 10px">双人间</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="num2R"  value="0" id="num2R" required>
                          </div>
                          <div class="col-md-6">
                            <label for="numChild" style="margin-top: 10px ">三人间</label>
                            <input type="number" class="form-control nobottom_pad"   placeholder="" name="num3R"  value="0" id="num3R" required>
                            <label for="numBaby"  style="margin-top: 10px">四人间</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="num4R"  value="0" id="num4R" required>
                          </div>

                        </div>
                          <div class="col-md-4" style="border-radius: 3px;box-shadow: 1px 1px 10px rgba(0, 0, 0, .3);border-style: solid;border-width: 1px;border-color: #CACACA;padding-bottom: 20px;">
                            <label for="numAdult"  style="margin-top: 10px">成人人数</label>
                            <input type="number" class="form-control nobottom_pad" placeholder="" name="numAdult"  value="0" id="numAdult"  required>
                            <label for="numChild" style="margin-top: 10px ">儿童人数</label>
                            <input type="number" class="form-control nobottom_pad"   placeholder="" name="numChild"  value="0" id="numChild" required>
                          </div>

                            </div>
                        </div>

                        </div>
                        </div>
                    </div>

                    </div>
                    <div class="row">
                    <div class="form-group" style="margin-bottom: 10px;">

                    </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-yuding"
                            id="btnSave" style="float: right">立即预订
                    </button><div style='clear: both'></div>
                </form>
            </div>
            </div>


    <div class="row">
        <center><img src="/images/jiatu/yinxiang/1.jpg" style="width: 95%;max-height:450px;"></center>

    </div>


		<div style='clear: both'></div>
		<div style='margin-bottom:5vh;'></div>
    <div class="">
      <div class="row">
        <div class="col-md-12">
                    <div class="panel with-nav-tabs"  style="width:97%;margin-left:auto;margin-right:auto;">
                        <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active" style="background-color: #fff;"><a href="#tab1primary" data-toggle="tab" aria-expanded="false">概况</a></li>
                                    <li class="" style="background-color: #fff;"><a href="#tab2primary" data-toggle="tab" aria-expanded="false">22天具体行程</a></li>
                                    <li class="" style="background-color: #fff;"><a href="#tab3primary" data-toggle="tab" aria-expanded="false">27天具体行程</a></li>
                                    <li class="" style="background-color: #fff;"><a href="#tab4primary" data-toggle="tab" aria-expanded="false">29天具体行程</a></li>

                                </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab1primary" style="background-color: #fff;">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/1-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/2-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/3-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/4-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/5-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/6-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/7-min.jpg" alt="">
                                  <img class="img-responsive" src="/images/jiatu/yinxiang/8-min.jpg" alt="">
                                </div>
                                <div class="tab-pane fade" id="tab2primary" style="background-color: #fff;">
                                  <h4>第一天：造访枫叶之国&mdash;&mdash;加拿大</h4>

  <p>航班：上海（浦东国际机场）北京时间17:10 &rarr; 多伦多（皮尔逊国际机场）加东时间19:00</p>

  <p>&nbsp;<img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC&nbsp;028经济舱&nbsp;&nbsp;&nbsp;飞行时长：13小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;飞机早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;迦途特制点心</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：今日，搭乘加拿大航空公司的国际航班，前往枫叶之国&mdash;&mdash;加拿大。抵达后，入住多伦多市中心地标性建筑费尔蒙皇家约克酒店。</p>

  <p>【行程摘要】</p>

  <p>☆英联邦国家永恒的骄傲&mdash;&mdash;费尔蒙皇家约克酒店</p>

  <p>1929年皇家约克酒店正式开业，是当时所有英联邦国家中最大最豪华的酒店，也是当时所有英联邦国家中最高的建筑。迄今为止，皇家约克酒店总计接待客人超过4千万，英国皇室家族的三代曾在皇家套房酒店里住过。这里不仅是多伦多最顶级的酒店之一，更是加拿大繁荣发展的见证者。</p>

  <p>&nbsp;</p>

  <h4>第二天：伴随历史的脚步，探索多伦多市中心的风景</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;CN Tower塔顶360&deg;旋转餐厅</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：上午，前往加拿大最早的古堡&mdash;&mdash;卡萨罗马（Casa Loma）,探索20世纪初多伦多最大私人宅邸的典雅与壮丽，感受亨利柏拉特男爵与夫人的旷世之恋。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，轮渡前往多伦多湖心岛（Centre Island），城市天际线尽收眼底。</p>

  <p>【行程摘要】</p>

  <p>☆CN Tower&mdash;&mdash;多伦多城市天际线的标杆</p>

  <p>全世界最高的通讯塔多伦多CN Tower建成于1976年，塔高553米，是加拿大的著名象征，也是多伦多城市风景线的重要标志。360&deg;旋转餐厅坐落于塔顶，在享受美食的同时，远眺落日余晖，俯瞰华灯初上。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆卡萨罗玛&mdash;&mdash;加拿大最早的古堡</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1911年，金融家亨利柏特拉男爵（Sir Henry Pallet）为了让腿脚不便的妻子可以在加拿大也看到传统的欧式城堡而修建这座城堡。古堡内有98间装饰华丽的房间，神秘的塔楼，长达270米的幽深隧道，规模庞大的马厩，还有隐蔽的暗道，典雅的温室花房，和一个面积达五英亩，依山而建的美丽花园，处处彰显着当时的建筑艺术和男爵对妻子深沉的爱意。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆CN Tower Dinner&mdash;&mdash;电视塔顶层360&deg;旋转餐厅</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 全球最高的旋转餐厅，在享用美食的同时，还能俯瞰多伦多和安大略湖。如果是傍晚上塔，那是最好的选择，既可以看到落日余晖，也可以看到华灯初上的城市夜景。这里有个世界纪录&mdash;&mdash;「全球最高酒窖」美誉的空中酒窖。它的藏酒量达9,000支(另有25,000支收藏在地库)，包罗全球550个品牌的美酒，爱酒的朋友一定不能错过。</p>

  <p>&nbsp;</p>

  <h4>第三天：探索世界遗产名城&mdash;&mdash;魁北克城</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间11:30 &rarr;魁北克（让&middot;勒萨热国际机场）加东时间13:15</p>

  <p><img alt="IMG_256" src="/images/jiatu/westjet.png" style="height:11px; width:31px" />西捷航空3458航班经济舱 飞行时长1小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;机场午餐&nbsp; 晚餐&mdash;&mdash;Restaurant Initiale享用法式大餐</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，搭乘西捷航空航班前往世界遗产名城&mdash;&mdash;魁北克城。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览魁北克城的老城区，静静感受400年来这个城市的点滴故事</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜游魁北克，欣赏圣劳伦斯河夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆邂逅中世纪浪漫&mdash;&mdash;小香普兰街<br />
  小香普兰街是北美最古老繁华的街区。古趣盎然的古老街景，仿若看见了四百年多前的繁华，无论是精美的橱窗、别致的招牌、美丽的窗台，都足以让人驻足</p>

  <p>半天，充分展现中世纪的欧洲街景。在这里最适合逛逛街道两旁各种装潢设计别致的小店，然后来上一杯咖啡，坐在露天街边悠闲的享受法兰西风情。</p>

  <p>&nbsp;&nbsp;&nbsp; &nbsp;☆世界历史遗产&mdash;&mdash;费尔蒙芳提娜城堡酒店</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 费尔蒙芳提娜城堡酒店是魁北克城的地标性建筑，也是世界上最豪华的酒店之一。丘吉尔和艾森豪威尔曾在这里会晤，罗斯福、伊丽莎白二世等名人也曾下榻</p>

  <p>此处。作为世界上影视作品中出镜次数最多的酒店，芳提娜城堡酒店是许多人梦中真正的城堡，同时也是古老、奢华、文化和历史的象征。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆Restaurant Initiale&mdash;&mdash;北美法餐代表</p>

  <p>好多喜欢法餐的人都说，如果没去魁北克尝尝那里的法餐，就不算懂法餐。400年的岁月使得魁北克的法餐在传承中交融了北美本土文化，发展出了独树一帜的风格。在魁北克，如果想要试试正式的9道式的法式大餐一定就是这里了。在这里，您可以享受到北美五钻级别（AAA/CAA Five Diamond rating）的顶级的食材、舒适的用餐环境、精湛的厨艺、对料理的热情。</p>

  <p>&nbsp;</p>

  <h4>第四天：加拿大最佳&ldquo;户外自然景点&rdquo;&mdash;&mdash;圣安妮峡谷</h4>

  <p>餐饮：早餐&mdash;&mdash;17世纪餐厅享用法式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;枫糖小屋&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;Aux Anciens Canadiens（魁北克城最古老的建筑之一）</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，前往圣安妮峡谷，感受加拿大最佳&ldquo;户外自然景点&rdquo;的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览奥尔良岛与蒙莫伦斯瀑布公园。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆圣安妮峡谷</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 圣安妮峡谷是圣安妮河流过、切割成窄狭的裂罅，由七十四公尺高的悬岩崩落，地形曲折复杂的河床上，造成好几节野性而深遂的小瀑而成的美景。这里的枫叶因生长在谷底、山腰和山巅不同地方，转红的时间不一致，使得整个山谷的红枫呈现出丰富绚烂的层次感。峡谷中有三座吊桥跨越于不同的角度，您可俯瞰峡谷奇景，欣赏加拿大秋季多种颜色的枫叶。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆枫糖小屋</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 枫糖小屋带您了解制造枫糖的过程，枫糖采集树龄超过50年的枫树汁提炼而成，由于一定要在零度以下采集，所以非常珍贵。在此除了享用传统的法式民族风味大餐，您还可品尝枫糖浆产品、魁北克传统美食。</p>

  <p>&nbsp;</p>

  <h4>第五天：浪漫之都&mdash;&mdash;蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，沿着风景如画的&ldquo;枫叶大道&rdquo;一路驰骋，前往除巴黎外世界最大的法语城市&mdash;&mdash;蒙特利尔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览加拿大的&ldquo;巴黎圣母院&rdquo;&mdash;&mdash;诺特丹圣母大教堂（Notre-Dame Basilica of Montreal）以及蒙特利尔老城区的风光。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆诺特丹圣母大教堂</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 诺特丹圣母大教堂是蒙特利尔最著名的景点之一，也是北美最为重要的天主教堂。所有参观过这座教堂的人，无不被其恢弘的哥特式教堂建筑，金碧辉煌的内部装饰以及精致绝伦的建筑雕刻所折服。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆费尔蒙伊丽莎白女王酒店</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 费尔蒙伊丽莎白女王酒店始建于1958年4月，是魁北克省首府蒙特利尔最大的酒店。在67届世博会期间，五十位访问的国家元首入住豪华套房。此外，在过去的几十年中，英国皇室皆在此下榻。</p>

  <p>&nbsp;</p>

  <h4>第六天：浪漫之都&mdash;&mdash;蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;法式大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，前往皇家山（Mount Royal）游览，参观圣约瑟夫大教堂（Saint Joseph&#39;s Oratory of Mount Royal）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蒙特利尔奥林匹克公园，参观世界上最高、最斜的斜塔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏蒙特利尔的美丽夜景。</p>

  <p>【行程摘要】</p>

  <p>☆圣约瑟夫大教堂</p>

  <p>&nbsp;圣约瑟夫大教堂是全北美最大的天主教堂，教堂体积之大，令人炫目，世界上只有梵蒂冈圣保罗大教堂的圆顶能与它媲美。传说如果患有不良于行的疾病，只要涂抹圣约瑟夫大教堂的灯油便会痊愈。因此，当你走进教堂，可以看到墙上挂着许多拐杖和义肢，这些都是因圣约瑟夫灯油而痊愈的病人所留下来的。</p>

  <p>☆蒙特利尔奥林匹克公园</p>

  <p>&nbsp;蒙特利尔奥林匹克公园是1976年夏季奥林匹克运动会的主场地。这座露天运动场以及倾斜的塔台已成为蒙特利尔的一个象征。天气好的时候，您可以搭乘观光电梯抵达塔台顶端，一览无遗的欣赏蒙特利尔市区风光和圣劳伦斯河的迷人风景。</p>

  <p>【景点】如遇天气变化，如雨天。则将皇家山行程更改为蒙特利尔地下城行程。</p>

  <p>&nbsp;</p>

  <h4>第七天：加国权力的中心&mdash;&mdash;渥太华</h4>

  <p>餐饮：早餐&mdash;&mdash;港式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式大餐</p>

  <p>酒店：渥太华Fairmont Ch&acirc;teau Laurier（费尔蒙劳里埃城堡酒店）</p>

  <p>行程：上午，乘车前往加拿大政治与文化中心&mdash;&mdash;渥太华。</p>

  <p>下午，参观加拿大国会山，见证加国权力的中心。随后参观拜沃德农贸市场，这座渥太华最古老、最热闹的公共市场见证着加拿大的独立与崛起。</p>

  <p>晚上，漫步丽都运河，欣赏美妙夜景。</p>

  <p>【行程摘要】</p>

  <p>☆国会山</p>

  <p>国会山坐落在渥太华河南岸，为加拿大国会建筑群所在。其中最为著名的是加拿大国会大厦，您几乎能在渥太华的每一个角落望见它。此外，燃烧在国会大厦广场上的不熄之火（Centenial Flame）在水上熊熊燃烧了50年。更值得体味的是其中的含义：水火交融，代表加拿大这个多种族的移民国家在多元文化之间的包容与和谐。</p>

  <p>☆费尔蒙劳里埃城堡酒店</p>

  <p>费尔蒙劳里埃城堡酒店毗邻丽都运河及议会大厦，是渥太华的百年地标建筑。这座老牌城堡酒店内的花雕石板与古董家具皆保留了一百多年前的风貌。闲暇之余，您可以在前台提供的iPad的指引下，在酒店的各个角落感受百年间在酒店发生的名人轶事。</p>

  <p>&nbsp;</p>

  <h4>第八天：加国旧都&mdash;&mdash;金士顿</h4>

  <p>餐饮：早餐&mdash;&mdash;健康又美味的英国传统早餐&nbsp;&nbsp; 午餐&mdash;&mdash; 千岛湖畔简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式大餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，渥太华参观完总督府后前往千岛湖（Thousand Island）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，乘坐游船游览加拿大&ldquo;三大自然景观&rdquo;之一的千岛湖。随后前往加拿大旧都&mdash;&mdash;金士顿参观。</p>

  <p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;傍晚，返回多伦多。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;☆千岛湖</p>

  <p>&nbsp; 千岛湖位于圣劳伦斯河和安大略湖交汇处，是加拿大&ldquo;三大自然景观&rdquo;之一，千余岛屿如繁星般散落在湖中，宛如仙境。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆金士顿</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 金士顿自古以来就是&ldquo;兵家必争之地&rdquo;，1841年成为加拿大首府所在地。而今，繁华虽已落尽，但是那斑驳的痕迹仍告诉世人它曾经的辉煌。</p>

  <p>&nbsp;</p>

  <h4>第九天：&ldquo;雷神之水&rdquo;响彻美加两岸&mdash;&mdash;尼亚加拉瀑布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;湖滨野餐&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布景牛排晚宴</p>

  <p>酒店：尼亚加拉Hilton Hotel and Suites Niagara Falls/Fallsview （尼亚加拉瀑布景观希尔顿集团酒店）</p>

  <p>行程：上午，前往美丽的童话小镇&mdash;&mdash;滨湖尼亚加拉，探索冰酒文化与加国历史。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往尼亚加拉瀑布，乘坐&ldquo;雾中少女&rdquo;号近距离观赏世界最大跨国瀑布的雄伟壮阔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜晚的瀑布灯光秀可不要错过哦。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆滨湖尼亚加拉</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 滨湖尼亚加拉是世界上七大童话小镇之一，小镇上依然保留着许多开拓时代的建筑，19世纪的人文风气和旧时代的小城风貌在这里也得到了很好的保护。此外，这里亦是葡萄最佳的生长地区（北纬43&rsquo;&rsquo;19&rsquo;15&rsquo;&rsquo;，西经79&rsquo;&rsquo; 4&rsquo; 8&rsquo;&rsquo;），得天独厚的地理条件，也让这里成为加拿大名副其实的酒乡，特别是冰酒，更是享誉全球。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆尼亚加拉瀑布</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 尼亚加拉瀑布，印第安语意为&ldquo;雷神之水&rdquo;。是世界上第一大跨国瀑布，被列为世界七大奇景之一。沿瀑布一路直到瀑布起落点，会愈加的被瀑布水势汹涌如千军万马的气势所折服。</p>

  <p>&nbsp;</p>

  <h4>第十天：德国小镇&mdash;&mdash;圣&middot;雅各布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Farmer Market&nbsp;&nbsp; 晚餐&mdash;&mdash;德国猪蹄大餐</p>

  <p>酒店：滑铁卢Homewood Suites by Hilton Waterloo/St. Jacobs（滑铁卢希尔顿集团酒店）</p>

  <p>行程：上午，沿着美丽的乡间大道前往圣&middot;雅各布。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览美丽的德国小镇，感受中世纪的风情。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆圣&middot;雅各布</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 圣&middot;雅各布是滑铁卢地区一座德国特色小镇，小镇至今依然留存着中世纪的习俗和风情。镇中的Farmers Marker仍然如同数百年前一般，每到赶集日，大量新鲜美味的健康蔬果，特色小吃应有尽有。此外，小镇中的德裔原住民，时常会骑着马、坐着马车，穿着中世纪欧式风格的衣裳来采购食材与日常用品。</p>

  <p>☆海登堡饭店</p>

  <p>&nbsp;有着一百多年历史的海登堡饭店在加拿大华人圈子里极有口碑，他家的德国&ldquo;咸猪手&rdquo;烟熏猪蹄（Smoked Pork Hock）和自酿的新鲜黑啤（Heidelberg old Bavarian beer）都是来到这里必点的美食。</p>

  <p>&nbsp;</p>

  <h4>第十一天：莎士比亚小镇&mdash;&mdash;斯特拉特福</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp; 晚餐&mdash;&mdash;中式晚餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，前往加拿大著名的智慧城市&mdash;&mdash;斯特拉福特，游览城市古建筑群与古朴城区。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览Lake Victoria湖畔，随后返回多伦多，开启蜜月湖之旅。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆斯特拉特福</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 斯特拉特福是加拿大著名的智慧城市和戏剧之乡，素有莎士比亚小镇之美名。镇内有许多智能化设施、大面积的绿色公园，以及四个各具特色的专业剧院，与中世纪欧洲风格的小镇相交融，完美的将现代化都市、传统的艺术气息和古朴的欧式风情融为一体。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1997年斯特拉特福被评为世界上最美丽的城市 &ldquo;Prettiest City in the World&rdquo;。</p>

  <p>&nbsp;</p>

  <h4>第十二天：皇室园林&mdash;&mdash;蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;湖畔餐厅&nbsp;&nbsp;&nbsp; 下午茶&mdash;&mdash;英式下午茶&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：上午，取道美丽的小镇巴里，欣赏锡姆科湖畔动人的风景，并在湖畔餐厅享用午餐，餐后游览巴里主街。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，沿着11号公路一路向北，沿路遍是动人湖景。抵达蜜月湖畔小镇格雷文赫斯特后，在镇中享用纯正的英式下午茶。湖光美景与英式下午茶在蜜月湖畔交汇，或好友相谈，或好书相伴，惬意的午后总是来得那么的不经意。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆蜜月湖</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 蜜月湖地区的自然资源和人文景观十分丰富，由173，000公顷原皇室林地及逾340平方公里的湖泊组成，其中穿插了大小河流1000余条。曾被国家地理杂志评选为&ldquo;世界20大必去之地&rdquo;之一以及&ldquo;夏天10大最佳旅途&rdquo;第一顺位。秋季，这里层林尽染、绚丽多姿。平静的湖面上散布着一个个精美的湖间小岛，岛上密布着色彩斑斓的枫树林。时而，湖面上飞翔的小鸟，穿行于小岛之间；时而，人们的休闲快艇风驰电掣般的划过平静的湖面，留下一道粼粼水痕，使得蜜月湖的风光就像是一曲美妙的交响乐。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆蜜月湖畔豪华湖景别墅</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 别墅坐落于蜜月湖畔，面湖背山。告别繁华都市的喧嚣，不受凡尘琐事的约束。别墅室内外娱乐设施齐备，既可以举办烧烤派对，也可以享受乘船垂钓的乐趣。花鸟虫鱼，树木山湖；一张躺椅，一本好书。&nbsp;&nbsp;&nbsp;</p>

  <p>&nbsp;</p>

  <h4>第十三天：畅游蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;游船上享用迦途私家秘制午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观国际主义战士白求恩大夫故居。随后乘坐皇家邮船RMS Segwun号蒸汽船畅游秀美蜜月湖。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蔓越橘之都&mdash;&mdash;巴拉。这儿由Cranberry酿造的红酒也是小镇的一大特色，配上随处可见的Muskoka美景，实在是一大美事。随后前往湖畔小镇布雷斯布里奇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 晚上，沿湖漫步，美景为伴；曼妙月光，惬意夜晚。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆白求恩故居</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 二战期间，白求恩作为国际主义战士为反法西斯战场做出了不可磨灭的贡献。无论在多么艰难的状况下，白求恩总是坚持着自己的理想与信念。他在顽强抵抗病痛的同时，依然在反法西斯战场的最前线无私奉献着，拯救了无数的生命。而白求恩故居，就是为了颂扬他这样的精神而被保留了下来。白求恩故居是一座典型的英式建筑，房子和内部格局和摆设均保留了白求恩居住时的状况。纪念馆陈列着白求恩生活的实物和照片。</p>

  <p>☆皇家邮船RMS Segwun号蒸汽船</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RMS Segwun 号蒸汽船建造于1887年，也是北美最古老的蒸汽船。并且目前世界上只有4艘背负着皇家邮船（Royal Mail Ship）名号的轮船在运行着。就是这样一艘富有传奇色彩的船，将带领着我们穿越蜜月湖沿岸，一览那如同世外桃源般的美景，感受她作为皇家园林的骄傲。</p>

  <p>&nbsp;</p>

  <h4>第十四天：G8辉煌&mdash;&mdash;亨茨维尔</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;百年老店品珍馐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观G8峰会会场&mdash;&mdash;迪赫特度假酒店，能作为G8会场定有它的独特之处。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览承载G8辉煌的百年小镇&mdash;&mdash;亨茨维尔，欣赏小镇让各国首脑都为之动容的生态美景。</p>

  <p>【行程摘要】</p>

  <p>☆迪赫特度假村</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; Deerhurst Resort始于1896年的一个私人小屋。经过家族三代的苦心经营，到20世纪90年代，度假村已由最初的18个房间的乡间驿站，发展为可同时容纳1000个宾客的现代化度假胜地。被选为G8会址，除去优美的风景和长久的历史外，还因为度假村除了主楼外，周围还有大大小小的裙楼。不仅解决了各国领导房间差别的问题，也顺利解决了领导人自身安保的问题。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆亨茨维尔</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 亨茨维尔是蜜月湖地区最大的一个镇。同时也是2010年G8峰会的举办地（第36届）。在世界经济衰退，提倡环保的大环境下，亨茨维尔有着让各国首脑都为之动容的生态美景，成为了&ldquo;峰会&rdquo;的不二之选。</p>

  <p>&nbsp;</p>

  <h4>第十五天：休闲活动</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;迦途特制简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：全天自由休闲活动，可开船至湖心垂钓或欣赏湖景，亦可去高尔夫球场挥杆一番。晚餐由迦途的私家主厨为您精心烹饪。</p>

  <p>&nbsp;</p>

  <h4>第十六天：赏枫圣地&mdash;&mdash;阿岗昆</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;公园内野餐&nbsp; 晚餐&mdash;&mdash;湖畔餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，沿着枫叶大道前往赏枫圣地&mdash;&mdash;阿尔岗昆公园，见证枫叶之国的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，阿岗昆之大超出您的想象，但我们会带您欣赏到其最美之处。</p>

  <p>【行程摘要】&nbsp;&nbsp;</p>

  <p>☆阿岗昆公园</p>

  <p>&nbsp;阿岗昆公园是安省最大最古老的公园，同时也是全世界最佳的赏枫地点之一。公园内仅森林的占地面积就超过了整个上海市的大小，近千个湖泊和浮翠流丹的树林辅以清新的空气、和煦的阳光，使您走进公园后的每一次呼吸都能感受到一股涓流涤去了身心的积尘。此外，无数野生动物与珍稀植物繁衍于此；人类，野生动物在这里与自然同生共荣，构成一幅奇特的大自然生态图。</p>

  <p>&nbsp;</p>

  <h4>第十七天：休闲活动</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;迦途特制简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：全天自由休闲活动，可前往参观蜜月湖畔的啤酒厂，亦可驾车游览蜜月湖地区的美景。晚餐由迦途的私家主厨为您精心烹饪。饭后回到多伦多，准备开启明天的多伦多市中心之旅吧！</p>

  <p>&nbsp;</p>

  <h4>第十八天：畅游多伦多市中心</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;上海小吃&nbsp;&nbsp; 晚餐&mdash;&mdash;唐人街海鲜大餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，前往安大略皇家博物馆（Royal Ontario Museum）参观，旧馆古典、精美的外墙雕刻与新馆水晶宫般的未来造型相得益彰。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观古典的多伦多市政厅与法院建筑群。随后前往唐人街游览。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆安大略皇家博物馆</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;安大略皇家博物馆是加拿大最大的博物馆。 建立于1912年的皇家安大略博物馆，本是一座非常古典的建筑，外墙有着美丽精致的雕刻。如今新馆落成于2007年7月，它是由德国设计师Daniel Libeskind着手设计的，是典型的现代建筑。如今，古典与现代两种完全不同的建筑风格结合在了一起，更显得博物馆和谐、完美。</p>

  <p>博物馆内40个展馆共计藏品超过六百万件。同时安大略皇家博物馆是海外国家中中国藏品最多的博物馆。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 【景点】下午行程也可以变更为参观Dundas、Bloor街区。</p>

  <p>&nbsp;</p>

  <h4>第十九天：加西明珠&mdash;&mdash;温哥华</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间12:10 &rarr;温哥华（温哥华国际机场）加西时间14:00</p>

  <p>&nbsp;<img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：4小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;特色料理</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，前往多伦多皮尔逊国际机场乘坐加航航班前往加西明珠&mdash;&mdash;温哥华。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观史丹利公园与狮门大桥，途中有许多精美小吃品尝。随后前往参观温哥华开埠时最早开发的社区&mdash;&mdash;煤气镇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏温哥华动人夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆史丹利公园</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 史丹利公园，加拿大最大的城市公园。是连接温哥华市中心的半岛，森林覆盖，三面环海，面积上千公顷。约9公里长的环岛便道远眺欣赏市区高楼大厦、海湾和积雪的山峦，大自然和繁华城市毗邻呼应。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆狮门大桥</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 狮门桥，1925年建成的悬索吊桥，横跨布勒内湾的第一海峡，全长1517.3米。开车过桥的时候可要做好心理准备哦，大桥可是会晃的哟。</p>

  <p>&nbsp;</p>

  <h4>第二十天：畅游大不列颠哥伦比亚省省会&mdash;&mdash;维多利亚</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Blue Poppy Restaurant&nbsp; 晚餐&mdash;&mdash;意大利大餐</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，乘坐渡轮前往温哥华岛，维多利亚市位于温哥华岛的东南侧。游览加拿大国际历史古迹&mdash;&mdash;布查特花园。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观加拿大最早的唐人街和大不列颠哥伦比亚省议会大厦。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，乘坐渡轮返回温哥华，沿途欣赏两岸夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布查特花园</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 布查德花园是加拿大国家历史古迹，花园中培养了超过百万花坛植物，共有700多种不同品种，以确保在每年三月到十月间不间断盛开，是世界上最美丽的花园之一。秋季是海棠和大丽花盛开的时候，也是周边的多年生花木绽放的季节。秋色在十月最为浓郁，此时的日本园中遍布红褐色和金黄色，和玫瑰园中约二百五十种玫瑰争奇斗艳。两个风格迥异的花园，为游客带来了缤纷的色彩、精致的造型和诱人的花香。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆大不列颠哥伦比亚省议会大厦</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大不列颠哥伦比亚省议会大厦面对着港口，是一座维多利亚式的建筑。园内耸立著维多利亚女王的铜像，中央圆顶部分是乔治&middot;温哥华的铜像。夜晚的议会大厦则有另一种风情，超过3千个灯泡装饰着大厦的周围，是维多利亚港湾区著名的夜景。</p>

  <p>&nbsp;</p>

  <h4>第二十一天：暂别加国，返程</h4>

  <p>航班：温哥华（温哥华国际机场）加西时间13:25 &rarr;上海（浦东国际机场）北京时间16:20 （+1）</p>

  <p>&nbsp;<img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：11小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;飞机晚餐</p>

  <p>&nbsp;</p>

  <h4>第二十二天：温暖的家</h4>

  <p>北京时间16:20抵达上海浦东国际机场</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>
</div>
                                <div class="tab-pane fade" id="tab3primary" style="background-color: #fff;">
                                  <h4>第一天：造访枫叶之国&mdash;&mdash;加拿大</h4>

  <p>航班：上海（浦东国际机场）北京时间17:10 &rarr; 多伦多（皮尔逊国际机场）加东时间19:00</p>

  <p><img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC&nbsp;028经济舱&nbsp;&nbsp;&nbsp;飞行时长：13小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;飞机早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;迦途特制点心</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：今日，搭乘加拿大航空公司的国际航班，前往枫叶之国&mdash;&mdash;加拿大。抵达后，入住多伦多市中心地标性建筑费尔蒙皇家约克酒店。</p>

  <p>【行程摘要】</p>

  <p>☆英联邦国家永恒的骄傲&mdash;&mdash;费尔蒙皇家约克酒店</p>

  <p>1929年皇家约克酒店正式开业，是当时所有英联邦国家中最大最豪华的酒店，也是当时所有英联邦国家中最高的建筑。迄今为止，皇家约克酒店总计接待客人超过4千万，英国皇室家族的三代曾在皇家套房酒店里住过。这里不仅是多伦多最顶级的酒店之一，更是加拿大繁荣发展的见证者。</p>

  <p>&nbsp;</p>

  <h4>第二天：伴随历史的脚步，探索多伦多市中心的风景</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;CN Tower塔顶360&deg;旋转餐厅</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：上午，前往加拿大最早的古堡&mdash;&mdash;卡萨罗马（Casa Loma）,探索20世纪初多伦多最大私人宅邸的典雅与壮丽，感受亨利柏拉特男爵与夫人的旷世之恋。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，轮渡前往多伦多湖心岛（Centre Island），城市天际线尽收眼底。</p>

  <p>【行程摘要】</p>

  <p>☆CN Tower&mdash;&mdash;多伦多城市天际线的标杆</p>

  <p>全世界最高的通讯塔多伦多CN Tower建成于1976年，塔高553米，是加拿大的著名象征，也是多伦多城市风景线的重要标志。360&deg;旋转餐厅坐落于塔顶，在享受美食的同时，远眺落日余晖，俯瞰华灯初上。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆卡萨罗玛&mdash;&mdash;加拿大最早的古堡</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1911年，金融家亨利柏特拉男爵（Sir Henry Pallet）为了让腿脚不便的妻子可以在加拿大也看到传统的欧式城堡而修建这座城堡。古堡内有98间装饰华丽的房间，神秘的塔楼，长达270米的幽深隧道，规模庞大的马厩，还有隐蔽的暗道，典雅的温室花房，和一个面积达五英亩，依山而建的美丽花园，处处彰显着当时的建筑艺术和男爵对妻子深沉的爱意。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆CN Tower Dinner&mdash;&mdash;电视塔顶层360&deg;旋转餐厅</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 全球最高的旋转餐厅，在享用美食的同时，还能俯瞰多伦多和安大略湖。如果是傍晚上塔，那是最好的选择，既可以看到落日余晖，也可以看到华灯初上的城市夜景。这里有个世界纪录&mdash;&mdash;「全球最高酒窖」美誉的空中酒窖。它的藏酒量达9,000支(另有25,000支收藏在地库)，包罗全球550个品牌的美酒，爱酒的朋友一定不能错过。</p>

  <p>&nbsp;</p>

  <h4>第三天：探索世界遗产名城&mdash;&mdash;魁北克城</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间11:30 &rarr;魁北克（让&middot;勒萨热国际机场）加东时间13:15</p>

  <p><img alt="IMG_256" src="/images/jiatu/westjet.png" style="height:11px; width:31px" />西捷航空3458航班经济舱 飞行时长1小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;机场午餐&nbsp; 晚餐&mdash;&mdash;Restaurant Initiale享用法式大餐</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，搭乘西捷航空航班前往世界遗产名城&mdash;&mdash;魁北克城。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览魁北克城的老城区，静静感受400年来这个城市的点滴故事</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜游魁北克，欣赏圣劳伦斯河夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆邂逅中世纪浪漫&mdash;&mdash;小香普兰街<br />
  小香普兰街是北美最古老繁华的街区。古趣盎然的古老街景，仿若看见了四百年多前的繁华，无论是精美的橱窗、别致的招牌、美丽的窗台，都足以让人驻足</p>

  <p>半天，充分展现中世纪的欧洲街景。在这里最适合逛逛街道两旁各种装潢设计别致的小店，然后来上一杯咖啡，坐在露天街边悠闲的享受法兰西风情。</p>

  <p>&nbsp;&nbsp;&nbsp; &nbsp;☆世界历史遗产&mdash;&mdash;费尔蒙芳提娜城堡酒店</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 费尔蒙芳提娜城堡酒店是魁北克城的地标性建筑，也是世界上最豪华的酒店之一。丘吉尔和艾森豪威尔曾在这里会晤，罗斯福、伊丽莎白二世等名人也曾下榻</p>

  <p>此处。作为世界上影视作品中出镜次数最多的酒店，芳提娜城堡酒店是许多人梦中真正的城堡，同时也是古老、奢华、文化和历史的象征。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆Restaurant Initiale&mdash;&mdash;北美法餐代表</p>

  <p>好多喜欢法餐的人都说，如果没去魁北克尝尝那里的法餐，就不算懂法餐。400年的岁月使得魁北克的法餐在传承中交融了北美本土文化，发展出了独树一帜的风格。在魁北克，如果想要试试正式的9道式的法式大餐一定就是这里了。在这里，您可以享受到北美五钻级别（AAA/CAA Five Diamond rating）的顶级的食材、舒适的用餐环境、精湛的厨艺、对料理的热情。</p>

  <p>&nbsp;</p>

  <h4>第四天：加拿大最佳&ldquo;户外自然景点&rdquo;&mdash;&mdash;圣安妮峡谷</h4>

  <p>餐饮：早餐&mdash;&mdash;17世纪餐厅享用法式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;枫糖小屋&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;Aux Anciens Canadiens（魁北克城最古老的建筑之一）</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，前往圣安妮峡谷，感受加拿大最佳&ldquo;户外自然景点&rdquo;的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览奥尔良岛与蒙莫伦斯瀑布公园。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆圣安妮峡谷</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 圣安妮峡谷是圣安妮河流过、切割成窄狭的裂罅，由七十四公尺高的悬岩崩落，地形曲折复杂的河床上，造成好几节野性而深遂的小瀑而成的美景。这里的枫叶因生长在谷底、山腰和山巅不同地方，转红的时间不一致，使得整个山谷的红枫呈现出丰富绚烂的层次感。峡谷中有三座吊桥跨越于不同的角度，您可俯瞰峡谷奇景，欣赏加拿大秋季多种颜色的枫叶。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆枫糖小屋</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 枫糖小屋带您了解制造枫糖的过程，枫糖采集树龄超过50年的枫树汁提炼而成，由于一定要在零度以下采集，所以非常珍贵。在此除了享用传统的法式民族风味大餐，您还可品尝枫糖浆产品、魁北克传统美食。</p>

  <p>&nbsp;</p>

  <h4>第五天：浪漫之都&mdash;&mdash;蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，沿着风景如画的&ldquo;枫叶大道&rdquo;一路驰骋，前往除巴黎外世界最大的法语城市&mdash;&mdash;蒙特利尔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览加拿大的&ldquo;巴黎圣母院&rdquo;&mdash;&mdash;诺特丹圣母大教堂（Notre-Dame Basilica of Montreal）以及蒙特利尔老城区的风光。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆诺特丹圣母大教堂</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 诺特丹圣母大教堂是蒙特利尔最著名的景点之一，也是北美最为重要的天主教堂。所有参观过这座教堂的人，无不被其恢弘的哥特式教堂建筑，金碧辉煌的内部装饰以及精致绝伦的建筑雕刻所折服。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆费尔蒙伊丽莎白女王酒店</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 费尔蒙伊丽莎白女王酒店始建于1958年4月，是魁北克省首府蒙特利尔最大的酒店。在67届世博会期间，五十位访问的国家元首入住豪华套房。此外，在过去的几十年中，英国皇室皆在此下榻。</p>

  <p>&nbsp;</p>

  <h4>第六天：浪漫之都&mdash;&mdash; 蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;法式大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，前往皇家山（Mount Royal）游览，参观圣约瑟夫大教堂（Saint Joseph&#39;s Oratory of Mount Royal）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蒙特利尔奥林匹克公园，参观世界上最高、最斜的斜塔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏蒙特利尔的美丽夜景。</p>

  <p>【行程摘要】</p>

  <p>☆圣约瑟夫大教堂</p>

  <p>圣约瑟夫大教堂是全北美最大的天主教堂，教堂体积之大，令人炫目，世界上只有梵蒂冈圣保罗大教堂的圆顶能与它媲美。传说如果患有不良于行的疾病，只要涂抹圣约瑟夫大教堂的灯油便会痊愈。因此，当你走进教堂，可以看到墙上挂着许多拐杖和义肢，这些都是因圣约瑟夫灯油而痊愈的病人所留下来的。</p>

  <p>☆蒙特利尔奥林匹克公园</p>

  <p>&nbsp;蒙特利尔奥林匹克公园是1976年夏季奥林匹克运动会的主场地。这座露天运动场以及倾斜的塔台已成为蒙特利尔的一个象征。天气好的时候，您可以搭乘观光电梯抵达塔台顶端，一览无遗的欣赏蒙特利尔市区风光和圣劳伦斯河的迷人风景。</p>

  <p>【景点】如遇天气变化，如雨天。则将皇家山行程更改为蒙特利尔地下城行程。</p>

  <p>&nbsp;</p>

  <h4>第七天：加国权力的中心&mdash;&mdash;渥太华</h4>

  <p>餐饮：早餐&mdash;&mdash;港式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式大餐</p>

  <p>酒店：渥太华Fairmont Ch&acirc;teau Laurier（费尔蒙劳里埃城堡酒店）</p>

  <p>行程：上午，乘车前往加拿大政治与文化中心&mdash;&mdash;渥太华。</p>

  <p>下午，参观加拿大国会山，见证加国权力的中心。随后参观拜沃德农贸市场，这座渥太华最古老、最热闹的公共市场见证着加拿大的独立与崛起。</p>

  <p>晚上，漫步丽都运河，欣赏美妙夜景。</p>

  <p>【行程摘要】</p>

  <p>☆国会山</p>

  <p>国会山坐落在渥太华河南岸，为加拿大国会建筑群所在。其中最为著名的是加拿大国会大厦，您几乎能在渥太华的每一个角落望见它。此外，燃烧在国会大厦广场上的不熄之火（Centenial Flame）在水上熊熊燃烧了50年。更值得体味的是其中的含义：水火交融，代表加拿大这个多种族的移民国家在多元文化之间的包容与和谐。</p>

  <p>☆费尔蒙劳里埃城堡酒店</p>

  <p>费尔蒙劳里埃城堡酒店毗邻丽都运河及议会大厦，是渥太华的百年地标建筑。这座老牌城堡酒店内的花雕石板与古董家具皆保留了一百多年前的风貌。闲暇之余，您可以在前台提供的iPad的指引下，在酒店的各个角落感受百年间在酒店发生的名人轶事。</p>

  <p>&nbsp;</p>

  <h4>第八天：加国旧都&mdash;&mdash;金士顿</h4>

  <p>餐饮：早餐&mdash;&mdash;健康又美味的英国传统早餐&nbsp;&nbsp; 午餐&mdash;&mdash;千岛湖畔简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式大餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，渥太华参观完总督府后前往千岛湖（Thousand Island）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，乘坐游船游览加拿大&ldquo;三大自然景观&rdquo;之一的千岛湖。随后前往加拿大旧都&mdash;&mdash;金士顿参观。</p>

  <p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;傍晚，返回多伦多。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;☆千岛湖</p>

  <p>&nbsp;千岛湖位于圣劳伦斯河和安大略湖交汇处，是加拿大&ldquo;三大自然景观&rdquo;之一，千余岛屿如繁星般散落在湖中，宛如仙境。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆金士顿</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 金士顿自古以来就是&ldquo;兵家必争之地&rdquo;，1841年成为加拿大首府所在地。而今，繁华虽已落尽，但是那斑驳的痕迹仍告诉世人它曾经的辉煌。</p>

  <p>&nbsp;</p>

  <h4>第九天：&ldquo;雷神之水&rdquo;响彻美加两岸&mdash;&mdash;尼亚加拉瀑布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;湖滨野餐&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布景牛排晚宴</p>

  <p>酒店：尼亚加拉Hilton Hotel and Suites Niagara Falls/Fallsview （尼亚加拉瀑布景观希尔顿集团酒店）</p>

  <p>行程：上午，前往美丽的童话小镇&mdash;&mdash;滨湖尼亚加拉，探索冰酒文化与加国历史。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往尼亚加拉瀑布，乘坐&ldquo;雾中少女&rdquo;号近距离观赏世界最大跨国瀑布的雄伟壮阔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜晚的瀑布灯光秀可不要错过哦。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆滨湖尼亚加拉</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 滨湖尼亚加拉是世界上七大童话小镇之一，小镇上依然保留着许多开拓时代的建筑，19世纪的人文风气和旧时代的小城风貌在这里也得到了很好的保护。此外，这里亦是葡萄最佳的生长地区（北纬43&rsquo;&rsquo;19&rsquo;15&rsquo;&rsquo;，西经79&rsquo;&rsquo; 4&rsquo; 8&rsquo;&rsquo;），得天独厚的地理条件，也让这里成为加拿大名副其实的酒乡，特别是冰酒，更是享誉全球。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆尼亚加拉瀑布</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 尼亚加拉瀑布，印第安语意为&ldquo;雷神之水&rdquo;。是世界上第一大跨国瀑布，被列为世界七大奇景之一。沿瀑布一路直到瀑布起落点，会愈加的被瀑布水势汹涌如千军万马的气势所折服。</p>

  <p>&nbsp;</p>

  <h4>第十天：德国小镇&mdash;&mdash;圣&middot;雅各布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Farmer Market&nbsp;&nbsp; 晚餐&mdash;&mdash;德国猪蹄大餐</p>

  <p>酒店：滑铁卢Homewood Suites by Hilton Waterloo/St. Jacobs（滑铁卢希尔顿集团酒店）</p>

  <p>行程：上午，沿着美丽的乡间大道前往圣&middot;雅各布。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览美丽的德国小镇，感受中世纪的风情。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆圣&middot;雅各布</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 圣&middot;雅各布是滑铁卢地区一座德国特色小镇，小镇至今依然留存着中世纪的习俗和风情。镇中的Farmers Marker仍然如同数百年前一般，每到赶集日，大量新鲜美味的健康蔬果，特色小吃应有尽有。此外，小镇中的德裔原住民，时常会骑着马、坐着马车，穿着中世纪欧式风格的衣裳来采购食材与日常用品。</p>

  <p>☆海登堡饭店</p>

  <p>有着一百多年历史的海登堡饭店在加拿大华人圈子里极有口碑，他家的德国&ldquo;咸猪手&rdquo;烟熏猪蹄（Smoked Pork Hock）和自酿的新鲜黑啤（Heidelberg old Bavarian beer）都是来到这里必点的美食。</p>

  <p>&nbsp;</p>

  <h4>第十一天：莎士比亚小镇&mdash;&mdash;斯特拉特福</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp; 晚餐&mdash;&mdash;中式晚餐</p>

  <p>酒店：滑铁卢Homewood Suites by Hilton Waterloo/St. Jacobs（滑铁卢希尔顿集团酒店）</p>

  <p>行程：上午，前往加拿大著名的智慧城市&mdash;&mdash;斯特拉福特，游览城市古建筑群与古朴城区。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览Lake Victoria湖畔，随后前往Stratford Festival戏剧院欣赏莎士比亚戏剧。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆斯特拉特福</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 斯特拉特福是加拿大著名的智慧城市和戏剧之乡，素有莎士比亚小镇之美名。镇内有许多智能化设施、大面积的绿色公园，以及四个各具特色的专业剧院，与中世纪欧洲风格的小镇相交融，完美的将现代化都市、传统的艺术气息和古朴的欧式风情融为一体。1997年斯特拉特福被评为世界上最美丽的城市 &ldquo;Prettiest City in the World&rdquo;。</p>

  <p>&nbsp;</p>

  <h4>第十二天：艺术小镇&mdash;&mdash;挨洛拉</h4>

  <p>餐饮：早餐&mdash;&mdash;Jack&#39;s Family Restaurant&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式轻奢晚宴</p>

  <p>酒店：汉密尔顿Homewood Suites by Hilton（汉密尔顿希尔顿集团酒店）</p>

  <p>行程：上午，欣赏加国动人风景的同时，前往艺术小镇&mdash;&mdash;挨洛拉，美丽的小镇搭配具有历史气息的石灰岩建筑，碧波蓝天与古旧建筑形成鲜明对比。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览挨洛拉主街与艺术长廊，欣赏各类画廊与展示，我想，您一定会找到令您心动的作品。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 傍晚，驱车前往钢铁之城&mdash;&mdash;汉密尔顿</p>

  <p>【行程摘要】</p>

  <p>☆挨洛拉</p>

  <p>古旧的石灰岩建筑与青山碧水的自然风光形成的反差美使挨洛拉闻名于世。百年古韵的主街上人来人往，推门进入每一个小店都能感知到这百年古建筑所带来的魅力。此外，因其秀美山水与石灰岩建筑，挨洛拉也是摄影的绝佳地。</p>

  <p>☆安卡斯特餐厅</p>

  <p>餐厅由一个有着两百余年历史的老磨坊改建而成，坐在饭店里，还可以看到一个小小的瀑布从旁川流而过。这里有着自己的农场，为客人提供各种时令有机蔬果。健康美味的欧式菜肴加上有礼又不失热情的服务，享受小镇的轻奢晚餐。</p>

  <p>&nbsp;</p>

  <h4>第十三天：钢铁之城&mdash;&mdash;汉密尔顿</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Tim Hortons 一号店（加拿大最著名的咖啡馆）&nbsp; 晚餐&mdash;&mdash;Burlington Mandarin Restaurant（加拿大最大最红火的中式自助餐）</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，游览加拿大战机博物馆与世界顶级大学&mdash;&mdash;麦克马斯特大学。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，湖畔游览意大利风格古堡&mdash;&mdash;当顿古堡（Dundurn Castle）。随后前往参观皇家植物园，秋季可是玫瑰花盛开的季节，如此美景可不要错过哟。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 傍晚，返回多伦多</p>

  <p>【行程摘要】</p>

  <p>☆加拿大战机博物馆</p>

  <p>&nbsp; 加拿大战机博物馆收集、记录以及保存了自二战以来在加拿大空军服役的各种战机。是一个寓教于乐、军事迷的好去处。该馆使用各种多媒体手段以及模型展示的方法向大家介绍各种战机，其中大多是二战的战机。有趣的是，馆内有一架中国南昌飞机制造公司产的初教-6教练机，是剑南春集团赞助的。此外，全球只有两架还可以飞行的战机&ldquo;兰开斯特&rdquo;，这其中一架就在该博物馆，另外一架在英国。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆邓登古堡</p>

  <p>邓登古堡，一座具有意大利风格的城堡式建筑，意为&ldquo;强大的城堡&rdquo;，修建于1835年，是艾伦&middot;纳皮尔&middot;麦克纳布（Allan Napier MacNab）爵士的家。城堡的主人艾伦&middot;纳皮尔&middot;麦克纳布是在加拿大成为联邦国家之前历史上的一位重要人物，1854---1856年间成为加拿大立法议会的主席。目前城堡里的所有陈设基本上恢复到了最鼎盛时期的状态。其中超过四十个已经装饰完毕的房间向游人开放，从而让每一位到访者都能体验到当年一个维多利亚式家庭的生活。</p>

  <p>&nbsp;</p>

  <h4>第十四天：皇室园林&mdash;&mdash;蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;湖畔餐厅&nbsp;&nbsp;&nbsp; 下午茶&mdash;&mdash;英式下午茶&nbsp;&nbsp; 晚餐&mdash;&mdash;&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：上午，取道美丽的小镇巴里，欣赏锡姆科湖畔动人的风景，并在湖畔餐厅享用午餐，餐后游览巴里主街。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，沿着11号公路一路向北，沿路遍是动人湖景。抵达蜜月湖畔小镇格雷文赫斯特后，在镇中享用纯正的英式下午茶。湖光美景与英式下午茶在蜜月湖畔交汇，或好友相谈，或好书相伴，惬意的午后总是来得那么的不经意。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆蜜月湖</p>

  <p>蜜月湖地区的自然资源和人文景观十分丰富，由173，000公顷原皇室林地及逾340平方公里的湖泊组成，其中穿插了大小河流1000余条。曾被国家地理杂志评选为&ldquo;世界20大必去之地&rdquo;之一以及&ldquo;夏天10大最佳旅途&rdquo;第一顺位。秋季，这里层林尽染、绚丽多姿。平静的湖面上散布着一个个精美的湖间小岛，岛上密布着色彩斑斓的枫树林。时而，湖面上飞翔的小鸟，穿行于小岛之间；时而，人们的休闲快艇风驰电掣般的划过平静的湖面，留下一道粼粼水痕，使得蜜月湖的风光就像是一曲美妙的交响乐。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆蜜月湖畔豪华湖景别墅</p>

  <p>别墅坐落于蜜月湖畔，面湖背山。告别繁华都市的喧嚣，不受凡尘琐事的约束。别墅室内外娱乐设施齐备，既可以举办烧烤派对，也可以享受乘船垂钓的乐趣。花鸟虫鱼，树木山湖；一张躺椅，一本好书。&nbsp;&nbsp;&nbsp;</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

  <h4>第十五天：畅游蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;游船上享用迦途私家秘制午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观国际主义战士白求恩大夫故居。随后乘坐皇家邮船RMS Segwun号蒸汽船畅游秀美蜜月湖。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蔓越橘之都&mdash;&mdash;巴拉。这儿由Cranberry酿造的红酒也是小镇的一大特色，配上随处可见的Muskoka美景，实在是一大美事。随后前往湖畔小镇布雷斯布里奇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;晚上，沿湖漫步，美景为伴；曼妙月光，惬意夜晚。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆白求恩故居</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 二战期间，白求恩作为国际主义战士为反法西斯战场做出了不可磨灭的贡献。无论在多么艰难的状况下，白求恩总是坚持着自己的理想与信念。他在顽强抵抗病痛的同时，依然在反法西斯战场的最前线无私奉献着，拯救了无数的生命。而白求恩故居，就是为了颂扬他这样的精神而被保留了下来。白求恩故居是一座典型的英式建筑，房子和内部格局和摆设均保留了白求恩居住时的状况。纪念馆陈列着白求恩生活的实物和照片。</p>

  <p>☆皇家邮船RMS Segwun号蒸汽船</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RMS Segwun 号蒸汽船建造于1887年，也是北美最古老的蒸汽船。并且目前世界上只有4艘背负着皇家邮船（Royal Mail Ship）名号的轮船在运行着。就是这样一艘富有传奇色彩的船，将带领着我们穿越蜜月湖沿岸，一览那如同世外桃源般的美景，感受她作为皇家园林的骄傲。</p>

  <p>&nbsp;</p>

  <h4>第十六天：G8辉煌&mdash;&mdash;亨茨维尔</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;百年老店品珍馐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观G8峰会会场&mdash;&mdash;迪赫特度假酒店，能作为G8会场定有它的独特之处。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览承载G8辉煌的百年小镇&mdash;&mdash;亨茨维尔，欣赏小镇让各国首脑都为之动容的生态美景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆迪赫特度假村</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Deerhurst Resort始于1896年的一个私人小屋。经过家族三代的苦心经营，到20世纪90年代，度假村已由最初的18个房间的乡间驿站，发展为可同时容纳1000个宾客的现代化度假胜地。被选为G8会址，除去优美的风景和长久的历史外，还因为度假村除了主楼外，周围还有大大小小的裙楼。不仅解决了各国领导房间差别的问题，也顺利解决了领导人自身安保的问题。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆亨茨维尔</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 亨茨维尔是蜜月湖地区最大的一个镇。同时也是2010年G8峰会的举办地（第36届）。在世界经济衰退，提倡环保的大环境下，亨茨维尔有着让各国首脑都为之动容的生态美景，成为了&ldquo;峰会&rdquo;的不二之选。</p>

  <p>&nbsp;</p>

  <h4>第十七天：休闲活动</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;迦途特制简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：全天自由休闲活动，可开船至湖心垂钓或欣赏湖景，亦可去高尔夫球场挥杆一番。晚餐由迦途的私家主厨为您精心烹饪。</p>

  <p>&nbsp;</p>

  <h4>第十八天：赏枫圣地&mdash;&mdash;阿岗昆</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;公园内野餐&nbsp; 晚餐&mdash;&mdash;湖畔餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，沿着枫叶大道前往赏枫圣地&mdash;&mdash;阿尔岗昆公园，见证枫叶之国的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，阿岗昆之大超出您的想象，但我们会带您欣赏到其最美之处。</p>

  <p>【行程摘要】&nbsp;&nbsp;</p>

  <p>☆阿岗昆公园</p>

  <p>阿岗昆公园是安省最大最古老的公园，同时也是全世界最佳的赏枫地点之一。公园内仅森林的占地面积就超过了整个上海市的大小，近千个湖泊和浮翠流丹的树林辅以清新的空气、和煦的阳光，使您走进公园后的每一次呼吸都能感受到一股涓流涤去了身心的积尘。此外，无数野生动物与珍稀植物繁衍于此；人类，野生动物在这里与自然同生共荣，构成一幅奇特的大自然生态图。</p>

  <p>&nbsp;&nbsp;&nbsp;</p>

  <h4>第十九天：美加交界&mdash;&mdash;苏圣玛丽</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式自助餐</p>

  <p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽海滨三角洲万豪酒店）</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，前往有着镍都之称的萨德伯里，前往地质博物馆（或是参观北方科学馆与动感地球展示馆）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，继续前行，前往加国边境&mdash;&mdash;苏圣玛丽。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，沿圣玛丽河欣赏美加两岸夜景。</p>

  <p>【行程摘要】&nbsp;</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆萨德伯里</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 18亿5千万年前的一块天外来石的坠落，改变了萨德伯里的历史，令萨德伯里成为世界上矿藏最为丰富的地区之一（镍、铜等）。萨德伯里于1893年建镇，是加拿大矿业发源地，小镇民风淳朴，在这里你可以体会到纯正的加拿大本土文化。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆苏圣玛丽</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 苏圣玛丽依圣玛丽河而建，位于美加两国交界。该市建于1668年，是白人在安大略最早的定居点，1797年与南岸的圣苏玛丽（现为美国密歇根州苏圣玛丽市）分开，城名为古法语，指的是圣玛丽河上的急流。圣玛丽河畔900米外即是美国国土，川流不息的圣玛丽河既是美加两国的国界线，也是两侧同名城市的母亲河。</p>

  <p>&nbsp;</p>

  <h4>第二十天：峡谷赏枫&mdash;&mdash;亚加华峡谷</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;火车上简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;意大利风味晚餐</p>

  <p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽海滨三角洲万豪酒店）</p>

  <p>行程：8点火车出发驶入亚加华峡谷，开启独特的峡谷赏枫之旅。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 火车将于18点返回至苏圣玛丽。晚上早些歇息，因为明日需要早起开启新的旅程。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆亚加华峡谷</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 亚加华峡谷是安省北部最著名的赏枫景点之一，只能沿一条深入峡谷的铁路乘坐火车到达，也是该景点的最大特色。铁路线长180公里，从苏圣玛丽市出发，穿梭在山水之间，色彩斑斓的枫叶与湖泊交错其中。另外，亚加华峡谷成名还因为它孕育了加拿大著名的风景画派&mdash;&mdash;七人画派（the Group of Seven），画家们长期到这里写生，发现北美自然之美，并逐渐开创一种不同于欧洲传统画风，真实表现真正的加拿大的绘画风格。</p>

  <p>&nbsp;</p>

  <h4>第二十一天：大自然的鬼斧神工&mdash;&mdash;布鲁斯半岛</h4>

  <p>餐饮：早餐&mdash;&mdash;车上简易早餐（不然要赶不上船啦）&nbsp; 午餐&mdash;&mdash;船上午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;英式晚餐</p>

  <p>酒店：托伯莫里Big Tub Harbour Resort（托伯莫里海港大木桶度假村）</p>

  <p>行程：清晨，6点我们就要出发啦，前往加拿大首个国家海洋公园&mdash;&mdash;布鲁斯半岛。（车上小憩，中途也有休息站，辛苦啦~）</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 中午，搭乘渡轮前往布鲁斯半岛。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往花瓶岛（Flowerpot Island）游览，见证大自然的鬼斧神工。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布鲁斯半岛</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 布鲁斯半岛是加拿大首个国家海洋公园。在布鲁斯半岛水域中，有22艘古沉船遗骸沉睡于此。在前往小岛的游船上，透过清澈见底的湖水就能看到沉寂在水底的古船。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆花瓶岛</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 花瓶岛名称源于两尊酷似花瓶的巨石，这两个岩石形成于远古时代的冰河世纪，因为地壳板块运动而伸出水面。石块的底部因为海水的冲刷，变得细长，远看就像一尊花瓶耸立在海上。但是，在将来的某一天，这些巨石会随着岁月的变迁与自然的轮回而消逝于世，故而时常听闻游客感叹道&ldquo;错过这次，或许将来就只能在照片中看到这大自然的杰作了。&rdquo;</p>

  <p>&nbsp;</p>

  <h4>第二十二天：蓝色的山&mdash;&mdash;蓝山</h4>

  <p>餐饮：早餐&mdash;&mdash;The Coffee Shop&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

  <p>酒店：蓝山The Westin Trillium House（蓝山威斯丁豪华度假酒店）</p>

  <p>行程：上午，浏览布鲁斯半岛醉人风光，徒步&ldquo;布鲁斯径&rdquo;（Bruce Trail），这条加拿大境内最长、最古老的标志性徒步游览线路。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往联合国教科文组织命名的世界生物圈保护区&mdash;&mdash;蓝山。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，在斯堪的纳维亚温泉会所享受非常罕见的以特殊水质而闻名的天然温泉Spa。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布鲁斯径</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 布鲁斯径是加拿大境内最长、最古老的标志性徒步游览线路。在步道上，冰川时期冰山所留下的痕迹依然清晰可见，每年都有无数徒步者从世界各地前来感受它永恒的魅力。不同的人每次都有不同的领悟，不过一直不变的是当地的美景和三色湖水带来的震撼。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆蓝山</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 蓝山度假坐落于联合国教科文组织命名的世界生物圈保护区之一，尼亚加拉断崖（Niagara Escarpment）上，在这里您能俯瞰整个乔治亚湾的南岸。而&ldquo;蓝山&rdquo;这个名字居然真的是因为这座山是蓝的，当然颜色并不夸张，仅仅是山上的铜矿物质影响下的细微感觉。这里拥有众多独特的商店、诱人的美食以及令人兴奋的节日庆典。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆斯堪的那维亚温泉会所</p>

  <p>斯堪的那维亚温泉会所（Le Scandinave Spa）坚持以纯天然温泉水搭配由远古泥炭沼沉淀形成的沼泽泥，这种堪称世界上最纯净的沼泽泥富含独特的有机物和矿物质，使得这里的温泉有着极高的治疗特性。</p>

  <p>&nbsp;</p>

  <h4>第二十三天：畅游蓝山</h4>

  <p>餐饮：早餐&mdash;&mdash;蓝山特色早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;意大利风味自助餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，乘坐蓝山gondola敞篷缆车抵达尼亚加拉断崖顶端，俯瞰乔治亚湾的美景。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观蓝山小镇，随后驱车返回多伦多，准备开启加西之旅。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆Gondola敞篷缆车</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 选一个秋高气爽的好天气，乘坐蓝山gondola敞篷缆车抵达尼亚加拉断层顶端真是一个无比舒心的旅程，秋风拂面，秋景宜人。站在断层顶端俯瞰整个乔治亚湾，大可登高一呼，感受豪情万丈。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 【景点】返回多伦多会途经Creemore，那里有个只能关一个人的北美最小监狱（The Jail）。</p>

  <p>&nbsp;</p>

  <h4>第二十四天：加西明珠&mdash;&mdash;温哥华</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间12:10 &rarr;温哥华（温哥华国际机场）加西时间14:00</p>

  <p><img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：4小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;特色料理</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，前往多伦多皮尔逊国际机场乘坐加航航班前往加西明珠&mdash;&mdash;温哥华。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观史丹利公园与狮门大桥，途中有许多精美小吃品尝。随后前往参观温哥华开埠时最早开发的社区&mdash;&mdash;煤气镇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏温哥华动人夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆史丹利公园</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 史丹利公园，加拿大最大的城市公园。是连接温哥华市中心的半岛，森林覆盖，三面环海，面积上千公顷。约9公里长的环岛便道远眺欣赏市区高楼大厦、海湾和积雪的山峦，大自然和繁华城市毗邻呼应。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆狮门大桥</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 狮门桥，1925年建成的悬索吊桥，横跨布勒内湾的第一海峡，全长1517.3米。开车过桥的时候可要做好心理准备哦，大桥可是会晃的哟。</p>

  <p>&nbsp;</p>

  <h4>第二十五天：畅游大不列颠哥伦比亚省省会&mdash;&mdash;维多利亚</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Blue Poppy Restaurant&nbsp; 晚餐&mdash;&mdash;意大利大餐</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，乘坐渡轮前往温哥华岛，维多利亚市位于温哥华岛的东南侧。游览加拿大国际历史古迹&mdash;&mdash;布查特花园。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观加拿大最早的唐人街和大不列颠哥伦比亚省议会大厦。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，乘坐渡轮返回温哥华，沿途欣赏两岸夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布查特花园</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 布查德花园是加拿大国家历史古迹，花园中培养了超过百万花坛植物，共有700多种不同品种，以确保在每年三月到十月间不间断盛开，是世界上最美丽的花园之一。秋季是海棠和大丽花盛开的时候，也是周边的多年生花木绽放的季节。秋色在十月最为浓郁，此时的日本园中遍布红褐色和金黄色，和玫瑰园中约二百五十种玫瑰争奇斗艳。两个风格迥异的花园，为游客带来了缤纷的色彩、精致的造型和诱人的花香。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆大不列颠哥伦比亚省议会大厦</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 大不列颠哥伦比亚省议会大厦面对着港口，是一座维多利亚式的建筑。园内耸立著维多利亚女王的铜像，中央圆顶部分是乔治&middot;温哥华的铜像。夜晚的议会大厦则有另一种风情，超过3千个灯泡装饰着大厦的周围，是维多利亚港湾区著名的夜景。</p>

  <p>&nbsp;</p>

  <h4>第二十六天：暂别加国，返程</h4>

  <p>航班：温哥华（温哥华国际机场）加西时间13:25 &rarr;上海（浦东国际机场）北京时间16:20 （+1）</p>

  <p><img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：11小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;飞机晚餐</p>

  <p>&nbsp;</p>

  <h4>第二十七天：温暖的家</h4>

  <p>北京时间16:20抵达上海浦东国际机场</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>
</div>
                                <div class="tab-pane fade" id="tab4primary" style="background-color: #fff;">

                                  <h4>第一天：造访枫叶之国&mdash;&mdash;加拿大</h4>

  <p>航班：上海（浦东国际机场）北京时间17:10 &rarr; 多伦多（皮尔逊国际机场）加东时间19:00&nbsp;</p>

  <p><img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16pt; width:20pt" /> 加拿大航空公司&nbsp;AC&nbsp;028经济舱&nbsp;&nbsp;&nbsp;飞行时长：13小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;飞机早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;迦途特制点心</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：今日，搭乘加拿大航空公司的国际航班，前往枫叶之国&mdash;&mdash;加拿大。抵达后，入住多伦多市中心地标性建筑费尔蒙皇家约克酒店。</p>

  <p>【行程摘要】</p>

  <p>☆英联邦国家永恒的骄傲&mdash;&mdash;费尔蒙皇家约克酒店</p>

  <p>1929年皇家约克酒店正式开业，是当时所有英联邦国家中最大最豪华的酒店，也是当时所有英联邦国家中最高的建筑。迄今为止，皇家约克酒店总计接待客人超过4千万，英国皇室家族的三代曾在皇家套房酒店里住过。这里不仅是多伦多最顶级的酒店之一，更是加拿大繁荣发展的见证者。</p>

  <p>&nbsp;</p>

  <h4>第二天：伴随历史的脚步，探索多伦多市中心的风景</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;CN Tower塔顶360&deg;旋转餐厅</p>

  <p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

  <p>行程：上午，前往加拿大最早的古堡&mdash;&mdash;卡萨罗马（Casa Loma）,探索20世纪初多伦多最大私人宅邸的典雅与壮丽，感受亨利柏拉特男爵与夫人的旷世之恋。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，轮渡前往多伦多湖心岛（Centre Island），城市天际线尽收眼底。</p>

  <p>【行程摘要】</p>

  <p>☆CN Tower&mdash;&mdash;多伦多城市天际线的标杆</p>

  <p>全世界最高的通讯塔多伦多CN Tower建成于1976年，塔高553米，是加拿大的著名象征，也是多伦多城市风景线的重要标志。360&deg;旋转餐厅坐落于塔顶，在享受美食的同时，远眺落日余晖，俯瞰华灯初上。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆卡萨罗玛&mdash;&mdash;加拿大最早的古堡</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1911年，金融家亨利柏特拉男爵（Sir Henry Pallet）为了让腿脚不便的妻子可以在加拿大也看到传统的欧式城堡而修建这座城堡。古堡内有98间装饰华丽的房间，神秘的塔楼，长达270米的幽深隧道，规模庞大的马厩，还有隐蔽的暗道，典雅的温室花房，和一个面积达五英亩，依山而建的美丽花园，处处彰显着当时的建筑艺术和男爵对妻子深沉的爱意。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆CN Tower Dinner&mdash;&mdash;电视塔顶层360&deg;旋转餐厅</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 全球最高的旋转餐厅，在享用美食的同时，还能俯瞰多伦多和安大略湖。如果是傍晚上塔，那是最好的选择，既可以看到落日余晖，也可以看到华灯初上的城市夜景。这里有个世界纪录&mdash;&mdash;「全球最高酒窖」美誉的空中酒窖。它的藏酒量达9,000支(另有25,000支收藏在地库)，包罗全球550个品牌的美酒，爱酒的朋友一定不能错过。</p>

  <p>&nbsp;</p>

  <h4>第三天：探索世界遗产名城&mdash;&mdash;魁北克城</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间11:30 &rarr;魁北克（让&middot;勒萨热国际机场）加东时间13:15</p>

  <p>&nbsp;<img alt="IMG_256" src="/images/jiatu/westjet.png" style="height:11pt; width:31pt" /> 西捷航空3458航班经济舱 飞行时长1小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;机场午餐&nbsp; 晚餐&mdash;&mdash;Restaurant Initiale享用法式大餐</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，搭乘西捷航空航班前往世界遗产名城&mdash;&mdash;魁北克城。</p>

  <p>下午，游览魁北克城的老城区，静静感受400年来这个城市的点滴故事。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜游魁北克，欣赏圣劳伦斯河夜景。</p>

  <p>【行程摘要】</p>

  <p>☆邂逅中世纪浪漫&mdash;&mdash;小香普兰街<br />
  小香普兰街是北美最古老繁华的街区。古趣盎然的古老街景，仿若看见了四百年多前的繁华，无论是精美的橱窗、别致的招牌、美丽的窗台，都足以让人驻足</p>

  <p>半天，充分展现中世纪的欧洲街景。在这里最适合逛逛街道两旁各种装潢设计别致的小店，然后来上一杯咖啡，坐在露天街边悠闲的享受法兰西风情。</p>

  <p>&nbsp;&nbsp;&nbsp; &nbsp;☆世界历史遗产&mdash;&mdash;费尔蒙芳提娜城堡酒店</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 费尔蒙芳提娜城堡酒店是魁北克城的地标性建筑，也是世界上最豪华的酒店之一。丘吉尔和艾森豪威尔曾在这里会晤，罗斯福、伊丽莎白二世等名人也曾下榻</p>

  <p>此处。作为世界上影视作品中出镜次数最多的酒店，芳提娜城堡酒店是许多人梦中真正的城堡，同时也是古老、奢华、文化和历史的象征。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆Restaurant Initiale&mdash;&mdash;北美法餐代表</p>

  <p>好多喜欢法餐的人都说，如果没去魁北克尝尝那里的法餐，就不算懂法餐。400年的岁月使得魁北克的法餐在传承中交融了北美本土文化，发展出了独树一帜的风格。在魁北克，如果想要试试正式的9道式的法式大餐一定就是这里了。在这里，您可以享受到北美五钻级别（AAA/CAA Five Diamond rating）的顶级的食材、舒适的用餐环境、精湛的厨艺、对料理的热情。</p>

  <p>&nbsp;</p>

  <h4>第四天：加拿大最佳&ldquo;户外自然景点&rdquo;&mdash;&mdash;圣安妮峡谷</h4>

  <p>餐饮：早餐&mdash;&mdash;17世纪餐厅享用法式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;枫糖小屋&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;Aux Anciens Canadiens（魁北克城最古老的建筑之一）</p>

  <p>酒店：魁北克Fairmont Le Chateau Frontenac（世界遗产费尔蒙芳提娜城堡酒店）</p>

  <p>行程：上午，前往圣安妮峡谷，感受加拿大最佳&ldquo;户外自然景点&rdquo;的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览奥尔良岛与蒙莫伦斯瀑布公园。</p>

  <p>【行程摘要】</p>

  <p>☆圣安妮峡谷</p>

  <p>圣安妮峡谷是圣安妮河流过、切割成窄狭的裂罅，由七十四公尺高的悬岩崩落，地形曲折复杂的河床上，造成好几节野性而深遂的小瀑而成的美景。这里的枫叶因生长在谷底、山腰和山巅不同地方，转红的时间不一致，使得整个山谷的红枫呈现出丰富绚烂的层次感。峡谷中有三座吊桥跨越于不同的角度，您可俯瞰峡谷奇景，欣赏加拿大秋季多种颜色的枫叶。</p>

  <p>☆枫糖小屋</p>

  <p>枫糖小屋带您了解制造枫糖的过程，枫糖采集树龄超过50年的枫树汁提炼而成，由于一定要在零度以下采集，所以非常珍贵。在此除了享用传统的法式民族风味大餐，您还可品尝枫糖浆产品、魁北克传统美食。</p>

  <p>&nbsp;</p>

  <h4>第五天：浪漫之都&mdash;&mdash;蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，沿着风景如画的&ldquo;枫叶大道&rdquo;一路驰骋，前往除巴黎外世界最大的法语城市&mdash;&mdash;蒙特利尔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览加拿大的&ldquo;巴黎圣母院&rdquo;&mdash;&mdash;诺特丹圣母大教堂（Notre-Dame Basilica of Montreal）以及蒙特利尔老城区的风光。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆诺特丹圣母大教堂</p>

  <p>诺特丹圣母大教堂是蒙特利尔最著名的景点之一，也是北美最为重要的天主教堂。所有参观过这座教堂的人，无不被其恢弘的哥特式教堂建筑，金碧辉煌的内部装饰以及精致绝伦的建筑雕刻所折服。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆费尔蒙伊丽莎白女王酒店</p>

  <p>费尔蒙伊丽莎白女王酒店始建于1958年4月，是魁北克省首府蒙特利尔最大的酒店。在67届世博会期间，五十位访问的国家元首入住豪华套房。此外，在过去的几十年中，英国皇室皆在此下榻。</p>

  <p>&nbsp;</p>

  <h4>第六天：浪漫之都&mdash;&mdash;蒙特利尔</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;法式大餐</p>

  <p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

  <p>行程：上午，前往皇家山（Mount Royal）游览，参观圣约瑟夫大教堂（Saint Joseph&#39;s Oratory of Mount Royal）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蒙特利尔奥林匹克公园，参观世界上最高、最斜的斜塔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏蒙特利尔的美丽夜景。</p>

  <p>【行程摘要】</p>

  <p>☆圣约瑟夫大教堂</p>

  <p>圣约瑟夫大教堂是全北美最大的天主教堂，教堂体积之大，令人炫目，世界上只有梵蒂冈圣保罗大教堂的圆顶能与它媲美。传说如果患有不良于行的疾病，只要涂抹圣约瑟夫大教堂的灯油便会痊愈。因此，当你走进教堂，可以看到墙上挂着许多拐杖和义肢，这些都是因圣约瑟夫灯油而痊愈的病人所留下来的。</p>

  <p>☆蒙特利尔奥林匹克公园</p>

  <p>蒙特利尔奥林匹克公园是1976年夏季奥林匹克运动会的主场地。这座露天运动场以及倾斜的塔台已成为蒙特利尔的一个象征。天气好的时候，您可以搭乘观光电梯抵达塔台顶端，一览无遗的欣赏蒙特利尔市区风光和圣劳伦斯河的迷人风景。</p>

  <p>【景点】如遇天气变化，如雨天。则将皇家山行程更改为蒙特利尔地下城行程。</p>

  <p>&nbsp;</p>

  <h4>第七天：加国权利的中心&mdash;&mdash;渥太华</h4>

  <p>餐饮：早餐&mdash;&mdash;港式早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式大餐</p>

  <p>酒店：渥太华Fairmont Ch&acirc;teau Laurier（费尔蒙劳里埃城堡酒店）</p>

  <p>行程：上午，乘车前往加拿大政治与文化中心&mdash;&mdash;渥太华。</p>

  <p>下午，参观加拿大国会山，见证加国权利的中心。随后参观拜沃德农贸市场，这座渥太华最古老、最热闹的公共市场见证着加拿大的独立与崛起。</p>

  <p>晚上，漫步丽都运河，欣赏美妙夜景。</p>

  <p>【行程摘要】</p>

  <p>☆国会山</p>

  <p>国会山坐落在渥太华河南岸，为加拿大国会建筑群所在。其中最为著名的是加拿大国会大厦，您几乎能在渥太华的每一个角落望见它。此外，燃烧在国会大厦广场上的不熄之火（Centenial Flame）在水上熊熊燃烧了50年。更值得体味的是其中的含义：水火交融，代表加拿大这个多种族的移民国家在多元文化之间的包容与和谐。</p>

  <p>☆费尔蒙劳里埃城堡酒店</p>

  <p>费尔蒙劳里埃城堡酒店毗邻丽都运河及议会大厦，是渥太华的百年地标建筑。这座老牌城堡酒店内的花雕石板与古董家具皆保留了一百多年前的风貌。闲暇之余，您可以在前台提供的iPad的指引下，在酒店的各个角落感受百年间在酒店发生的名人轶事。</p>

  <p>&nbsp;</p>

  <h4>第八天：加国旧都&mdash;&mdash;金士顿</h4>

  <p>餐饮：早餐&mdash;&mdash;健康又美味的英国传统早餐&nbsp;&nbsp; 午餐&mdash;&mdash;千岛湖畔简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式大餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，渥太华参观完总督府后前往千岛湖（Thousand Island）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，乘坐游船游览加拿大&ldquo;三大自然景观&rdquo;之一的千岛湖。随后前往加拿大旧都&mdash;&mdash;金士顿参观。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 傍晚，返回多伦多。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;☆千岛湖</p>

  <p>千岛湖位于圣劳伦斯河和安大略湖交汇处，是加拿大&ldquo;三大自然景观&rdquo;之一，千余岛屿如繁星般散落在湖中，宛如仙境。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆金士顿</p>

  <p>金士顿自古以来就是&ldquo;兵家必争之地&rdquo;，1841年成为加拿大首府所在地。而今，繁华虽已落尽，但是那斑驳的痕迹仍告诉世人它曾经的辉煌。</p>

  <p>&nbsp;</p>

  <h4>第九天：&ldquo;雷神之水&rdquo;响彻美加两岸&mdash;&mdash;尼亚加拉瀑布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;湖滨野餐&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布景牛排晚宴</p>

  <p>酒店：尼亚加拉Hilton Hotel and Suites Niagara Falls/Fallsview （尼亚加拉瀑布景观希尔顿集团酒店）</p>

  <p>行程：上午，前往美丽的童话小镇&mdash;&mdash;滨湖尼亚加拉，探索冰酒文化与加国历史。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往尼亚加拉瀑布，乘坐&ldquo;雾中少女&rdquo;号近距离观赏世界最大跨国瀑布的雄伟壮阔。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，夜晚的瀑布灯光秀可不要错过哦。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆滨湖尼亚加拉</p>

  <p>滨湖尼亚加拉是世界上七大童话小镇之一，小镇上依然保留着许多开拓时代的建筑，19世纪的人文风气和旧时代的小城风貌在这里也得到了很好的保护。此外，这里亦是葡萄最佳的生长地区（北纬43&rsquo;&rsquo;19&rsquo;15&rsquo;&rsquo;，西经79&rsquo;&rsquo; 4&rsquo; 8&rsquo;&rsquo;），得天独厚的地理条件，也让这里成为加拿大名副其实的酒乡，特别是冰酒，更是享誉全球。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆尼亚加拉瀑布</p>

  <p>尼亚加拉瀑布，印第安语意为&ldquo;雷神之水&rdquo;。是世界上第一大跨国瀑布，被列为世界七大奇景之一。沿瀑布一路直到瀑布起落点，会愈加的被瀑布水势汹涌如千军万马的气势所折服。</p>

  <p>&nbsp;</p>

  <h4>第十天：德国小镇&mdash;&mdash;圣&middot;雅各布</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Farmer Market&nbsp;&nbsp; 晚餐&mdash;&mdash;德国猪蹄大餐</p>

  <p>酒店：滑铁卢Homewood Suites by Hilton Waterloo/St. Jacobs（滑铁卢希尔顿集团酒店）</p>

  <p>行程：上午，沿着美丽的乡间大道前往圣&middot;雅各布。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览美丽的德国小镇，感受中世纪的风情。</p>

  <p>【行程摘要】</p>

  <p>☆圣&middot;雅各布</p>

  <p>圣&middot;雅各布是滑铁卢地区一座德国特色小镇，小镇至今依然留存着中世纪的习俗和风情。镇中的Farmers Marker仍然如同数百年前一般，每到赶集日，大量新鲜美味的健康蔬果，特色小吃应有尽有。此外，小镇中的德裔原住民，时常会骑着马、坐着马车，穿着中世纪欧式风格的衣裳来采购食材与日常用品。</p>

  <p>☆海登堡饭店</p>

  <p>有着一百多年历史的海登堡饭店在加拿大华人圈子里极有口碑，他家的德国&ldquo;咸猪手&rdquo;烟熏猪蹄（Smoked Pork Hock）和自酿的新鲜黑啤（Heidelberg old Bavarian beer）都是来到这里必点的美食。</p>

  <p>&nbsp;</p>

  <h4>第十一天：莎士比亚小镇&mdash;&mdash;斯特拉特福</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp; 晚餐&mdash;&mdash;中式晚餐</p>

  <p>酒店：滑铁卢Homewood Suites by Hilton Waterloo/St. Jacobs（滑铁卢希尔顿集团酒店）</p>

  <p>行程：上午，前往加拿大著名的智慧城市&mdash;&mdash;斯特拉福特，游览城市古建筑群与古朴城区。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览Lake Victoria湖畔，随后前往Stratford Festival戏剧院欣赏莎士比亚戏剧。</p>

  <p>【行程摘要】</p>

  <p>☆斯特拉特福</p>

  <p>斯特拉特福是加拿大著名的智慧城市和戏剧之乡，素有莎士比亚小镇之美名。镇内有许多智能化设施、大面积的绿色公园，以及四个各具特色的专业剧院，与中世纪欧洲风格的小镇相交融，完美的将现代化都市、传统的艺术气息和古朴的欧式风情融为一体。1997年斯特拉特福被评为世界上最美丽的城市 &ldquo;Prettiest City in the World&rdquo;。</p>

  <p>&nbsp;</p>

  <h4>第十二天：艺术小镇&mdash;&mdash;挨洛拉</h4>

  <p>餐饮：早餐&mdash;&mdash;Jack&#39;s Family Restaurant&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式轻奢晚宴</p>

  <p>酒店：汉密尔顿Homewood Suites by Hilton（汉密尔顿希尔顿集团酒店）</p>

  <p>行程：上午，欣赏加国动人风景的同时，前往艺术小镇&mdash;&mdash;挨洛拉，美丽的小镇搭配具有历史气息的石灰岩建筑，碧波蓝天与古旧建筑形成鲜明对比。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览挨洛拉主街与艺术长廊，欣赏各类画廊与展示，我想，您一定会找到令您心动的作品。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 傍晚，驱车前往钢铁之城&mdash;&mdash;汉密尔顿</p>

  <p>【行程摘要】</p>

  <p>☆挨洛拉</p>

  <p>古旧的石灰岩建筑与青山碧水的自然风光形成的反差美使挨洛拉闻名于世。百年古韵的主街上人来人往，推门进入每一个小店都能感知到这百年古建筑所带来的魅力。此外，因其秀美山水与石灰岩建筑，挨洛拉也是摄影的绝佳地。</p>

  <p>☆安卡斯特餐厅</p>

  <p>餐厅由一个有着两百余年历史的老磨坊改建而成，坐在饭店里，还可以看到一个小小的瀑布从旁川流而过。这里有着自己的农场，为客人提供各种时令有机蔬果。健康美味的欧式菜肴加上有礼又不失热情的服务，享受小镇的轻奢晚餐。</p>

  <p>&nbsp;</p>

  <h4>第十三天：钢铁之城&mdash;&mdash;汉密尔顿</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Tim Hortons 一号店（加拿大最著名的咖啡馆）&nbsp; 晚餐&mdash;&mdash;Burlington Mandarin Restaurant（加拿大最大最红火的中式自助餐）</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，游览加拿大战机博物馆与世界顶级大学&mdash;&mdash;麦克马斯特大学。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，湖畔游览意大利风格古堡&mdash;&mdash;当顿古堡（Dundurn Castle）。随后前往参观皇家植物园，秋季可是玫瑰花盛开的季节，如此美景可不要错过哟。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 傍晚，返回多伦多</p>

  <p>【行程摘要】</p>

  <p>☆加拿大战机博物馆</p>

  <p>加拿大战机博物馆收集、记录以及保存了自二战以来在加拿大空军服役的各种战机。是一个寓教于乐、军事迷的好去处。该馆使用各种多媒体手段以及模型展示的方法向大家介绍各种战机，其中大多是二战的战机。有趣的是，馆内有一架中国南昌飞机制造公司产的初教-6教练机，是剑南春集团赞助的。此外，全球只有两架还可以飞行的战机&ldquo;兰开斯特&rdquo;，这其中一架就在该博物馆，另外一架在英国。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆邓登古堡</p>

  <p>邓登古堡，一座具有意大利风格的城堡式建筑，意为&ldquo;强大的城堡&rdquo;，修建于1835年，是艾伦&middot;纳皮尔&middot;麦克纳布（Allan Napier MacNab）爵士的家。城堡的主人艾伦&middot;纳皮尔&middot;麦克纳布是在加拿大成为联邦国家之前历史上的一位重要人物，1854&mdash;1856年间成为加拿大立法议会的主席。目前城堡里的所有陈设基本上恢复到了最鼎盛时期的状态。其中超过四十个已经装饰完毕的房间向游人开放，从而让每一位到访者都能体验到当年一个维多利亚式家庭的生活。</p>

  <p>&nbsp;</p>

  <h4>第十四天：皇室园林&mdash;&mdash;蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;湖畔餐厅&nbsp;&nbsp;&nbsp; 下午茶&mdash;&mdash;英式下午茶&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：上午，取道美丽的小镇巴里，欣赏锡姆科湖畔动人的风景，并在湖畔餐厅享用午餐，餐后游览巴里主街。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，沿着11号公路一路向北，沿路遍是动人湖景。抵达蜜月湖畔小镇格雷文赫斯特后，在镇中享用纯正的英式下午茶。湖光美景与英式下午茶在蜜月湖畔交汇，或好友相谈，或好书相伴，惬意的午后总是来得那么的不经意。</p>

  <p>【行程摘要】</p>

  <p>☆蜜月湖</p>

  <p>蜜月湖地区的自然资源和人文景观十分丰富，由173，000公顷原皇室林地及逾340平方公里的湖泊组成，其中穿插了大小河流1000余条。曾被国家地理杂志评选为&ldquo;世界20大必去之地&rdquo;之一以及&ldquo;夏天10大最佳旅途&rdquo;第一顺位。秋季，这里层林尽染、绚丽多姿。平静的湖面上散布着一个个精美的湖间小岛，岛上密布着色彩斑斓的枫树林。时而，湖面上飞翔的小鸟，穿行于小岛之间；时而，人们的休闲快艇风驰电掣般的划过平静的湖面，留下一道粼粼水痕，使得蜜月湖的风光就像是一曲美妙的交响乐。</p>

  <p>☆蜜月湖畔豪华湖景别墅</p>

  <p>别墅坐落于蜜月湖畔，面湖背山。告别繁华都市的喧嚣，不受凡尘琐事的约束。别墅室内外娱乐设施齐备，既可以举办烧烤派对，也可以享受乘船垂钓的乐趣。花鸟虫鱼，树木山湖；一张躺椅，一本好书。&nbsp;&nbsp;&nbsp;</p>

  <p>&nbsp;</p>

  <h4>第十五天：畅游蜜月湖</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;游船上享用迦途私家秘制午餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观国际主义战士白求恩大夫故居。随后乘坐皇家邮船RMS Segwun号蒸汽船畅游秀美蜜月湖。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往蔓越橘之都&mdash;&mdash;巴拉。这儿由Cranberry酿造的红酒也是小镇的一大特色，配上随处可见的Muskoka美景，实在是一大美事。随后前往湖畔小镇布雷斯布里奇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 晚上，沿湖漫步，美景为伴；曼妙月光，惬意夜晚。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; ☆白求恩故居</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 二战期间，白求恩作为国际主义战士为反法西斯战场做出了不可磨灭的贡献。无论在多么艰难的状况下，白求恩总是坚持着自己的理想与信念。他在顽强抵抗病痛的同时，依然在反法西斯战场的最前线无私奉献着，拯救了无数的生命。而白求恩故居，就是为了颂扬他这样的精神而被保留了下来。白求恩故居是一座典型的英式建筑，房子和内部格局和摆设均保留了白求恩居住时的状况。纪念馆陈列着白求恩生活的实物和照片。</p>

  <p>☆皇家邮船RMS Segwun号蒸汽船</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RMS Segwun 号蒸汽船建造于1887年，也是北美最古老的蒸汽船。并且目前世界上只有4艘背负着皇家邮船（Royal Mail Ship）名号的轮船在运行着。就是这样一艘富有传奇色彩的船，将带领着我们穿越蜜月湖沿岸，一览那如同世外桃源般的美景，感受她作为皇家园林的骄傲。</p>

  <p>&nbsp;</p>

  <h4>第十六天：G8辉煌&mdash;&mdash;亨茨维尔</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;百年老店品珍馐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，参观G8峰会会场&mdash;&mdash;迪赫特度假酒店，能作为G8会场定有它的独特之处。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，游览承载G8辉煌的百年小镇&mdash;&mdash;亨茨维尔，欣赏小镇让各国首脑都为之动容的生态美景。</p>

  <p>【行程摘要】</p>

  <p>☆迪赫特度假村</p>

  <p>Deerhurst Resort始于1896年的一个私人小屋。经过家族三代的苦心经营，到20世纪90年代，度假村已由最初的18个房间的乡间驿站，发展为可同时容纳1000个宾客的现代化度假胜地。被选为G8会址，除去优美的风景和长久的历史外，还因为度假村除了主楼外，周围还有大大小小的裙楼。不仅解决了各国领导房间差别的问题，也顺利解决了领导人自身安保的问题。</p>

  <p>☆亨茨维尔</p>

  <p>亨茨维尔是蜜月湖地区最大的一个镇。同时也是2010年G8峰会的举办地（第36届）。在世界经济衰退，提倡环保的大环境下，亨茨维尔有着让各国首脑都为之动容的生态美景，成为了&ldquo;峰会&rdquo;的不二之选。</p>

  <p>&nbsp;</p>

  <h4>第十七天：休闲活动</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;迦途特制简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：全天自由休闲活动，可开船至湖心垂钓或欣赏湖景，亦可去高尔夫球场挥杆一番。晚餐由迦途的私家主厨为您精心烹饪。</p>

  <p>&nbsp;</p>

  <h4>第十八天：赏枫圣地&mdash;&mdash;阿岗昆</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;公园内野餐&nbsp; 晚餐&mdash;&mdash;湖畔餐厅</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，沿着枫叶大道前往赏枫圣地&mdash;&mdash;阿尔岗昆公园，见证枫叶之国的名副其实。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，阿岗昆之大超出您的想象，但我们会带您欣赏到其最美之处。</p>

  <p>【行程摘要】&nbsp;&nbsp;</p>

  <p>☆阿岗昆公园</p>

  <p>阿岗昆公园是安省最大最古老的公园，同时也是全世界最佳的赏枫地点之一。公园内仅森林的占地面积就超过了整个上海市的大小，近千个湖泊和浮翠流丹的树林辅以清新的空气、和煦的阳光，使您走进公园后的每一次呼吸都能感受到一股涓流涤去了身心的积尘。此外，无数野生动物与珍稀植物繁衍于此；人类，野生动物在这里与自然同生共荣，构成一幅奇特的大自然生态图。</p>

  <p>&nbsp;&nbsp;&nbsp;</p>

  <h4>第十九天：休闲活动</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;迦途特制简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内晚餐</p>

  <p>别墅：蜜月湖畔豪华湖景别墅</p>

  <p>行程：全天自由休闲活动，可前往参观蜜月湖畔的啤酒厂，亦可驾车游览蜜月湖地区的美景。晚餐由迦途的私家主厨为您精心烹饪。</p>

  <p>&nbsp;</p>

  <h4>第二十天：美加交界&mdash;&mdash;苏圣玛丽</h4>

  <p>餐饮：早餐&mdash;&mdash;迦途特制养生早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式自助餐</p>

  <p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽海滨三角洲万豪酒店）</p>

  <p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

  <p>上午，前往有着镍都之称的萨德伯里，前往地质博物馆（或是参观北方科学馆与动感地球展示馆）。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，继续前行，前往加国边境&mdash;&mdash;苏圣玛丽。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，沿圣玛丽河欣赏美加两岸夜景。</p>

  <p>【行程摘要】&nbsp;</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆萨德伯里</p>

  <p>18亿5千万年前的一块天外来石的坠落，改变了萨德伯里的历史，令萨德伯里成为世界上矿藏最为丰富的地区之一（镍、铜等）。萨德伯里于1893年建镇，是加拿大矿业发源地，小镇民风淳朴，在这里你可以体会到纯正的加拿大本土文化。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆苏圣玛丽</p>

  <p>苏圣玛丽依圣玛丽河而建，位于美加两国交界。该市建于1668年，是白人在安大略最早的定居点，1797年与南岸的圣苏玛丽（现为美国密歇根州苏圣玛丽市）分开，城名为古法语，指的是圣玛丽河上的急流。圣玛丽河畔900米外即是美国国土，川流不息的圣玛丽河既是美加两国的国界线，也是两侧同名城市的母亲河。</p>

  <p>&nbsp;</p>

  <h4>第二十一天：峡谷赏枫&mdash;&mdash;亚加华峡谷</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;火车上简易午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;意大利风味晚餐</p>

  <p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽海滨三角洲万豪酒店）</p>

  <p>行程：8点火车出发驶入亚加华峡谷，开启独特的峡谷赏枫之旅。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 火车将于18点返回至苏圣玛丽。晚上早些歇息，因为明日需要早起开启新的旅程。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆亚加华峡谷</p>

  <p>亚加华峡谷是安省北部最著名的赏枫景点之一，只能沿一条深入峡谷的铁路乘坐火车到达，也是该景点的最大特色。铁路线长180公里，从苏圣玛丽市出发，穿梭在山水之间，色彩斑斓的枫叶与湖泊交错其中。另外，亚加华峡谷成名还因为它孕育了加拿大著名的风景画派&mdash;&mdash;七人画派（the Group of Seven），画家们长期到这里写生，发现北美自然之美，并逐渐开创一种不同于欧洲传统画风，真实表现真正的加拿大的绘画风格。</p>

  <p>&nbsp;</p>

  <h4>第二十二天：大自然的鬼斧神工&mdash;&mdash;布鲁斯半岛</h4>

  <p>餐饮：早餐&mdash;&mdash;车上简易早餐（不然要赶不上船啦）&nbsp; 午餐&mdash;&mdash;船上午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;英式晚餐</p>

  <p>酒店：托伯莫里Big Tub Harbour Resort（托伯莫里海港大木桶度假村）</p>

  <p>行程：清晨，6点我们就要出发啦，前往加拿大首个国家海洋公园&mdash;&mdash;布鲁斯半岛。（车上小憩，中途也有休息站，辛苦啦~）</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 中午，搭乘渡轮前往布鲁斯半岛。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往花瓶岛（Flowerpot Island）游览，见证大自然的鬼斧神工。</p>

  <p>【行程摘要】</p>

  <p>☆布鲁斯半岛</p>

  <p>布鲁斯半岛是加拿大首个国家海洋公园。在布鲁斯半岛水域中，有22艘古沉船遗骸沉睡于此。在前往小岛的游船上，透过清澈见底的湖水就能看到沉寂在水底的古船。</p>

  <p>☆花瓶岛</p>

  <p>花瓶岛名称源于两尊酷似花瓶的巨石，这两个岩石形成于远古时代的冰河世纪，因为地壳板块运动而伸出水面。石块的底部因为海水的冲刷，变得细长，远看就像一尊花瓶耸立在海上。但是，在将来的某一天，这些巨石会随着岁月的变迁与自然的轮回而消逝于世，故而时常听闻游客感叹道&ldquo;错过这次，或许将来就只能在照片中看到这大自然的杰作了。&rdquo;</p>

  <p>&nbsp;</p>

  <h4>第二十三天：蓝色的山&mdash;&mdash;蓝山</h4>

  <p>餐饮：早餐&mdash;&mdash;The Coffee Shop&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

  <p>酒店：蓝山The Westin Trillium House（蓝山威斯丁豪华度假酒店）</p>

  <p>行程：上午，浏览布鲁斯半岛醉人风光，徒步&ldquo;布鲁斯径&rdquo;（Bruce Trail），这条加拿大境内最长、最古老的标志性徒步游览线路。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，前往联合国教科文组织命名的世界生物圈保护区&mdash;&mdash;蓝山。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，在斯堪的纳维亚温泉会所享受非常罕见的以特殊水质而闻名的天然温泉Spa。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布鲁斯径</p>

  <p>布鲁斯径是加拿大境内最长、最古老的标志性徒步游览线路。在步道上，冰川时期冰山所留下的痕迹依然清晰可见，每年都有无数徒步者从世界各地前来感受它永恒的魅力。不同的人每次都有不同的领悟，不过一直不变的是当地的美景和三色湖水带来的震撼。</p>

  <p>☆蓝山</p>

  <p>蓝山度假坐落于联合国教科文组织命名的世界生物圈保护区之一，尼亚加拉断崖（Niagara Escarpment）上，在这里您能俯瞰整个乔治亚湾的南岸。而&ldquo;蓝山&rdquo;这个名字居然真的是因为这座山是蓝的，当然颜色并不夸张，仅仅是山上的铜矿物质影响下的细微感觉。这里拥有众多独特的商店、诱人的美食以及令人兴奋的节日庆典。</p>

  <p>☆斯堪的那维亚温泉会所</p>

  <p>斯堪的那维亚温泉会所（Le Scandinave Spa）坚持以纯天然温泉水搭配由远古泥炭沼沉淀形成的沼泽泥，这种堪称世界上最纯净的沼泽泥富含独特的有机物和矿物质，使得这里的温泉有着极高的治疗特性。</p>

  <p>&nbsp;</p>

  <h4>第二十四天：畅游蓝山</h4>

  <p>餐饮：早餐&mdash;&mdash;蓝山特色早餐&nbsp;&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;意大利风味自助餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，乘坐蓝山gondola敞篷缆车抵达尼亚加拉断崖顶端，俯瞰乔治亚湾的美景。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观蓝山小镇，随后驱车返回多伦多。</p>

  <p>【行程摘要】</p>

  <p>☆Gondola敞篷缆车</p>

  <p>选一个秋高气爽的好天气，乘坐蓝山gondola敞篷缆车抵达尼亚加拉断层顶端真是一个无比舒心的旅程，秋风拂面，秋景宜人。站在断层顶端俯瞰整个乔治亚湾，大可登高一呼，感受豪情万丈。</p>

  <p>【景点】返回多伦多会途经Creemore，那里有个只能关一个人的北美最小监狱（The Jail）。</p>

  <p>&nbsp;</p>

  <h4>第二十五天：畅游多伦多市中心</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;上海小吃&nbsp;&nbsp; 晚餐&mdash;&mdash;唐人街海鲜大餐</p>

  <p>酒店：多伦多&nbsp;Hilton&nbsp;Toronto /&nbsp;Markham&nbsp;Suites Conference Centre &amp; Spa（多伦多万锦希尔顿集团酒店）</p>

  <p>行程：上午，前往安大略皇家博物馆（Royal Ontario Museum）参观，旧馆古典、精美的外墙雕刻与新馆水晶宫般的未来造型相得益彰。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观古典的多伦多市政厅与法院建筑群。随后前往唐人街游览。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆安大略皇家博物馆</p>

  <p>安大略皇家博物馆是加拿大最大的博物馆。 建立于1912年的皇家安大略博物馆，本是一座非常古典的建筑，外墙有着美丽精致的雕刻。如今新馆落成于2007年7月，它是由德国设计师Daniel Libeskind着手设计的，是典型的现代建筑。如今，古典与现代两种完全不同的建筑风格结合在了一起，更显得博物馆和谐、完美。</p>

  <p>博物馆内40个展馆共计藏品超过六百万件。同时安大略皇家博物馆是海外国家中中国藏品最多的博物馆。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp; 【景点】下午行程也可以变更为参观Dundas、Bloor街区。</p>

  <p>&nbsp;</p>

  <h4>第二十六天：加西明珠&mdash;&mdash;温哥华</h4>

  <p>航班：多伦多（皮尔逊国际机场）加东时间12:10 &rarr;温哥华（温哥华国际机场）加西时间14:00</p>

  <p>&nbsp; <img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16pt; width:20pt" /> 加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：4小时50分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;特色料理</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，前往多伦多皮尔逊国际机场乘坐加航航班前往加西明珠&mdash;&mdash;温哥华。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观史丹利公园与狮门大桥，途中有许多精美小吃品尝。随后前往参观温哥华开埠时最早开发的社区&mdash;&mdash;煤气镇。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，欣赏温哥华动人夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆史丹利公园</p>

  <p>史丹利公园，加拿大最大的城市公园。是连接温哥华市中心的半岛，森林覆盖，三面环海，面积上千公顷。约9公里长的环岛便道远眺欣赏市区高楼大厦、海湾和积雪的山峦，大自然和繁华城市毗邻呼应。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆狮门大桥</p>

  <p>狮门桥，1925年建成的悬索吊桥，横跨布勒内湾的第一海峡，全长1517.3米。开车过桥的时候可要做好心理准备哦，大桥可是会晃的哟。</p>

  <p>&nbsp;</p>

  <h4>第二十七天：畅游大不列颠哥伦比亚省省会&mdash;&mdash;维多利亚</h4>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;Blue Poppy Restaurant&nbsp; 晚餐&mdash;&mdash;意大利大餐</p>

  <p>酒店：温哥华Hampton Inn by Hilton Vancouver-Airport/Richmond（温哥华机场希尔顿集团酒店）</p>

  <p>行程：上午，乘坐渡轮前往温哥华岛，维多利亚市位于温哥华岛的东南侧。游览加拿大国际历史古迹&mdash;&mdash;布查特花园。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，参观加拿大最早的唐人街和大不列颠哥伦比亚省议会大厦。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 晚上，乘坐渡轮返回温哥华，沿途欣赏两岸夜景。</p>

  <p>【行程摘要】</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆布查特花园</p>

  <p>布查德花园是加拿大国家历史古迹，花园中培养了超过百万花坛植物，共有700多种不同品种，以确保在每年三月到十月间不间断盛开，是世界上最美丽的花园之一。秋季是海棠和大丽花盛开的时候，也是周边的多年生花木绽放的季节。秋色在十月最为浓郁，此时的日本园中遍布红褐色和金黄色，和玫瑰园中约二百五十种玫瑰争奇斗艳。两个风格迥异的花园，为游客带来了缤纷的色彩、精致的造型和诱人的花香。</p>

  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ☆大不列颠哥伦比亚省议会大厦</p>

  <p>大不列颠哥伦比亚省议会大厦面对着港口，是一座维多利亚式的建筑。园内耸立著维多利亚女王的铜像，中央圆顶部分是乔治&middot;温哥华的铜像。夜晚的议会大厦则有另一种风情，超过3千个灯泡装饰着大厦的周围，是维多利亚港湾区著名的夜景。</p>

  <p>&nbsp;</p>

  <h4>第二十八天：暂别加国，返程</h4>

  <p>航班：温哥华（温哥华国际机场）加西时间13:25 &rarr;上海（浦东国际机场）北京时间16:20 （+1）</p>

  <p>&nbsp;<img alt="air_canada" src="/images/jiatu/aircanada.png" style="height:16pt; width:20pt" /> 加拿大航空公司&nbsp;AC111经济舱&nbsp;&nbsp;&nbsp;飞行时长：11小时45分钟</p>

  <p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp; 午餐&mdash;&mdash;飞机午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;飞机晚餐</p>

  <p>&nbsp;</p>

  <h4>第二十九天：温暖的家</h4>

  <p>北京时间16:20抵达上海浦东国际机场</p>

  <p>&nbsp;</p>

  <p>&nbsp;</p>
</div>


                            </div>
                        </div>
                    </div>
                </div>
      </div>

    </div>

		<div>
			<a class="btn btn-primary btn-md" style="float:right !important;" href="#">回到顶部</a>
		</div>
    <div style="padding: 3vh"></div>












<div style='clear: both'></div>

@include('footer')
@stop
@section('scripts')




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jssor.slider.min.js" type="text/javascript"></script>
  <link href='/css/fullcalendar.css' rel='stylesheet' />
  <link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='/js/jquery.min.js'></script>
  <script src='/js/jquery-ui.custom.min.js'></script>
  <script src='/js/fullcalendar.min.js'></script>
    <script type="text/javascript">
        jssor_slider2_starter = function (containerId) {
            var options = {
                $AutoPlay: 1,                                    //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 4000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $Cols: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $NoDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider2 = new $JssorSlider$(containerId, options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
        jssor_slider2_starter('slider2_container');

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
