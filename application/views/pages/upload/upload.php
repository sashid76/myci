
<div class="row">

	<div class="row" style="margin:1px;">

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3><?php echo $page_title; ?></h3>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

			<ol class="breadcrumb pull-right">
			  <li class="active"><a href="home">Home</a></li>
			  <li>Upload</li>		  
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

			<?php echo $this->session->flashdata('success_msg'); ?>
			<?php echo $this->session->flashdata('error_msg'); ?>
			<form role="form" method="post" enctype="multipart/form-data">
			    <div class="panel">
			        <div class="panel-body">

			            <div class="form-group">
			                <label>Picture</label>
			                <input type="file" name="picture" />
			            </div>
			            <div class="form-group">
			                <label>Name</label>
			                <input class="form-control" type="text" name="name" />
			            </div>
			            <div class="form-group">
			                <label>Email</label>
			                <input class="form-control" type="text" name="email" />
			            </div>
			             <div class="form-group">
			                <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
			            </div>

			        </div>
			    </div>
			</form>

		</div>
	</div>

</div>