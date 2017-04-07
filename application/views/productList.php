<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Product List</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="../css/carousel.css" />

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../../dist/js/bootstrap.min.js"></script>
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

	<div class="container">


		<div class="row row-offcanvas row-of#aboutfcanvas-right">

			<div class="col-xs-12 col-sm-9">
				<p class="pull-right visible-xs">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
				</p>


<?php if(isset($records)) : foreach($records as $row): ?>
				<div class="row">
					<div class="col-xs-6 col-lg-4">
						<h2><?php echo $row->phoneName; ?></h2>
						<img src="<?php echo base_url() . "images/" . $row->imageUrl; ?>"  alt="phone" class="img-rounded"  width="250" height="236">
						<p>Phone Info</p>
						<label><input type="checkbox" value="">Compare</label>
					</div><!--/.col-xs-6.col-lg-4-->

				</div><!--/row-->
			</div><!--/.col-xs-12.col-sm-9-->
<?php endforeach;?>
<?php else : ?>
<h3>No Records were returned</h3>
<?php endif; ?>

			<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
				<div class="list-group">
					<a href="#" class="list-group-item active">RSS</a>
					<a href="#" class="list-group-item">Twitter</a>
					<a href="#" class="list-group-item">Facebook</a>
					<a href="#" class="list-group-item">Instagram</a>
				</div>
			</div><!--/.sidebar-offcanvas-->
		</div><!--/row-->




		<!-- FOOTER -->
		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</footer>

	</div><!--/.container-->

</div>

</body>
</html>