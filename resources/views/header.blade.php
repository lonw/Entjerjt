<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="bg" style="width: 100%">


    <div class="wrapper--big" style="max-width: 100%">

        <nav class="nav" style="margin-top: 0;margin-right: 0;max-width: 100%;padding: 0;background-color: white;border-radius: 5vw;border:4px solid #b22087;z-index: 1000">
        <a href="chinese#" class="logo" style="background-color: rgba(255, 255, 255, 0);" alt="迦途国际 Jia Tu Enter."></a>
            <div class="wrapper resize-drag nav-wrapper menu_font" style="margin-right: 0;margin-top: 0;margin-top: 2rem;max-width: 80%;font-size: 16px">
                <ul class="nav-ul">
                    <li><a href="chinese" style="padding-left: 2rem"  {{{ (Request::is('chinese') ? 'class=active' : '') }}} >首页</a></li>
                    <li><a href="yangsheng" {{{ (Request::is('yangsheng') ? 'class=active' : '') }}} >养生游</a></li>
                    <li><a href="yiyou" {{{ (Request::is('yiyou') ? 'class=active' : '') }}} >医游</a></li>
                    <li><a href="tanxian" {{{ (Request::is('tanxian') ? 'class=active' : '') }}} >探险游</a></li>
                    <li><a href="jiatu" {{{ (Request::is('jiatu') ? 'class=active' : '') }}} >迦途四季</a></li>
                    <li><a href="youxue" {{{ (Request::is('youxue') ? 'class=active' : '') }}} >游学·留学</a></li>
                    <li><a href="shangwu" {{{ (Request::is('shangwu') ? 'class=active' : '') }}} >商务</a></li>
                    <li><a href="huaxia" {{{ (Request::is('huaxia') ? 'class=active' : '') }}} >华夏精品</a></li>
                    <li><a href="shengtai" {{{ (Request::is('shengtai') ? 'class=active' : '') }}} >生态游</a></li>
                    <li><a href="about" {{{ (Request::is('about') ? 'class=active' : '') }}} >关于迦途</a></li>
                    @if(Auth::check())
                  <li><a href="profile" {{{ (Request::is('profile') ? 'class=active' : '') }}} >订单详情</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{route('logout')}}">注销</a></li>
                @else
                <li><a href="{{route('signin')}}" {{{ (Request::is('signin') ? 'class=active' : '') }}} >登录</a></li>
                <li><a href="{{route('signup')}}" {{{ (Request::is('signup') ? 'class=active' : '') }}} >注册</a></li>
                @endif

                    <li><a >自由行</a></li>
                    <li><a >亲子游</a></li>
                    <li><a >婚礼策划</a></li>
                    <li><a >住宿／机票</a></li>

                </ul>
            </div>
        </nav>
    </div>




</div>



    <script src="/js/priority-nav.js"></script>

<script>
    /**
     * Initiate priorityNav
     */
    var wrapper = document.querySelector(".nav-wrapper");
    var nav = priorityNav.init({
        mainNavWrapper: ".nav-wrapper", // mainnav wrapper selector (must be direct parent from mainNav)
        mainNav: ".nav-ul", // mainnav selector. (must be inline-block)
        navDropdownLabel: '更多',
        navDropdownClassName: "nav__dropdown", // class used for the dropdown.
        navDropdownToggleClassName: "nav__dropdown-toggle", // class used for the dropdown toggle.
    });



</script>
