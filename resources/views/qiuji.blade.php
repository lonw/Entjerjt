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
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/1.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/1.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/2.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/2.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/3.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/3.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/4.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/4.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/5.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/5.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/6.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/6.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/7.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/7.jpg" />
              </div>
                <a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/8.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/8.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/9.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/9.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/10.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/10.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/11.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/11.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/qj-gallery/12.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/qj-gallery/12.jpg" />
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
        <div style="color: #333;font-size: 4vw;text-align: center;"><strong>迦途四季·枫叶尊享</strong>​</div>
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
                      <input type="hidden" name="title" value="迦途四季·枫叶尊享:雙季特辑">
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

        </div>



    <div class="row">
        <center><img src="/images/jiatu/fengye/1.jpg" style="width: 95%;max-height:450px;"></center>

    </div>


				<div style='clear: both'></div>
				<div style='margin-bottom:5vh;'></div>
		    <div class="">
		      <div class="row">
		        <div class="col-md-12">
		                    <div class="panel with-nav-tabs" style="width:97%;margin-left:auto;margin-right:auto;">
		                        <div class="panel-heading">
		                                <ul class="nav nav-tabs">
		                                    <li class="active" style="background-color: #fff;"><a href="#tab1primary" data-toggle="tab" aria-expanded="false">行程特色</a></li>
		                                    <li class="" style="background-color: #fff;"><a href="#tab2primary" data-toggle="tab" aria-expanded="false">具体行程</a></li>

		                                </ul>
		                        </div>
		                        <div class="panel-body">
		                            <div class="tab-content">
		                                <div class="tab-pane fade active in" id="tab1primary" style="background-color: #fff;">
																			<img class="img-responsive" src="/images/jiatu/fengye/2.jpg" alt="">
																			<img class="img-responsive" src="/images/jiatu/fengye/3.jpg" alt="">
																		</div>
		                                <div class="tab-pane fade" id="tab2primary" style="background-color: #fff;">
                                      <h4>第一天：造访枫叶之国&mdash;&mdash;加拿大</h4>

<p>航班：上海（浦东国际机场）北京时间17:10&rarr;多伦多（皮尔逊国际机场）加东时间19:00</p>

<p><img alt="AC" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司AC028 经济舱 飞行时长：13小时50分钟</p>

<p>餐饮：早餐&mdash;&mdash;飞机早餐 &nbsp; &nbsp;午餐&mdash;&mdash;飞机午餐 &nbsp; &nbsp;晚餐&mdash;&mdash;迦途特制点心</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

<p>行程：今日，搭乘加拿大航空公司的国际航班，前往枫叶之国&mdash;&mdash;加拿大，开启一场枫叶的盛宴。抵达后，入住多伦多市中心地标性建筑费尔蒙皇家约克酒店。&nbsp;【行程摘要】</p>

<p>☆英联邦国家永恒的骄傲&mdash;&mdash;费尔蒙皇家约克酒店</p>

<p>1929年皇家约克酒店正式开业，是当时所有英联邦国家中最大最豪华的酒店，也是当时所有英联邦国家中最高的建筑。迄今为止，皇家约克酒店总计接待客人超过4千万，英国皇室家族的三代曾在皇家套房酒店里住过。这里不仅是多伦多最顶级的酒店之一，更是加拿大繁荣发展的见证者。</p>

<p>&nbsp;</p>

<h4>第二天：&ldquo;雷神之水&rdquo;响彻美加两岸&mdash;&mdash;尼亚加拉瀑布</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp;&nbsp;&nbsp; 午餐&mdash;&mdash;湖滨野餐&nbsp;&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布景牛排晚宴</p>

<p>别墅：蜜月湖豪华湖景别墅</p>

<p>行程：上午，乘车前往美加边境，游览世界七大自然奇迹之一的☆尼亚加拉大瀑布。途中参观☆葡萄酒酒庄，品尝加拿大著名的VQA冰酒。之后乘车前往&ldquo;世界七大童话小镇&rdquo;之一的☆尼亚加拉湖滨小镇。</p>

<p>下午，驱车前往大瀑布后乘坐&ldquo;雾中少女&rdquo;号游船，近距离感受大瀑布的恢弘。之后，乘车前往世界闻名的蜜月湖度假区，入住☆湖滨豪华别墅。</p>

<p>【行程摘要】</p>

<p>☆伟大的造物奇观&mdash;&mdash;尼亚加拉大瀑布</p>

<p>尼亚加拉大瀑布（Niagara Falls）被北美原住民尊称为&ldquo;雷神之水&rdquo;，是北美大陆最不可错过的景观之一。站在大瀑布前，会愈加的被大瀑布水势汹涌如千军万马的气势所折服。</p>

<p>☆加拿大国酒&mdash;&mdash;冰酒品鉴</p>

<p>安大略省的尼亚加拉Niagara半岛是冰酒的优质产地之一。尼加拉地区的纬度低，气候凉爽，适合葡萄生长，来自全世界各不同品种的葡萄在此地已生长了百余年，这里出产的葡萄酒在国际上有很高的知名度，在各项国际比赛中也屡获大奖。</p>

<p>☆梦中的小镇&mdash;&mdash;尼亚加拉湖滨小镇</p>

<p>被誉为&ldquo;世界七大童话小镇&rdquo;之一的尼亚加拉湖滨小镇，感受交融的欧美人文和开拓时代的建筑。小镇漂亮古典，恬静美丽，漫步其中仿佛来到了19世纪的欧洲。</p>

<p>☆蜜月湖豪华湖景别墅</p>

<p>别墅坐落于蜜月湖畔，面湖背山。别墅室内外娱乐设施齐备，既可以举办烧烤派对，也可以享受乘船垂钓的乐趣。在这里您可以在既然享受着高科技带来的舒适的同时告别繁华都市的喧嚣，不受凡尘琐事的约束。</p>

<p>&nbsp;</p>

<h4>第三天：畅游世界顶级度假胜地&mdash;&mdash;蜜月湖</h4>

<p>餐饮：早餐&mdash;&mdash;☆迦途养生早餐&nbsp; 午餐&mdash;&mdash;邮轮午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内中式晚宴</p>

<p>别墅：蜜月湖豪华湖景别墅</p>

<p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

<p>上午，前往☆白求恩故居进行参观。</p>

<p>下午，乘坐北美最古老的☆蒸汽船&mdash;&mdash;皇家邮船游览蜜月湖沿岸。下船后在码头享用精致美味的☆英式下午茶。</p>

<p>【行程摘要】</p>

<p>☆国际主义战士&mdash;&mdash;白求恩</p>

<p>诺曼&middot;白求恩（Norman Bethune）是加拿大著名的胸外科医生和国际主义战士。二战期间，他在欧洲和亚洲的反法西斯战场上拯救了无数的生命。故居完整保留了白求恩居住时的样子，陈列着他生活的照片和实物。</p>

<p>☆传奇邮船&mdash;&mdash;RMS Segwun</p>

<p>RMS Segwun是世界上仅剩的四艘仍在航行的皇家邮船（Royal Mail Ship）之一，同时也是全北美最古老的燃煤蒸汽船。在这艘富有传奇色彩的邮船的带领下，我们将饱览世界级度假地&mdash;&mdash;蜜月湖的美景。</p>

<p>☆英式下午茶</p>

<p>下午茶一直深受英联邦国家人民的喜爱。坐落在蜜月湖码头的Blue Willow Tea餐厅提供的传统英式下午茶搭配蜜月湖畔的枫景，惬意的午后总是来得那么的不经意。</p>

<p>&nbsp;</p>

<h4>第四天：赏枫圣地&mdash;&mdash;阿岗昆森林公园</h4>

<p>餐饮：早餐&mdash;&mdash;迦途养生早餐&nbsp; 午餐&mdash;&mdash;公园野餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式大餐</p>

<p>别墅：蜜月湖豪华湖景别墅</p>

<p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

<p>上午，沿着枫叶大道前往赏枫圣地&mdash;&mdash;阿尔岗昆公园，见证枫叶之国的名副其实。</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下午，阿岗昆之大超出您的想象，但我们会带您欣赏到其最美之处。</p>

<p>【行程摘要】</p>

<p>☆枫情万种的森林公园</p>

<p>阿岗昆森林公园（Algonquin Provincial Park）是加拿大最古老的森林公园，其中仅森林的覆盖面积就超过了整个上海市的大小。在这里，自然、野生动物和人类共生共荣，保持着原始而天然的纯粹。而一到秋季，火红的枫树，深黄的杨树和白桦树将大自然渲染的如同一幅精美绝伦枫情万种的画卷。如此绚烂的自然美景若不能亲身感受下岂不可惜。</p>

<p>&nbsp;</p>

<h4>第五天：美加交界&mdash;&mdash;苏圣玛丽</h4>

<p>餐饮：早餐&mdash;&mdash;迦途养生早餐&nbsp; 午餐&mdash;&mdash;镍都简餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;中式自助餐</p>

<p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽三角洲万豪酒店）</p>

<p>行程：清晨：享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。上午：乘车前往G8峰会举办地☆亨茨维尔（Huntsville）游览，参观8国首脑入住的度假村迪赫特度假村Deerhurst Resort。</p>

<p>下午：前往赏枫火车起点城市&mdash;&mdash;☆苏圣玛丽（sault Ste Marie）。途经加拿大的矿业中心☆萨德伯里（Sudbury）。</p>

<p>【行程摘要】</p>

<p>☆亨茨维尔</p>

<p>这里有着让8国首脑都为之沉醉的生态美景。作为加拿大艺术先贤&mdash;&mdash;七人画派的主要取景点之一，每年秋季都有无数的画家从世界各地前来写生创作。</p>

<p>☆萨德伯里</p>

<p>18亿5千万年前一块天外陨石的到来改变了这里的未来，这块陨石使得萨德伯里成为世界上矿藏最丰富的地区之一。世界最大的镍币、动态地质馆、北地科技馆，这个城市还有着许多的宝藏等着你来挖掘。</p>

<p>☆苏圣玛丽</p>

<p>奔腾而过的圣玛丽河将加拿大与美国在这里分隔开来，隔岸对望的美加两个城市却有着相同的名字&mdash;&mdash;苏圣玛丽。在圣玛丽河畔的酒店内往对岸望去，900米外即是美国国土，这奇妙的美景也是旅程中值得回味的一个小小支流。</p>

<p>&nbsp;</p>

<h4>第六天：峡谷赏枫&mdash;&mdash;亚加华峡谷</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;火车简餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;意大利风味晚餐</p>

<p>酒店：苏圣玛丽Delta Hotels by Marriott Sault Ste. Marie Waterfront（苏圣玛丽三角洲万豪酒店）</p>

<p>行程：全天：搭乘☆赏枫专用火车游览亚加华峡谷，在☆亚加华峡谷中深度感受加拿大的秋季。</p>

<p>【行程摘要】</p>

<p>☆亚加华峡谷</p>

<p>亚加华峡谷孕育了加拿大最著名的风景画派&mdash;&mdash;七人画派（the Group of Seven），加拿大的本土画家长期在这里写生，受到峡谷内壮丽的秋季风景的启发，开创出一种不同于欧洲传统画风，真实表现真正的加拿大风貌的绘画风格。在七人画派举世闻名的同时，亚加华峡谷也为世界所知，成为了安大略省最著名的赏枫地之一。</p>

<p>☆赏枫专用火车</p>

<p>秉承了加拿大火车一贯的舒适温馨，亚加华火车之旅一定可以给您带来不一样的赏枫体验。这列火车是唯一可以深入被原住民称为&ldquo;避难所&rdquo;的亚加华峡谷的交通工具，乘坐火车穿行于枫叶与湖泊之间，听着这里的奥金布韦原住民的独特历史，自然离我们很近，近到触手可及。</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<h4>第七天：大自然的鬼斧神工&mdash;&mdash;布鲁斯半岛</h4>

<p>餐饮：早餐&mdash;&mdash;车上简易早餐&nbsp; 午餐&mdash;&mdash;轮渡简餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;英式晚餐</p>

<p>酒店：托伯莫里Big Tub Harbour Resort（海港大木桶度假村）</p>

<p>行程：上午：乘车前往位于乔治亚湾（Georgian Bay）的马尼图林岛（Manitoulin Island），途经游览岛上原住民风光后在South Baymouth乘坐轮渡前往加拿大首个国家海洋公园&mdash;&mdash;☆布鲁斯半岛自然公园（Bruce Peninsula National Park）。</p>

<p>下午：乘坐特色玻璃底游船前往☆花瓶岛，近距离观赏来自冰河世纪的奇妙景致。返回布鲁斯半岛后在☆托伯莫里小镇当地特色餐厅享用极受本地人推崇的☆大白鱼餐。</p>

<p>【行程摘要】</p>

<p>☆布鲁斯半岛自然公园</p>

<p>布鲁斯半岛位于休伦湖的乔治亚湾，是加拿大首个国家海洋公园，这里风景秀美，尤其以水质纯净透彻著称。透过清澈见底的湖水，还可以看到22艘古沉船遗骸沉睡于此。</p>

<p>☆花瓶岛</p>

<p>花瓶岛（Flowerpot Island）之名源于岛上形成于冰河世纪的三尊酷似花瓶的巨石。大自然仿佛一位艺术家，通过大地与湖水的将这三座巨石塑成了伫立于湖面上的美丽的花瓶。</p>

<p>☆托伯莫里小镇</p>

<p>这座美丽的湖滨小镇有着&ldquo;风景明信片&rdquo;的美称。灯塔、码头、颜色鲜艳的欧风建筑构成一幅无死角的画面，让人不由得想将它装进自己的相机里。</p>

<p>&nbsp;</p>

<h4>第八天：全年的度假胜地&mdash;&mdash;蓝山度假村</h4>

<p>餐饮：早餐&mdash;&mdash;蓝山特色早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;海鲜大餐</p>

<p>酒店：蓝山The Westin Trillium House（威斯汀延龄山庄）</p>

<p>行程：上午：徒步游览加拿大最古老、最长的标志性徒步线路&mdash;&mdash;☆布鲁斯径，或是在托伯莫里中体验惬意的小镇生活。</p>

<p>下午：前往☆蓝山度假村，这个滑雪胜地在秋季也是赏枫的好去处，在这里还有许多活动和庆典等着你。</p>

<p>晚上：晚餐后前往☆斯堪的那维亚温泉会所，天然温泉spa是治愈旅途疲惫的最好去处。</p>

<p>【行程摘要】</p>

<p>☆布鲁斯径</p>

<p>布鲁斯径的步道两旁，上万年前的冰川衰退留下的恒基依然清晰可见，每年都有无数的徒步爱好者从世界各地前来感受它永恒的魅力。尤其是从小径往下望去，瑰丽的三色湖水给人以无穷的遐想。</p>

<p>☆蓝山度假村</p>

<p>蓝山度假村除了傲人的自然景色外还拥有众多独特的商店、有人的美食和令人兴奋的节日庆典。</p>

<p>☆斯堪的那维亚温泉会所</p>

<p>斯堪的那维亚温泉会所（Le Scandinave Spa）坚持以纯天然温泉水搭配由远古泥炭沼沉淀形成的沼泽泥，这种堪称世界上最纯净的沼泽泥富含独特的有机物和矿物质，使得这里的温泉有着极高的治疗特性。</p>

<p>&nbsp;</p>

<h4>第九天：畅玩蓝山</h4>

<p>餐饮：早餐&mdash;&mdash;蓝山特色早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp; 晚餐&mdash;&mdash;中式晚宴</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店）</p>

<p>行程：上午：蓝山☆休闲活动，自由选择。</p>

<p>下午：乘车返回多伦多，下榻费尔蒙皇家约克酒店休息。</p>

<p>【行程摘要】</p>

<p>☆蓝山休闲活动</p>

<p>乘坐蓝山Gondola敞篷缆车抵达布鲁斯半岛断崖顶端，秋风拂面，眼前事一片秋意枫情，大可登高一呼，感受豪情万丈。</p>

<p>蓝山的过山车Ridge Runner Mountain Coaster将过山车与兰山的自然环境完美结合，喜欢刺激的朋友一定不能错过。</p>

<p>高空滑索（Timber Challenge），从蓝山山顶以50KM/小时的速度滑行而下，将尼亚加拉断崖地区的每一片风景都尽收眼底，这不仅能使人感到来自身体深处的兴奋，更是一场感官的盛宴。</p>

<p>&nbsp;</p>

<h4>第十天：感受市中心，感受多伦多的历史与活力</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;上海小吃&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;唐人街海鲜晚宴</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店）</p>

<p>行程：上午：乘车前往☆安大略皇家博物馆（Royal Ontario Museum），这座加拿大最大的博物馆永远不会让游客失望。之后走进☆多伦多大学（University of Toronto），感受这所培育出无数英才的世界顶级学府。</p>

<p>下午：前往☆多伦多新旧市政厅，感受加拿大文化的传承和交融。随后来到☆多伦多唐人街（China Town），这里兴起于20世纪50年代，曾是多伦多最繁华喧闹的社区，令人犹如身处香港一般。</p>

<p>【行程摘要】</p>

<p>☆安大略皇家博物馆</p>

<p>这里是加拿大最大、收藏品最多的博物馆，典藏着中国、希腊、埃及、罗马等各个国家的珍贵收藏品。其中这里的中国艺术品收藏是除中国本土外最丰富的，包括有数千块甲骨文以及完整的中国明朝末年袁崇焕手下的著名将军，吴三桂舅舅祖大寿的墓葬等极具历史价值的文物。</p>

<p>☆多伦多大学</p>

<p>多伦多大学是有着悠久历史和杰出科研水平的世界顶级高等学府，这里曾培养过4位加拿大总理，15位最高法院大法官以及10位诺贝尔奖获得者。</p>

<p>☆多伦多新旧市政厅</p>

<p>多伦多新市政厅（Toronto City Hall）紧邻着就是旧市政厅（Old City Hall），被称为&ldquo;天眼&rdquo;的现代化新市政厅建筑与旧市政厅的古典庄严的理查森罗马式建筑风格形成了视觉上的美妙碰撞，置身于市政厅广场仿佛可以见证了加拿大文化的传承。</p>

<p>☆多伦多唐人街</p>

<p>伴随着华人在多伦多的开枝散叶，唐人街已经不再是那个全多伦多最繁华的街区了，但是老华侨在多伦多打拼的剪影已然深深地刻在了这里。当然，来自中国各地的美食也随之一同留了下来，无论是粤菜还是川菜，素斋还是海鲜，在这里总有一种味道是你在寻找的！</p>

<p>&nbsp;</p>

<h4>第十一天：伴随秋风的脚步，探索多伦多市中心的风景</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;湖心岛自理&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;CN Tower塔顶360&deg;旋转餐厅</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店）</p>

<p>行程：上午：乘车前往富豪亨利&middot;米尔&middot;柏拉特爵士为爱妻而建的☆卡萨罗马古堡（Casa Loma），感受20世纪初多伦多最大私人宅邸的典雅与壮丽。</p>

<p>下午：搭乘渡轮前往☆多伦多湖心岛，感受被称为多伦多的宝石的美丽群岛。之后登上被称为世界七大工程奇迹的☆加拿大国家电视塔（CN Tower），远眺安大略湖，体验行走在云端的感觉。</p>

<p>晚上：在☆全球最高的旋转餐厅&mdash;&mdash;&ldquo;CN TOWER 360 Restaurant&rdquo;用餐，感受夜幕下多伦多天际线的魅力。</p>

<p>【行程摘要】</p>

<p>☆卡萨罗马古堡</p>

<p>1911年，亨利拉特男爵为他腿脚不便的妻子修建了这座加拿大第一座古堡庄园。古堡内部装潢精致奢华，依山而建的大花园更是宛如人间仙境。整座古堡处处彰显着男爵对妻子深沉的爱意和当时建筑艺术的辉煌。</p>

<p>☆多伦多的瑰宝&mdash;&mdash;湖心岛</p>

<p>碧空、湖水、白沙、美食，这个紧靠着多伦多天际线的群岛有着一个完美假期所需要的一切条件。在这里随心所欲，自由寻找想带回家的风景吧！</p>

<p>☆加拿大国家电视塔</p>

<p>多伦多的绝对地标！他不仅是加拿大十大国家景观之一，更是一个现代建筑史上的奇迹，也是来到多伦多的游客必访的景点。高的建筑物总会令人兴起征服的欲望，登上塔顶，看着瞭望台玻璃地面下如蚂蚁般微小的地面景物更是令人激动不已。</p>

<p>☆全球最高的旋转餐厅&mdash;&mdash;&ldquo;CN TOWER 360 Restaurant&rdquo;</p>

<p>在这全球最高的旋转餐厅中，享用美食的同时，还能俯瞰多伦多和安大略湖。如果是傍晚上塔，那是最好的选择，既可以看到安大略上的落日余晖，也可以看到全球十大最美夜景城市之一的多伦多华灯初上的美景。</p>

<p>&nbsp;</p>

<h4>第十二天：暂别加国，返程</h4>

<p>航班：多伦多（皮尔逊国际机场）加东时间13:00 &rarr;上海（浦东国际机场）北京时间15:15（+1）</p>

<p><img alt="AC" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC027经济舱&nbsp;&nbsp;&nbsp;飞行时长：14小时15分钟</p>

<p>餐饮：早餐&mdash;&mdash;酒店早餐 &nbsp;&nbsp;午餐&mdash;&mdash;机场简餐 &nbsp;&nbsp;晚餐&mdash;&mdash;飞机晚餐</p>

<p>行程：今日，搭乘加拿大航空公司的国际航班，返回中国温暖的家。</p>

<p>&nbsp;</p>

<h4>第十三天：温暖的家</h4>

<p>北京时间16:20抵达上海浦东国际机场。</p>

<p>&nbsp;</p>

<p>&nbsp;</p>



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
