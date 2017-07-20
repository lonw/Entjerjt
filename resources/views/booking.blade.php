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

<form class="container">

    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <div class="col-md-12 well text-center">
                <h3> 第一步 - 填写信息</h2><hr>
                <h3>1) 房间信息</h3><br>
                
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">单人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" value="0" id="example-text-input">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">双人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" value="0" id="example-text-input">
                  </div>
                </div>
                <div style="margin-bottom: 52px;"></div><br>
                <div class="form-group"  style='clear: both'>
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">三人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" value="0" id="example-text-input">
                  </div>
                </div>
                <div class="form-group ">
                  <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.5vh;float:left;top:7px;">四人间：</label>
                  <div class="col-md-4">
                    <input class="form-control" type="text" value="0" id="example-text-input">
                  </div>
                </div>
                <div style="margin-bottom: 52px;"></div><br>
                <hr>
                <h3>2) 预定信息</h3>
<!-- <form> -->

    <div class="container col-xs-12 duplicater">
        <div class="row clearfix">
		    <div class="col-md-12 column">
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
						1
						</td>
						<td>
						<input type="text" name='name0'  placeholder='名字' class="form-control"/>
						</td>
						<td>
						<input type="text" name='sur0' placeholder='姓氏' class="form-control"/>
						</td>
						<td>
						<input type="number" name='age' placeholder='年龄' class="form-control"/>
						</td>
            <td>
                        <select type="text" name="gender0" class="form-control">
                            <option name="male" value="male">请选择</option>
                            <option name="Female" value="Female">是</option>
                            <option name="3rdgen" value="none">否</option>
                        </select>
                        </td>
						<td><input type="text" name='passp' placeholder='护照号码' class="form-control"/></td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			    </table>
		    </div>
	    </div>
	    <a id="add_row" class="btn btn-warning pull-left">增加</a>
      <a id='delete_row' class="btn btn-danger" style="float:right;">减少</a>
    </div>

      <h3>3) 联系方式</h3><br>
<div class="container">


<div class="col-md-12">

<div class="row">
      <div class="form-group ">
        <label for="example-text-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">名字：</label>
        <div class="col-md-4">
          <input class="form-control" type="text" value="" id="example-text-input">
        </div>
      </div>

      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">姓氏：</label>
        <div class="col-md-4">
          <input class="form-control" type="名字" value="" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-email-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">电邮：</label>
        <div class="col-md-4">
          <input class="form-control" type="email" value="" id="example-email-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">性别：</label>
        <div class="col-md-4">
          <select type="text" name="gender0" class="form-control">
              <option name="male" value="male">请选择</option>
              <option name="Female" value="Female">男</option>
              <option name="3rdgen" value="none">女</option>
          </select>
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">护照号：</label>
        <div class="col-md-4">
          <input class="form-control" type="tel" value="" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">地址：</label>
        <div class="col-md-4">
          <input class="form-control" type="名字" value="" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">城市：</label>
        <div class="col-md-4">
          <input class="form-control" type="tel" value="" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-url-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">省份／州：</label>
        <div class="col-md-4">
          <input class="form-control" type="名字" value="" id="example-url-input">
        </div>
      </div>
      <div style="margin-bottom: 52px;"></div><br>
      <div class="form-group"  style='clear: both'>
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">国家：</label>
        <div class="col-md-4">
          <input class="form-control" type="tel" value="" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
        <label for="example-tel-input" class="col-md-1 col-form-label" style="font-size:1.8vh;float:left;top:7px;">备注：</label>
        <div class="col-md-4">
          <input class="form-control" type="tel" value="" id="example-tel-input">
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
        <label for="">天數：6天</label> |
        <label for="">出發日期：2017-07-28</label> |
        <label for="">小計：$2205.00</label> |
        <label for="">折扣：$0.00</label> |
        <label for="">選項：$0.00</label> |
        <label for="">稅：$286.65</label> |
        <label for="">其它稅費：$220.50</label>
      </div>
    </div>
  </div>
  <h4>總價	CAD 2712.15</h4>
<!-- </form> -->


                <button id="activate-step-2" class="btn btn-primary btn-md">下一步</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h2 class="text-center"> 第二步 - 核对资料</h2>
                <h3>預訂詳情及团费</h3><br>
                <div class="container">
                  <div class="col-md-12">
                    <div class="row">
                      <label for="">出發地：多倫多</label> |
                      <label for="">天數：6天</label> |
                      <label for="">出發日期：2017-07-28</label> |
                      <label for="">小計：$2205.00</label> |
                      <label for="">折扣：$0.00</label> |
                      <label for="">選項：$0.00</label> |
                      <label for="">稅：$286.65</label> |
                      <label for="">其它稅費：$220.50</label>
                    </div>
                  </div>
                </div>
                <h4>總價	CAD 2712.15</h4>

<!--<form></form> -->

                <button id="activate-step-3" class="btn btn-primary btn-md">下一步</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h2 class="text-center"> 第三步 - 支付</h2>

<!--<form></form> -->

                <button id="activate-step-4" class="btn btn-primary btn-md">完成</button>
            </div>
        </div>
    </div>

</form>

<form class="container">

    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <h2 class="text-center"> 第四步 - 完成预定</h2>

<!--<form></form> -->

            </div>
        </div>
    </div>

</form>




@include('footer')
@stop

@section('scripts')

<script type="text/javascript">

// Activate Next Step

$(document).ready(function() {

  var navListItems = $('ul.setup-panel li a'),
      allWells = $('.setup-content');

  allWells.hide();

  navListItems.click(function(e)
  {
      e.preventDefault();
      var $target = $($(this).attr('href')),
          $item = $(this).closest('li');

      if (!$item.hasClass('disabled')) {
          navListItems.closest('li').removeClass('active');
          $item.addClass('active');
          allWells.hide();
          $target.show();
      }
  });

  $('ul.setup-panel li.active a').trigger('click');

  // DEMO ONLY //
  $('#activate-step-2').on('click', function(e) {
      $('ul.setup-panel li:eq(1)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-2"]').trigger('click');
      $(this).remove();
  })

  $('#activate-step-3').on('click', function(e) {
      $('ul.setup-panel li:eq(2)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-3"]').trigger('click');
      $(this).remove();
  })

  $('#activate-step-4').on('click', function(e) {
      $('ul.setup-panel li:eq(3)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-4"]').trigger('click');
      $(this).remove();
  })

  $('#activate-step-3').on('click', function(e) {
      $('ul.setup-panel li:eq(2)').removeClass('disabled');
      $('ul.setup-panel li a[href="#step-3"]').trigger('click');
      $(this).remove();
  })
});


// Add , Dlelete row dynamically

   $(document).ready(function(){
    var i=1;

    //set the limited to 4
   $("#add_row").click(function(){
    $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='名字' class='form-control input-md'  /> </td><td><input  name='sur"+i+"' type='text' placeholder='姓氏'  class='form-control input-md'></td><td><input  name='age"+i+"' type='text' placeholder='年龄'  class='form-control input-md'></td><td><select type='text' name='visa"+i+"' class='form-control'><option name='3rdgen"+i+"' value='none'>请选择</option><option name='是"+i+"' value='是'>是</option><option name='否"+i+"' value='否'>否</option></select></td><td><input type='text' name='passp"+i+"' placeholder='护照号码' class='form-control'/></td>");

    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++;
});
   $("#delete_row").click(function(){
     if(i>1){
   $("#addr"+(i-1)).html('');
   i--;
   }
 });

});


//add, Delete roow dynamically
$(document).ready(function(){
 var i=1;

 //set the limited to 4
$("#add_room").click(function(){
 $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='名字' class='form-control input-md'  /> </td><td><input  name='sur"+i+"' type='text' placeholder='姓氏'  class='form-control input-md'></td><td><input  name='age"+i+"' type='text' placeholder='年龄'  class='form-control input-md'></td><td><select type='text' name='visa"+i+"' class='form-control'><option name='3rdgen"+i+"' value='none'>请选择</option><option name='是"+i+"' value='是'>是</option><option name='否"+i+"' value='否'>否</option></select></td><td><input type='text' name='passp"+i+"' placeholder='护照号码' class='form-control'/></td>");

 i++;
});
$("#delete_room").click(function(){
  if(i>1){
$("#addr"+(i-1)).html('');
i--;
}
});

});



</script>



@endsection
