<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="<?php echo site_url('home/save')?>" >
				<fieldset>

				<legend>crud</legend>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="name">Name</label>  
				  <div class="col-md-5">
				  <input id="name" name="name" type="text" placeholder="name" class="form-control input-md">
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">Email</label>  
				  <div class="col-md-5">
				  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">
				  </div>
				</div>

				<div class="form-group">
				  <div class="col-md-4 left">
				    <button type="submit" class="btn btn-primary">save</button>
				  </div>
				</div>
				</fieldset>
			</form>
				
			</div>
			
		</div>

		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>	
				</thead>
				<tbody>
					<?php foreach ($post as $v ): ?>
					<tr>
						<td><?php echo $v->name?></td>
						<td><?php echo $v->email?></td>
						<td>//</td>
					</tr>
					<?php endforeach;?>
				</tbody>
				
			</table>
		</div>
		
	</div>
		
</body>
<footer>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" ></script>
</footer>
</html>