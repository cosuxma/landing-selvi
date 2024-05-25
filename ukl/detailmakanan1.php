<!DOCTYPE html>
<html>
<head>
	<title>informasi</title>
	<style> 
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #90EE90;
			color: #fff;
			padding: 1rem;
			text-align: center;
		}
		ul {
			list-style: none;
			padding: 0;
			margin: 1rem;
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
		}
		ul li a:hover {
			background-color: #ACE1AF;
		}
		main {
			margin: 2rem;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 2rem;
		}
		table, th, td {
			border: 1px solid #A1DD70;
		}
		th, td {
			padding: 1rem;
			text-align: left;
		}
		th {
			background-color: #A1DD70;
			color: #fff;
		}
		td {
			background-color: #E9F7EF;
		}
	</style>
</head>
<body>
	<header>
		<h1>KAREDOK</h1>
	</header>
	<ul>
        <li><a href="foods.php">Back</a></li>
    </ul>
            <?php
            // select tabel user dari database
            include 'koneksi.php';
            $result = mysqli_query($mysqli, "SELECT * FROM detailmakanan") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="menu-item">
						<p><?php echo $data['nama_makanan']; ?></p>
						<p><?php echo $data['asal_makanan']; ?></p>
						<p><?php echo $data['khasiat_makanan']; ?></p>
                        <p><?php echo $data['pembuatan_makanan']; ?></p>
                    </div>
                <?php 
                }
                 ?>
        </div>	
</body>
</html>