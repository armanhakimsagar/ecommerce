 @extends('layout.master')
  
  @section('checkout')


    
    
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

	<div class="container">
    	
        <div class="row">
        
        	<br/><br/>

    @if(session()->has('message'))

        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>

    @endif
        	
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <br>
            	<h2 style="border-bottom:1px #999999 solid"> CHECKOUT </h2>
                <h6>Review your product before payment</h6>

				<br/><br/>
                <table class="table">
                	<tr class="thead-light">
                    	<th colspan="3" width="60%"> Product </th>
                    	<th colspan="1" width="20%"> Qty </th>
                        <th colspan="1" width="20%"> Total </th>
                        <th colspan="1" width="20%"> Remove </th>
                    </tr>


                    <form action="{{ url('addtocart_update') }}" method="post">
                    
                    @foreach($items as $item)

                      <tr>
                      	<td colspan="3" width="60%">{{ $item->name }}</td>
                      	<td colspan="1" width="20%"> <input type="number" min="1" name="qty" value="{{ $item->quantity }}" style="height: 25px; width: 40px; border:1px solid #fafafa"> </td>
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="hidden" name="id" value="{{ $item->id }}" />
                          <td colspan="1" width="20%"> {{ $item->price }} </td>
                          <td colspan="1" width="20%"> 
                              <a href="{{ url('cart_remove') }}/{{ $item->id }}" class="btn btn-danger">
                                  <i class="fa fa-trash-o" aria-hidden="true"></i>
                              </a> 
                          </td>
                      </tr>
                      @endforeach
                      <tr>
                      	<td colspan="3" width="60%">Sub Total : </td>
                      	<td colspan="1" width="20%"> Tk. {{ $total_price }} </td>
                        <td colspan="1" width="20%">
                              <button type="submit" class="btn btn-success">
                                  <i class="fa fa-refresh" aria-hidden="true"></i> UPDATE
                              </button>
                        </td> 
                      </tr>

                    </form>


                </table>
                <br/>
                <a href="{{ url('') }}" style="background-color:#1B9CB5;float:left; margin-right:10px" class="btn btn-success">Continue shopping </a>
                <?php
                    	
                 if (session_status() == PHP_SESSION_NONE) {
		   session_start();
		 }
			
			
            	 if(isset($_SESSION['client'])){ ?>
            	 
            		<form action="{{ url('oorder') }}" action="post">
            		   <input type="hidden" value="{{ csrf_token() }}" name="_token" />
            		   <input type="hidden" value="<?php echo $_SESSION['client'] ?>" name="email" />
            		   <button type="submit" style="background-color:#1B9CB5" class="btn btn-primary">Place your order</button>
            		</form>
            		
             <?php }else{ ?>
                <a href="{{ url('payment') }}" style="background-color:#1B9CB5" class="btn btn-success">Checkout </a>
             <?php } ?>
                <br><br>
        	</div>
            
            
            
        </div>

    </div>



@endsection