<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">	
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title> 
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet" type="text/css">
    </head>
<body>
   
<header>
	<nav class="navbar navbar-inverse navbar-static-top" role="Navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Bootstrap Based Blog</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/">Home</a></li>
				<li><a href="/login">Sign in</a></li>
			</ul>
		</div>
	</nav>
</header>

<section class="container">
	<div class="jumbotron">
		<h1>Bootstrap Blog Template</h1>
		<p>This responsive Blog template is done in Bootstrap 3 with no extra CSS or Javascript</p>
	</div>
</section>

<div class="container">
	<div class="col-sm-6 col-md-8 col-lg-8">
		<div class="row">
			@yield('content')
		</div>
		<hr>
		<div>
			<nav aria-label="...">
				<ul class="pager">
					<li class="previous"><a href="#"><span aria-hidden="true">←</span> Older Posts</a></li>
					<li class="next disabled"><a href="#">Newer Posts<span aria-hidden="true">→</span></a></li>
				</ul>
			</nav>
		</div>

	</div>

	<div class="col-sm-6 col-md-4 col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">

				<h4 class="text-center">Search for Posts!</h4>
				<form role="Form" method="GET" action="" accept-charset="UTF-8">
					<div class="form-group">
						<div class="input-group">
							<input class="form-control" type="text" name="search" placeholder="Search..." required/>
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
							</span>
						</div>
					</div>
				</form>

				<h4 class="text-center">About me!</h4>
				<img src="https://s3.amazonaws.com/myblog--flask-bucket/photos/comicavatar_500x500.jpg" alt="" class="img-thumbnail img-responsive">
				<h5 class="text-center">Victor Santiago</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

				<h4 class="text-center">Popular Posts!</h4>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="https://images.pexels.com/photos/301930/pexels-photo-301930.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h5>Images by pexels.com</h5>
						<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan/21/2018</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h5>Images by pexels.com</h5>
						<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan/21/2018</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="https://images.pexels.com/photos/459688/pexels-photo-459688.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h5>Images by pexels.com</h5>
						<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan/21/2018</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="https://images.pexels.com/photos/273222/pexels-photo-273222.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h5>Images by pexels.com</h5>
						<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan/21/2018</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<img src="https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<h5>Images by pexels.com</h5>
						<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jan/21/2018</p>
					</div>
				</div>
				<hr>

				<h4 class="text-center">Our Newsletter!</h4>
				<form role="Form" method="GET" action="" accept-charset="UTF-8">
					<div class="form-group">
						<div class="input-group">
							<input class="form-control" type="text" name="search" placeholder=" sign up for our newsletter..." required/>
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Sign up</button>
							</span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<footer class="navbar-inverse">
	<div class="container-fluid text-center">
		<p class="text-muted">© Copyright 2018. All Rights Reserved.</p>
	</div>
</footer>

</body>
</html>
