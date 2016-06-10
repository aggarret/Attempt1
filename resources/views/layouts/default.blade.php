<head>
	@include ('includes.Head')
    <title>@yield('title')</title>
</head>
<!-- end  head div -->
<body>

    @if( auth()->guard('volunteer')->check() || auth()->guard('organization')->check() )
        @include('includes.navbarLoggedIn')
    @else
        @include('includes.navbarLoggedOut')
    @endif


    <div class="container">
    	@yield('content')
    </div>
	<!-- yeilds incoming content -->
	@include ('includes.Footer')
</body>