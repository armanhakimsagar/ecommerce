@extends('admin.master.layout')


@section('edit')

		
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Insert Product
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                   @if(session()->has('message'))

                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>

                @endif

                    <form action="{{ route('AdminUpdate') }}" enctype="multipart/form-data" method="post"> 
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <input type="hidden" name="item_image1" value="{{ $data->item_image1 }}">

                        <input type="hidden" name="item_image2" value="{{ $data->item_image2 }}">

                        <input type="hidden" name="item_image3" value="{{ $data->item_image3 }}">

                        <input type="hidden" name="item_image4" value="{{ $data->item_image4 }}">

                        <input type="hidden" name="id" value="{{ $data->id }}">
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="col-lg-3 col-xs-12">
                           <h4> TITLE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="title" class="form-control" value="{{ $data->title }}">
                        </div>

                    </div>                        

                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> PRODUCT DESCRIPTION : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="description" class="form-control" value="{{ $data->product_desc }}">
                        </div>


                    </div>





                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> CATEGOTY NAME : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <select name="category" class="form-control">
                                    <option>Select a category</option>

                                    @foreach($category as $cat)

                                        <option value="{{ $cat->id }}" 
                                        <?php
                                            if($cat->id == $data->category_id){
                                                echo " selected";
                                            }

                                         ?> >{{ $cat->category_name }}
                                        </option>

                                    @endforeach

                            </select>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-lg-3 col-xs-12">
                           <h4> SUB-CATEGOTY NAME : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                             <select name="subcategory" class="form-control">
                                    <option>Select a subcategory</option>
                                    @foreach($subcategory as $scat)

                                        <option value="{{ $scat->id }}" 
                                        <?php
                                            if($scat->id == $data->sub_category){
                                                echo " selected";
                                            }

                                         ?> >{{ $scat->subcat_name }}
                                        </option>

                                    @endforeach
                            </select>
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> BRAND : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            Brand : <input type="radio" name="brand" class="form-control" value="1" 
                            <?php
                                if($data->brand_name == 1){
                                    echo " checked";
                                }

                            ?> >
                            NON - BRAND : <input type="radio" name="brand" class="form-control" value="2"
                            <?php
                                if($data->brand_name == 2){
                                    echo " checked";
                                }

                            ?>
                            >
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> TIMING : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            OLD : <input type="radio" name="time" value="1" class="form-control"
                            <?php
                                if($data->timing == 1){
                                    echo " checked";
                                }

                            ?>

                            >
                            NEW : <input type="radio" name="time" value="2" class="form-control"
                            <?php
                                if($data->timing == 2){
                                    echo " checked";
                                }

                            ?>

                            >
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> OCCATION : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <SELECT name="ocation" class="form-control">
                                    <OPTION>Select a Ocation</OPTION>
                                    @foreach($occation as $o)

                                        <option value="{{ $o->occation_id }}" 

                                        <?php
                                            if($o->occation_id == $data->occation_id){
                                                echo " selected";
                                            }

                                         ?> >{{ $o->occation_name }}

                                        </option>

                                    @endforeach
                            </SELECT>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> UNIT : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="unit" class="form-control" value="{{ $data->unit }}">
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> PRICE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="price" class="form-control" value="{{ $data->price }}">
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> DISCOUNT : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="discount" class="form-control" value="{{ $data->discount }}">
                        </div>


                    </div>





                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> SKU ID : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="skuid" class="form-control" value="{{ $data->sku_id  }}">
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> QUANTITY : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="text" name="quantity" class="form-control" value="{{ $data->quantity  }}">
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> IMAGE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="file" name="image1" value="{{ $data->item_image1  }}">
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> IMAGE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="file" name="image2" value="{{ $data->item_image2 }}">
                        </div>


                    </div>




                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> IMAGE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="file" name="image3" value="{{ $data->item_image3 }}">
                        </div>


                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-xs-12">
                           <h4> IMAGE : </h4>
                        </div>
                        <div class="col-lg-9 col-xs-12">
                            <!-- small box -->
                            <input type="file" name="image4" value="{{ $data->item_image4 }}">
                        </div>


                    </div>


                     <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <!-- small box -->
                            <input type="submit" name="submit" class="btn btn-success">
                        </div>


                    </div>


                        </div><!-- ./col -->
                    </div><!-- /.row -->

                </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
</div>


@endsection