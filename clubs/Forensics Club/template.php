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
					<h4 class = "offset1">About the Forensics Club</h4>
					<p>Advisor: Mr. Barrett and Mr. Contopoulos</p> 
					<p>Room: 506</p>
					<p>The Forensics Club meets to discuss modern methods of investigating crimes. Members will solve various mock crimes, brain teasers and help to create their own mock criminal case and crime scene. The club will also meet to watch various movies, shows and documentaries that deal with Forensic Science. Some members of the Forensics club will be selected to participate in the Suffolk County Forensics C.S.I. challenge. There are no requirements to join the Forensics club.</p>
					<br/>
					<p>This club meets on alternating Tuesdays.</p>

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
		<!--#include virtual="/harbingernews/tools/footer.shtml"-->
		
		<div class="container">
			<div class="pull-right" style="margin-top: 20px;">
					This page was last updated by Brian Kelley on January 12, 2013.
			</div>
		</div>
	
	</div>
	
</body>
</html>
