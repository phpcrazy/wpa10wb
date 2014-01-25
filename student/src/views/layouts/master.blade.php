 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Student Information System</title>
 	{{ HTML::style('packages/wpa10/student/css/bootstrap.css') }}
 	{{ HTML::style('packages/wpa10/student/css/style.css') }}
 </head>
 <body>
 	<div class="container">
 		<div id="header" class="row">
 			<div class="span12">
 				<h1>Student Information System</h1>
 			</div>
 		</div> <!-- end of header -->
 		<div id="menu" class="row">
 			<div class="span12">
 				<div class="navbar">
 					<div class="navbar-inner">
 						<a class="brand" href="#">SIS</a>
 						<ul class="nav">
 							<li><a href="{{ URL::to('/') }}">Home</a></li>
 							<li><a href="{{ URL::to('/all-students') }}">All Students</a></li>
 							<li><a href="{{ URL::to('/php-foundation') }}">PHP Foundation</a></li>
 							<li><a href="{{ URL::to('/php-advanced') }}">PHP Advanced</a></li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div> <!-- end of menu -->		
 		<div id="content" class="row">
 			<div class="span12">
 				@yield('content')
 			</div>
 		</div> <!-- end of content -->
 		<div id="footer" class="row">
 			<div class="span12">
 				<div class="navbar">
 					<ul class="nav">
 						<li><a href="http://thiha.me/studentinfosys">Home</a></li>
 						<li><a href="#">About Us</a></li>
 						<li><a href="#">Contact Us</a></li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div> <!-- end container -->
 </body>
 </html>