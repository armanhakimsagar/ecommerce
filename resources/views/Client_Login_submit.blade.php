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
        
        @if(session()->has('message'))

	        <div class="alert alert-success">
	            {{ session()->get('message') }}
	        </div>
	
	    @endif
        	
          <form action="{{ route('ClientVerify') }}" method="post">
            
            <div class="form-group">
             <br>
              <h4> Login Panel : </h4>
              
              <label for="exampleInputEmail1">Email address : </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
              <small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
            </div>
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-check">

              <label for="exampleInputPassword1">Password : </label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password" required>
              
            </div>
            
            
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
		 <br><br> 
		</div>
	</div>    
    

@endsection