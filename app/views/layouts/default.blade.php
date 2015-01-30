<!doctype html>

<!--
Default html loaded for most pages. Has content for navbar and footer
@yeild('css') for adding css file links
@yeild('content') for adding content on page
-->
<html>
	<head>
		<meta charset="utf-8">
		<title>JoshDoti</title>
		@yield('css')
		@yield('css2')

	</head>	
	
	<body>
		<div id = "wrapper">
			
			<ul id="navbar">
				<li class="image">
					<a href="{{URL::to('/')}}"><img src={{asset('/images/logo.gif')}}  alt="Cactus" style="width:199px;height:57px"></a>
				</li>
				<li class="content"> <a href="{{URL::to('/about')}}">About</li></a>

				<li class="content"> <a href="{{URL::to('/user')}}">All Users</li></a>
				@if(Auth::check())
					<li class="content"> <a href="{{URL::to('/admin')}}">Admin</li></a>
					<li class="content"> <a href="{{URL::to('/logout')}}">Logout</li></a>
				@else 
					<li class="content"> <a href="{{URL::to('/login')}}">Login</li></a>
					<li class="content"> <a href="{{URL::to('/user/create')}}">Join Cactus!</li></a>
				@endif
			</ul>
			
			<div id="content">
				@yield('content')
			</div>
			
		</div>
		
		<div id="footer">
			<div class="Footcontent"></div>
				<h6>Copyright joshdoti 2015</h6>
			</div>
		</div>
		
	</body>
	</div>
</html>
