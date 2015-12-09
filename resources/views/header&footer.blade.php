<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="css/bootstrap-3.3.5.min.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.5-theme.min.css">
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/home.css">
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap-3.3.5.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="themes/js/jquery.scrolltotop.js"></script>
</head>
<?php
	$user = session('user')
?>
<body>
<div class="container-fluid">
	<div class="row col-md-10 col-md-offset-1 text-center">
		<ul class="nav nav-tabs">
			<li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="home">Home</a></li>
					<li><a href="new_in">New In</a></li>
					<li><a href="woman">Woman</a></li>
					<li><a href="members">Members</a></li>
				</ul>
			</li>

			<li role="presentation"><a href="people">People</a></li>
			<li role="presentation"><a href="online_survey">Online survey</a></li>
			<li role="presentation"><a href="my_page">My Page</a></li>
			<li role="presentation"><a href="admin_page">Admin</a></li>

			@if( $user != null )
				<li role="presentation" class="pull-right"><a href="sign_out">Logout</a></li>
				<li role="presentation" class="pull-right"><a href="my_page">Welcome {{$user->Username}}!</a></li>
			@else
				<li role="presentation" class="pull-right"><a href="sign_in">Login/Sign Up</a></li>
			@endif
		</ul>
	</div>
</div>
<div id="header">
	<div class="container-fluid">
		<div class="header-title">
			<h1>Welcome to</h1>
			<p class="big-name">Bandai</p>
		</div>
	</div>
</div>




<div id="main">
	@yield('content')
</div>



<div id="footer">
	<div class="container-fluid">
		<div class="text-center">
			<p>http://www.BanDai.com && http://www.cssmoban.com/</p>
		</div>
	</div>
</div>
</body>
</html>