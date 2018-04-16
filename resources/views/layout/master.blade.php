<!DOCTYPE html>
<html lang="en" >
<head>

  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="../../img/slider/logo.jpg" >

  
</head>

<body>

<body>
<style>
.header_bg{
	background-color:#1B9CB5;
	height:40px;
	
}
.header_bg a{
	color:#FFF;
	float:right;
	font-size:9px
}
.header2_bg{
	background-color:#1B9CB5;
	height:80px
}
.logo{
	height:80px;
	width:200px
}
.bg-light {
    background-color: #fff!important;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
    
    color:#1B9CB5;
}
</style>


<div class="container-fluid" style="background-color:#1B9CB5;">

	 <div class="container">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">	
                
                <div class="row header_bg">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3" style="line-height: 120%">
                        
                        <a href="{{ url('checkout') }}" class="mt-lg-2 mt-md-2 ml-lg-3 ml-md-3">
                          <i class="fa fa-shopping-bag" aria-hidden="true"></i>MY CART</a>
                        <a href="{{ url('/customer') }}" class="mt-lg-2 mt-md-2"> CUSTOMER SERVICE &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; </a>
                        <a href="{{ url('/help') }}" class="mt-lg-2 mt-md-2 ml-lg-3 ml-md-3"> HELP &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; </a>
                        
                    </div>
                </div>
            </div>    
		</div>
     </div>
</div>




<div class="container-fluid" style="background-color:#EFEFEF">
	 <div class="container">

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                
                    <div class="col-lg-7 col-md-7 col-sm-7 col-12" style="padding: 0px">
                        <a href="{{ url('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}" style="padding: 0px" /></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                    <form action="{{ url('search') }}" style="float:right" method="get">
                        <input type="text" class="mt-lg-4 mt-md-4" placeholder="search for item" style="border-radius:5px 0px 0px 5px; border:0px; padding:5px; background-color:#FFF; font-size:12px" name="search" />
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" class="btn btn-default" style="border-radius:0px 5px 5px 0px; border:0px; padding:5px;background-color:#FFF; margin-left:-5px; margin-top:-3px;font-size:12px">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form> 
                    
                    
                    </div>
                    <?php
                    	
                      if (session_status() == PHP_SESSION_NONE) {
			   session_start();
		      }
			
			
            	    if(isset($_SESSION['client'])){ ?>
            	 
	            	 <div class='col-lg-1 col-md-1 col-sm-1 col-12'>
	            		<a style="line-height:80px; color:#333;font-size:12px" href="{{ url('client_logout') }}">Logout </a>
	            	 </div>
	            	 <div class='col-lg-1 col-md-1 col-sm-1 col-12'>
                    		<a style="line-height:80px; color:#333;font-size:12px" href="{{ url('dashboard') }}">Dashboard</a>
                    	 </div>
	            	<?php
	            	}else{
                    ?>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                    	<a href="{{ route('Client_Reg_View') }}" style="line-height:80px; color:#333;font-size:12px">Registration </a>
                    </div>
                    
                    <div class="col-lg-1 col-md-1 col-sm-1 col-12">
                    	<a href="{{ route('Client_Login_submit') }}" style="line-height:80px; color:#333;font-size:12px">Login </a>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </div>

</div>

 <div class="container">
 <!-- menu -->
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
           <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 60px">
              <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                
                 
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('category/17') }}">What's New <span class="sr-only">(current)</span></a>
                  </li>
                  
                  
                  

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Men
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item" href="{{ url('category/sub/Men Shirt') }}">Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Panjabi') }}">Panjabi</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Kurta') }}">Kurta</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Polo Shirt') }}">Polo Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men T-Shirt') }}">T-Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Normal pant') }}">Normal pant</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Jeans Pant') }}">Jeans Pant</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Trousers') }}">Trousers</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Boxer/ Underwear') }}">Boxer/ Underwear</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Men Lungi') }}">Lungi</a>

                    </div>

                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Women
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ url('category/sub/Women Shalware Kamez') }}">Shalware Kamez</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Saree') }}">Saree</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Kurta') }}">Kurta</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Unstitch 03 Pcs') }}">Unstitch 03 Pcs</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Dupatta') }}">Dupatta</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Scarves') }}">Scarves</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Pajama') }}">Pajama</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Pant') }}">Pant</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Women Fabrics') }}">Fabrics</a>
                    </div>
                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Baby
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                      <a class="dropdown-item"><b>BOYS(0-2 Years)</b></a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Shirt Pant Set') }}">Shirt Pant Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Shirt') }}">Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Pant (3/4)') }}">Pant (3/4)</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Panjabi & Pajama Set') }}">Panjabi & Pajama Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys T-Shirt') }}">T-Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Polo Shirt') }}">Polo Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby boys Gift Set') }}">Gift Set</a>

                      <a class="dropdown-item"><b>GIRLS(0-2 Years)</b></a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby Girl Frock Set') }}">Frock Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby Girl Frock') }}">Frock</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby Girl Nima') }}">Nima</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby Girl Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Baby Girls Gift Set') }}">Gift Set</a>
                    </div>
                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kids
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item"><b>BOYS  (3-7 Years)</b></a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Shirt Pant Set') }}">Shirt Pant Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Shirt') }}">Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Pant') }}">Pant (3/4)</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Panjabi & Pajama Set') }}">Panjabi & Pajama Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys T-Shirt') }}">T-Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Polo Shirt') }}">Polo Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Boys Coaty') }}">Coaty</a>

                      <a class="dropdown-item"><b>GIRLS (3-7 Years)</b></a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Frock Set') }}">Frock Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Frock') }}">Frock</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Nima') }}">Nima</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Shalware Kamez') }}">Shalware Kamez</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girls Ghagra Choli') }}">Ghagra Choli</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girl Coaty') }}">Coaty</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Kids Girl Pant') }}">Pant</a>
                    </div>
                  </li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Teen
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item"><b>BOYS  (8-16 Years)</b></a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Shirt Pant Set') }}">Shirt Pant Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Shirt') }}">Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Pant') }}">Pant (3/4)</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Panjabi & Pajama') }}">Panjabi & Pajama Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys T-Shirt') }}">T-Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Polo Shirt') }}">Polo Shirt</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Boys Coaty') }}">Coaty</a>

                      <a class="dropdown-item"><b>GIRLS (8-16 Years)</b></a>

                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Shalware Kamez') }}">Shalware Kamez</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Frock Set') }}">Frock Set</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Frock') }}">Frock</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Fatua') }}">Fatua</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Ghagra Choli') }}">Ghagra Choli</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Pant') }}">Pant</a>
                      <a class="dropdown-item" href="{{ url('category/sub/Teen Girls Coaty') }}">Coaty</a>
                    </div>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('category/12') }}">Others</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('category/13') }}">Festible collection</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('category/14') }}">Value Added</a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('category/15') }}">Example</a>
                  </li>


                  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('category/16') }}"><span style="background-color:#1B9CB5; height:30px; width:40px; color:#FFF; display:block; line-height:30px; text-align:center">SALE</span></a>
                  </li>
                  
                  
                  
                </ul>
              </div>
            </nav>
		</div>
    </div>
  





    @yield('home')


    @yield('single')


    @yield('checkout')









  
    
    <!-- social media -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#EFEFEF; height:100%; line-height:100%; text-align:center; padding:10px 0px 10px 0px">
          
            <a href="www.facebook.com/priyoshop" style="color:#333" class="mr-lg-5">
              <i class="fa fa-facebook" aria-hidden="true" style="font-size:18px"></i> FACEBOOK 
            </a>
            
            <a href="" style="color:#333" class="mr-lg-5">
              <i class="fa fa-twitter" aria-hidden="true" style="font-size:18px"></i> TWITTER 
            </a>

      <a href="" style="color:#333" class="mr-lg-5">
        <i class="fa fa-youtube" aria-hidden="true" style="font-size:18px"></i> YOUTUBE 
            </a>
            
            <a href="" style="color:#333" class="mr-lg-5">
              <i class="fa fa-linkedin" aria-hidden="true" style="font-size:18px"></i> LINKDEIN 
      </a>
            
            <a href="" style="color:#333" class="mr-lg-5">
              <i class="fa fa-pinterest" aria-hidden="true" style="font-size:18px"></i> PINTEREST 
      </a>
            
            <a href="" style="color:#333" class="mr-lg-5">
              <i class="fa fa-instagram" aria-hidden="true" style="font-size:18px"></i>  INSTAGRAM 
      </a>
            
        </div>
    
    </div>

  <!-- footer -->
 <style>
  ul li{
    list-style:none
  }
  ul li a{
    color:#666
  }
 </style>
 
    
    <div class="row mt-4">
      <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        
          <h5 class="ml-4">Categories</h5>
              <ul>
                    <li><a href="{{ url('category/17') }}">What's New </a></li>
                    <li><a href="{{ url('category/7') }}">Men </a></li>
                    <li><a href="{{ url('category/8') }}">Women </a></li>
                    <li><a href="{{ url('category/11') }}">Teen </a></li>
                    <li><a href="{{ url('category/9') }}">Baby </a></li>
                    <li><a href="{{ url('category/10') }}">Kids </a></li>
                    <li><a href="{{ url('category/12') }}">Others </a></li>
                    <li><a href="{{ url('category/14') }}">Value Added </a></li>
                    <li><a href="{{ url('category/13') }}">Festible </a></li>
                    <li><a href="{{ url('category/15') }}">Example </a></li>
            
              </ul>
            
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
          
            <h5 class="ml-4">Who We Are</h5>
              <ul>
                    <li><a href="{{ url('ourpeople') }}">About Us </a></li>
                    <li><a href="{{ url('ethics') }}">Our Ethics </a></li>
                    <li><a href="{{ url('ourpeople') }}">Our People </a></li>
                    <li><a href="{{ url('news') }}">News & Events </a></li>
                    <li><a href="{{ url('carrer') }}">Career </a></li>
                    <li><a href="{{ url('social_activities') }}">Social Activities </a></li>
              </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        
          <h5 class="ml-4">Social Links</h5>
              <ul>
                    <li><a href="https://facebook.com">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Pinterest</a></li>
                    <li><a href="">Youtube</a></li>
                    <li><a href="">Linkedin</a></li>
                    <li><a href="">Instagram</a></li>
              </ul>
        
        
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        
          <h5 class="ml-4">Customer Service & help</h5>
              <ul>
                    <li><a href="{{ url('customer') }}">Contact Us</a></li>
                    <li><a href="{{ url('howtoorder') }}">Shipping & Return </a></li>
                    <li><a href="{{ url('billing') }}">Billing & Payment </a></li>
                    <li><a href="{{ url('washcare') }}">Wash Care </a></li>
            
              </ul>
        
        </div>
    </div>  
   
   
   <div class="row mt-4" style="border-top:4px #ccc solid">
   
      <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
        <span style="color: #666; font-size: 12px">&copy;PriyoFashion 2017 </span><span style="float: right; color: #666; font-size: 12px">DEVELOPED BY : <a style="float: right; color: #666; font-size: 12px" href="https://www.facebook.com/ArmanHakimSagar">armanhakimsagar</a></span> 
      </div>
   
   </div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
<script  src="{{ asset('js/index.js') }}"></script>

</body>
</html>
 

 
 <!--
 *  Priyofashion.com - ** Developed by : Arman Hakim Sagar
             ** email : armanhakimsagar@gmail.com
             ** github : https://github.com/armanhakimsagar
             ** facebook : https://www.facebook.com/ArmanHakimSagar
             
 -->