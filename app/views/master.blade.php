<html>
<head>
	<title>Foreground</title>
	<link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/bower_components/flat-ui-official/css/flat-ui.css">
	<script type="text/javascript" src="/bower_components/flat-ui-official/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/bower_components/flat-ui-official/js/bootstrap.min.js"></script>
	@yield('head')
	<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Foreground</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-right" style="padding-top: 10px">
					<li><button class="btn btn-primary navbar-btn">Login</button></li>
					<li style="margin-left: 3px"><button class="btn btn-warning navbar-btn">Register</button></li>
					<button type="submit" class="btn btn-default navbar-btn"><span class="glyphicon glyphicon-search"></span></button>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	@yield('content')

	<div class="footer" style="height: 300px; background: #eee; margin-top: 20px">
		<div class="container">
			@yield('footer')
		</div>
	</div>
</body>
</html>