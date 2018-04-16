
 @extends('layout.master')
  
  @section('single')





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
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        	
          <h2> Welcome to How To Order Page </h2>
		  <p>
		      1.	Go to “main navigation menu” (Men ▼, Women ▼ . . .)</br>
2.	Click  on “Subcategory” (Men ▼
</br>                           Shirt (subcategory) </br>
3.	You will get products photo chart , Click on product</br>
4.	Select Size, Colour and Fix Quantity </br>
5.	Click on “ADD TO CART / BAG”</br>
6.	If you want to buy more then click on CONTINUE SHOPPING , if want to finish purchase then click “CHECKOUT” </br>
7.	Then  fill the details form </br>
8.	Click On “PLACE THE ORDER”  you will be noticed if order already placed.  </br> 

Later you can go dashboard to track your order details (Order ID , SKU) for future reference. After purchase a goods you are registered customer. No need to fill form for further purchase. </br>
Thanks
</p>
		</div>
	</div>    
    

@endsection