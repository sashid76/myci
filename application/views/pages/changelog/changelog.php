
<div class="row">

	<div class="row" style="margin:1px;">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><?php echo $page_title; ?></h3>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

			<ol class="breadcrumb pull-right">
			  <li class="active"><a href="home">Home</a></li>
			  <li>Changelog</li>
			</ol>

		</div>		
	</div>	

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<hr class="style-two">
		</div>
	</div>

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
			<div class="bs-callout bs-callout-default">
			  <h4>Legend</h4>
			  <p>This is a default callout.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="alert-link" href="#">Link</a></p>
			</div>

		</div>
	</div>

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<section class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title">Change Log</h3>
				</header>
				<div class="panel-body">

					<?php foreach($change_log_data as $change_log){?>
						
						<h4><?php echo $change_log->date; ?> - 

						<?php 

							if($change_log->type == 'major'){
								$type = strtoupper($change_log->type);
								echo "<span class=\"label label-danger\">$type</span>";
							}else if($change_log->type == 'minor'){
								$type = strtoupper($change_log->type);
								echo "<span class=\"label label-warning\">$type</span>";
							}

						 ?>

						</h4>
						Maintainer : <?php echo "<span class=\"label label-primary\">$change_log->maintainer</span>" ?><br/>
						Description :<br/> <?php echo $change_log->description; ?><hr/>
					
					<?php }?> 

				</div>
				<footer class="panel-footer">Change Log</footer>
			</section>
		</div>
	</div>

</div>