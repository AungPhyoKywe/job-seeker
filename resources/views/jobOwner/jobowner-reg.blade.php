

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
  background-image: url('img/background.jpg');
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
<div class="container">
  <button type="button" onclick="window.location.href = '/';"class="btn btn-trans btn-trans-primary">Back</button>

  <div class="row">
  
 <div class="col-sm-4"> </div>
    <div class="card shadow p-3 mb-5 bg-white rounded">
<div class="col-md-12">
   <div class="card-header">
<h1 class="text-center text-success">Job Owner Register</h1>
<br/>
</div>
<div class="col-sm-12">

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form method="post"action="/jobowner-reg">
  @csrf

  <div class="form-group">
    <label for="UserName">Name*</label>
    <div class="input-group">
 <div class="input-group-addon">
  <i class="fas fa-user"></i>
   </div>
    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name">
    @if ($errors->has('name'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>
  </div>
  
  <div class="form-group">
    <label for="nrc">NRC*</label>
    <div class="input-group">
 <div class="input-group-addon">
 <i class="far fa-address-card"></i>
   </div>
    <input type="text" class="form-control{{ $errors->has('nrc') ? ' is-invalid' : '' }}"name="nrc">
    @if ($errors->has('nrc'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('nrc') }}</strong>
    </span>
    @endif
  </div>
</div>
  <div class="form-group">
    <label for="email">Email*</label>
    <div class="input-group">
 <div class="input-group-addon">
  <span class="glyphicon glyphicon-envelope"></span> 
   </div>
    <input type="email"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">
     @if ($errors->has('email'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
  </div>
</div>
  <div class="form-group">
    <label for="pwd">Password*</label>
    <div class="input-group">
 <div class="input-group-addon">
 <i class="fas fa-key"></i>
   </div>
  <input type="password" class="form-control{{ $errors->has('nrc') ? ' is-invalid' : '' }}" name="password">
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
  </div>
</div>
  <div class="form-group">
    <label for="select">Number of Employees*</label>
    <div class="input-group">
 <div class="input-group-addon">
  <i class="fas fa-user"></i>
   </div>
    <select class="form-control form-control-lg"name="emp">
      <option>100</option>
      <option>200</option>
      <option>300</option>
      <option>400</option>
      <option>500</option>
    </select>
  </div>
</div>
  <div class="form-group">
    <label for="phone">Phone*</label>
    <div class="input-group">
 <div class="input-group-addon">
  <i class="fas fa-phone"></i>
   </div>
    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"name="phone">
     @if ($errors->has('phone'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('phone') }}</strong>
    </span>
    @endif
  </div>
</div>
  <div class="form-group">
    <label for="company">Company*</label>
    <div class="input-group">
 <div class="input-group-addon">
 <i class="fas fa-building"></i>
   </div>
    <input type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}"name="company">
 @if ($errors->has('company'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('company') }}</strong>
    </span>
    @endif
  </div>
</div>
<div class="form-group">
    <label for="address">Address*</label>
    <div class="input-group">
 <div class="input-group-addon">
  <i class="fas fa-map-marker-alt"></i>
   </div>
    <input type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"name="address">
     @if ($errors->has('address'))
    <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('address') }}</strong>
    </span>
    @endif
  </div>
  </div>

  <button type="submit" class="btn btn-trans btn-trans-primary"> {{ __('Register') }}</button>
  <a href="{{ route('login') }}" class="pull-right btn btn-trans btn-trans-danger">Already Register?</a>
</form>
<br/>




   
    </div>

   </div>
  </div>
</div>
</div>
</div>
<div id="loading"></div>
</body>
</html>
