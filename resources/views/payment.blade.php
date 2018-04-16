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
        	
          <br/><br/>
          @if(session()->has('order_confirm'))

              <div class="alert alert-success">
                  {{ session()->get('order_confirm') }}
              </div>

          @endif

          
          <form action="{{ url('order') }}" method="post">
            <h6> IF YOU HAVE ANY ACCOUNT PLEASE LOG IN THEN PLACE ORDER </h6>	
            <div class="form-group">
              <label for="exampleInputEmail1">Email address : </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
              <small id="emailHelp" class="form-text text-muted">Well never share your email with anyone else.</small>
            </div>
            
            
            <div class="form-group">
              <label for="exampleInputEmail1">New Password : </label>
              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password" name="password">
              <small id="emailHelp" class="form-text text-muted">Keep this password for next time log in </small>
            </div>
            
            
            <div class="form-group">
              <label for="exampleInputPassword1">Mobile Number : </label>
              <input type="mobile" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Mobile Number">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-check">

              <label for="exampleInputPassword1">Delivery Address : </label>
                <textarea class="form-control" name="address"></textarea>
              
            </div>
             
            <button type="submit" class="btn btn-primary">Place your order</button>
          
		   <br/><br/>
		</div>
	</div>    
    

@endsection