<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ecom_product;

use App\category;

use App\subcategory;

use App\product_information;

use App\prod_size;

use App\color;

use DB;

use Anam\Phpcart\Cart;

use App\order;

use App\Client;

use App\Mail\MailController;

use Mail;






class FrontController extends Controller
{


   public function index(){
   		
   		$cart = new Cart();

		$items = $cart->items(); 

		$total_item = $cart->totalQuantity();

   		$ecom_product = ecom_product::all();

   		$women = ecom_product::where('category_id', 8)
   												   ->take(100)
   												   ->orderBy('id', 'desc')
												   ->limit(3)
												   ->get();;


   	 	return view('index',compact('ecom_product','total_item','women'));
   
   }

   public function CatProduct($id){

	   	 $category = ecom_product::where('category_id', $id)
												   ->take(100)
												   ->limit(9)
												   ->get();

    	  if($category->isEmpty()){
	      	$category_check = "nothing found";
	      	return view('single',compact('category_check'));
	   	  }else{
	   	  	return view('single',compact('category'));;
	   	  }


   }

   public function addtocart($id){

   		$cart = new Cart();

		$items = $cart->items(); 

		$total_item = $cart->totalQuantity();

   	 	$addtocart = ecom_product::where('id', $id)
												   ->take(100)
												   ->get();
		
		$product_information = product_information::where('prod_id', $id)
												   ->take(100)
												   ->get();


		$size = prod_size::where('product_id', $id)
												   ->take(100)
												   ->get();

		$color = color::where('ecom_products_id', $id)
												   ->take(100)
												   ->get();

	   	return view('addtocart',compact('addtocart','product_information','size','color','total_item'));
   
   }





   public function SubProduct($id){

   	  $sub_category = ecom_product::where('sub_category', "$id")
												   ->take(100)
												   ->limit(9)
												   ->get();	


   	  if($sub_category->isEmpty()){
      	$sub_category_check = "nothing found";
      	return view('single',compact('sub_category_check'));
   	  }else{
   	  	return view('single',compact('sub_category'));
   	  }



   }

   public function search(){

   	  $s = $_GET['search'];

      $search = ecom_product::where('sub_category', 'LIKE', "%$s%")->limit(9)->get();

      if($search->isEmpty()){
      	$search_null = "nothing found";
      	return view('single',compact('search_null'));
   	  }else{
   	  	return view('single',compact('search'));
   	  }

   }


   public function single_search(Request $request){

   		// find category id form size search data 


   		$size = $_POST['size'];

   		$prod_size = prod_size::where('size', "$size")
												   ->take(100)
												   ->limit(3)
												   ->get();


		$size_array = array();
		foreach($prod_size as $value) {
		 	$size_array[] = $value->product_id;
		}

		// fetch data as array

		$ecom_product_size = ecom_product::whereIn('id', $size_array)->get();

		

   		// find category id form color search data 


   		$color_id = $_POST['radio'];

   		$color = color::where('major_color', "$color_id")
												   ->take(100)
												   ->limit(3)
												   ->get();


		$color_array = array();
		foreach($color as $value) {
		 	$color_array[] = $value->ecom_products_id;
		}

		// fetch data as array

		$ecom_product_color= ecom_product::whereIn('id', $color_array)->get();

		

		// find category id form color search data 


   		$price_id = $_POST['price'];
   		$price_id2 = $_POST['price']+1000;

   		$price = DB::select("Select * from ecom_products WHERE total_price > '$price_id' && total_price < '$price_id2'");

		$price_array = array();
		foreach($price as $value) {
		 	$price_array[] = $value->id;
		}

		
		// fetch data as array
		$ecom_product_price= ecom_product::whereIn('id', $price_array)->get();




		// find category id form febrics search data 


   		$febrics = $_POST['febrics'];

   		$febrics = product_information::where('fabrics',"$febrics")
												   ->limit(3)
												   ->get();


		$febrics_array = array();
		foreach($febrics as $value) {
		 	$febrics_array[] = $value->prod_id;
		}

		
		// fetch data as array
		$ecom_product_febrics = ecom_product::whereIn('id', $febrics_array)->get();

		


	   return view('single',compact('ecom_product_febrics','ecom_product_price','ecom_product_color','ecom_product_size'));

   }




   public function checkout(){

	   	$cart = new Cart();
		$items = $cart->items();
		$total_price = $cart->getTotal();

   	 	return view('checkout',compact('items','total_price'));

   }



   public function add_to_cart_id(Request $request){

   			$cart = new Cart();
   			$id = $request->post('id');
			$ecom_product = ecom_product::find($id);
			
			$cart->add([
				'id'       => $ecom_product->id,
				'name'     => $ecom_product->title,
				'quantity' => $request->number,
				'price'    => $ecom_product->total_price,
				'image'    => $ecom_product->item_image1,
				'sku_id'   => $ecom_product->sku_id,
				'color'    => $request->color,
				'size'     => $request->size
				
			]);

			
			return redirect('checkout');

   }


   public function cart_remove($id){

	   	$cart = new Cart();
		$ecom_product = ecom_product::find($id);
		$id = $ecom_product->id;
		$cart->remove($id);	

		return redirect('checkout');

   }


   public function addtocart_update(){

	   	$cart = new Cart();
		$id = $_POST['id'];
		$quantity = $_POST['qty'];
		$cart->updateQty($id, $quantity);
		return redirect()->back();

   }



   public function payment(){

   		return view('payment');

   }

   public function order(Request $request){


   		
   		
   		$client = new client;
   		
   		$client->email = $request->email;
   		
   		$client->mobile = $request->mobile;
   		
   		$client->address = $request->address;
   		
   		$client->password = $request->password;

		$client->save();
		

		

		
		$cart = new Cart();
		
		$items = $cart->items();
		
		
		
	
		$sku_id = array();
		$quantity = array();
		$color = array();
		$size = array();
	
		foreach ($items as $value) {
		
			$sku_id[] = $value->sku_id;
			$quantity[] = $value->quantity;
			$color[] = $value->color;
			$size[] = $value->size;
		}
	
	
		$sku_var = implode(" ",$sku_id);
		$quantity_var = implode(" ",$quantity);
		$color_var = implode(" ",$color);
		$size_var = implode(" ",$size);



		$order = new order;
	
		$order->skuid = $sku_var;
	
		$order->qty = $quantity_var;
		
		$order->color = $color_var;
		
		$order->size = $size_var;
		
		$order->client_id = $request->email;
	
		$order->orderid = rand(1,1000000);
	
		$order->save();

		
	
		return redirect()->back()->with('order_confirm', 'Your Order Placed Successfully ! You Will Get Delivery Within 72 Hours.Please Login , Check Your Dashboard & Keep Your Order ID For Farther Claim Or Query Or Product Tracking !');


	
        }
        
        
        
        public function oorder(Request $request){
         
	        $cart = new Cart();
	        
	        $order = new order;
	
		$items = $cart->items();
		
	        $email = $_GET['email'];
		
		

		$sku_id = array();
		$quantity = array();
		$color = array();
		$size = array();
	
		foreach ($items as $value) {
			$sku_id[] = $value->sku_id;
			$quantity[] = $value->quantity;
			$color[] = $value->color;
			$size[] = $value->size;
		}
		
		$sku_var = implode(" ",$sku_id);
		$quantity_var = implode(" ",$quantity);
		$color_var = implode(" ",$color);
		$size_var = implode(" ",$size);
		
		
		
		
		$client = client::where('email',"$email")
				   ->get();
		
		$email = array();
		
		foreach ($client as $c) {
			$email[] = $c->email;
		}
	
	
		$email_var = implode(" ",$email);
		
	
	        
		$order->skuid = $sku_var;
	
		$order->qty = $quantity_var;
		
		$order->color = $color_var;
		
		$order->size = $size_var;
		
		$order->orderid = rand(1,1000000);
		
		$order->client_id = $email_var;
	
		
	
		$order->save();
	
		return redirect()->back()->with('message', 'Your Order Placed Successfully ! You Will Get Delivery Within 72 Hours.Please Login , Check Your Dashboard & Keep Your Order ID For Farther Claim Or Query Or Product Tracking !');
        
        }


	public function client_admin(){
	
	   $id = $_SESSION['client'];
	   
	   $order = order::where('client_id',$id)->orderBy('created_at', 'desc')->get();
	   
	   return view('admin.client_admin',compact('order'));
	
	}
	
	public function carrer_upload(){
	
	    $cover_image = $_FILES['cv_file']['name'];
	    
        $destinationPath = public_path('cv/');
        
        move_uploaded_file($_FILES['cv_file']['tmp_name'],$destinationPath."$cover_image");
        
        return redirect('/');
	}	
}
