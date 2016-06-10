<nav class="navbar navbar-default navbar-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('welcome') }}">
            	<img src="/images/logo.png" width="125" height="25" class="img-responsive" alt="Responsive image">
            </a>
        </div>
         
         <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
                	<div class="dropdown-menu loginMenu">
	                    <form action="{{ route('Volunteersignin') }}" method="post" id="navlogin">
		                	<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" id="test-function">
			                    
			                    <!-- <label for="email">Enter Email</label> -->
			                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ Request::old('email') }}">
			                </div>
			                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			                    <!-- <label for="password">Enter password</label> -->
			                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" value="{{ Request::old('password') }}">
			                </div>
			                <button type="submit" class="btn btn-primary">Login</button>
			                <!--<a href="redirect">FB Login</a>-->
			                <input type="hidden" name="_token" value="{{ Session::token() }}">
			            </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
