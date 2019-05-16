@include('layouts.partial.loading')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
<div class="page">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
  
body{
  background-image: url(img/background.jpg);
}

.btn-trans {
      background:none;
      box-shadow:none;

}  

.btn-trans-default {
     border: 2px solid #999999;
     color:#999999;
}
.btn-trans-primary {
     border: 2px solid #0044CC;
     color:#0044CC;
}
.btn-trans-success {
     border: 2px solid #51A351;
     color:#51A351;
}  

.btn-trans-info {
     border: 2px solid #0088CC;
     color:#0088CC;
} 
.btn-trans-warning {
     border: 2px solid #F89406;
     color:#F89406;
} 
.btn-trans-danger {
     border: 2px solid #BD362F;
     color:#BD362F;
} 






</style>



</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  
  <div class="row">

    <div class="col-sm-4"></div>

    <div class="col-sm-4 card shadow p-3 mb-5 sm-white rounded">

  @if(Session::get('key')=='value')
  <div class="alert alert-success" role="alert"id="alert">
 Successfully Register.Please Login!
</div>
@endif

@if(Session::get('login')==1)
  <div class="alert alert-danger" role="alert"id="alert">
 Your account has been deactivated!!
</div>
@endif
{{Session::forget('key')}}
{{Session::forget('login')}}
<div class="card-header">
<h1 class="text-center text-success">Login</h1>
<br/>
</div>
<div class="card-body">
<div class="col-sm-12">

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form method="POST" action="{{ route('login') }}">
@csrf
  <div class="form-group">
    <label for="email">Email:</label>
    <div class="input-group">
 <div class="input-group-addon">
  <span class="glyphicon glyphicon-envelope"></span> 
   </div>
    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="email">
  </div>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <div class="input-group">
 <div class="input-group-addon">
  <i class="fas fa-key"></i>
   </div>
    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  id="email">
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>
  </div>

  <button type="submit" class="btn btn-trans btn-trans-primary"> {{ __('Login') }}</button>
  <button type="button" onclick="window.location.href = '/';"class="pull-right btn btn-trans btn-trans-danger">Back</button>
 
</form>



</div>

    </div>

   </div>
  </div>
</div>
</div>
</div>
<div id="loading"></div>
<script type="text/javascript">
  setTimeout(function(){
 
    $(".alert").hide("20")
 
    }, 2800);

</script>
</body>
</html>
