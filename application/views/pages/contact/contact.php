
<div class="row">

	<div class="row" style="margin:1px;">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

			<h3><?php echo $page_title; ?></h3>

		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

			<ol class="breadcrumb pull-right">
			  <li class="active">Home</li>
			  <li><a href="#">Library</a></li>
			  <li><a href="#">Home</a></li>
			</ol>

		</div>		
	</div>	

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<hr class="style-two">
		</div>
	</div>

	<div class="row" style="margin:1px;">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

			<section class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title">Time taken to render this page</h3>
				</header>
				<div class="panel-body">
					<p><?php echo $this->benchmark->elapsed_time(); ?> Ms</p>
				</div>
				<footer class="panel-footer">Panel footer</footer>
			</section>

		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

			<section class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title">Memory consumed</h3>
				</header>
				<div class="panel-body">
					<p><?php echo $this->benchmark->memory_usage(); ?></p>
				</div>
				<footer class="panel-footer">Panel footer</footer>
			</section>

		</div>
	</div>

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<section class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title">Time taken to render this page</h3>
				</header>
				<div class="panel-body">
					<p><?php echo $this->benchmark->elapsed_time(); ?> Ms</p>
				</div>
				<footer class="panel-footer">Panel footer</footer>
			</section>
		</div>
	</div>

	<div class="row" style="margin:1px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

			<section class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title">Memory consumed</h3>
				</header>
				<div class="panel-body">
					<p><?php echo $this->benchmark->memory_usage(); ?></p>
				</div>
				<footer class="panel-footer">Panel footer</footer>
			</section>

		</div>
	</div>

</div>