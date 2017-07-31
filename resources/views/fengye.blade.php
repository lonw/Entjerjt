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
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/1.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/1.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/2.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/2.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/3.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/3.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/4.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/4.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/5.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/5.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/6.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/6.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/7.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/7.jpg" />
              </div>
                <a data-u="any" href="http://www.jssor.com" style="display:none">Image Slider 2</a>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/8.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/8.jpg" />
              </div>
              <div>
                  <img u="image" src="/images/jiatu/fengye/fy-gallery/9.jpg" />
                  <img u="thumb" src="/images/jiatu/fengye/fy-gallery/9.jpg" />
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
                      <input type="hidden" name="title" value="迦途四季·枫叶尊享">
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

<p>航班：上海（浦东国际机场）北京时间17:10 &rarr; 多伦多（皮尔逊国际机场）加东时间19:00</p>

<p><img alt="AC" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC&nbsp;028经济舱&nbsp;&nbsp;&nbsp;飞行时长：13小时50分钟</p>

<p>餐饮：早餐&mdash;&mdash;飞机早餐 &nbsp;&nbsp;午餐&mdash;&mdash;飞机午餐 &nbsp;&nbsp;晚餐&mdash;&mdash;迦途特制点心</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店&mdash;&mdash;多伦多Downtown地标建筑）</p>

<p>行程：今日，搭乘加拿大航空公司的国际航班，前往枫叶之国&mdash;&mdash;加拿大，开启一场枫叶的盛宴。抵达后，入住多伦多市中心地标性建筑费尔蒙皇家约克酒店。</p>

<p>【行程摘要】</p>

<p>☆英联邦国家永恒的骄傲&mdash;&mdash;费尔蒙皇家约克酒店</p>

<p>1929年皇家约克酒店正式开业，是当时所有英联邦国家中最大最豪华的酒店，也是当时所有英联邦国家中最高的建筑。迄今为止，皇家约克酒店总计接待客人超过4千万，英国皇室家族的三代曾在皇家套房酒店里住过。这里不仅是多伦多最顶级的酒店之一，更是加拿大繁荣发展的见证者。</p>

<p>&nbsp;</p>

<h4>第二天：感受多伦多市中心的历史与活力</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;公园午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;唐人街海鲜晚宴</p>

<p>酒店：多伦多Fairmont Royal York（费尔蒙皇家约克酒店）</p>

<p>行程：上午：乘车前往☆安大略皇家博物馆（Royal Ontario Museum），这座加拿大最大的博物馆永远不会让游客失望。之后走进☆多伦多大学（University of Toronto）感受这所培育出无数英才的世界顶级学府。</p>

<p>下午：前往☆多伦多新旧市政厅，感受加拿大文化的传承和交融。随后来到☆多伦多唐人街（China Town），这里兴起于20世纪50年代，曾是多伦多最繁华喧闹的社区，令人犹如身处香港一般。</p>

<p>【行程摘要】</p>

<p>☆安大略皇家博物馆</p>

<p>这里是加拿大最大、收藏品最多的博物馆，典藏着中国、希腊、埃及、罗马等各个国家的珍贵收藏品。其中这里的中国艺术品收藏是除中国本土外最丰富的，包括有数千块甲骨文以及完整的中国明朝末年袁崇焕手下的著名将军，吴三桂舅舅祖大寿的墓葬等极具历史价值的文物。</p>

<p>☆多伦多新旧市政厅</p>

<p>多伦多新市政厅（Toronto City Hall）紧邻着就是旧市政厅（Old City Hall），被称为&ldquo;天眼&rdquo;的现代化新市政厅建筑与旧市政厅的古典庄严的理查森罗马式建筑风格形成了视觉上的美妙碰撞，置身于市政厅广场仿佛可以见证了加拿大文化的传承。</p>

<p>☆多伦多唐人街</p>

<p>伴随着华人在多伦多的开枝散叶，唐人街已经不再是那个全多伦多最繁华的街区了，但是老华侨在多伦多打拼的剪影已然深深地刻在了这里。当然，来自中国各地的美食也随之一同留了下来，无论是粤菜还是川菜，素斋还是海鲜，在这里总有一种味道是你在寻找的！</p>

<p>&nbsp;</p>

<h4>第三天：&ldquo;雷神之水&rdquo;响彻美加两岸&mdash;&mdash;尼亚加拉瀑布</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;湖滨野餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;瀑布景牛排晚宴</p>

<p>酒店：蜜月湖豪华湖景别墅</p>

<p>行程：上午：乘车前往美加边境，游览世界七大自然奇迹之一的☆尼亚加拉大瀑布。途中参观☆葡萄酒酒庄，品尝加拿大著名的VQA冰酒。之后乘车前往&ldquo;世界七大童话小镇&rdquo;之一的☆尼亚加拉湖滨小镇。</p>

<p>下午：驱车前往大瀑布后乘坐&ldquo;雾中少女&rdquo;号游船，近距离感受大瀑布的恢弘。之后，乘车前往世界闻名的蜜月湖度假区，入住☆湖滨豪华别墅。</p>

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

<h4>第四天：畅游世界顶级度假胜地&mdash;&mdash;蜜月湖</h4>

<p>餐饮：早餐&mdash;&mdash;☆迦途养生早餐&nbsp; 午餐&mdash;&mdash;邮轮午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;别墅内中式晚宴</p>

<p>酒店：蜜月湖豪华湖景别墅</p>

<p>行程：上午：前往☆白求恩故居进行参观。</p>

<p>下午：乘坐北美最古老的☆蒸汽船&mdash;&mdash;皇家邮船游览蜜月湖沿岸。下船后在码头享用精致美味的☆英式下午茶。</p>

<p>【行程摘要】</p>

<p>☆迦途养生早餐</p>

<p>享用迦途特制养生早餐，精选加拿大最优质、最健康的食材，由迦途的私家主厨精心烹饪。辅以周边醉人风景与沁心空气，让养生伴随在游山玩水之中。</p>

<p>☆国际主义战士&mdash;&mdash;白求恩</p>

<p>诺曼&middot;白求恩（Norman Bethune）是加拿大著名的胸外科医生和国际主义战士。二战期间，他在欧洲和亚洲的反法西斯战场上拯救了无数的生命。故居完整保留了白求恩居住时的样子，陈列着他生活的照片和实物。</p>

<p>☆传奇邮船&mdash;&mdash;RMS Segwun</p>

<p>RMS Segwun是世界上仅剩的四艘仍在航行的皇家邮船（Royal Mail Ship）之一。同时也是全北美最古老的燃煤蒸汽船。在这艘富有传奇色彩的邮船的带领下，我们将饱览世界级度假地&mdash;&mdash;蜜月湖的美景。</p>

<p>☆下午茶&mdash;&mdash;像英国人一样渡过一个下午</p>

<p>下午茶&mdash;&mdash;直深受英联邦国家人民的喜爱。坐落在蜜月湖码头的Blue Willow Tea餐厅提供的传统英式下午茶搭配蜜月湖畔的枫景，惬意的午后总是来得那么的不经意。</p>

<p>&nbsp;</p>

<h4>第五天：赏枫圣地&mdash;&mdash;阿岗昆森林公园</h4>

<p>餐饮：早餐&mdash;&mdash;迦途养生早餐&nbsp; 午餐&mdash;&mdash;加拿大特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;欧式大餐</p>

<p>酒店：☆渥太华Fairmont Chteau Laurier（费尔蒙劳里埃城堡酒店）</p>

<p>行程：上午：乘车前往赏枫胜地&mdash;&mdash;☆阿岗昆森林公园游览。</p>

<p>下午：游览阿岗昆森林公园后乘车前往加拿大的首都☆渥太华，当晚下榻于☆渥太华费尔蒙劳里埃城堡酒店（Fairmont Chteau Laurier）。</p>

<p>【行程摘要】</p>

<p>☆枫情万种的森林公园</p>

<p>阿岗昆森林公园（Algonquin Provincial Park）是加拿大最古老的森林公园，其中仅森林的覆盖面积就超过了整个上海市的大小。在这里，自然、野生动物和人类共生共荣，保持着原始而天然的纯粹。而一到秋季，火红的枫树，深黄的杨树和白桦树将大自然渲染的如同一幅精美绝伦枫情万种的画卷。如此绚烂的自然美景若不能亲身感受下岂不可惜。</p>

<p>☆渥太华费尔蒙劳里埃城堡酒店（Fairmont Chteau Laurier）</p>

<p>费尔蒙劳里埃城堡酒店位于渥太华的中心地段，毗邻加拿大议会大厦和里多运河，是渥太华的百年地标建筑。这座城堡酒店以其奢华内敛的古典装修和一个多世纪来收集的古董家具征服了各国名流，成为了多国元首和各大明星来渥太华的不二之选。</p>

<p>&nbsp;</p>

<h4>第六天：游览加国权力的中心&mdash;&mdash;渥太华</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;中式海鲜大餐</p>

<p>酒店：☆蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

<p>行程：上午：乘车前往☆国会山建筑群（Parliament Hill）游览。进入国会大厦深度参观加拿大的政治中心。前往渥太华最古老的市场&mdash;&mdash;☆拜沃德农贸市场（ByWard Market），感渥太华街巷之中隐藏的美食和街头艺术表演。</p>

<p>下午：乘车前往加拿大第二大城市&mdash;&mdash;☆蒙特利尔（Montr&eacute;al），开启加拿大法语区之旅。抵达后下榻于☆费尔蒙伊丽莎白女王酒店（Farimont The Queen Elizabeth）。</p>

<p>【行程摘要】</p>

<p>☆加拿大国会山</p>

<p>国会山是加拿大的权力象征，人们几乎能再渥太华的任意一个角落望见这威严的建筑群。过会大厦前广场上的奇观&mdash;&mdash;水中的世纪圣火（Centenial Flame），设立于加拿大成立100周年，至今已经熊熊燃烧了50年。</p>

<p>☆拜沃德农贸市场</p>

<p>拜沃德市场是渥太华最大的也是最老的农贸市场，它距离渥太华和国会山都很近，这里除了有当地农户自产自销最新鲜的农副产品外，还有咖啡馆、各种食品店、精品店、画廊、餐馆、美容等，是非常适合慢下脚步，休闲逛街的地方。</p>

<p>☆蒙特利尔</p>

<p>这座有着400年历史的移民城市素来有着&ldquo;小巴黎&rdquo;的雅号，这里是世界上仅次于巴黎的第二大的法语城市。这座城市经历了从18世纪的&ldquo;法兰西第二帝国&rdquo;到20世纪的&ldquo;经济与工业中心&rdquo;再到如今的&ldquo;世界设计之都&rdquo;的多次转型，多元的文化和无与伦比的历史底蕴给了这座城市讲不完的传奇故事。</p>

<p>☆费尔蒙伊丽莎白女王酒店</p>

<p>酒店坐落于蒙特利尔市的心脏，享有得天独厚的交通便利。酒店内直接连通着蒙特利尔著名的☆地下城（Undergroud City），距离大博物馆和购物区同样只有几步之遥。这里接待过包括英国皇室、法国总统在内的上百位国家元首以及披头士乐队等世界巨星。</p>

<p>&nbsp;</p>

<h4>第七天：探索&ldquo;小巴黎&rdquo;&mdash;&mdash;蒙特利尔</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;特色午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;☆高级法餐</p>

<p>酒店：蒙特利尔Fairmont The Queen Elizabeth（费尔蒙伊丽莎白女王酒店）</p>

<p>行程：上午：登上皇家山（Mount Royal），从孔迪亚龙克观景台俯瞰蒙特利尔城市全景。随后，参观北美最大的天主教堂&mdash;&mdash;☆圣约瑟夫大教堂（St. Joseph&rsquo;s Oratory）。</p>

<p>下午：前往☆蒙特利尔奥林匹克公园（Montr&eacute;al Olympic Park）游玩。然后前往☆诺特丹圣母大教堂（Notre-Dame Basilica），近距离感受350余年蒙特利尔天主教教史，回到欧洲殖民者最辉煌的历史时分。</p>

<p>【行程摘要】</p>

<p>☆圣约瑟夫大教堂</p>

<p>圣约瑟夫大教堂坐落于皇家山的北面。教堂之大，令人炫目，世界上只有梵蒂冈圣保罗大教堂的圆顶能与之媲美。这里是受到教皇认同的显圣之地，传说这里的灯油可以治愈令人行动不便的疾病。</p>

<p>☆蒙特利尔奥林匹克公园</p>

<p>这里是1976年夏季奥运会的主场地，这座露天运动场以及倾斜的塔台已成为蒙特利尔的一个象征。天气好的时候，您可以搭乘观光电梯抵达塔台顶端，一览无遗的欣赏蒙特利尔市区风光和圣劳伦斯河的迷人风景。</p>

<p>☆诺特丹圣母大教堂</p>

<p>诺特丹圣母大教堂被誉为北美最重要的天主教教堂。这座哥特式罗马天主教的宗教圣殿，其建筑风格与巴黎圣母院被称为姊妹。真正令人震撼的时期内部的金碧辉煌的装饰和众多的艺术品文物。几乎所有进入教堂的游客都会被会有350余年蒙特利尔传教历史的教堂花窗所折服。</p>

<p>☆顶级创意法餐&mdash;&mdash;Europea餐厅</p>

<p>风情的用餐环境，精致的餐点，Europea餐厅是当地人烛光晚餐的首选圣地。鹅肝、松茸、牛排都是他家的招牌美食。每天更有层出不穷的创意甜点给人以无限惊喜。在Europea用餐，吃的不仅仅是食物，更是一种浪漫。</p>

<p>【景点】如遇天气变化，如雨天。则将皇家山行程更改为蒙特利尔地下城行程。</p>

<p>&nbsp;</p>

<h4>第八天：探索世界遗产名城&mdash;&mdash;魁北克城</h4>

<p>餐饮：早餐&mdash;&mdash;酒店早餐&nbsp; 午餐&mdash;&mdash;☆枫糖山庄午餐&nbsp;&nbsp;&nbsp; 晚餐&mdash;&mdash;☆高级法餐</p>

<p>酒店：☆魁北克Fairmont Le Chateau Frontenac（费尔蒙芳提娜城堡酒店）</p>

<p>行程：上午：乘车前往加拿大第一座城市&mdash;&mdash;☆魁北克市。途中在☆枫糖庄园（Cabane a Sucre）享用加拿大特色午餐。</p>

<p>下午：游览魁北克老城区（Old Quebec）。感受北美最古老的商务街&mdash;&mdash;☆小香普兰街的浪漫；流连于世界遗产费尔蒙芳提娜城堡酒店（Fairmont Le Chateau Frontenac）。</p>

<p>【行程摘要】</p>

<p>☆加拿大农家乐&mdash;&mdash;枫糖山庄午餐</p>

<p>在魁北克的枫糖山庄用餐时加拿大独特的&ldquo;农家乐&rdquo;文化。无论是地道的烘豆、鸡蛋饼、肉馅派等本地传统美食，还是民谣、手风琴、随性舞蹈等洋溢乡村风情的活动，都是在大都市里体验不到的美妙。</p>

<p>☆费尔蒙芳提娜城堡酒店</p>

<p>这里是世界上最豪华的酒店之一，丘吉尔和艾森豪威尔曾在这里会晤，罗斯福、伊丽莎白女王等也曾下榻这里。作为世界上影视作品里出镜次数最多的酒店，这里就是许多人梦中真正的城堡的样子，同时也是古老。奢华、文化和历史的象征。</p>

<p>☆小香普兰街</p>

<p>这条不足意力长的街道，是北美最古老也是最繁荣的古商业街，这里的一花一石都洋溢着法式的热情和活力。这条富有浪漫气息，且让人感觉无比温馨的小街有着魁北克旧城区独有的魅力，最是适合休闲散步。</p>

<p>☆经典法国大餐&mdash;&mdash;Initiale餐厅</p>

<p>来到魁北克一定不能错过这里独树一帜的法式大餐，Initiale餐厅是一家拥有北美五钻评级（AAA/CAA Five Diamond Rating）的正统法式餐厅。再挑剔的食客都不会拒绝这里的9道式法式大餐。</p>

<p>&nbsp;</p>

<h4>第九天：暂别加国，返航</h4>

<p>航班：蒙特利尔（皮尔逊国际机场）加东时间13:30 &rarr; 上海（浦东国际机场）北京时间15:25（+1）</p>

<p>&nbsp;&nbsp;<img alt="AC" src="/images/jiatu/aircanada.png" style="height:16px; width:20px" />加拿大航空公司&nbsp;AC&nbsp;017经济舱飞行时长：13小时55分钟</p>

<p>餐饮：早餐&mdash;&mdash;酒店早餐 &nbsp;&nbsp;午餐&mdash;&mdash;机场简餐 &nbsp;&nbsp;晚餐&mdash;&mdash;飞机晚餐</p>

<p>行程：今日，搭乘加拿大航空公司的国际航班，返回中国温暖的家。</p>

<p>&nbsp;</p>

<h4>第十天：温暖的家</h4>

<p>北京时间15:25抵达上海浦东国际机场。</p>

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
