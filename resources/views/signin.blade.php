@extends('layout')
@section('content')
@include('header')
<div class="row"  style="height:505px;">
  <div class="col-md-4 col-md-offset-4"><br><br>
    <h1 style="box-shadow: none;">账号登录</h1>    <hr>
    @if(count($errors)>0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
    </div>
    @endif
    <form action="{{ route('signin') }}" method="post">
      <div class="form-group">
        <label for="email">邮箱</label>
        <input type="text" id="email" name="email" class="form-control">
      </div>
    <div class="form-group">
      <label for="password">密码</label>
      <input type="password" id="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">用户登录</button>
       {{ csrf_field() }}
    </form>
     <p>现在还没有账号？ <a href="{{ route('signup') }}">点击这里注册!</a></p>
  </div>
</div>

@include('footer')
@stop

@section('scripts')
@endsection
