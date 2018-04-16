<!DOCTYPE html>
<html lang="en" >

   <head>
	<link rel="shortcut icon" href="../img/slider/logo.jpg" >
	<!-- this css for show demo box -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
	
	<!-- this is jquery link -->
    <script src="{{ asset('js/jquery.js') }}"></script>
	
	<!-- product box css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/xzoom.css') }}" /> 

   <!-- hover zoom action  -->
   <script type="text/javascript" src="{{ asset('js/xzoom.min.js') }}"></script>
   <script src="{{ asset('js/setup.js') }}"></script>
    
  </head>

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
   <div class="container" style="padding: 0px">

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
                    <a class="nav-link" href="{{ url('category/17') }}">Whats New <span class="sr-only">(current)</span></a>
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




    <div class="row">
    	     <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#1B9CB5;  text-align:center; height: 40px; line-height: 40px">
          
            
          
            
            <a href="{{ url('whoweare') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
              WHO WE ARE
            </a>
            
            <a href="{{ url('ourpeople') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
               OUR PEOPLE 
            </a>

      <a href="{{ url('carrer') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
         CARRER
            </a>
            
            <a href="{{ url('news') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
               NEWS
      </a>

                                 <a href="{{ url('ethics') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
               ETHICS
      </a>


     <a href="{{ url('social_active') }}" style="color:#fafafa" class="col-lg-1 col-md-1 col-sm-12 col-12 mr-lg-5">
               SOCIAL ACTIVITIES
      </a>
            
        </div>
    
    </div>
<br/><br/>
	<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-6 d-lg-block d-sm-none d-none">
            <div class="xzoom-container" style="margin-left:100px">
            
            	@foreach($addtocart as $add)
                <img class="xzoom" id="xzoom-default" src="{{ asset('image') }}/{{ $add->item_image1 }}" xoriginal="{{ asset('image') }}/s{{ $add->item_image1 }}" />
                  <div class="xzoom-thumbs" style="height:400px; width:80px; margin-top:-600px; margin-left:-100px">
                    <a href="{{ asset('image') }}/s{{ $add->item_image1 }}"><img class="xzoom-gallery" width="80" src="{{ asset('image') }}/{{ $add->item_image1 }}"  xpreview="{{ asset('image') }}/{{ $add->item_image1 }}"></a>
                    <a href="{{ asset('image') }}/s{{ $add->item_image2 }}"><img class="xzoom-gallery" width="80" src="{{ asset('image') }}/{{ $add->item_image2 }}"></a>
                    <a href="{{ asset('image') }}/s{{ $add->item_image3 }}"><img class="xzoom-gallery" width="80" src="{{ asset('image') }}/{{ $add->item_image3 }}" ></a>
                    <a href="{{ asset('image') }}/s{{ $add->item_image4 }}"><img class="xzoom-gallery" width="80" src="{{ asset('image') }}/{{ $add->item_image4 }}" ></a>
                  </div>
              	
            </div>  
        	</div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            	<h4> {{ $add->title }}</h4> 
                <h5> Tk. {{ $add->total_price }}</h5>
                <small>Sku id : {{ $add->sku_id }}</small>
                <br><br>
            @endforeach 
    <script>
		$(document).ready(function(e) {
            $("#info_func,#care_func,#ship_func").hide();
			$("#item_func").show();
			
			$("#info").click(function(){
				$("#item_func,#care_func,#ship_func").hide();
				$("#info_func").show();
			})
			
			$("#care").click(function(){
				$("#item_func,#info_func,#ship_func").hide();
				$("#care_func").show();
			})
			
			$("#ship").click(function(){
				$("#item_func,#care_func,#info_func").hide();
				$("#ship_func").show();
			})
			
			$("#item").click(function(){
				$("#info_func,#care_func,#ship_func").hide();
				$("#item_func").show();
			})
			
        });
	
	
	</script>

                
                <div style="height:35px; width:100%; display:block">
                    <div id="item" style="height:35px; width:21%; border:1px #ccc solid; padding:2px; margin-right:3px; float:left; font-size:10px; line-height: 35px; text-align:center; cursor:pointer">
                        <b>ITEM DESCRIPTION</b>
                    </div>
                    <div id="info" style="height:35px; width:21%; border:1px #ccc solid; padding:2px; margin-right:3px; float:left; font-size:10px; text-align:center; cursor:pointer">
                        <b>PRODUCT INFORMATION</b>
                    </div>
                    <div id="ship" style="height:35px; width:21%; border:1px #ccc solid; padding:2px; margin-right:3px; float:left; font-size:10px; line-height: 35px; text-align:center; cursor:pointer">
                        <b>HOW TO ORDER</b>
                    </div>
                    <div id="care" style="height:35px; width:21%; border:1px #ccc solid; padding:2px; margin-right:3px; float:left; font-size:10px;  line-height: 35px;text-align:center; cursor:pointer">
                        <b>WASH CARE</b>
                    </div>
                </div>
                
                
                <div style=" padding:10% 5% 20% 5%; width:85%; border:#ccc 1px solid; margin-top:10px">
                	
                    <div id="item_func">
                    	
                      {{ $add->product_desc }}
                        
                    </div>
                    <div id="info_func">
                      <style type="text/css">
                        table{
                          font-size: 12px
                        }
                        table tr td{
                          border-bottom: 1px #ccc solid
                        }

                      </style>

                    	@foreach($product_information as $info)
                        
                          <table class="table">

                            <thead class="thead-light">
                              <tr>

                                <th scope="col"> Fabrics </th>
                                <td>{{ $info->fabrics }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Colour </th>
                                <td>{{ $info->colour }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Cut </th>
                                <td>{{ $info->cut }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Sleeve </th>
                                <td>{{ $info->sleeve }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Collar </th>
                                <td>{{ $info->collar  }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Length </th>
                                <td>{{ $info->length }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Value addition </th>
                                <td>{{ $info->value_ddition }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Occasion </th>
                                <td>{{ $info->occasion }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Others </th>
                                <td>{{ $info->others }}</td>
                              </tr>
                              <tr>

                                <th scope="col"> Event </th>
                                <td>{{ $info->eventt }}</td>
                              </tr>
                            </thead>


                          </table>



                      @endforeach

                    </div>
                    <div id="ship_func">
                        hfjkj bhjbk
                    </div>
                    <div id="care_func">
                    YHHTFGVHV GVHG
                    </div>
                	
                </div>
                <br/><br/>

<style type="text/css">
  
.con {
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.con input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.con:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.con input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.con input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.con .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}


</style>

              Available Size : <br/><br/>
              
	<form action="{{ url('add_to_cart_id') }}" method="post">
              @foreach($size as $s)
               
                <label class="con">{{ $s->size }}
                  <input type="radio" checked="checked" value="{{ $s->size }}" name="size">
                  <span class="checkmark"></span>
                </label>

              @endforeach

               <br/><br/>

                <h6> Available color : </h6>
               <div>

                  @foreach($color as $c)
                   
        
                    <label class="con">{{ $c->major_color }}
                      <input type="radio" checked="checked" value="{{ $c->color_code }}" name="color">
                      <span class="checkmark"></span>
                    </label>



                  @endforeach

               </div>
               <br>
            
               <h6> Quantity : </h6> 
               <small>current stock ({{ $add->quantity }} pc ) </small>
               <input  min="1" value="1" type="number" name="number" style="height:30px; width:50px; margin-right: 50px" max="{{ $add->quantity }}">
               
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="id" value="{{ $c->id }}">
              <input type="submit" value="ADD TO CART" style="height:40px; width:120px; background-color:#1B9CB5; border:0px; color:#FFF; margin-bottom: 10px" />
              </div>
            </form>
            
            </div>
            
            
        
   
    <!-- social media -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="background-color:#EFEFEF; height:100px; line-height:100px; text-align:center;">
          
            <a href="" style="color:#333" class="mr-lg-5">
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
            
              </ul>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
        
          <h5 class="ml-4">Social Links</h5>
              <ul>
                    <li><a href="">Facebook</a></li>
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
                    <li><a href="{{ url('howtoorder') }}">Shipping and Return </a></li>
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
