
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
         CAREER
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
        <form action="{{ url('carrer_upload') }}" method="post" enctype="multipart/form-data">	
          <h4> Welcome to Carrer Page </h4>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
         
          Name : <input type="text" class="form-control">
		  Phone/Email : <input type="text" class="form-control">
		  Upload CV : <input type="file" name="cv_file" class="form-control"><br>
		  <input type="submit" name="submit" class="btn btn-success" value="Upload">
		  <br><br>
		</form>
		</div>
	</div>    
    

@endsection