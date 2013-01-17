<?php
session_start();
include('../sessions.php');
?>
<!DOCTYPE html>
<html>

<head>

	<title>HF Sports</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
	
	<link rel="stylesheet" href="/harbingernews/css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/sports.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="/harbingernews/css/bootstrap-responsive.css" type="text/css">
	
	<script src="../js/jquery-1.8.0.min.js"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="../js/jquery-ui-1.9.1.custom.min.js" type="text/javascript"></script>
		
	<script type="text/javascript">
	
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
			$('#nav_sports').addClass('active');
			$('.disabled a').removeAttr('href');
		});
		
		$(function(){
			$time = 150;
			$(".sport").hover( function() {
				$(this).find(".inner").addClass("tint", $time);
				$(this).find(".holder").fadeIn($time);
				$(this).find("h2").addClass("faded_text", $time);
			}, function() {
				$(this).find('.inner').removeClass("tint", $time);
				$(this).find('.holder').fadeOut($time);
				$(this).find('h2').removeClass("faded_text", $time);
			});
		});
	
	</script>
	
	<!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35687930-1']);
		_gaq.push(['_trackPageview']);
		(function() {
	    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	    })();
	</script>
	
</head>

<body>

	<div id="content">
	
		<?php include('../tools/header.php'); ?>
		
		<div class="container" id="center">
		
			<ul class="nav nav-tabs affix-top container" data-spy="affix" data-offset-top="60" id="seasonsswitcher">
				<li id="firsttab"><a></a></li>
				<li><a href="#fall" data-toggle="tab">Fall</a></li>
				<li class="active"><a href="#winter" data-toggle="tab">Winter</a></li>
				<li><a href="#spring" data-toggle="tab">Spring</a></li>
			</ul>
			<div class="row">
				<div class="span8">
					<div class="tab-content">
						<div class="tab-pane" id="fall">
							<div class="sport" id="cheerleading">
								<div class="inner">
									<h2>Cheerleading</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="crosscountry">
								<div class="inner">
									<h2>Cross Country</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="fieldhockey">
								<div class="inner">
									<h2>Field Hockey</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="football">
								<div class="inner">
								<h2>Football</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gymnastics">
								<div class="inner">
									<h2>Gymnastics</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="bsoccer">
								<div class="inner">
									<h2>Soccer (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gsoccer">
								<div class="inner">
									<h2>Soccer (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gswimming">
								<div class="inner">
									<h2>Swimming (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gtennis">
								<div class="inner">
									<h2>Tennis (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="volleyball">
								<div class="inner">
									<h2>Volleyball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							
						</div><!-- end "fall" -->
						
						<!-- WINTER -->
						<div class="tab-pane active" id="winter">
							<div class="sport" id="bbasketball">
								<div class="inner">
									<h2>Basketball (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="gbasketball">
								<div class="inner">
									<h2>Basketball (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="bowling">
								<div class="inner">
									<h2>Bowling</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							<div class="sport" id="bswimming">
								<div class="inner">
									<h2>Swimming (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="volleyball">
								<div class="inner">
									<h2>Volleyball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							<div class="sport" id="wrestling">
								<div class="inner">
									<h2>Wrestling</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							
						</div><!-- end "winter" -->
					
						<div class="tab-pane" id="spring">
							<div class="sport" id="baseball">
								<div class="inner">
									<h2>Baseball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="golf">
								<div class="inner">
									<h2>Golf</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varsity</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="blacrosse">
								<div class="inner">
									<h2>Lacrosse (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="glacrosse">
								<div class="inner">
									<h2>Lacrosse (Girls)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="sport" id="softball">
								<div class="inner">
									<h2>Softball</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							<div class="sport" id="btennis">
								<div class="inner">
									<h2>Tennis (Boys)</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>			
							<div class="sport" id="track">
								<div class="inner">
									<h2>Track & Field</h2>
									<div class="holder">
										<div class="pull-left">
											<h3 class="disabled"><a href="#">Varsity</a></h3>
										</div>
										<div class="pull-right">
											<h3 class="disabled"><a href="#">Junior Varisty</a></h3>
										</div>
									</div>
								</div>
							</div>		
							
						</div><!-- end "spring" -->
					
					</div><!-- end "tab-content" -->
				</div><!-- end "span9" -->
				<div class="span4 hidden-phone" id="recent_events">
				
					<div class="well">
						<h3>Recent Events</h3>
					</div>
					
				</div>
			</div>
		</div>
				
		<div id="footer_spacer"></div>
	
	</div><!-- end "content" -->

	<div id="footer">
	
		<?php include('../tools/footer.php'); ?>
				
		<div class="container" id="edited_by">
			<div class="span6 offset6">
				<span>Last edited by Alex LaFroscia on August 22, 2012.</span>
			</div>
		</div>

	</div><!-- end "footer" -->

</body>

</html>