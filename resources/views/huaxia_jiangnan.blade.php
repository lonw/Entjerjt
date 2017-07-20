@extends('layout')
@section('content')
@include('header')

    <div style="position: fixed;z-index: -1000;top: 0;">
    <img src="/images/huaxia/east/jiangnan/backgroud.jpg">
    </div>
    <div style="position: fixed;z-index: -999;top: 0;background: rgba(255,255,255,0.6);width: 100%;height: 100%">
    </div>

    <div style="background-color: rgba(241, 220, 146, 0.72);width: 90%;margin: 0 auto;color: black;">
        <div style="padding: 3vw 5vw">
            <p class="" style="font-size: 5vw;color: black;font-family: 'SimSun';">江南行</p>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style=""></br><span class="huaxia_content" style="">&emsp;&emsp;五千年的中华文明源远流长，也在中国这片广袤的土地上孕育了无数灿烂的文化。顺着扬子江一路奔流，在汇聚入东海的那一隅悠然内敛的土地，便是江南。这里有苍莽青山，云雾环绕似人境仙都的丽水；汪洋大海，百舸争流驰海上牧场的嵊泗。也有东方明珠，孕育无数传奇的上海和南宋古都，牵萦多少文人墨客的杭州。</span>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style=""><img src="/images/huaxia/east/jiangnan/top.png" style="width: 100%;"></div>
            <div style='clear: both'></div>
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
                      <input type="hidden" name="title" value="江南行">
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


    <div style="position: relative;"><img src="/images/huaxia/east/jiangnan/shang-si/2.png" style="width: 100%"><a class="jiangnan_btn" href="huaxia_jiangnan_chengsi" >嵊泗风貌</a></div>
<!-- day1 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days" >
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/1.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle" >
                多伦多-上海
            </div><div style='clear: both'></div>
        </div>
        <div  style="border: 1px solid black;border-radius: 1vw;padding: 3vw 0;box-shadow: 2px 2px 1px #888888;margin-bottom: 1vw; background-color: rgba(255, 255, 255, 0.3);">

                <div class="col-md-5 col-sm-5 col-lg-5 col-xs-5">
                    <img src="/images/huaxia/east/jiangnan/15.png" style="height: 10vw;margin-left: 3vw">
                </div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content">回归华夏，品味江南的气度与典雅。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day2 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days" style="">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg" style="">
                <img src="/images/huaxia/east/jiangnan/2.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                上海-嵊泗
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder" style="">

            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg" style="">
                <img src="/images/huaxia/east/jiangnan/shang-si/1.jpg" style="">
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext" style="">
                 &emsp;&emsp;从小洋山国际港出发，追寻着海洋的气息，乘坐客轮前往嵊泗枸杞岛开启我们的江南行第一站。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border"  style="">

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext" style="">&emsp;&emsp;一顿丰盛的海鲜大餐在枸杞岛等着您哟。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/3.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;“山海奇观”，这座由明朝都督侯继高亲手撰刻的石碑屹立在峰顶，仿佛诉说着400年前在血雨腥风的抗倭时期，唯有这仙境般的小岛能给予他们一份安宁。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/4.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;“大王沙滩”------湛蓝的天空、碧绿的海水再辅以金色的沙滩。在这里淌淌海水，晒晒太阳。这样一个悠闲愉悦的下午，您喜欢么？
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/5.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;您知道枸杞最美的是什么吗？是那万亩绝美的百年海上牧场。在这枸杞最美的地方欣赏一天最美的日落，看着太阳缓缓隐入海面，这份浪漫千金难求。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;听着涛声，吹着微风，品尝着我们为您精心准备的海鲜大餐。饭后您也可以沿海漫步，聆听着悠扬的海水冲刷着沙滩、海岸的声音，我想今晚您一定能睡个好觉。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day3 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/3.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                嵊泗
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/6.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;如果您想观赏日出的霞光万道，那么您一定要去东崖绝壁------这个中国的东极所在。连绵数千米的绝壁上存留着明清时期的摩崖石刻，笔锋雄健，带您穿越古今。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;海鲜的种类数不胜数，这次的午餐我们又将为您奉上不同的美味。记得饭后小憩一会，下午还有出海的项目哦。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/7.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;小憩过后，我们出海捕鱼咯！拖网捕鱼、拔笼抓蟹、静心海钓、环岛观光。在这悠然的气氛中感受着渔家生活的多姿多彩。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;是时候品尝自己的劳动果实了~最“透骨新鲜”的海鲜都是由您亲手捕捉，相信这餐晚饭吃起来一定是格外香甜可口。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day4 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/4.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                嵊泗
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/8.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;一桥之隔的嵊山岛是全中国最东端的人居岛，公海近在您的眼前。而就在这祖国边疆却有着您无法想象的童话世界-----后头湾。在这“绿野仙踪”内相信您一定会感叹自然的神奇与时间的力量。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;这方北纬三十度海域的神奇定能让您品尝到全中国最地道的“生猛”海鲜，随后我们将乘船前往泗礁岛。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/9.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;抵达泗礁岛稍作休整后我们将带您前往和尚套六井潭景区。那里怪石嶙峋，峭壁陡峭。面朝茫茫东海，眼前是海天一色，耳畔是惊涛拍岸，这里是观海静心，感受海之胸怀的最佳之处。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;饭后可以漫步于基湖沙滩，那里有家“北纬三十度”小酒吧。看着海，喝着酒，这时的您也是“海量”哦。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day5 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/5.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                嵊泗
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext"> &emsp;&emsp;早上不妨逛逛岛内的菜园小镇，感受下岛内淳朴的民风、可口的小吃和慢节奏的生活。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/10.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;大悲山——嵊泗的佛山，也是唐朝高僧鉴真大师东渡日本的泊船点。大悲山的观景台是泗礁岛海拔最高处，在此鸟瞰群岛，大小百余岛屿净收眼底。山中清同治年间所建的灵音寺山环水抱、香烟缭绕，不妨进去静心一番。
     当然大悲山美的可不止山顶的风光，山下还有极具特色的渔民画陈列馆和沙艺术馆，您可不能错过。
            </div><div style='clear: both'></div>
        </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/shang-si/11.png" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;享有“南方北戴河”之称的基湖沙滩，依山傍海，呈弯月形微倾入海。这里是华东最大的沙滩，在这游泳嬉戏一番后，边上的烧烤城绝对让您食指大开。烤鱼配啤酒，美味口中留。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;海边的小吃街可不能错过，您可以吃着小吃吹着海风，偶尔还能听到港内归家的轮船的汽笛声，这种感觉在别的地方可不一定能体验到哦。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day6 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/6.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                嵊泗——杭州
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;午饭过后让我们暂时与这座美丽的充满着蓝与绿离岛说声再见，我们将启程前往下一站-------人间天堂杭州。</div><div style='clear: both'></div>
            </div>
    <div style="padding: 3vw 0;position: relative;"><img src="/images/huaxia/17.jpg" style="width: 100%"><a class="jiangnan_btn" href="huaxia_jiangnan_hangzhou">杭州风貌</a></div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/1.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;“山外青山楼外楼，西湖歌舞几时休。”晚餐我们就前往这家道光年间的名餐馆----楼外楼，品尝最正宗地道的杭帮菜。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/2.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;沿着孤山往白堤一路走去，您会看到在夜色下西子湖不同白日的诱人一面，灯光勾勒出的断桥、宝石山和雷峰塔倒映在湖中，将西子湖妆点得更是明媚动人。
            </div><div style='clear: both'></div>
        </div>
    </div>

    <!-- day7 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/7.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                杭州——丽水
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/3.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;宝石山初阳台是西湖日出的最佳观赏点。当朝阳洒沐之时，火成岩构成的山体仿佛数不清的宝石般熠熠生辉，像是山的灵魂在为新的一天的到来而欢呼雀跃。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/4.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;“青山有幸埋忠骨” 岳坟自南宋以来便是人们凭吊抗金名将、民族英雄岳飞的圣地。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/5.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;西湖美景四季各有花魁，论赏荷唯有曲院风荷。曲院风荷中栽种的上百种荷花与西子湖正构成了一幅“接天莲叶无穷碧，印日荷花别样红”的国画长卷，仿佛连盛夏的暑气都在这样的美景面前消散了。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/6.png" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;灵隐寺藏于北高峰与飞来峰之中，始建于东晋时期，距今已有近1700年历史。古朴大气的殿宇，古木森森，云烟袅袅，自有天下禅宗五山十刹的庄严和气度。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;灵隐寺内的云林佛斋在全亚洲佛教界都享有极高的声誉。南宋以来三百余道秘传净素菜肴，七大省顶级特产时鲜蔬果直供，云林佛斋已然成为素斋中的“御膳房”。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/7.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;飞来峰乃是佛教禅宗五山之首，山体上雕刻着470余尊时代跨度从五代十国时期至明朝的佛像石雕，其中最著名的是“大肚能容天下难容之事”的大肚弥勒和十八罗汉群像。。在这枸杞最美的地方欣赏一天最美的日落，看着太阳缓缓隐入海面，这份浪漫千金难求。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/8.png" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;龙井问茶景区是中国十大名茶之首----龙井茶的故乡，在龙井山上择一清雅幽静的店家坐下，品上一壶明前龙井，正可以涤去身体与心灵的疲惫。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/5-7/9.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;南屏山下的雷峰塔在《白蛇传》中成就了白娘子与许仙的爱情中最凄美的一部分。而西湖十景中的它自古有“湖上两浮屠，雷峰如老衲，保俶如美人”之誉，不知是雷峰塔刻画了法海的老僧形象还是法海充实了雷峰塔的“老衲”之名？
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;雷峰塔行程结束后，我们将告别这座文化古城。前往丽水，去体验“天然氧吧”的纯净。</div><div style='clear: both'></div>
            </div>
    <div style="padding: 3vw 0;position: relative;"><img src="/images/huaxia/east/jiangnan/7-11/1.png" style="width: 100%"><a class="jiangnan_btn" href="huaxia_jiangnan_lishui">丽水风貌</a></div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/2.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;漫步于瓯江边的防洪坝上，一边体验小城的悠闲生活，一遍瞻仰这座百年古城的历史沧桑。
            </div><div style='clear: both'></div>
        </div>
    </div>

    <!-- day8 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/8.png" >
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                丽水
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/3.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;重峦叠嶂的南尖岩，顺着山脚优哉游哉的往上爬，四周一阵风吹草动的窸窣声，苍松翠竹，流泉淙淙，云蒸霞蔚，偶尔阵阵鸟鸣传来，实在是对心灵的一种洗礼。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

               <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;登山不仅是为了沿途的美景，更有美味的山珍供您休息时尽情品尝。</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day9 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/9.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                丽水
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/4.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;早起的鸟儿有虫吃，早起的人儿看日出。如果精神充沛，山上的日出，实在是个绝妙的选择。下山后，神龙谷景区内那百十丈余的瀑布，仿佛如一条巨龙在缓缓的苏醒。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;原生态的农庄，也给这无限美好的绿色增添一份绝佳的味道。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/5.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;说起文化怎能不提享誉中外的戏曲。而有着“东方莎士比亚”之称的汤显祖就曾生活在这美丽的山城中，我们怎能错过。。在这枸杞最美的地方欣赏一天最美的日落，看着太阳缓缓隐入海面，这份浪漫千金难求。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;望着江南水乡的韵味，呷几口自家酿造的美酒，人生岂不美哉？</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/6.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;不同于传统的江南水乡，古堰画乡有着许多淳朴的少数民族，他们在这里繁衍生息了1500多年，为古镇增添了别样的色彩。
            </div><div style='clear: both'></div>
        </div>
    </div>

    <!-- day10 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/10.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                丽水
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/7.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;龙泉凤阳山自然保护区。这里拥有着诸多种类的濒危动植物。比如白豆杉、南方铁山、银种树等珍贵植物；另外类似金钱豹、猕猴、苏门羚、大鲵等珍贵动物也都栖息于此地。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/8.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;觥筹交错，在这龙泉剑的故乡，我们也充当一回江湖豪杰吧。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;在这龙泉剑乡，您是否有种想要小酌一番的冲动呢？</div><div style='clear: both'></div>
            </div>
    </div>

    <!-- day11 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/11.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                丽水——上海
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/9.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;“黄帝旌旗去不回，片云孤石独崔嵬。有时风激鼎湖浪，散作青天雨点来”白居易曾这样描绘这片人间仙都。漫步于此，纵使万般烦恼都消散于这广阔的天地间。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;农家菜有着不一样的风味，不妨让我们来充当一回农家的主人，品尝这最原生态的食物。</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/7-11/10.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;“两岸猿声啼不住，轻舟已过万重山。”乘坐竹排在湖中前行，看看两旁野趣横生的自然风光，是否你也想吟诗一首呢？
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">下一站，东方巴黎-----上海。</div><div style='clear: both'></div>
            </div>

    <div style="padding: 3vw 0;position: relative;"><img src="/images/huaxia/15.jpg" style="width: 100%"><a class="jiangnan_btn" href="huaxia_jiangnan_shanghai">上海风貌</a></div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/22.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;上海是一座充满着时代气息的城市，此行您所下榻的地方自然也不例外。浦江饭店，这家创造了远东地区无数个第一的“神话”酒店。您的体验将与当年的卓别林、爱因斯坦他们无二。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/2.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;外滩，这推开窗便触手可及的夜上海“美色”正在强烈地呼唤和诱惑着您。 站在窗前一低头，“十里洋场”的浮光跃金仿佛要将您卷入历史的波浪中；乍一抬头，黄浦江对岸的陆家嘴中央商务区会用最强有力的视觉冲击将您带回现代“魔都”上海。
            </div><div style='clear: both'></div>
        </div>
    </div>
    <!-- day12 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/12.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                上海
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/23.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;走出浦江，映入您眼帘的就是这座上海现代化与工业化的象征------外白渡桥。全中国第一座全钢结构铆接桥梁和仅存的不等高桁架结构桥。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/3.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;和平饭店，这座上海近代建筑史上第一幢现代派建筑。每一间房间都有着属于他的传奇。如果说配合着老爵士酒吧里演奏的上世纪三四十年代欧美爵士流行曲，相信会让您在情动之时回到那老上海公租界的奢靡时代。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;素斋亦可口。功德林，这家百年老字号、素食鼻祖。这次就带您一饱口福！</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/31.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;陈毅元帅曾经的官邸，超过55000平米的花园绿地。这里的的每幢别墅都陈列着精雕细刻的、具有民族特色的古董，显得富丽堂皇、高雅别致，独家呈现20世纪初黄金时代老上海的雍容华贵。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/8.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;一个世纪前，法国人从万里之外将这些法国梧桐带到了上海霞飞路落地生根；百年后的今天，当年的小树苗已经成为了一棵棵参天大树，更衬得现在的淮海中路比起当年名噪一时的霞飞路更多了一份沉淀和从容。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/5.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;在繁华的淮海路上有着这样一处闹中取静的“桃源”，这座新巴洛克风格的法国宫廷建筑曾是上世纪旧上海法租界名流荟萃，辉煌一时的最主要社交场所---------法国俱乐部。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/4.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;您是否以为香港的跑马场是最早的？其实不然甚至可以说香港的跑马场是以他为标杆的。他就是人民广场，这个曾经远东地区最著名的跑马场，这个曾经各国贵族集会之地，这个凝聚了老上海政治、经济和文化的“活历史”。
            </div><div style='clear: both'></div>
        </div>
         <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;游览完人民广场后，在南京路自由活动，南京路上可不仅只有四大百货和数百家商铺。这里面也是“吃货”的天堂哟，各式各样的餐馆、美味可口的小吃街。怎么样？流口水了么？</div><div style='clear: both'></div>
            </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/9.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;南京路-----上海开埠后的第一条商业街，四大百货公司创造了无数的亚洲第一，这些辉煌与荣耀仿佛一颗颗的“钻石”般为她的“皇冠”加持。如今的她在传统与现代的激情碰撞中更有了独属于她的魅力。
            </div><div style='clear: both'></div>
        </div>
    </div>
    <!-- day13 -->
    <div style="border-bottom: 1px solid black">
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/13.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                上海
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/6.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;我们都知道上海有十大著名的花园洋房，但是你知道哪座是首尊么？——丁香花园。可能你没听说过这个名字，但是这间房子的主人你肯定是如雷贯耳。那就是与俾斯曼，格兰特并称“十九世纪世界三大伟人”之一的李鸿章。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/2.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;上海小吃数不胜数，不仅有上海本地的名小吃，更有融合世界各地精髓的特色小吃，就让我们带您去吃个够！</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/7.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;田子坊，坐落在陆家嘴西边，她没有高楼大厦，没有汽车高架，她有的只是一栋栋的上海式老房子。或许您会在这里驻足，喝一杯咖啡，逛一逛小店，书吧看一会书，享受一个恬静的下午时光。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_border" >

                <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
                    <img src="/images/huaxia/3.jpg" >
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3 jiangnan_Bspace" style=""></div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_Btext">&emsp;&emsp;做为国际大都市，上海的美食也必定缺不了各国的风味美食。现在，“换上你笔挺的西装，系上你最好的领带”，去领略外滩5号的美食！</div><div style='clear: both'></div>
            </div>
            <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/35.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                  &emsp;&emsp;“远东最大的码头”“上海的水上门户”，等等数不清的过往荣誉与写不完的不朽传奇，十六铺码头承载着上海人文历史的记忆。感受下吧，上海动荡时期唯一一个属于华人的避风港湾。
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/11-14/26.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;陆家嘴的夜晚是“不夜城”上海最好的象征。他坐拥“世界三大高度”，他是中国最具影响力的金融中心。就让我们站在上海中心大厦的顶楼，去俯瞰下整个中国金融的心脏吧！
            </div><div style='clear: both'></div>
        </div>
    </div>
    <!-- day14 -->
    <div >
        <div class="jiangnan_days">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 jiangnan_dayImg">
                <img src="/images/huaxia/east/jiangnan/14.png">
            </div>
            <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 huaxia_subTitle">
                上海---多伦多
            </div><div style='clear: both'></div>
        </div>
        <div class="jiangnan_noBorder">
            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 jiangnan_noBImg">
                <img src="/images/huaxia/east/jiangnan/16.jpg" >
            </div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 huaxia_content jiangnan_noBtext">
                 &emsp;&emsp;暂别华夏，让我们下次再会。
            </div><div style='clear: both'></div>
        </div>
    </div>

    <div style="padding: 3vw 0;"><img src="/images/huaxia/21.png" style="width: 100%"></div>
    <div class="huaxia_content" style="width: 80%;font-weight: bold;margin:0 auto">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;上海滩的历史过往我们数也数不清楚，看也看不完。但可惜的是我们这趟旅程也到了暂时说再见的时候。不管是“东海离岛” 嵊泗，“人间天堂” 杭州，还是“碧谷仙都”丽水和“东方巴黎”上海；希望让您留下了美好的回忆。世界那么大，迦途愿您再次起航。</div>

<div style="height: 3vw"></div>
     <a href="huaxia" class="reYiyou"></a>
    <div style='clear: both'></div>

    <div style="width: 100%;height: 10vh"></div>


    </div>









<div style='clear: both'></div>


@include('footer')
@stop
@section('scripts')




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <link href='/css/fullcalendar.css' rel='stylesheet' />
  <link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='/js/jquery.min.js'></script>
  <script src='/js/jquery-ui.custom.min.js'></script>
  <script src='/js/fullcalendar.min.js'></script>


<script type="text/javascript">

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
