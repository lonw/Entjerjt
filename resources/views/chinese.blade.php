@extends('layout')
@section('content')
@include('header')
<div style='clear: both'></div>
<div style="height: 75vh; border-bottom: 1px solid white; ">
    <div class="slideshow-container">

    <a href="shengtai_National"><div class="mySlides fade " style="text-align: center;background-image: url(/images/main_page/大滚屏/1.png);background-size: cover;background-position: 50% 50%;background-repeat: no-repeat;z-index: 200">
     
    </div></a>

    <div class="mySlides fade" style="text-align: center;background-image: url(/images/main_page/大滚屏/2.png);background-size: cover;background-position: 50% 50%;background-repeat: no-repeat;">
      
    </div>

    <a href="jiatu" ><div class="mySlides fade" style="text-align: center;background-image: url(/images/main_page/大滚屏/3.png);background-size: cover;background-position: 50% 50%;background-repeat: no-repeat;">
     
    </div></a>

    <a class="prev" onclick="plusSlides(-1)" ></a>
    <a class="next" onclick="plusSlides(1)" ></a>

    </div>
    <br>

    <div style="text-align:center;position: relative;bottom: 15%;">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

</div>
<div style='clear: both'></div>
<div style=" border-bottom: 1px solid white; ">
  <div style="height: 50px; background-color: #3d9be9">
    <div class="container" style="">
      <div class="row" style="margin-top: 8px;">
            <div class="col-md-4 col-sm-5 col-lg-3 col-xs-8" style="float: right;">
            
                
                <div class="form-group">
                    <div class="input-group input-group-md">
                        
                        <div class="icon-addon addon-md addon-sm addon-xs">
                            <input type="text"  class="form-control search-query" placeholder="Search Site">
                            <label class="glyphicon glyphicon-search" rel="tooltip" ></label>
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
                
            </div>
      </div>
    </div>    
  </div>
</div>
<div >
  <div class="remenTitle" >热门推荐</div>
  <div id="carousel1" style="width: 90%"> 
   
   
    <a   ><img class="cloudcarousel"  src="/images/main_page/remen/remen-1.jpg"></a>

    <a href='shangwu_meeting'   ><img class="cloudcarousel"  src="/images/main_page/remen/remen-2.jpg"></a>
    
    <a   ><img class="cloudcarousel"  src="/images/main_page/remen/remen-3.jpg"></a>

    <a   ><img class="cloudcarousel"  src="/images/main_page/remen/remen-4.jpg"></a>

    <a  ><img class="cloudcarousel"  src="/images/main_page/remen/remen-5.jpg"></a>

    <a href='huaxia_jiangnan'  ><img class="cloudcarousel"  src="/images/main_page/remen/remen-6.jpg"></a>
    <a href='tanxian_zhulu'  ><img class="cloudcarousel"  src="/images/main_page/remen/remen-7.jpg"></a>
    
    <div id="but1" class="carouselLeft"></div>
    <div id="but2" class="carouselRight"></div> 

  </div>
  
</div>



<div style=" border-bottom: 1px solid white;background-color: #e0dadf ;">
  <div class="teseContainer" style="width: 80%;margin: 5vh auto 5vh;">
    <div class="teseTitle" >
      <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " style="width: 20%;float: left;height: 80%;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-232.93183450265366 -38.44221546123555 778.2636691006747 146.98442176719766" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
          <g>
          <path d="M39.8 46.1c11.5-6.9 11.7-21.5 2.2-30C27.5 3.3 4.8 15.4 4 34.4c-1.2 27 31.8 63.9 106.2 33.5C167.3 44.6 232.7-18.2 279 22.8c34.7 30.6-2.4 84.8-33.8 68.9-28.3-14.2-2.5-46.5 15.7-32.8 9.5 7.2 7.7 12.8 6.8 18.2 3.4-2 5.3-13.8-4.9-20.9-3.9-2.7-8.8-5.6-15.9-4.5-30.4 4.9-27.4 48.4 12.1 47.5 33.4-.8 55.7-54.2 19.7-82.8-68.1-53.9-139.4 55.7-216.4 58.4C4.8 76.9-2.3 16.4 28 15.6c4.8-.1 8.8 1.5 11.7 4.1 13.3 13.3 2.4 23.2.1 26.4z"></path>
          <path d="M296.9 55.5c.8-17.6-20.7-41.6-69.1-21.8-37.2 15.2-79.8 56-110 29.3-22.6-20 1.6-55.2 22-44.9 18.4 9.3 1.6 30.3-10.2 21.3-6.2-4.7-5-8.3-4.4-11.8-2.2 1.3-3.5 9 3.2 13.6 2.6 1.8 5.7 3.7 10.4 2.9 19.8-3.2 17.8-31.5-7.9-30.9-21.7.5-36.3 35.3-12.8 53.9 44.3 35.1 90.7-36.3 140.8-38 37.5-1.3 37.5 38.8 38 26.4z"></path>
          </g>
        </svg>
      </div>特色主题
      <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 " style="width: 20%;float: right;height: 80%">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-245.0052012901802 -38.34155996743735 779.6103896103897 146.88311688311688" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
          <g>
          <path d="M261.1 46.1c-11.5-6.9-11.7-21.5-2.2-30 14.5-12.9 37.1-.8 38 18.3 1.2 27-31.8 63.9-106.2 33.5-57-23.3-122.4-86-168.7-45.1-34.7 30.6 2.4 84.8 33.8 68.9C84.1 77.5 58.3 45.3 40.1 59c-9.5 7.2-7.7 12.8-6.8 18.2-3.4-2-5.3-13.8 4.9-20.9 3.9-2.7 8.8-5.6 15.9-4.5 30.4 4.9 27.4 48.4-12.1 47.5C8.7 98.5-13.6 45 22.4 16.5c67.9-53.9 139.2 55.7 216.2 58.4 57.5 2 64.6-58.4 34.3-59.2-4.8-.1-8.8 1.5-11.7 4.1-13.3 13.2-2.4 23.1-.1 26.3z"></path>
          <path d="M4 55.5c-.8-17.6 20.7-41.7 69.1-21.8 37.2 15.2 79.8 56.1 109.9 29.4 22.6-20-1.6-55.2-22-44.9-18.4 9.3-1.6 30.3 10.2 21.3 6.2-4.7 5-8.3 4.4-11.8 2.2 1.3 3.5 9-3.2 13.6-2.6 1.8-5.7 3.7-10.4 2.9-19.8-3.2-17.8-31.5 7.9-30.9 21.7.5 36.3 35.3 12.8 53.9-44.3 35.1-90.7-36.3-140.8-38C4.5 27.8 4.5 67.9 4 55.5z"></path>
          </g>
        </svg>
      </div>
    </div>
  
    
    <div class="" style="margin-top: 5vh;">
      <a href="javascript:" onclick="scrollTo('cont1')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption "><div><img src="/images/main_page/topics/yangshen.png" ></div><p>养 生 游</p></div></a>

      <a href="javascript:" onclick="scrollTo('cont4')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption"><div><img src="https://static.wixstatic.com/media/bfb291_f384c19ff4484530b9f25cfe8d6b1333~mv2.png/v1/crop/x_7,y_0,w_505,h_512/fill/w_140,h_142,al_c,usm_0.66_1.00_0.01/bfb291_f384c19ff4484530b9f25cfe8d6b1333~mv2.png"></div><p>医 游</p></div></a>
      <a href="javascript:" onclick="scrollTo('cont2')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption"><div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.3447124675168709 -154.19570206787625 503.1254448324947 532.4744291143902" preserveAspectRatio="xMidYMid meet" style="stroke-width: 2px;">
            <g>
            <path d="M498.588 214.333H366.977C290.526 145.27 260.346 8.447 260.346 8.447h150.063c24.329 130.308 88.179 205.886 88.179 205.886z"></path>
            <path d="M350.037 214.333h-99.034V8.447c16.94 97.301 99.034 205.886 99.034 205.886z"></path>
            <path d="M166.212 184.349c-13.109-3.427-24.394-19.533-24.394-19.533-10.164-9.995 7.115-7.818 7.115-7.818 19.546.43 10.79-14.178 10.79-14.178l-17.813-19.181c-3.909-4.782 1.303-4.926 1.303-4.926 9.995 1.095 6.958-7.649 6.958-7.649l-28.225-60.372-.222-.104-28.589 62.044s3.249 3.524 5.38 9.203c0 0 2.522 5.317-.576 9.669 0 0-1.908 2.73-4.374 3.108-1.618.248-2.417.46-.46 2.187 7.827 6.79 7.79 6.57 13.237 12.086 0 0 3.942 4.045 3.338 8.978-.5 4.083-2.794 9.794-12.086 9.669 0 0-4.029-.691-4.145 1.598-.084 1.647 13.615 11.417 14.734 12.33 0 0 3.146 2.29 9.093 6.1 3.131 2.006 5.465 3.893 6.1 4.604 0 0 3.759 5.247-.115 10.129-2.343 2.953-6.977 2.128-6.977 4.851l.501 8.492h11.728v-13.031l25.228.208c-5.16 7.388-8.288 11.519-8.288 11.519h99.034V8.447c-11.466 65.857-52.774 136.875-78.275 175.902z"></path>
            <path d="M112.486 191.321c5.46 2.372 8.027 4.73 7.011 6.685-1.394 2.697-9.643 4.6-26.557 4.6H69.928l.43 11.728H59.022l.43-11.728H36.425c-29.098 0-32.577-5.642-19.546-11.285 13.031-5.655 28.316-23.025 28.316-23.025 6.594-6.515-12.679-6.072-12.679-6.072-11.728-.43-5.655-9.539-5.655-9.539l18.673-17.787c6.085-4.769-2.619-3.857-2.619-3.857-12.588 0-6.111-9.877-6.111-9.877l27.873-48.318 27.873 48.318s6.489 9.877-6.098 9.877c0 0-8.705-.912-2.619 3.857l18.673 17.787s1.968 2.958 1.499 5.59c-.352 1.981-2.111 3.766-7.154 3.948 0 0-19.273-.443-12.679 6.072-.002.001 15.283 17.371 28.314 23.026z"></path>
            </g>
        </svg></div><p>探 险 游</p>
      </div></a>
      <a href="javascript:" onclick="scrollTo('cont6')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption"><div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="5.176470924826226 4.71470619650448 64.64706196504481 65.5705914216883" preserveAspectRatio="xMidYMid meet" style="stroke-width: 2px;">
            <g>
            <path d="M63.9 59.6H11.1c-2.7 0-5-2.3-5-5.2V15.3c0-2.9 2.2-5.2 5-5.2h52.8c2.7 0 5 2.3 5 5.2v39.1c-.1 2.9-2.3 5.2-5 5.2zM11.1 12.1c-1.6 0-3 1.4-3 3.2v39.1c0 1.8 1.3 3.2 3 3.2h52.8c1.6 0 3-1.4 3-3.2V15.3c0-1.8-1.3-3.2-3-3.2H11.1z"></path>
            <path d="M56 64.9H19c-.6 0-1-.4-1-1s.4-1 1-1h37c.6 0 1 .4 1 1s-.5 1-1 1z"></path>
            <path d="M37.5 64.9c-.6 0-1-.4-1-1v-5.3c0-.6.4-1 1-1s1 .4 1 1v5.3c0 .5-.4 1-1 1z"></path>
            <path d="M37.5 55.6c-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.3 0 2.3 1 2.3 2.3 0 1.3-1 2.3-2.3 2.3zm0-2.6c-.2 0-.3.1-.3.3s.1.3.3.3.3-.1.3-.3-.1-.3-.3-.3z"></path>
            <path d="M67.8 49.1H7.2c-.6 0-1-.4-1-1s.4-1 1-1h60.7c.6 0 1 .4 1 1s-.5 1-1.1 1z"></path>
            </g>
         </svg></div><p>商 务 团</p>
      </div></a>
      <div style='clear: both'></div>
    </div>
    <div style='clear: both'></div>
    
      <a href="javascript:" onclick="scrollTo('cont3')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption">
        <div><img src="https://static.wixstatic.com/media/bfb291_e0df7becd1fd4480a938ff0e6d19f418~mv2.png/v1/fill/w_204,h_116,al_c,usm_0.66_1.00_0.01/bfb291_e0df7becd1fd4480a938ff0e6d19f418~mv2.png" ></div><p>游学 留学</p>
      </div></a>
      <a ><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption">
        <div><img src="https://static.wixstatic.com/media/bfb291_d7e055e0a63d4e43ab67f5222519a53d~mv2.png/v1/fill/w_140,h_140,al_c,usm_0.66_1.00_0.01/bfb291_d7e055e0a63d4e43ab67f5222519a53d~mv2.png"></div><p>生 态 游</p>
      </div></a>
      <a href="javascript:" onclick="scrollTo('cont5')" target="_self"><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption">
        <div><img src="https://static.wixstatic.com/media/bfb291_6e815961911b472ba00053110fceef2b~mv2.png/v1/fill/w_194,h_142,al_c,usm_0.66_1.00_0.01/bfb291_6e815961911b472ba00053110fceef2b~mv2.png" ></div><p>华夏精品</p>
      </div></a>
      <a ><div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 teseOption">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-4.920992402469409 -9.89820384979248 311.01002412683823 310.47743797302246" preserveAspectRatio="none" style="stroke-width: 2px;">
            <g>
            <path d="M293.455 1.402c-6.612-6.596-34.528 11.802-42.603 19.36-22.046 20.633-22.046 20.633-39.784 37.871-19.271-2.518-38.253-4.112-57.523-8.438-2.274-.511-4.71-1.018-6.622-.98l3.912-3.912c3.765-3.765 3.547-10.088-.218-13.853s-10.087-3.981-13.853-.217l-13.709 13.709c-21.164-3.223-42.513-5.86-63.619-9.519-10.082-1.748-19.98-3.58-30.208-1.805-5.319.924-10.431 2.683-15.081 5.441-1.38.818-14.625 10.877-14.134 11.402.728.773 1.449.937 2.177 1.087 34.842 12.856 70.046 25.28 105.803 42.537 9.313 4.495 30.338 13.336 33.267 21.269 3.85 10.427-4.921 22.219-10.903 29.879-9.188 11.762-19.907 22.439-29.696 33.709-5.915 6.812-11.579 14.541-19.392 19.309-7.813 4.768-49.84-4.702-59.448-7.089-7.271 4.81-14.544 10.131-21.815 15.27 17.998 9.115 35.996 15.429 53.992 28.906-3.367 4.181-4.48 8.362-7.09 12.543 4.727.963 9.454-3.93 14.181-5.454 12.881 17.816 19.792 35.632 28.359 53.448 5.611-7.272 10.27-14.543 15.271-21.815-2.702-20.18-9.543-40.359-7.09-60.538.403-3.319 9.646-9.707 12.135-11.886 3.972-3.477 8.031-6.859 12.07-10.258 9.31-7.833 18.68-15.601 27.909-23.531 7.452-6.403 20.487-17.929 31.332-12.68 9.75 4.722 16.779 25.162 21.266 34.359 17.515 35.893 30.962 73.525 43.086 106.349-.114-.313 14.146-18.893 15.239-22.22 2.42-7.37 2.682-15.38 2.023-23.048-1.746-20.401-4.362-40.796-6.927-61.132-.638-5.055-1.979-10.756-1.692-14.797l13.069-13.069c3.766-3.764 3.548-10.087-.217-13.851-3.766-3.766-10.088-3.982-13.853-.218l-3.061 3.061c-3.896-22.367-7.914-44.247-12.077-66.193 0 0 27.789-30.584 34.288-37.702 12.534-13.725 29.427-37.134 21.236-45.304z"></path>
            </g>
          </svg></div><p>自 由 行</p>
      </div></a>
    
    <div style='clear: both'></div>
  </div>
  <div style='clear: both'></div>
    
</div>


<div class="content">
<div class="subContainer cont cont1" style="margin-top: 5vh">
  <div class="teseContainer">
    <div class="subTitle" >
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <div class="subTitleImg" style="background-color: #73bf00;float: right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="3.1204819277108413 4.2469879518072275 193.75903614457832 191.50602409638554" preserveAspectRatio="xMidYMid meet" style="">
            <g>
            <path d="M100 6.5C48.4 6.5 6.5 48.4 6.5 100s41.9 93.5 93.5 93.5 93.5-41.9 93.5-93.5S151.6 6.5 100 6.5zm0 5c48.8 0 88.5 39.8 88.5 88.6 0 15.9-4.2 30.9-11.6 43.9H145v-23h15.7l-16-73.3-4.9-.1-15.7 73.4H140v23h-37v-15h10.6l-11.2-55h-4.9l-11.2 55H97v15H60v-23h15.9L60.2 47.7l-4.9-.1-16 73.3H55v23H23.2c-7.4-13-11.6-28-11.6-43.9-.1-48.7 39.6-88.5 88.4-88.5zM37.9 163h124.2c-3.5 3-7.2 6-11.1 9H49c-3.9-3-7.7-6-11.1-9zm-4.8-5c-2.5-3-4.8-6-6.9-9h147.4c-2.1 3-4.4 6-6.9 9H33.1zm97.2-42l11.9-55.9 12.2 55.9h-24.1zm-37.8 8l7.5-36.6 7.5 36.6h-15zm-46.9-8l12.2-55.9L69.7 116H45.6zM57 177h86c-12.7 7-27.4 11.2-43 11.2-15.6 0-30.2-4.2-43-11.2zm43-125.4c7.4 0 13.4-6 13.4-13.4s-6-13.4-13.4-13.4-13.4 6-13.4 13.4 6 13.4 13.4 13.4zm0-21.8c4.6 0 8.4 3.7 8.4 8.4s-3.7 8.4-8.4 8.4-8.4-3.7-8.4-8.4 3.8-8.4 8.4-8.4z"></path>
            </g>
            </svg>
        </div>
        </div>
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">养&nbsp&nbsp生&nbsp&nbsp游
          
          <a class="more" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;" href="yangshen" >更多详情</a>
        </div>
        
        
        
        <div style='clear: both'></div>
    </div>
    <div class="teseContent" >
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-7 teseImg" style="background-image: url(/images/main_page/sub/bfb291_66a9e8049e234a0fa1b8757973e9e66c-mv2.jpg);background-size: cover;"  >
          <div style="background-image: url(/images/main_page/2.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        </div>
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-5 teseMore" >
            <p>养生基地</p>
            <a class="search" href="#">查看详情</a>
        </div>
        <div style='clear: both'></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%">
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-7 teseImg" style="background-image: url(/images/main_page/sub/bfb291_adcf1732580c4fbab658ab7616d6cecf-mv2.jpg);background-size: cover;"  >
          <div style="background-image: url(/images/main_page/2.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        </div>
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-5 teseMore" >
            <p>生态养生</p>
            <a class="search" href="#">查看详情</a>
        </div>
        <div style='clear: both'></div>
      </div>
        
        <div style='clear: both'></div>
    </div>
    <div style='clear: both'></div>
  </div>
</div> 



<div class="subContainer cont cont2" >
  <div class="teseContainer" >
    <div class="subTitle" >
        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
          <div class="subTitleImg" style="background-color: #544100;float: right;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1.7740461176092026 -185.92690909992564 505.98411213267934 595.936843178489" preserveAspectRatio="xMidYMid meet" style="fill: #fff;top: 0vw">
                <g>
                <path d="M498.588 214.333H366.977C290.526 145.27 260.346 8.447 260.346 8.447h150.063c24.329 130.308 88.179 205.886 88.179 205.886z"></path>
                <path d="M350.037 214.333h-99.034V8.447c16.94 97.301 99.034 205.886 99.034 205.886z"></path>
                <path d="M166.212 184.349c-13.109-3.427-24.394-19.533-24.394-19.533-10.164-9.995 7.115-7.818 7.115-7.818 19.546.43 10.79-14.178 10.79-14.178l-17.813-19.181c-3.909-4.782 1.303-4.926 1.303-4.926 9.995 1.095 6.958-7.649 6.958-7.649l-28.225-60.372-.222-.104-28.589 62.044s3.249 3.524 5.38 9.203c0 0 2.522 5.317-.576 9.669 0 0-1.908 2.73-4.374 3.108-1.618.248-2.417.46-.46 2.187 7.827 6.79 7.79 6.57 13.237 12.086 0 0 3.942 4.045 3.338 8.978-.5 4.083-2.794 9.794-12.086 9.669 0 0-4.029-.691-4.145 1.598-.084 1.647 13.615 11.417 14.734 12.33 0 0 3.146 2.29 9.093 6.1 3.131 2.006 5.465 3.893 6.1 4.604 0 0 3.759 5.247-.115 10.129-2.343 2.953-6.977 2.128-6.977 4.851l.501 8.492h11.728v-13.031l25.228.208c-5.16 7.388-8.288 11.519-8.288 11.519h99.034V8.447c-11.466 65.857-52.774 136.875-78.275 175.902z"></path>
                <path d="M112.486 191.321c5.46 2.372 8.027 4.73 7.011 6.685-1.394 2.697-9.643 4.6-26.557 4.6H69.928l.43 11.728H59.022l.43-11.728H36.425c-29.098 0-32.577-5.642-19.546-11.285 13.031-5.655 28.316-23.025 28.316-23.025 6.594-6.515-12.679-6.072-12.679-6.072-11.728-.43-5.655-9.539-5.655-9.539l18.673-17.787c6.085-4.769-2.619-3.857-2.619-3.857-12.588 0-6.111-9.877-6.111-9.877l27.873-48.318 27.873 48.318s6.489 9.877-6.098 9.877c0 0-8.705-.912-2.619 3.857l18.673 17.787s1.968 2.958 1.499 5.59c-.352 1.981-2.111 3.766-7.154 3.948 0 0-19.273-.443-12.679 6.072-.002.001 15.283 17.371 28.314 23.026z"></path>
                </g>            
            </svg>
        </div>
        </div>
        
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">
          探&nbsp&nbsp险&nbsp&nbsp游
          <a class="more" href="tanxian" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;">更多详情</a>
        </div>
        
        
        
        <div style='clear: both'></div>
    </div>
    <div class="teseContent">
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_7a19f444f6bc465285e3e456d80639ec-mv2.jpg);background-size: cover;" >
          <div style="background-image: url(/images/main_page/3.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
            <!-- <img src="/images/main_page/sub/" style="height: 100%;width: 100%"> -->
        </div>
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
            <p>河谷逐鹿</p>
            <a class="search" href="tanxian_zhulu">查看详情</a>
        </div>
        <div style='clear: both'></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg"  style="background-image: url(/images/main_page/sub/bfb291_511be86870924053aba6c017bc264ade-mv2.jpg);background-size: cover;" >
          <div style="background-image: url(/images/main_page/3.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
            <!-- <img src="/images/main_page/sub/" style="height: 100%;"> -->
        </div>
        <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
            <p>荒野猎熊</p>
            <a class="search" href="tanxian_shouxiong">查看详情</a>
        </div>
        <div style='clear: both'></div>
      </div>
        <div style='clear: both'></div>
    </div>
    <div style='clear: both'></div>  
  </div>
</div>



<div class="subContainer cont cont3" >
  <div class="teseContainer" >
    <div class="subTitle" >
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
        <div class="subTitleImg" style="background-color: #fde030; float: right">
            <img src="https://static.wixstatic.com/media/bfb291_e0df7becd1fd4480a938ff0e6d19f418~mv2.png/v1/fill/w_204,h_116,al_c,usm_0.66_1.00_0.01/bfb291_e0df7becd1fd4480a938ff0e6d19f418~mv2.png" style="width: 80%;position: absolute;top:2.5vw;left: 1vw;">
        </div>
      </div>
        
       

       
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">旅游 <b>&#183;</b> 留学
          <a class="more" href="#" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;">更多详情</a>
        </div>
      
      <div style='clear: both'></div>
    </div>
    <div class="teseContent">
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_bc8085058cdd4f3db102cbf03f004eeb-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/9.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 120%;width: 100%"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>加东名校交流</br>夏令营</p>
            <a class="search" href="#">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_e379a0c33840409790e814a21e0e80c7-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/4.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 150%;width: 100%"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>中加交换生</p>
            <a class="search" href="#">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div style='clear: both'></div>
    </div>
      <div style='clear: both'></div>
  </div>
</div>



<div class="subContainer cont cont4" >
  <div class="teseContainer" >
    <div class="subTitle" >
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
        <div class="subTitleImg" style="background-color: #3d9be9;float: right">
            <img id="comp-ix6vqg79imgimage" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$cs8q.1.$comp-ixat975o.0.$comp-ix6vqg79.0.0.$image" src="https://static.wixstatic.com/media/bfb291_32476da3b2d443d5bfc0f9fa5e2c3592~mv2.png/v1/fill/w_176,h_174,al_c,usm_0.66_1.00_0.01/bfb291_32476da3b2d443d5bfc0f9fa5e2c3592~mv2.png" style="width: 70%;position: absolute;top:1vw;left: 1.5vw;">
        </div>
      </div>
      
        
        <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">医&nbsp&nbsp&nbsp&nbsp游
          <a class="more" href="yiyou" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;">更多详情</a>
        </div>
      
      <div style='clear: both'></div>
    </div>
    <div class="teseContent">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_6ac92f6e48ff4731a5fcf08cfd9350b6-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/1.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;margin-left: -30%"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>加拿大医游</p>
            <a class="search" href="yiyou_tour">查看详情</a>
      </div>
      <div style='clear: both'></div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_356282dac4a1483280379c1bf0b1b651-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/1.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;margin-left: -30%"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>病例介绍</p>
            <a class="search" href="yiyou">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div style='clear: both'></div>
    </div>
      <div style='clear: both'></div>
  </div>
</div>



<div class="subContainer cont cont5" >
  <div class="teseContainer" >
    <div class="subTitle" >
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
         <div class="subTitleImg" style="background-color: #ffe17f;float: right"> 
            <img id="comp-ix2nvif8imgimage" alt="" data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$cs8q.1.$comp-ixatcqr2.0.$comp-ix2nvif8.0.0.$image" src="https://static.wixstatic.com/media/bfb291_93c057b00faf4c8db55bf03ebe1362e2~mv2.png/v1/fill/w_230,h_144,al_c,usm_0.66_1.00_0.01/bfb291_93c057b00faf4c8db55bf03ebe1362e2~mv2.png" style="width: 80%;position: absolute;top:3vw;left: 1.2vw;">
        </div>
      </div>
       
      
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">华夏精品
          <a class="more" href="#" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;">更多详情</a>
      </div>
      
      <div style='clear: both'></div>
    </div>
    <div class="teseContent">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_af2ef67d20b64236b5e5b053cb226cc9-mv2.png);background-size: cover;" >
        <div style="background-image: url(/images/main_page/7.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >

        <p>长江三峡</p>
            <a class="search" href="#">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_f5a11a662ccf46b88bf7e0c5b623092b-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/8.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>古都西安</p>
            <a class="search" href="#">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div style='clear: both'></div>
    </div>
      <div style='clear: both'></div>
  </div>
</div>



<div class="subContainer cont cont6" >
  <div class="teseContainer" >
    <div class="subTitle" >
      <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
        <div class="subTitleImg" style="background-color: #344b52;float: right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="5.176470924826226 5.176470924826226 64.64706196504481 64.64706196504481" preserveAspectRatio="xMidYMid meet" style="width: 70%;left: 1.5vw;top: 2vw;stroke: rgba(253, 224, 48, 1)">
                <g>
                <path d="M63.9 59.6H11.1c-2.7 0-5-2.3-5-5.2V15.3c0-2.9 2.2-5.2 5-5.2h52.8c2.7 0 5 2.3 5 5.2v39.1c-.1 2.9-2.3 5.2-5 5.2zM11.1 12.1c-1.6 0-3 1.4-3 3.2v39.1c0 1.8 1.3 3.2 3 3.2h52.8c1.6 0 3-1.4 3-3.2V15.3c0-1.8-1.3-3.2-3-3.2H11.1z"></path>
                <path d="M56 64.9H19c-.6 0-1-.4-1-1s.4-1 1-1h37c.6 0 1 .4 1 1s-.5 1-1 1z"></path>
                <path d="M37.5 64.9c-.6 0-1-.4-1-1v-5.3c0-.6.4-1 1-1s1 .4 1 1v5.3c0 .5-.4 1-1 1z"></path>
                <path d="M37.5 55.6c-1.3 0-2.3-1-2.3-2.3 0-1.3 1-2.3 2.3-2.3 1.3 0 2.3 1 2.3 2.3 0 1.3-1 2.3-2.3 2.3zm0-2.6c-.2 0-.3.1-.3.3s.1.3.3.3.3-.1.3-.3-.1-.3-.3-.3z"></path>
                <path d="M67.8 49.1H7.2c-.6 0-1-.4-1-1s.4-1 1-1h60.7c.6 0 1 .4 1 1s-.5 1-1.1 1z"></path>
                </g>
            </svg>
        </div>
      </div>
     
      <div class="col-md-8 col-sm-8 col-lg-8 col-xs-8" style="text-align: left">商&nbsp&nbsp务&nbsp&nbsp团
          <a class="more" href="shangwu" style="position: absolute;right: -10px;bottom: 30%;line-height: normal;font-weight: bold;">更多详情</a>
      </div>
      
      <div style='clear: both'></div>
    </div>
    <div class="teseContent">
    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;margin-bottom: 5vh;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_8fec5d240b51493ab853ff4615970838-mv2.png);background-size: cover;" >
        <div style="background-image: url(/images/main_page/6.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>蒙特利尔智慧</br>城市考察团</p>
            <a class="search" href="shangwu_zhihui">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12" style="height: 100%;">
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseImg" style="background-image: url(/images/main_page/sub/bfb291_cbe60851f3904bcca86a242ac24251e7-mv2.jpg);background-size: cover;" >
        <div style="background-image: url(/images/main_page/5.png);width: 6vw;height: 6vw;background-size: 100% 100%;position: absolute;top: -1px;left: 0;"></div>
        <!-- <img src="/images/main_page/sub/" style="height: 100%;"> -->
      </div>
      <div  class="col-md-6 col-sm-6 col-lg-6 col-xs-6 teseMore" >
        <p>会议定制</p>
            <a class="search" href="shangwu_meeting">查看详情</a>
      </div>
      <div style='clear: both'></div>
      </div>
      <div style='clear: both'></div>
    </div>
      <div style='clear: both'></div>
  </div>
</div>


<div class="comContainer cont cont7" >
    <div class="comWrapper">
        <div class="comTitle"><img src="/images/1.png" ></div>
        <div class="comInfo">「迦途四季」是由迦途公司重点打造的精品旅游项目。产品秉持着“一程一地”的旅游概念，结合各季节的特点和当地风土。汇集成最具代表性的四季路线，使游客在休闲放松中深度领略加拿大的特色风光。</div>
    </div>
    <div  class="comContent" style="width:80%; margin:0 auto;">
      <a href="spring">
          <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
              <img class="imgBorder" src="/images/main_page/season/spring.jpg" >
              <div class="comName" ><img src="/images/6.png" style="width:  125%"></div>
              <div>
                  <img src="/images/2.png" style="width: 50%">
              </div>
          </div>
      </a>
      <a href="summer">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/summer.jpg" style="width:  100%">
            <div class="comName"  ><img src="/images/7.png" style="width:  90%"></div>
            <div>
                  <img src="/images/3.png" style="width: 50%">
              </div>
        </div>
      </a>
      <a href="autumn">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/autumn.jpg" style="width:  100%">
            <div class="comName" ><img src="/images/8.png" style="width:  100%"></div>
            <div>
                  <img src="/images/4.png" style="width: 50%">
              </div>
        </div>
      </a>
      <a href="winter">
        <div class="col-md-3 col-sm-3 col-lg-3 col-xs-6 comSection">
            <img class="imgBorder" src="/images/main_page/season/winter.jpg" style="width:  100%">
            <div class="comName" ><img src="/images/9.png" style="width:  100%"></div>
            <div>
                  <img src="/images/5.png" style="width: 50%">
              </div>
        </div></a>
        <div style='clear: both'></div>
    </div>
    <div style='clear: both'></div>
</div>
</div>
<div class="popWrapper"> 
  <div class="popshow"></div>
  <div id="popup" class="pop1">
    <ul class="r_nav">
      <li class="lis"><a href="javascript:;" title="">养生游</a></li>
      <li class="lis"><a href="javascript:;" title="">探险游</a></li>
      <li class="lis"><a href="javascript:;" title="">游学 留学</a></li>
      <li class="lis"><a href="javascript:;" title="">医游</a></li>
      <li class="lis"><a href="javascript:;" title="">华夏精品</a></li>
      <li class="lis"><a href="javascript:;" title="">商务团</a></li>
      <li class="lis"><a href="javascript:;" title="">迦途四季</a></li>
    </ul><!--.r_nav-->
    <div class="tt"><a class="toTop" href="javascript:;" title="">Top</a></div>
  </div>
</div>
@include('footer')
@stop

@section('scripts')


<script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
<script type="text/JavaScript" src="/js/CloudCarousel.1.0.5.js"></script>
<script type="text/JavaScript" src="/js/jquery.mousewheel.js"></script>
<script>

var slideIndex = 1;
var myVar;
showSlides(slideIndex);
var slideIndex_auto = 0;
showSlidesAuto();

$(document).ready(function(){
    var width= $("#carousel1").width()*0.45; 
  // 这初始化容器中指定的元素，在这种情况下，旋转木马.
  $("#carousel1").CloudCarousel({     
    xPos:width,
    yPos:0,
    buttonLeft: $('#but1'),
    buttonRight: $('#but2'),
    altBox: $("#alt-text"),
    titleBox: $("#title-text"),       
    FPS:30,
    reflHeight:0,
    reflGap:0,
    yRadius:60,
    autoRotateDelay: 2600,
    speed:0.2,
    mouseWheel:false,
    bringToFront:true
  });

  var nav=(function(navObj){
    navObj.init=function(){
      this.n=0;
      this.offsetTop=[];
      this.scrolltype=true;
      this.review=function(){
        $('#popup .lis a').eq(this.n).addClass('cur').parent().siblings().children().removeClass('cur');
      };
      for(var i=0;i<$('.content .cont').length;i++){
        this.offsetTop.push($('.content .cont').eq(i).offset().top);
      };
      navObj.bindE();
    };
    navObj.bindE=function(){//滚动条滚动改变导航元素效果
      var self=this;//这里的this等同于上面的this
      $(window).bind('load scroll',function(){
        var stval=$(this).scrollTop();
        if(stval>399){//判断滚动条滚动距离大于或小于header高度时，让导航效果对应在第一个上
          if(stval<self.offsetTop[0]){
            //alert(self.offsetTop[0]);
            self.n=0;
          }else{
            for(var j=0;j<self.offsetTop.length;j++){
              if(stval>(self.offsetTop[j]+300)&& stval<self.offsetTop[j+1]){self.n=j+1;break;}//这里的300是常量
            };
          };
          if(self.scrolltype===true){
            self.review();
          }
          $('#popup').removeClass('pop1').addClass('pop');
        }else{
          $('#popup').removeClass('pop').addClass('pop1');
          $('#popup li a').parent('li:first-child').children().addClass('cur').parent().siblings().children().removeClass('cur');
        };
      });
      $('.toTop').click(function(){//    点击返回首页Top按钮实现页面不刷新返回顶部
        $('html, body').animate({scrollTop:0+'px'},500);
        $('#popup li a').parent('li:first-child').children().addClass('cur').parent().siblings().children().removeClass('cur');
      });
      $('#popup .lis').delegate('a','click',function(e){//   点击导航定位页面内容
        self.n=$(this).index('#popup .lis a');
        self.scrolltype=false;
        self.review();
        var t=self.offsetTop[self.n];
        $('html,body').animate({scrollTop:t},500,function(){//   滚动条滚动 页面不同内容的offsetTop值实现按钮对应效果
          self.scrolltype=true;
          $(self.n).addClass('cur').parent().siblings().children().removeClass('cur'); 
        }); 
      });
    };
    return navObj;
  })(window.navObj || {});
  nav.init();
  
});

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  slideIndex_auto = n;
  clearTimeout(myVar);
  myVar = setTimeout(showSlidesAuto, 3000);
}

function showSlidesAuto() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex_auto++;
    if (slideIndex_auto> slides.length) {slideIndex_auto = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex_auto-1].style.display = "block";  
    dots[slideIndex_auto-1].className += " active";
    clearTimeout(myVar);
    myVar = setTimeout(showSlidesAuto, 3000); // Change image every 2 seconds
    
}
 function scrollTo(loc) {
        $('html,body').animate({scrollTop: $("."+loc).offset().top},500);
        return false;//返回false可以避免在原链接后加上#
    }

</script>
@endsection
