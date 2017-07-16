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
                                      <span class="badge">{{ $item->ProductName}}</span>
                                    出发日期{{ $item->travelDate}} | 成人人数：{{ $item->numAdult }} | 儿童人数：{{ $item->numChild }} | 婴儿人数：{{ $item->numBaby}} | 联系人：{{ $item->Name }} | 电邮：{{ $item->Email }}
                                  </li>

                          </ul>
                      </div>
                      <div class="panel-footer">
                          <strong>联系电话：{{ $item->Phone}}</strong>
                      </div>
                  </div>
              @endforeach
        </div>
    </div>
    @include('footer')
    @stop

    @section('scripts')
    @endsection
