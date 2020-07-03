<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Space Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="shortcut icon" type="image/png" href="https://jobs.uit.edu.vn/sites/default/files/logo/icon_logo_png.png" />
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<style type="text/css">
	.main{
		top: 200px;
	}
	body{
		background-image: url('https://pic.pikbest.com/01/17/74/40F888piCUBt.jpg-0.jpg!bw700');
	}
</style>
<body>
	<div class="main">
		<div class="main-w3l">
			<div class="w3layouts-main">
				<h2><span>Login now</span></h2>
				<div style="" id="img01">
					 <img id="myImg" src="https://cf.shopee.vn/file/27f93081dccc48eafbd71f2cc09fe835"  class="img-circle" alt="Snow" style="width:100px;height:100px;">
       			 </div>
       			  @if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{$error}}</li>
				            @endforeach
				        </ul>
				    </div>
				     @endif
					<form action="/auth/login" method="post">
							@csrf
						<input placeholder="Username or Email" name="username" type="text" required="">
						<input placeholder="Password" name="password" type="password" required="">
						<p style="color: red;">{{Request::get('error')}}</p>
						<input type="submit" value="login" name="submit">
					</form>
					<h6><a href="#">Lost Your Password?</a></h6>
					<h6><a href="/auth/register">Register now ?</a></h6>
			</div>
		</div>
	</div>
</body>
</html>



