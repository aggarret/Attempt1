@extends('includes.Head')
<div class="container">
  <div class="row">
    <div class="col-md-6">
		<form action= "/volunteer" method="post">
		 <h2>Register</h2><br>
		 First name:<br>
		  <input type="text" name="users_firstName"><br>
		  Last name:<br>
		  <input type="text" name="users_lastName"><br>
		   Email:<br>
		  <input type="email" name="users_email"><br>
		  Password:<br>
		  <input type="password" name="password" id="password" value="{{ Request::old('password') }}">
		  <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <button type="submit">Submit</button>
		 </form>
	 </div>
  <div class="col-md-6">
	  <form action="/Volunteersignin" method="post">
	    <h2>Log in Here</h2><br>
	    Email:<br>
	    <input type="email" class="form-control input-lg" name="users_email"><br>
	    Password:<br>
	    <input type="password" class="form-control input-lg" name="password"><br>
	    <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
	    <button type="submit">Log in</button>
	     <a href="redirect">FB Login</a>
	  </form>
	</div>
  </div>
</div>

