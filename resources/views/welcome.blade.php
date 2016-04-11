@extends ('layouts.default')
@section ('Head')
  
  <body>
    <div class= "container">
      <div class="row">
        <div class="col-sm-4">
          <h1>Volaback</h1>
        </div>
        <div class="col-sm-8">
          <ul class="list-inline">
            <li><h3>Home</h3></li>
            <li><h3>About</h3></li>
            <li><h3>Contact Us<h3></li>
          </ul>
        </div>
      </div>
    </div>
   
    <div class="container">
    <div class="jumbotron">
      <h1>Mission Statement:</h1>
    </br>
      <p>Voluback is an ambitious project attempting to promote suntanable volunteering through merchant based incentives.</p> 
    </div>
   @include ('includes.hometiles') 
@section ('Footer')
@endsection
