			<div class="container" id="center">
				<div class="row-fluid" id="titleRow">
					<div class="span12" id="title">
						<h1><?php echo $sports_item['title']; ?></h1>
					</div>
				</div>
				
				<ul class="nav nav-tabs limited-width">
					<li class="active"><a href="#info" data-toggle="tab">Information</a></li>
					<li><a href="#photos" data-toggle="tab">Photos</a></li>
					<li class="disabled"><a href="#videos" data-toggle="tab">Videos</a></li>
					<li class="pull-right"><a href="#schedule" data-toggle="tab">Schedule</a></li>
				</ul>
		  
				<div class="tab-content">
					<div class="tab-pane active limited-width" id="info">
						<div class="alert">
							This is an alert!
						</div>
						
						<p><?php echo $sports_item['content']; ?></p>
					</div>
					<div class="tab-pane limited-width" id="photos">
						<div class="row-fluid">
							<div class="span3">
								<a href="http://placehold.it/700x700" class="lightbox" title="Test"><img src="http://placehold.it/186x150" /></a>
							</div>
							<div class="span3">
								<a href="http://placehold.it/700x700" class="lightbox" title="Test2"><img src="http://placehold.it/186x150" /></a>
							</div>
							<div class="span3">
								<a href="http://placehold.it/700x700" class="lightbox" title="Test3"><img src="http://placehold.it/186x150" /></a>
							</div>
							<div class="span3">
								<a href="http://placehold.it/700x700" class="lightbox" title="Test4"><img src="http://placehold.it/186x150" /></a>
							</div>
						</div>
					</div>
					<div class="tab-pane limited-width" id="videos">
						<div class="well empty-section">
							<h2>Nothing Available</h2>
						</div>
					</div>
					<div class="tab-pane limited-width" id="schedule">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Date</th>
									<th>Time</th>
									<th>Opponent</th>
									<th>Home/Away?</th>
									<th>Score</th>
								</tr>
							</thead>
							<tbody>
								<tr class="success">
									<td>11/24/2012</td>
									<td>10 am</td>
									<td>Commack</td>
									<td>Away</td>
									<td>10 to 7</td>
								</tr>
								<tr class="error">
									<td>11/29/2012</td>
									<td>3:30 pm</td>
									<td>Walt Whitman</td>
									<td>Home</td>
									<td>8 to 9</td>
								</tr>
								<tr>
									<td>12/1/2012</td>
									<td>8 am</td>
									<td>Northport</td>
									<td>Home</td>
									<td>N/A</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>