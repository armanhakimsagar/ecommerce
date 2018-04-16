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
                        	@if(session()->has('delete_message'))

							    <div class="alert alert-success">
							      {{ session()->get('delete_message') }}
							    </div>

							  @endif
                            <!-- small box -->
                              <table class="table table-striped">
							    <thead>
							      <tr>

							      	<th>Title</th>
							      	<th>Skuid</th>
							      	<th>Price</th>
							      	<th>Edit</th>

							      </tr>
							    </thead>
							    <tbody>
									@foreach($data as $d)
								      <tr>
								        <td>{{ $d->title }}</td>
								        <td>{{ $d->sku_id }}</td>
								        <td>{{ $d->total_price }}</td>
								        <td><a href="edit/{{ $d->id }}" class="btn btn-danger">EDIT</a></td>
								      </tr>
								     @endforeach
							    </tbody>
							  </table>
							  {{ $data->links() }}
                        </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
			</div>


@endsection