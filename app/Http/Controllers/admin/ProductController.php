<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\ecom_product;

use App\occation;

use App\prod_size;

use App\category;

use App\subcategory;

use App\order;



class ProductController extends Controller
{

	public function index(){

        $occation = occation::all();

        $prod_size = prod_size::all();

        $category = category::all();

        $subcategory = subcategory::all();

    	return view('admin/home',compact('occation','prod_size','category','subcategory'));

    }

    



    public function insert(Request $request){
    	//print_r($_POST);


    	$insert = new ecom_product;

    	$insert->title = $request->title;
    	$insert->product_desc = $request->description;
    	$insert->category_id = $request->category;
    	$insert->sub_category = $request->subcategory;
    	$insert->brand_name = $request->brand;
    	$insert->timing = $request->time;
    	$insert->occation_id = $request->ocation;
    	$insert->unit = $request->unit;
    	$insert->price = $request->price;	
    	$insert->discount = $request->discount;
        $insert->tax = $request->tax;

        // tax discount calculation
        $dis_price = $request->price + ($request->price*$request->tax)/100;
        $total_price = $dis_price - ($dis_price*$request->discount)/100;
        

        $insert->total_price = $total_price;


    	$insert->sku_id = $request->skuid;
    	$insert->quantity = $request->quantity;


    	// image upload
	
    	$image1 = $request->file('image1');
		$name1 = time().rand(0,999999).'.'.$image1->getClientOriginalExtension();
		$destinationPath = 'image';
		$image1->move($destinationPath, $name1);
		$insert->item_image1 = $name1;



		// image upload
	
		$image2 = $request->file('image2');
		$name2 = time().rand(0,999999).'.'.$image2->getClientOriginalExtension();
		$destinationPath = 'image';
		$image2->move($destinationPath, $name2);
		$insert->item_image2 = $name2;



		// image upload
	
		$image3 = $request->file('image3');
		$name3 = time().rand(0,999999).'.'.$image3->getClientOriginalExtension();
		$destinationPath = 'image';
		$image3->move($destinationPath, $name3);
		$insert->item_image3 = $name3;


		// image upload
	
		$image4 = $request->file('image4');
		$name4 = time().rand(0,999999).'.'.$image4->getClientOriginalExtension();
		$destinationPath = 'image';
		$image4->move($destinationPath, $name4);
		$insert->item_image4 = $name4;
    	
 	
    	$insert->save();

    	return redirect()->back()->with('message', 'INSERTED SUCCESSFULLY');
    }


    public function View(){

    	$data = ecom_product::paginate(5);

		return view('admin/view',compact('data'));

    }


    public function edit($id){

        $occation = occation::all();

        $category = category::all();

        $subcategory = subcategory::all();

    	$data = ecom_product::find($id);

        

	  return view('admin/edit',compact('data','occation','category','subcategory'));

    }


    public function update(Request $request){

        $update = new ecom_product;


        $id = $request->id;
        $update->title = $request->title;
        $update->product_desc = $request->description;
        $update->category_id = $request->category;
        $update->sub_category = $request->subcategory;
        $update->brand_name = $request->brand;
        $update->timing = $request->time;
        $update->occation_id = $request->ocation;
        
        $update->price = $request->price;   
        $update->discount = $request->discount;
        $update->tax = $request->tax;

        // tax discount calculation
        $dis_price = $request->price + ($request->price*$request->tax)/100;
        $total_price = $dis_price - ($dis_price*$request->discount)/100;
        

        $update->total_price = $total_price;



        $update->sku_id = $request->skuid;
        $update->quantity = $request->quantity;


        // image upload
    
        $image1 = $request->file('image1');
        $name1 = time().rand(0,999999).'.'.$image1->getClientOriginalExtension();
        $destinationPath = 'image';
        $image1->move($destinationPath, $name1);

        



        // image upload
    
        $image2 = $request->file('image2');
        $name2 = time().rand(0,999999).'.'.$image2->getClientOriginalExtension();
        $destinationPath = 'image';
        $image2->move($destinationPath, $name2);



        // image upload
    
        $image3 = $request->file('image3');
        $name3 = time().rand(0,999999).'.'.$image3->getClientOriginalExtension();
        $destinationPath = 'image';
        $image3->move($destinationPath, $name3);


        // image upload
    
        $image4 = $request->file('image4');
        $name4 = time().rand(0,999999).'.'.$image4->getClientOriginalExtension();
        $destinationPath = 'image';
        $image4->move($destinationPath, $name4);
        


        $update::where("id","$id")
                ->update( 
                       array( 
                             "title" => $request->title,
                             "product_desc" => $request->description,
                             "category_id" => $request->category,
                             "sub_category" => $request->subcategory,
                             "brand_name" => $request->brand,
                             "timing" => $request->time,
                             "occation_id" => $request->ocation,
                             "unit" => $request->unit,
                             "price" => $request->price,
                             "discount" => $request->discount,
                             "quantity" => $request->quantity,
                             "item_image1" => $name1,
                             "item_image2" => $name2,
                             "item_image3" => $name3,
                             "item_image4" => $name4
                             )
                       );

        $old_img1 = $request->item_image1;
        $old_img2 = $request->item_image2;
        $old_img3 = $request->item_image3;
        $old_img4 = $request->item_image4;
-       
-       unlink("image/".$old_img1);
        unlink("image/".$old_img2);
        unlink("image/".$old_img3);
        unlink("image/".$old_img4);


        return redirect()->back()->with('message', 'UPDATED SUCCESSFULLY');


    }


    public function delete($id){

        $delete = ecom_product::find($id);
        
        $delete->delete();

        unlink("image/".$delete->item_image1);
        unlink("image/".$delete->item_image2);
        unlink("image/".$delete->item_image3);
        unlink("image/".$delete->item_image4);
        
        return redirect()->back()->with('delete_message','DELETED SUCCESSFULLY');
    }



   public function order_list(){
   
      $order= order::all();
      
      return view('admin/order_list',compact('order'));
      
   }
}
