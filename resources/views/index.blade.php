  
  @extends('layout.master')
  
  @section('home')
  
    
    <!-- slider -->
	
    <div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/slider/PJ160118.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/slider/SR150118.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/slider/ST170318.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    
    </div>
    
    
    <div class="row">

      @foreach($women as $w)
      
      	<div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <a href="{{ url('category') }}/8">
          	   <img src="{{ asset('image') }}/{{ $w->item_image1 }}">
            </a>
        </div>
      
      @endforeach
    </div>



	<div class="row">
      <div class="col-md-7 heroSlider-fixed" style="display:block; margin:auto">
        <div class="overlay"> <h3 style="text-align: center"><b>WHAT'S NEW</b></h3></div>
         <!-- Slider -->
        <div class="slider responsive">
          	@foreach($ecom_product as $p)
            <div>
              <a href="{{ url('addtocart') }}/{{ $p->id }}"><img src="{{ asset('image') }}/{{ $p->item_image1 }}"></a>
            </div>
           @endforeach
        </div>
      
				
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
    
    
    
  
  
  @endsection
  
  