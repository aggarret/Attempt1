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

    	if ($value == "Volunteer"){

    		return redirect()->route('Volform');
    	}
    	return redirect()->route('Orgform');
    }
    public function Volform()
    {
    	return view ('/Volform');
    }
     public function Orgform()
    {
    	return view ('Orgform');
    }
    public function Volunteersignup(Request $request) 
    {
        $this->validate($request, [
            'users_email' => 'required|email|unique:volunteers',  //validates the request and looks for a unique user in the volunteer table 
            'users_firstName' => 'required|max:120',
            'password' => 'required|min:4',
            ]); 
		
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
        $this->validate($request, [
            'Orgusers_email' => 'required|email|unique:organizations',  //validates the request and looks for a unique user in the volunteer table 
            'OrgTax_ID' => 'required|max:120',
            'password' => 'required|min:4',
            ]); 
    	
		$Orgusers_email = $request['Orgusers_email']; // Email request for the user controller.  Will make it so we can store the named formed data for the 'Welcome' View.
		$Orgusers_firstName = $request['Orgusers_firstName'];
		$Orgusers_lastName = $request['Orgusers_lastName'];
		$Organization_name = $request['Organization_name'];
		$OrgTax_ID = $request['OrgTax_ID'];
		$password = bcrypt($request['password']);

		$organization = new Organization();
		$organization-> Orgusers_email = $Orgusers_email;
		$organization-> Orgusers_firstName = $Orgusers_firstName; //costructs the first name filled 
		$organization-> Orgusers_lastName = $Orgusers_lastName;
		$organization-> Organization_name = $Organization_name;
		$organization-> OrgTax_ID = $OrgTax_ID;
		$organization-> password = $password; // constructs the password 

		$organization->save();

		Auth::login($organization);

		return redirect()->route('Orgdashboard');

    }
    public function Organizationsignin(Request $request)
    {
    	
    	if (Auth::guard('organization')->attempt(['Orgusers_email'=> $request['Orgusers_email'], 'password'=> $request['password']])) {
    		return redirect()-> route('Orgdashboard');
    	}
    	return redirect()->back();
    }
}

