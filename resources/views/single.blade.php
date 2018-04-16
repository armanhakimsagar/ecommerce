
 @extends('layout.master')
  
  @section('single')




<style>
/* The container */
.con {
    display: block;
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
    border-radius: 20%;
}

/* On mouse-over, add a grey background color */
.con:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.con input:checked ~ .checkmark {
    background-color: #1B9CB5;
}
.con.red input:checked ~ .checkmark {
    background-color: #f00;
}
.con.green input:checked ~ .checkmark {
    background-color: #008000;
}
.con.blue input:checked ~ .checkmark {
    background-color: #0000ff;
}
.con.yellow input:checked ~ .checkmark {
    background-color: #ffff00;
}
.con.white input:checked ~ .checkmark {
    background-color: #fafafa;
}
.con.pink input:checked ~ .checkmark {
    background-color: #FF69B4;
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
    
	
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
        	
            
            
                <h5 class="mt-lg-5 ml-5">Categories</h5>
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
            <form action="{{ url('single_search') }}" method="post">
                <div style="border-top:1px #ccc solid">
                <h5 class="ml-5 mt-5">Price Range</h5>
                    <ul>
                         <li> 
                            <label class="con"> 0-1000
                              <input type="radio" value="0" checked="checked" name="price">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 1001-2000
                              <input type="radio" value="1000" name="price">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 2001-3000
                              <input type="radio" value="2000" name="price">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 3001-4000
                              <input type="radio" value="3000" name="price">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con"> 4001-5000
                              <input type="radio" value="4000" name="price">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con"> Avobe 5000
                              <input type="radio" value="5000" name="price">
                              <span class="checkmark"></span>
                            </label>  
                        </li>
                    </ul>
                </div>



        
            <div style="border-top:1px #ccc solid">
                    <h5 class="ml-5 mt-5">Choose Color</h5>
                
                    <ul>
                        <li> 
                            <label class="con red"> Red
                              <input type="radio" value="red" checked="checked" name="radio">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con green"> Green
                              <input type="radio" value="green" name="radio">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con blue"> Blue
                              <input type="radio" value="blue" name="radio">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con yellow"> Yellow
                              <input type="radio" value="yellow" name="radio">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con white"> White
                              <input type="radio" value="white" name="radio">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con pink"> Pink
                              <input type="radio" value="pink" name="radio">
                              <span class="checkmark"></span>
                            </label>  
                        </li>
                    </ul>
                </div>

            <div style="border-top:1px #ccc solid">
                        <h5 class="ml-5 mt-5">Size</h5>
                    
                        <ul>
                            <label class="con"> 36
                              <input type="radio" value="36" checked="checked" name="size">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 38
                              <input type="radio" value="38" name="size">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 40
                              <input type="radio" value="40" name="size">
                              <span class="checkmark"></span>
                            </label>
                            <label class="con"> 42
                              <input type="radio" value="42" name="size">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con"> 44
                              <input type="radio" value="44" name="size">
                              <span class="checkmark"></span>
                            </label>  
                            <label class="con"> 46
                              <input type="radio" value="46" name="size">
                              <span class="checkmark"></span>
                            </label>  
                    
                        </ul>
                </div>

            <div style="border-top:1px #ccc solid">
            <h5 class="ml-5 mt-5">Fabrics</h5>
            
                <ul>   
                    <li>
                        <label class="con"> Blended Silk
                          <input type="radio" value="blended" checked="checked" name="febrics">
                          <span class="checkmark"></span>
                        </label>
                        <label class="con"> Cotton
                          <input type="radio" value="cotton" name="febrics">
                          <span class="checkmark"></span>
                        </label>
                        <label class="con"> Endi Cotton
                          <input type="radio" value="blue" name="febrics">
                          <span class="checkmark"></span>
                        </label>
                        <label class="con"> Joysree Silk
                          <input type="radio" value="blue" name="febrics">
                          <span class="checkmark"></span>
                        </label>
                    
                    </li>
                    
                </ul>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="FILTER" style="height:40px; width:200px; background-color:#1B9CB5; text-align:center; line-height:40px; cursor:pointer; border:0px; color:#FFF">
            <br/><br/>

         </div>
         </form>

    	<div class="col-lg-9 col-md-9 col-sm-9 col-12">
        	
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <?php if(isset($sub_category)){ ?>

                    @foreach($sub_category as $s)
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                    	<a href="{{ url('addtocart/') }}/{{ $s->id }}">
                            <img src="{{ asset('image') }}/{{ $s->item_image1 }}">
                            <h6>{{ $s->title }}</h6>
                            <p>TK.  {{ $s->total_price }} </p>
                        </a>
                    </div>
                    @endforeach

                <?php } ?>
                <br/><br/>
                <?php
                    if(isset($sub_category_check)){
                        echo "<div class='alert alert-danger'>
                            <strong>Thank You For Search</strong> <br/>This Item Is Out Of Stock .
                        </div>";
                    }

               ?>





                <?php if(isset($category)){ ?>

                @foreach($category as $c)
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                    <a href="{{ url('addtocart/') }}/{{ $c->id }}">
                        <img src="{{ asset('image') }}/{{ $c->item_image1 }}">
                        <h6>{{ $c->title }}</h6>
                        <p>TK.  {{ $c->total_price }} </p>
                    </a>
                </div>
                @endforeach

                <?php } ?>

                <br/><br/>
               <?php
                    if(isset($category_check)){
                        echo "<div class='alert alert-danger'>
                            <strong>Thank You For Search</strong> <br/>This Item Is Out Of Stock .
                        </div>";
                    }

               ?>







                 <?php if(isset($search)){ ?>

                    @foreach($search as $se)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                            <a href="{{ url('addtocart/') }}/{{ $se->id }}">
                                
                                <img src="{{ asset('image') }}/{{ $se->item_image1 }}">
                                <h6>{{ $se->title }}</h6>
                                <p>TK.  {{ $se->total_price }} </p>
                            </a>
                        </div>
                    @endforeach

               <?php } ?> 
                <br/><br/>
               <?php
                    if(isset($search_null)){
                        echo "<div class='alert alert-danger'>
                            <strong>Thank You For Search</strong> <br/>This Item Is Out Of Stock .
                        </div>";
                    }

               ?>









                 <?php if(isset($ecom_product_febrics)){ ?>

                    @foreach($ecom_product_febrics as $febrics)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                            <a href="{{ url('addtocart/') }}/{{ $febrics->id }}">
                                
                                <img src="{{ asset('image') }}/{{ $febrics->item_image1 }}">
                                <h6>{{ $febrics->title }}</h6>
                                <p>TK.  {{ $febrics->total_price }} </p>
                            </a>
                        </div>
                    @endforeach

               <?php } ?> 


               <?php if(isset($ecom_product_price)){ ?>

                    @foreach($ecom_product_price as $price)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                            <a href="{{ url('addtocart/') }}/{{ $price->id }}">
                                
                                <img src="{{ asset('image') }}/{{ $price->item_image1 }}">
                                <h6>{{ $price->title }}</h6>
                                <p>TK.  {{ $price->total_price }} </p>
                            </a>
                        </div>
                    @endforeach

               <?php } ?> 


               <?php if(isset($ecom_product_color)){ ?>

                    @foreach($ecom_product_color as $color)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-12" style="float: left">
                            <a href="{{ url('addtocart/') }}/{{ $color->id }}">
                                
                                <img src="{{ asset('image') }}/{{ $color->item_image1 }}">
                                <h6>{{ $color->title }}</h6>
                                <p>TK.  {{ $color->total_price }} </p>
                            </a>
                        </div>
                    @endforeach

               <?php } ?> 

            </div>
        </div>    
    
    </div>


@endsection