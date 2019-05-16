
@include('layouts.partial.loading')
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
  background-image: url(http://www.joburgchiropractor.co.za/images/background.jpg);
}







</style>



</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  <div class="row">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success">Login</h1>
<br/>

<div class="col-sm-12">

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form action="#">

  <div class="form-group">
    <label for="UserName">Email:</label>
    <input type="text" class="form-control" id="email">
  </div>
  
  <div class="form-group">
    <label for="nrc">Password:</label>
    <input type="text" class="form-control" id="email">
  </div>
  

  <button type="submit" class="btn btn-primary btn-lg">Login</button>
  @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
     </a>
 @endif
</form>





    </div>

   </div>
  </div>
</div>
</div>
</div>
<div id="loading"></div>
</body>
</html>
