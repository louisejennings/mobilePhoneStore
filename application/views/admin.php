<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Admin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/carousel.css" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>


	<div id="container">

		<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home">Blue Mobile Online Store</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><?php echo anchor('home', 'Home')?></li>
						<li><?php echo anchor('productList', 'Products')?></li>
						<li><?php echo anchor('aboutUs', 'About')?></li>
						<li><?php echo anchor('contact', 'Contact')?></li>
						<li><?php echo anchor('admin', 'Admin')?></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</nav><!-- /.navbar -->
		<table class="table table-bordered">
			<h2>Products List</h2>
			<thead>
			<tr>
				<th>Phonename</th>
				<th>Screensize</th>
				<th>Price</th>
				<th>Storagecapacity</th>
				<th>Processorspeed</th>
				<th>Brand</th>
				<th>Imageurl</th>
				<th>Quantity</th>
				<th>Id</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>


				<?php if(isset($records)) : foreach($records as $row): ?>
				<tr>
					<td><div><?php echo $row->phoneName; ?></div></td>
					<td><div><?php echo $row->screenSize; ?></div></td>
					<td><div><?php echo $row->price; ?></div></td>
					<td><div><?php echo $row->storageCapacity; ?></div></td>
					<td><div><?php echo $row->processorSpeed; ?></div></td>
					<td><div><?php echo $row->brand; ?></div></td>


					<td><div><img src="<?php echo base_url() . "images/" . $row->imageUrl; ?>"  alt=""/></div></td>
					<td><div><?php echo $row->quantity; ?></div></td>
					<td><div> <?php echo $row->id; ?></div></td>
					<td>
				<ul>
					<li>
						<a href ="<?php echo site_url("update/display/$row->id");?>">UPDATE</a>
					</li>
					<li>
						<a href ="<?php echo site_url("delete/delete/$row->id");?>">DELETE</a>
					</li>
				<?php endforeach;?>
				<?php else : ?>
					<h3>No Records were returned</h3>
				<?php endif; ?>
			</tbody>
		</table>
		<a href ="<?php echo site_url('create/index');?>">CREATE NEW RECORD</a></br></br>
	</div>

</body>
</html>