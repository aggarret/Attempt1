@extends('includes.Head')

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action= "/Organizationsignup" method="post">
        <h2>Register</h2><br>
        First name:<br>
        <input type="text" class="form-control input-lg" name="users_firstName"><br>
        Last name:<br>
        <input type="text" class="form-control input-lg" name="users_lastName"><br>
        Email:<br>
        <input type="email" class="form-control input-lg" name="users_email"><br>
        Organization Name:<br>
        <input type="text" class="form-control input-lg" name="Organization_name"><br>
        Tax ID #:<br>
        <input type="text" class="form-control input-lg" name="Tax_ID"><br>
        Password:<br>
        <input type="password" class="form-control input-lg" name="password"><br>
        <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
        <button type="submit">Join US!</button>
      </form>
    </div>
    <div class="col-md-6">
      <form action="/Organizationsignin" method="post">
        <h2>Log in Here</h2><br>
        Email:<br>
        <input type="email" class="form-control input-lg" name="users_email"><br>
        Password:<br>
        <input type="password" class="form-control input-lg" name="password"><br>
        <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
        <button type="submit">Log in</button>
      </form>
    </div>
  </div>
</div>