@include('partials/headerCart')  
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
<meta name="description" content="Fashion, Ethnic Wear, Women Fashion, Electronics, Home Appliances">
<link rel="stylesheet" type="text/css" href="../css/personal.css">
<link rel="stylesheet" type="text/css" href="../css/header.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change password</div>

                <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="{{route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{$errors->has('password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"  required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
</header>
</head>
</html>
