<!DOCTYPE html>
<html>
<head>
	<title>drinks</title>
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
		main {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			margin: 2rem;
		}
		.menu-item {
			width:400px;
         	height:600px;
        	background-color:#A1DD70;
        	text-align: center;
        	padding: 20px 20px;
        	margin:60px 20px 20px 190px;
        	border-radius:5px;
        	float:left;
        	font-size:20px;
		}
		.menu-item:hover{
			background-color: #ACE1AF;
        color: black;
		}
		.menu-item img {
			max-width: 100%;
		}
	</style>
</head>
<body>
	<header>
		<h1>Menu Minuman</h1>
	</header>
	<ul>
        <li><a href="home.php">Back</a></li>
    </ul>
	<style>
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
		</style>
            <?php
            // select tabel user dari database
            include 'koneksi.php';
            $result = mysqli_query($mysqli, "SELECT * FROM minuman") or die (mysqli_error());

            while($data = mysqli_fetch_array($result)){
                ?>
                    <div class="menu-item">
                       <img src="<?php echo $data['foto'] ?>">
						<p><?php echo $data['nama_minuman']; ?></p>
						<p><?php echo $data['asal_minuman']; ?></p>
						<p><?php echo $data['deskripsi']; ?></p>
                        
                    </div>
                <?php } ?>
        </div>	
</body>
</html>