@extends('admin.master.layout')


@section('view')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Product View
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                        				
                              		
			    	@foreach($order as $o)
				   <div class="alert alert-success">
					  <div><strong>SKU ID </strong>: {{ $o->skuid }} </div> <br/>
					  <div><strong>Choosen Color </strong>: {{ $o->color }} </div><br/>    
					  <div><strong> Choosen Size : </strong> {{ $o->size}} </div><br/>
					  <div><strong> Order ID  : </strong>{{ $o->orderid}} </div><br/>
				   </div>
				
				@endforeach
				
                           
                        </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
			</div>


@endsection