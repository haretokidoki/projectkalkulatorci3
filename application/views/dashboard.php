<?php  ?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	<title>Dashboard</title>
</head>

<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1 align="center">KALKULATOR</h1>
			</div>
			<div class="card-body">
				<ul class="list-group">
					<li class="list-group-item list-group-item-primary"><a href="penjumlahan">Penjumlahan</a></li>
					<li class="list-group-item list-group-item-primary"><a href="pengurangan">Pengurangan</a></li>
					<li class="list-group-item list-group-item-secondary"><a href="perkalian">Perkalian</a></li>
					<li class="list-group-item list-group-item-success"><a href="pembagian">Pembagian</a></li>
				</ul>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>