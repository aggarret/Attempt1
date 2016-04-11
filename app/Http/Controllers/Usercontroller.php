<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organization;

use App\Volunteer;

use Auth;

use App\Http\Requests;


class Usercontroller extends Controller
{
	public function getDashboard()
	{
		return view ('dashboard');
	}
	public function getorgDashboard()
	{
		return view ('Organization_Dash');
	}

    public function Type_of_user(Request $request)
    {
    	$value = $request['type_of_user'];

    	
        return view('/login')->with('value', $value);
    }
    public function Volunteersignup(Request $request) 
    {
		
		$users_email = $request['users_email']; // Email request for the user controller.  Will make it so we can store the named formed data for the 'Welcome' View.
		$users_firstName = $request['users_firstName'];
		$users_lastName = $request['users_lastName'];
		$password = bcrypt($request['password']);

		$volunteer = new Volunteer(); // Creates a new user field 
		$volunteer-> users_email = $users_email; //Constructs the eamil field 
		$volunteer-> users_firstName = $users_firstName; //costructs the first name filled 
		$volunteer-> users_lastName = $users_lastName;
		$volunteer-> password = $password; // constructs the password 

		$volunteer->save(); //Writes new user to the database.

		Auth::login($volunteer);

		return redirect()->route('dashboard');

    } 
     public function Volunteersignin(Request $request)
    {
    	
    	if (Auth::attempt(['users_email'=> $request['users_email'], 'password'=> $request['password']])) {
    		return redirect()-> route('dashboard');
    	}
    	return redirect()->back();
    }
    public function Organizationsignup(Request $request)
    {
    	
		$users_email = $request['users_email']; // Email request for the user controller.  Will make it so we can store the named formed data for the 'Welcome' View.
		$users_firstName = $request['users_firstName'];
		$users_lastName = $request['users_lastName'];
		$organization_name = $request['Organization_name'];
		$Tax_ID = $request['Tax_ID'];
		$password = bcrypt($request['password']);

		$organization = new Organization();
		$organization-> users_email = $users_email;
		$organization-> users_firstName = $users_firstName; //costructs the first name filled 
		$organization-> users_lastName = $users_lastName;
		$organization-> Organization_name = $organization_name;
		$organization-> Tax_ID = $Tax_ID;
		$organization-> password = $password; // constructs the password 

		$organization->save();

		Auth::login($organization);

		return redirect()->route('Orgdashboard');

    }
    public function Organizationsignin(Request $request)
    {
    	
    	if (Auth::attempt(['users_email'=> $request['users_email'], 'password'=> $request['password']])) {
    		return redirect()-> route('Orgdashboard');
    	}
    	return redirect()->back();
    }
}

