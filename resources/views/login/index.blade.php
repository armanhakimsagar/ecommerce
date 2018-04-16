<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  
   @if(session()->has('error'))

      <div style="background-color: #f00; display: block; height: 50px; line-height: 50px; color: #fff; font-size: 15px; text-align: center">
          {{ session()->get('error') }} 
      </div>

  @endif

<div class="login">
  <header class="login-header"><span class="text">PRIYO FASHION LOGIN</span><span class="loader"></span></header>

  <form class="login-form" action="{{ Route('LoginSubmit') }}" method="post" autocomplete="off">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input name="name" class="login-input" type="text" placeholder="Username"/>
    <input name="password" class="login-input" type="password" placeholder="Password"/>
    <button class="login-btn" type="submit">login</button>
  </form>


</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
