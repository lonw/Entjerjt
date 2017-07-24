@extends('layout')

@section('content')
@include('header')


  <div class="container">
    <div class="row form-group">
          <div class="col-md-12">
              <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                  <li class="active"><a href="#step-1">
                      <h4 class="list-group-item-heading">第一步</h4>
                      <p class="list-group-item-text">个人信息</p>
                  </a></li>
                  <li class="disabled"><a href="#step-2">
                      <h4 class="list-group-item-heading">第二步</h4>
                      <p class="list-group-item-text">核对信息</p>
                  </a></li>
                  <li class="disabled"><a href="#step-3">
                      <h4 class="list-group-item-heading">第三步</h4>
                      <p class="list-group-item-text">支付（未开通）</p>
                  </a></li>
                  <li class="disabled"><a href="#step-4">
                      <h4 class="list-group-item-heading">第四步</h4>
                      <p class="list-group-item-text">完成预定</p>
                  </a></li>
              </ul>
          </div>
    </div>
  </div>

<form class="container"  id="form1" action="" enctype="multipart/form-data">
 <fieldset id="form1" class="field1 current">
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <div class="col-md-12 well text-center">
                <h3> 第一步 - 填写信息</h3><hr>
                <h4>你已选择了 [ {{$numTour['ProductName']}} / {{$numTour['Rnight']}}晚 / {{$numTour['numAdult']}}位成人 / {{$numTour['numChild']}}位儿童 ]</h4>
                <h3>1) 房间信息</h3><br>
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">单人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text"  data-format="0" value="{{$numTour['num1R']}}" disabled>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">双人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text"  data-format="0" value="{{$numTour['num2R']}}" disabled>
                  </div>
                </div>
                <div style="margin-bottom: 52px;"></div><br>
                <div class="form-group"  style='clear: both'>
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">三人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text"  data-format="0" value="{{$numTour['num3R']}}" disabled>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">四人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text"  data-format="0" value="{{$numTour['num4R']}}" disabled>
                  </div>
                </div>
                <div style="margin-bottom: 52px;"></div><br>
                <hr>
                <h3>2) 预定信息</h3>
<!-- <form> -->

    <div class="container col-xs-12 duplicater">
        <div class="row clearfix">
		    <div class="col-md-12 column">
          @for($i=0;$i<$numTour['numAdult']+$numTour['numChild'];$i++)
			    <table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							名字
						</th>
						<th class="text-center">
							姓氏
						</th>
						<th class="text-center">
							年龄
						</th>

						<th class="text-center">
							持有签证
						</th>
            <th class="text-center">
              护照号
            </th>

					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						{{$i+1}}
						</td>
						<td>
						<input type="text" name='First Name'  placeholder='名字' class="form-control"/>
						</td>
						<td>
						<input type="text" name='Last Name' placeholder='姓氏' class="form-control"/>
						</td>
						<td>
						<input type="number" name='Age' placeholder='年龄' class="form-control"/>
						</td>
            <td>
                        <select type="text" name="Visa" class="form-control">
                            <option name="select1" value="s">请选择</option>
                            <option name="Yes" value="Y">是</option>
                            <option name="No" value="N">否</option>
                        </select>
                        </td>
						<td><input type="text" name='Passport Number' placeholder='护照号码' class="form-control"/></td>
					</tr>
				</tbody>
			    </table>
          @endfor
		    </div>
	    </div>

    </div>

      <h3>3) 联系方式</h3><br>
<div class="container">


<div class="col-md-12">

<div class="row">
      <div class="form-group ">
        <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">名字：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" value="" name:"FName2" id="example-text-input">
        </div>
      </div>

      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">姓氏：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" value="" name="LName2" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-email-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">电邮：</label>
        <div class="col-md-4">
          <input class="form-control" type="email" value="" name="Email2" id="example-email-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">性别：</label>
        <div class="col-md-4">
          <select type="text" name="sex" class="form-control">
              <option name="sex" value="select2">请选择</option>
              <option name="Male" value="M">男</option>
              <option name="Female" value="F">女</option>
          </select>
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">护照号：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" value="" name="passport2" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">地址：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="address" value="" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">城市：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" value="" name="city" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">省份／州：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="province" value="" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">国家：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="nation" value="" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">备注：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" name="note" value="" id="example-tel-input">
        </div>
      </div>


</div>

</div>
</div>
<hr>
  <h3>預訂詳情及团费</h3><br>
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <label for="">出發地：多倫多</label> |
        <label for="">天數：{{$numTour['Rnight']}}晚</label> |
        <label for="">出發日期：{{$numTour['travelDate']}}</label> |
        <label for="">旅游基础价格：CAD $<span id="p1">{{$numTour['priceBase']}}</span></label> |
        <label for="">酒店费用：CAD $<span id="p2">{{$numTour['priceRoom']}}</span></label> |
        <label for="">小计： $<span id="price" >0</span></label> |
          <input type="hidden"   id="tax"  value="0.13" />
        <!-- //<label for="">選項：$0.00</label> | -->
        <label for="">稅：$<span id="pTax" >0</span></label> |
      </div>
    </div>
  </div>
  <h4>總價:	 CAD $<span id="pTotal" >0</span></h4>
  <p>
<label for="review">
    <input type="button" name="review" class="review action-button btn btn-primary btn-lg" value="下一步" />
</label>
</p>
            </div>
        </div>
    </div>
      </fieldset>

      <fieldset class="field2">
         <div class="row setup-content" id="step-1">
             <div class="col-md-12">
                 <div class="col-md-12 well text-center">
                     <h3> 第二步 - 核对信息</h3><hr>
                     <h4>你已选择了 [ {{$numTour['ProductName']}} / {{$numTour['Rnight']}}晚 / {{$numTour['numAdult']}}位成人 / {{$numTour['numChild']}}位儿童 ]</h4>
                     <h3>1) 房间信息</h3><br>
                     <div class="form-group ">
                       <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">单人间：</label>
                       <div class="col-md-4">
                         <input class="form-control" type="text"  data-format="0" value="{{$numTour['num1R']}}" disabled>
                       </div>
                     </div>
                     <div class="form-group ">
                       <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">双人间：</label>
                       <div class="col-md-4">
                         <input class="form-control" type="text"  data-format="0" value="{{$numTour['num2R']}}" disabled>
                       </div>
                     </div>
                     <div style="margin-bottom: 52px;"></div><br>
                     <div class="form-group"  style='clear: both'>
                       <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">三人间：</label>
                       <div class="col-md-4">
                         <input class="form-control" type="text"  data-format="0" value="{{$numTour['num3R']}}" disabled>
                       </div>
                     </div>
                     <div class="form-group ">
                       <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">四人间：</label>
                       <div class="col-md-4">
                         <input class="form-control" type="text"  data-format="0" value="{{$numTour['num4R']}}" disabled>
                       </div>
                     </div>
                     <div style="margin-bottom: 52px;"></div><br>
                     <hr>
                     <h3>2) 预定信息</h3>
     <!-- <form> -->

         <div class="container col-xs-12 duplicater">
             <div class="row clearfix">
     		    <div class="col-md-12 column">
               @for($i=0;$i<$numTour['numAdult']+$numTour['numChild'];$i++)
     			    <table class="table table-bordered table-hover" id="tab_logic">
     				<thead>
     					<tr >
     						<th class="text-center">
     							#
     						</th>
     						<th class="text-center">
     							名字
     						</th>
     						<th class="text-center">
     							姓氏
     						</th>
     						<th class="text-center">
     							年龄
     						</th>

     						<th class="text-center">
     							持有签证
     						</th>
                 <th class="text-center">
                   护照号
                 </th>

     					</tr>
     				</thead>
     				<tbody>
     					<tr id='addr0'>
     						<td>
     						{{$i+1}}
     						</td>
     						<td>
     						<input type="text" name='First Name'  placeholder='名字' class="form-control" disabled/>
     						</td>
     						<td>
     						<input type="text" name='Last Name' placeholder='姓氏' class="form-control" disabled/>
     						</td>
     						<td>
     						<input type="number" name='Age' placeholder='年龄' class="form-control" disabled/>
     						</td>
                 <td>
                             <select type="text" name="Visa" class="form-control" disabled>
                                 <option name="select1" value="s">请选择</option>
                                 <option name="Yes" value="Y">是</option>
                                 <option name="No" value="N">否</option>
                             </select>
                             </td>
     						<td><input type="text" name='Passport Number' placeholder='护照号码' class="form-control" disabled/></td>
     					</tr>
     				</tbody>
     			    </table>
               @endfor
     		    </div>
     	    </div>

         </div>

           <h3>3) 联系方式</h3><br>
     <div class="container">


     <div class="col-md-12">

     <div class="row">
           <div class="form-group ">
             <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">名字：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" value="" name:"FName2" id="example-text-input" disabled >
             </div>
           </div>

           <div class="form-group">
             <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">姓氏：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" value="" name="LName2" id="example-url-input" disabled>
             </div>
           </div>
           <div style="margin-bottom: 52px;"></div><br>
           <div class="form-group"  style='clear: both'>
             <label for="example-email-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">电邮：</label>
             <div class="col-md-4">
               <input class="form-control" type="email" value="" name="Email2" id="example-email-input" disabled>
             </div>
           </div>
           <div class="form-group">
             <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">性别：</label>
             <div class="col-md-4">
               <select type="text" name="sex" class="form-control" disabled>
                   <option name="sex" value="select2">请选择</option>
                   <option name="Male" value="M">男</option>
                   <option name="Female" value="F">女</option>
               </select>
             </div>
           </div>
           <div style="margin-bottom: 52px;"></div><br>
           <div class="form-group"  style='clear: both'>
             <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">护照号：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" value="" name="passport2" id="example-tel-input" disabled>
             </div>
           </div>
           <div class="form-group">
             <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">地址：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" name="address" value="" id="example-url-input" disabled>
             </div>
           </div>
           <div style="margin-bottom: 52px;"></div><br>
           <div class="form-group"  style='clear: both'>
             <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">城市：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" value="" name="city" id="example-tel-input" disabled>
             </div>
           </div>
           <div class="form-group">
             <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">省份／州：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" name="province" value="" id="example-url-input" disabled>
             </div>
           </div>
           <div style="margin-bottom: 52px;"></div><br>
           <div class="form-group"  style='clear: both'>
             <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">国家：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" name="nation" value="" id="example-tel-input" disabled>
             </div>
           </div>
           <div class="form-group">
             <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">备注：</label>
             <div class="col-md-4">
               <input class="form-control" type="text" name="note" value="" id="example-tel-input" disabled>
             </div>
           </div>


     </div>

     </div>
     </div>
     <hr>
       <h3>預訂詳情及团费</h3><br>
       <div class="container">
         <div class="col-md-12">
           <div class="row">
             <label for="">出發地：多倫多</label> |
             <label for="">天數：{{$numTour['Rnight']}}晚</label> |
             <label for="">出發日期：{{$numTour['travelDate']}}</label> |
             <label for="">旅游基础价格：CAD $<span id="p1">{{$numTour['priceBase']}}</span></label> |
             <label for="">酒店费用：CAD $<span id="p2">{{$numTour['priceRoom']}}</span></label> |
             <label for="">小计： $<span id="pprice" >0</span></label> |
               <input type="hidden"   id="tax"  value="0.13" />
             <!-- //<label for="">選項：$0.00</label> | -->
             <label for="">稅：$<span id="ppTax" >0</span></label> |
           </div>
         </div>
       </div>
       <h4>總價:	 CAD $<span id="ppTotal" >0</span></h4>
       <p >
<label for="previous">
    <input type="button" name="previous" class="previous action-button btn btn-primary btn-lg" value="编辑" />
</label> &nbsp;
<label for="Submit">
    <input type="submit" value="提交" name="submit" class="action-button btn btn-primary btn-lg" />
</label>
</p>

                 </div>
             </div>
         </div>
           </fieldset>



</form>


<!-- <form class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h2 class="text-center"> 第三步 - 支付</h2>



                <button id="activate-step-4" class="btn btn-primary btn-md">完成</button>
            </div>
        </div>
    </div>

</form> -->

<!-- <form class="container">

    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h2 class="text-center"> 第四步 - 完成预定</h2>



            </div>
        </div>
    </div>

</form> -->




@include('footer')
@stop

@section('scripts')
<script type="text/javascript">


// Activate Next Step

  $(document).ready(function () {
          var v1= JSON.parse("{{ json_encode($numTour['priceBase']) }}");
          var v2= JSON.parse("{{ json_encode($numTour['priceRoom']) }}");
          var v3=document.getElementById("tax").value;
          var pT=v1+v2;
                $("#price").text((pT).toFixed(2));
                $("#pTax").text((pT*v3).toFixed(2));
                $("#pTotal").text((pT+pT*v3).toFixed(2));
                $("#pprice").text((pT).toFixed(2));
                $("#ppTax").text((pT*v3).toFixed(2));
                $("#ppTotal").text((pT+pT*v3).toFixed(2));
                $('.review').click(function () {
                    var formValues = [];
                    // get values from inputs in first fieldset
                    $('.field1 :input').each(function () {
                        formValues.push($(this).val());
                    });

                    formValues.pop(); //remove the button from input values
                    console.log(formValues);

                    // set values in second fieldset
                    $('.field2 :input').each(function (index) {
                        if (formValues[index]) {
                            $(this).val(formValues[index]);
                        }
                    });

                    $('.current').removeClass('current').hide().next().show().addClass('current');

                });

                $('.previous').click(function () {
                    $('.current').removeClass('current').hide().prev().show().addClass('current');

                });



            });
        // $("#pprice").text(pT);
        // $("#ppTax").text(pT*v3);
        // $("#ppTotal").text(pT+pT*v3);




  // var navListItems = $('ul.setup-panel li a'),
  //     allWells = $('.setup-content');
  //
  // allWells.hide();
  //
  // navListItems.click(function(e)
  // {
  //     e.preventDefault();
  //     var $target = $($(this).attr('href')),
  //         $item = $(this).closest('li');
  //
  //     if (!$item.hasClass('disabled')) {
  //         navListItems.closest('li').removeClass('active');
  //         $item.addClass('active');
  //         allWells.hide();
  //         $target.show();
  //     }


//   $('ul.setup-panel li.active a').trigger('click');
//
//   // DEMO ONLY //
//
//
//   $('#activate-step-2').on('click', function(e) {
//       $('ul.setup-panel li:eq(1)').removeClass('disabled');
//       $('ul.setup-panel li a[href="#step-2"]').trigger('click');
//       $(this).remove();
//
//   })
//
//   $('#activate-step-3').on('click', function(e) {
//       $('ul.setup-panel li:eq(2)').removeClass('disabled');
//       $('ul.setup-panel li a[href="#step-3"]').trigger('click');
//       $(this).remove();
//   })
//
//   $('#activate-step-4').on('click', function(e) {
//       $('ul.setup-panel li:eq(3)').removeClass('disabled');
//       $('ul.setup-panel li a[href="#step-4"]').trigger('click');
//       $(this).remove();
//   })
//
//
//   $("button").click(function(){
//           var x = $("#form1").serializeArray();
//           $.each(x, function(i, field){
//               $("#results").append("<h4>"+field.name + ":" + field.value + "</h4> <br>");
//           });
//       });
//
//
//
// });


</script>



@endsection
