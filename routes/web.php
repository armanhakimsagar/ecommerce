<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::group(['prefix' => 'admin', 'namespace' => 'admin','middleware'=>'Admin'], 

	function (){

    	Route::get('home', 'ProductController@index')->name('Admin');

    	Route::post('insert','ProductController@insert')->name('AdminInsert');

	Route::get('view', 'ProductController@view')->name('AdminView');

	Route::get('edit/{id}', 'ProductController@edit')->name('AdminEdit');

	Route::post('update', 'ProductController@update')->name('AdminUpdate');

	Route::get('delete/{id}', 'ProductController@delete')->name('AdminDelete');
	
	Route::get('order_list','ProductController@order_list')->name('order_list');
    
	}

);





// client login


Route::get('client/register', 'LoginController@Client_Reg_View')->name('Client_Reg_View');

Route::post('client/Reg_Submit', 'LoginController@Client_Reg_submit')->name('Client_Reg_submit');

Route::get('client/login','LoginController@Client_Login_submit')->name('Client_Login_submit');

Route::post('client/verify','LoginController@ClientVerify')->name('ClientVerify');

Route::get('client_logout','LoginController@client_logout')->name('client_logout');


Route::group(['middleware'=>'Client'], 

	function (){
		
	Route::get('dashboard','FrontController@client_admin')->name('dashboard');

    }

);



// admin login

Route::get('login','LoginController@Login')->name('LoginTry');

Route::post('submit','LoginController@verify')->name('LoginSubmit');

Route::get('registerpanel','LoginController@registerview')->name('RegisterView');

Route::post('register','LoginController@register')->name('LoginRegister');

Route::get('logout','LoginController@logout')->name('logout');




Route::get('/','FrontController@index')->name('front_view');

Route::get('category/{id}','FrontController@CatProduct')->name('single_product');

Route::get('category/sub/{id}','FrontController@SubProduct')->name('sub_product');

Route::get('search','FrontController@search');

Route::get('addtocart/{id}','FrontController@addtocart')->name('addtocart');

Route::get('checkout','FrontController@checkout')->name('checkout');

Route::post('single_search','FrontController@single_search');

Route::post('add_to_cart_id','FrontController@add_to_cart_id');

Route::get('cart_remove/{id}','FrontController@cart_remove');

Route::post('addtocart_update','FrontController@addtocart_update');

Route::get('payment','FrontController@payment');

Route::post('order','FrontController@order');

Route::get('oorder','FrontController@oorder');




/* extra page */

Route::get('/help',function(){

	return view('help');

});

Route::get('/customer',function(){

	return view('customer_service');

});


Route::get('/whoweare',function(){

	return view('whoweare');

});

Route::get('/ourpeople',function(){

	return view('ourpeople');

});

Route::get('/carrer',function(){

	return view('carrer');

});

Route::get('/ethics',function(){

	return view('ethics');

});

Route::get('/social_active',function(){

	return view('social_active');

});



Route::get('/news',function(){

	return view('news');

});

Route::get('/howtoorder',function(){

	return view('howtoorder');

});

Route::get('/billing',function(){

	return view('billing');

});

Route::get('/washcare',function(){

	return view('washcare');

});

Route::get('/social_activities',function(){

	return view('social_active');

});


Route::post('carrer_upload','FrontController@carrer_upload');