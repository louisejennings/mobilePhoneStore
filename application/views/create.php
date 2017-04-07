<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Create</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../css/main.css" />
	<link rel="stylesheet" href="../../css/carousel.css" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
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
				<a class="navbar-brand" href="../home">Blue Mobile Online Store</a>
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



			<div class="form">
				<h2>Create</h2>
		<?php echo form_open('create/create');?>

		<p>
			<label for="phoneName">Phone Name:</label>
			<input type = "text" name ="phoneName" id="phoneName"/>
		</p>
		<p>
			<label for="screenSize">Screen Size:</label>
			<input type = "text" name ="screenSize" id="screenSize"/>
		</p>
		<p>
			<label for="price">Price:</label>
			<input type = "text" name ="price" id="price"/>
		</p>
		<p>
			<label for="storageCapacity">Storage Capacity:</label>
			<input type = "text" name ="storageCapacity" id="storageCapacity"/>
		</p>
		<p>
			<label for="processorSpeed">Processor Speed:</label>
			<input type = "text" name ="processorSpeed" id="processorSpeed"/>
		</p>
		<p>
			<label for="brand">Brand:</label>
			<input type = "text" name ="brand" id="brand"/>
		</p>
		<p>
			<label for="imageUrl">Image URL:</label>
			<input type = "text" name ="imageUrl" id="imageUrl"/>
		</p>
		<p>
			<label for="quantity">Quantity:</label>
			<input type = "text" name ="quantity" id="quantity"/>
		</p>
		<p>
			<input type = "submit" value="Create"/>
		</p>
			</div>
		<?php echo form_close();?>

</div>

</body>
</html>