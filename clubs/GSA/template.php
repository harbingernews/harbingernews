<!DOCTYPE html>
<html>
<head>
	<title>Club Template</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/all.css" type="text/css">

	<script type="text/javascript" src="/harbingernews/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="/harbingernews/js/bootstrap.min.js"></script>
		
	<style type="text/css">
	
		#page_title {
			display: block;
			background: white;
			height: 70px;
			margin-top: 10px;
			padding-top: 5px;
		}
				
		#reminders {
			margin-top: 10px;
		}
		
		#reminders p {
			
		}
		
		#upcoming_events {
			background: rgb(70,104,67);
			margin-bottom: 10px;
			margin-top: 10px;
			border-style: outset;
			border-width: medium;
			border-color: #629b63;
			color: white;
		}
		
		#upcoming_events h4 {
			text-align: center;
		}

				
		#photos {
			background: green;
		}
		
		#photo_holder {
			background: grey;
			height: 120px;
			text-align: center;
			margin-bottom: 10px;
		}
		.nav li a {
			color: #629b63;
			background: inherit;
		}
		
		.nav li {
			background: inherit;
		}
	
		.nav li :hover {
			background: #eeeeee !important;
			color: #416847;
		}
		
		.nav > .active > a {
			background: white !important;
		}
		
		.nav-collapse > .nav > .active > a {
			background: #629b63 !important;
		}
		.nav ul li a {
			background-color: white !important;
			color: #629b63 !important;
		}
		.about {
			width: 70%; 
			background-color: white; 
			box-shadow: 0px 2px 2px 0px; 
			padding: 5px 10px 5px 10px; 
			margin-top: 10px; 
			float: left;
		}
	
	</style>
	
</head>
<body>
	<div id = "content" style ="">
		<?php include('../../tools/header.shtml') ?>
		<?php include('../header2.shtml') ?>
		
		<div id="info" class="container">
			<div class="row">
				<div class="span8" id="reminders" style = "display:none;">
				
					<div class="alert alert-error">
  						<button type="button" class="close" data-dismiss="alert">&times;</button>
  						<h3>Important!</h3>
					</div>
				
				</div>
				<div id="upcoming_events" style = "right:5%; position:absolute; width: 20%; display: none;">
					<h4>Upcoming Events</h4>
					<ul>
						<li>Event One</li>
						<li>Event Two</li>
						<li>Event Three</li>
						<li>Event Four</li>
					</ul>
					
				</div>		
		
			</div> 
			<div class="row">
				<div class = "about">
					<h4 class = "offset1">About GSA</h4>
					<p>Advisor: Ms. Koenig</p> 
					<p>Room: Chorus Room </p>
					<p>This extracurricular club welcomes students of all grade levels and of wide-ranging interests and talents. A friendly and supportive group of students, this social club seeks to cultivate awareness and acceptance of lesbian, gay, bi-sexual, and transgender students in the high school community. The club offers a safe forum for the discussion of issues relevant to LGBT teens. The GSA also supports and encourages the alliance of straight and LGBT students which allows them to work cooperatively to reduce harassment, discrimination, and bias based on sexual orientation or gender identity. Finally, club members engage in various cultural and educational activities, such as film study, reading groups, hosting of guest speakers, museum and theater outings and various other activities.</p>
					<br/>
					<p>This club meets the 1st and 3rd Thursdays of the month at 2:30pm</p>

				</div>
			
			</div><!-- end "row" -->
			
			<br />
			
			<div class="row" style = "display:none;">
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
				
				<div class="span4" id="photo_holder">
					<em>Photo Holder</em>
				</div>
			</div><!-- end "row" -->
		</div>
	
	
	<div id="footer_spacer"></div>
	</div><!-- end "content" -->
	
	<div id="footer">
		<?php include('../../tools/footer.shtml') ?>
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Brian Kelley on January 12, 2013.
			</div>
		</div>
	
	</div>
	
</body>
</html>
