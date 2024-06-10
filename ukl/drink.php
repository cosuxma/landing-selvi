<!DOCTYPE html>
<html>
<head>
	<title>drink</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f0f0f0;
		}
		header {
			background-color: #90EE90;
			color: #fff;
			padding: 1rem;
			text-align: center;
		}
		main {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			margin: 2rem;
		}
		.menu-item {
			width: 300px;
			height: auto;
			background-color: #A1DD70;
			text-align: center;
			padding: 20px;
			margin: 20px;
			border-radius: 5px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s, box-shadow 0.3s;
			font-size: 18px;
		}
		.menu-item:hover {
			background-color: #ACE1AF;
			color: black;
			transform: translateY(-10px);
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
		}
		.menu-item img {
			max-width: 100%;
			border-radius: 5px;
		}
		ul {
			list-style: none;
			padding: 0;
			margin: 1rem;
			text-align: center;
		}
		ul li {
			display: inline;
			margin-right: 1rem;
		}
		ul li a {
			text-decoration: none;
			color: #000;
			background-color: #90EE90;
			padding: 0.5rem 1rem;
			border-radius: 5px;
			transition: background-color 0.3s;
		}
		ul li a:hover {
			background-color: #ACE1AF;
		}
	</style>
</head>
<body>
	<header>
		<h1>Menu Minuman</h1>
	</header>
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="foods.php">Drink</a></li>
	</ul>
	<main>
		<?php
		// Include koneksi database
		include 'koneksi.php';
		$query_mysql = mysqli_query($mysqli, "SELECT * FROM minuman") or die(mysqli_error($mysqli));
		while ($data = mysqli_fetch_array($query_mysql)) { ?>
			<div class="menu-item">
				<img src="<?php echo $data['foto']; ?>" alt="<?php echo $data['nama_minuman']; ?>">
				<h1><?php echo $data['nama_minuman']; ?></h1>
				<h2><?php echo $data['asal_minuman']; ?></h2>
				<p>Deskripsi: <?php echo $data['deskripsi']; ?></p>
				<p>Harga: Rp<?php echo $data['harga_minuman']; ?></p>
				<form action="order.php" method="post">
					<input type="hidden" name="id_minuman" value="<?php echo $data['id_minuman']; ?>">
					<label for="quantity">Quantity:</label>
					<input type="number" id="quantity" name="quantity" min="1" required>
					<input type="submit" value="Order">
				</form>
			</div>
		<?php } ?>
	</main>
</body>
</html>
