@include('partials/headerCart')  


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<meta name="description" content="Fashion, Ethnic Wear, Women Fashion, Electronics, Home Appliances">
<meta name="author" content="example.com, example@gmail.com">
<link href="#" rel="icon">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/personal.css">
<style type="text/css">
	a{
		text-decoration: none;
		color: white;
	}
</style>
<header>
		<div class="container">
			<nav class="menu">
				<ul>
					<li><a href=""><i class="fas fa-home fa-3x"></i></a></li>
					<li><a href=""><i class="fas fa-users fa-3x"></i></a></li>
					<li><a href=""><i class="fas fa-tv fa-3x"></i></a></li>
					<li><a href=""><i class="fas fa-heart  fa-3x"></i></a></li>
					<li><a href=""><i class="fas fa-bell fa-3x"></i></a></li>
					<li><span style="font-size: 50px; color: #46bed0" onclick="openNav()">&#9776; </span></li>
				</ul>
			</nav>
		
	<div class="row" >
		<div class="col-sm-2">
		<img src="https://i2.wp.com/tintucthucung.com/wp-content/uploads/2019/05/phoi-giong-meo-anh-long-ngan-9.jpg?w=1100&ssl=1" class="img1">
		</div>
		<div class="col-sm-2" style="margin-left:200px;font-size: 16px;">
			<input type="" hidden name="" value="{{$users->id}}">
			Your Name: {{$users->name}}<br><hr>
			UserName: {{$users->username}}<hr>
			Password: <input type="password" name="" value="{{$users->password}}"><hr>
			<form style="margin-left: 230px;margin-top: -72px;">
			 @csrf
                <a style="text-align: center;" href="changePassword/{{$users->id}}" type="submit"class="btn btn-danger">Change Password</a>
             </form>
		
		</div>

	</div>
	<button type="button" class="btn btn-warning" style="margin-left: 110px;margin-top: 30px;"><a href="/view_order">View Order</a></button>
</body>
		</html>