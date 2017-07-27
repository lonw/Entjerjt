@extends('layout')
@section('content')
@include('header')
    <div class="row" style="height:550px;">
        <div class="col-md-8 col-md-offset-2"><br>
            <h1 style="box-shadow:none;">用户资料</h1><br>
            <hr>
          <h2>我的订单</h2>
            @foreach($orders as $item)
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>订单编号：{{ $item->id}}</strong>
                    </div>
                      <div class="panel-body">
                          <ul class="list-group">

                                  <li class="list-group-item">
                                      <span class="badge">{{ $item->detail['ProductName']}} </span>
                                    出发日期: {{ $item->detail['travelDate']}} | 成人人数：{{ $item->detail['numAdult']}} | 儿童人数：{{ $item->detail['numChild'] }}  |


                                  </li>
                                  <li class="list-group-item">
                                      <span class="badge">{{ $item->detail['Rnight']}}晚 </span>
                                |单人间：{{ $item->detail['num1R']}}  | 双人间：{{ $item->detail['num2R']}}  |  三人间：{{ $item->detail['num3R']}}  |  四人间：{{ $item->detail['num4R']}}|
                                  </li>
                                  <li class="list-group-item">
                                      <span class="badge">总价:CAD$ {{$item->TotalPrice}} </span>
                                      联系人：{{ $item->FName }} {{ $item->LName }}
                                      | 电邮：{{ $item->Email }}
                                  </li>

                          </ul>
                      </div>
                      <div class="panel-footer"> <strong id="output">团队信息</strong>
                    <?php $Adult=$item->detail['numAdult'];$Child=$item->detail['numChild'];$t=$Adult+$Child;?>
                     @for($i=1;$i<=$t ;$i++)
                      <?php $FirstName='FirstName';$a=$FirstName.$i; ?>
                      <?php $LastName='LastName';$b=$LastName.$i; ?>
                      <?php $Age='Age';$c=$Age.$i; ?>
                      <?php $Visa='Visa';$d=$Visa.$i; ?>
                      <?php $PassportNumber='PassportNumber';$e=$PassportNumber.$i; ?>
                         <table class="table table-bordered table-hover" id="tab_logic">
                      <thead>
                        <tr >
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
                           <strong>{{$item->tourmate[$a]}}</strong>
                          </td>
                          <td>
                         <strong>{{$item->tourmate[$b]}} </strong>
                          </td>
                          <td>
                       <strong>{{$item->tourmate[$c]}} </strong>
                          </td>
                           <td>
                              <strong>{{$item->tourmate[$d]}}</strong>
                           </td>
                          <td><strong>{{$item->tourmate[$e]}}</strong>
                          </td>
                        </tr>
                      </tbody>
                        </table>
@endfor
              </div>
                  </div>
              @endforeach
        </div>
    </div>
    @include('footer')
    @stop

    @section('scripts')





    @endsection
