<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/detail.css">
<link rel="stylesheet" type="text/css" href="/css/footer.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
</head>
<body>

	 <div class="header">
    <div class="call-us">
  
      <span style="color: white;">Hotline: </span>
      <a href=""style="color: #d35922;">(028) 6256 3737</a>
      <span style="color: white;">Email:</span>
      <a href=""style="color: #d35922;">vothinhi2410@gmail.com</a>
    </div>
    <div class="">
      @if(Auth::user()) 
    <form action="/auth/logout" method="get">
        @csrf
      <div class="dropdown">
     <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-user"></i>     {{Auth::user()->name}}</a>
      <ul class="dropdown-menu">
        <li><a href="/auth/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>  
      </ul>
    </div>
      </form>
      @else
      <div class="account">
     <span > <a href="/auth/login" style="color: white;"> Đăng Nhập</a> </span>
      <span ><a href="/auth/register" style="color: white;">Đăng Kí </a></span>
      @endif
      </div>
    </div>
  </div>
<div class="nav1">
<form id="demo-2" style="height: 150px;" method="post">
	<img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/MusicLogoN(1).png" style="width: 400px;height: 70px">
	<input type="search" placeholder="Search" >
	  <a href="/cart"> <i class="fa fa-shopping-cart fa-2x"></i>
     <span class="number-cart">
        @if(Session::get('cart'))
        {{Session::get('cart')}}
         @endif
     </span></a>
     <div id="search-suggest" class="s-suggest"></div>
  <div class="container">
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav "style=" margin-top: 20px;margin-left: -20px;text-align: left; "id="menu">
        <li><a href="/home">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Sản phẩm</a>
        </li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
    </div>
 </form>
 <ul class="form" >
  <li><a class="sp" href="#"><i class="fas fa-align-left"></i>Nhóm sản phẩm</a></li>
    <li><a class="uku" href="#">Đàn Ukulele</a></li>
    <li class="violon"><a class="messages" href="#">Đàn Violon</a></li>
    <li><a class="dantoc" href="#">Nhạc cụ dân tộc</a></li>
    <li><a class="giaoduc" href="#">Thiết bị giáo dục</a></li>
    <li><a class="piano" href="#">Đàn piano</a></li>
    <li><a class="guitar" href="#">Guitar</a></li>
    <li><a class="trong" href="#">Trống</a></li>
     <li><a class="ken" href="#">Kèn</a></li>
      <li><a class="sao" href="#">Sáo</a></li>
    
      </ul>
    </div>
</form>
</div>
