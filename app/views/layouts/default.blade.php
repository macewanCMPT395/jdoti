<!doctype html>

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
				<li class="content">About</li>
				<li class="content"> <a href="{{URL::to('/user')}}">Profile</li></a>
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
