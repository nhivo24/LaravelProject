<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</script><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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
        
        <li><a href="/personal"><i class="fa fa-user"></i>  Information</a></li> 
        <li><a href="/auth/logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

      </ul>
    </div>
      </form>
      @else
      <div class="account">
      <span > <a href="auth/login" style="color: white;"> Đăng Nhập</a> </span>
      <span ><a href="auth/register" style="color: white;">Đăng Kí </a></span>
      @endif
      </div>
    </div>
  </div>
<div class="nav1">
<form id="demo-2" style="height: 150px;" method="post" action="/user/search">
  @csrf
	<img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/MusicLogoN(1).png" style="width: 400px;height: 70px">

	<input type="search" placeholder="Search" name="search" id="search" >
	  <a href="/cart"><i class="fa fa-shopping-cart fa-2x" id="fa" style="margin-top: 30px;"></i>
      <span class="number-cart">
        @if(Session::get('cart'))
        {{Session::get('cart')}}
         @endif
     </span></a>
     
   
     <div id="search-suggest" class="s-suggest"></div>
  <div class="container">
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav "style=" margin-top: 5px;margin-left: -20px;text-align: left; "id="menu">
        <li><a href="#">Trang chủ</a></li>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="">Sản Phẩm</a>
           <ul class="sub-menu">
             <li>@foreach($categories as $categorie) 
                <a value="{{$categorie->id}}" href="#step-{{$categorie->id}}">»
                  {{$categorie->name}}
                   @endforeach</a>       
            </li>
         </ul>
        </li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
    </div>
 </form>
 
</div>
<div class="container" >
<ul class="form">
	<li><a class="sp" href="#"><i class="fas fa-align-left"></i>Nhóm sản phẩm</a></li>
		<li><a class="uku" href="#">Đàn Ukulele</a></li>
		<li class="violon"><a class="messages" href="#">Đàn Violon</a></li>
		<li><a class="dantoc" href="#">Nhạc cụ dân tộc</a></li>
		<li><a class="giaoduc" href="#">Thiết bị giáo dục</a></li>
		<li><a class="piano" href="#">Đàn piano</a></li>
		<li><a class="guitar" href="#">Guitar</a></li>
		<li><a class="trong" href="#">Trống</a></li>
		
	</ul>
	<div id="myCarousel" class="carousel slide" data-ride="carousel"style="margin-right: 300px;">
   
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/bner4.png" alt="Los Angeles" style="width:800px;height: 300px;">
      </div>
      <div class="item">
        <img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/banner_nhacCu1.png" alt="Chicago" style="width:800px;height: 300px;">
      </div>
    
      <div class="item">
        <img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/banner_nhacCu2.png" alt="New york" style="width:800px;height: 300px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/9563f903.png" style="height:200px;width:242px;float: right;margin-top: -300px;">
   <img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/abstract-music-roc.png" style="height:250px;width:240px;float: right;margin-top: -100px;">
   <span>
   	<img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/Banner-Slide%282%29.jpg"style="margin-left: 70px;width:300px;height: 150px;">
   	<img src="https://demo8001.web30s.vn/datafiles/11010/upload/images/pexels-photo-154147%281%29.jpeg"style="margin-left: -10px;width:306px;height: 150px;">
   </span>
</div>
</div>
</div>
</body>
</html

