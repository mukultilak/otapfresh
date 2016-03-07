@extends('admin.layout.adminlayout')




@section('style')
    body {
  margin: 0;
  padding: 0;
  font-size: 16px;
  font-family: 'Open Sans', sans-serif;
  line-height: 1.5;
  color: #808080;
  background: #39cc62;
}
ul{
    list-style:none;
    padding:0;
}
.wrapper {
  margin: 40px auto;
  width: 960px;
  
  height: auto;
}
.wrapper::before, .wrapper::after {
  content: "";
  display: table;
  clear: both;
}
.wrapper .panel {
  position: relative;
  margin: 0px 20px;
  padding: 0 20px 20px;
  overflow: hidden;
  float: left;
  width: 280px;
  height: 250px;
  text-align: center;
  background: #F1F1F1;
  border: 1px solid #30bb57;
  box-sizing: border-box;
  transition: border 200ms ease;
  cursor: pointer;
}
.wrapper .panel img {
  display: block;
  margin: 20px auto;
  text-align: center;
}
.wrapper .panel h3 {
  display: block;
  margin-bottom: 15px;
  color: #30bb57;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  text-shadow: 0 2px 1px #FFF;
}
.wrapper .panel p {
  font-size: 14px;
  text-shadow: 0 1px 1px #FFF;
}
.wrapper .panel .slide {
  position: absolute;
  bottom: -450px;
  left: 0;
  z-index: 100;
  padding: 20px;
  height: 100%;
  width: 100%;
  text-align: left;
  background: rgba(1, 61, 71, 0.95);
  box-sizing: border-box;
  transition: all 300ms 500ms cubic-bezier(0.645, 0.045, 0.355, 1);
}
.wrapper .panel .slide h4 {
  margin-bottom: 20px;
  text-align: left;
  text-shadow: none;
  font-size: 18px;
  font-weight: 600;
  color: #39cc62;
}
.wrapper .panel .slide ul li {
  padding: 5px 5px 5px 8px;
  line-height: 24px;
  font-size: 13px;
  color: #F0F0F0;
  border-bottom: 1px solid #3e737b;
}
.wrapper .panel .slide ul li:last-child {
  border: 0;
}
.wrapper .panel .slide ul li .fa {
  padding-right: 5px;
  color: #39cc62;
}

.panel:hover {
  border: 1px solid #30bb57;
}
.panel:hover .slide {
  bottom: 0;
  cursor: pointer;
}

.animated {
  animation-duration: 500ms;
  animation-fill-mode: both;
  animation-delay: 1s;
}

@keyframes slideInDown {
  0% {
    -webkit-transform: translateY(-120%);
    -ms-transform: translateY(-120%);
    transform: translateY(-120%);
    visibility: visible;
  }
  100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}
.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
}

p.title {
  margin: 0 auto;
  padding: 0;
  font-size: 14px;
  line-height: 16px;
  font-weight: 400;
  height: 36px;
  width: 890px;
  background: #013d47;
  border: 1px solid #2ba74e;
  color: #FFF;
  text-align: center;
  border-radius: 5px;
}


  
@endsection

@section('content')
<div class="wrapper">
  <div class="panel animated slideInDown">
   <!-- {!! Html::image('ui/img/try.jpe', '', array( 'width' => '95px' )) !!}-->
    <h3>Engineering</h3>
    <p><div class="title">{!//$event->title!!}</div></p>
    <div class="slide">
      <h4>Details</h4>
      <p> <div class="quote">{!$event->desc!!}</div></p>
    </div>
  </div>

  <div class="panel animated slideInDown">
   <!-- <img src="http://timruby.me/42c-icon.png" alt="" />-->
    <h3>Pharmacy</h3>
    <p><div class="title">{!//$event->title!!}</div></p>
    <div class="slide">
      <h4>Details</h4>
      <p> <div class="quote">{!$event->desc!!}</div></p>
    </div>
  </div>
    <div class="panel animated slideInDown">
   <!-- <img src="" alt="" />-->
    <h3>Polytechnic</h3>
    <p><div class="title">{!//$event->title!!}</div></p>
    <div class="slide">
      <h4>Details</h4>
       <p> <div class="quote">{!$event->desc!!}</div></p>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="panel animated slideInDown">
   <!-- <img src="http://timruby.me/42c-icon.png" alt="" />-->
    <h3>MBA</h3>
    <p><div class="title">{!//$event->title!!}</div></p>
    <div class="slide">
      <h4>Details</h4>
      <p> <div class="quote">{!$event->desc!!}</div></p>
    </div>
  </div>
  <div class="panel animated slideInDown">
   <!-- <img src="http://timruby.me/42c-icon.png" alt="" />-->
    <h3>MCA</h3>
   <p><div class="title">{!//$event->title!!}</div></p>
    <div class="slide">
      <h4>Details</h4>
       <p> <div class="quote">{!$event->desc!!}</div></p>
  </div>
    </div>
</div>
<p class="title">Simple Animated Institute Panels — Hover each panel to reveal Details of Latest Events</p>


@endsection