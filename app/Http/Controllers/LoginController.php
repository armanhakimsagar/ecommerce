<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Client;

use Validator;


class LoginController extends Controller
{
    public function Login(){

        return view('login.index');

    }

    public function registerview(){

    	return view('login.register');

    }


    public function Register(Request $request){

    	$User = new User;

    	$User->name = $request->name;

    	$User->passwords = $request->password;

    	$User->email = $request->email;

    	$User->save();

    	return redirect()->back()->with('message', 'REGISTER SUCCESSFULLY PLEASE LOGIN');

    }


    public function Verify(Request $request){

    	$user = User::all();
    	
    	foreach ($user as $value) {
    		
	    	if($value->name == $request->name && $value->passwords == $request->password && $value->status == 1 ){

	    		session_start();

	    		$_SESSION['admin'] = "admin";

	    		return redirect('admin/home');


	    	}

    	}

    	return redirect()->back()->with('error', 'USERNAME OR PASSWORD NOT MATCH');


    }


    public function logout(){

    	session_start();
    	session_destroy();

    	return redirect('admin/home');

    }
    
    public function Client_Reg_View(){
    	
    	return view('clientadmin');
    	
    }
    
    public function Client_Reg_submit(Request $request){
      
        $validator = Validator::make($request->all(), [
    
    		'email' => 'unique:clients',
    		'mobile' => 'required',
    		'address' => 'required',
    		'password' => 'required'
    		
    	
    	]);


    	if ($validator->fails()) {
    		    return redirect('client/register')
    				->withErrors($validator)
    				->withInput();
    		}
    
    	else{
	
	
          	$client = new Client;
          
        	$client->email = $request->email;
        	
        	$client->mobile = $request->mobile;
    
        	$client->address = $request->address;
    
        	$client->password = $request->password;
    
        	$client->save();
    
        	return redirect()->back()->with('message', 'REGISTER SUCCESSFULLY PLEASE LOG IN');
    	}
    }
    
    
    public function Client_Login_submit(){
    
    	return view('Client_Login_submit');
    
    }
    
    
    public function client_logout(){

    	session_start();
    	session_destroy();

    	return redirect('/');

    }
    
    
    public function ClientVerify(Request $request){

    	$Client= Client::all();

    	foreach ($Client as $value1) {
    		
	    	if($value1->email == $request->email && $value1->password == $request->password){

	    		session_start();

	    		$_SESSION['client'] = $request->email;

	    		return redirect('/');


	    	}

    	}

    	return redirect()->back()->with('error', 'USERNAME OR PASSWORD NOT MATCH');


    }

}
