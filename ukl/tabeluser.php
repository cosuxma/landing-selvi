<!DOCTYPE html>
<html lang="en">
<head>
<title>Table User</title>
<style>
.judul{
     text-align: center;
     font-weight:600;
     color:black;
}
.tabel th{
    background-color: #8FBC8F;    
    height:40px;
    padding:10px;
}
.tabel{
    border-collapse: collapse;
    font-size:20px;
    border:1px solid white;
    display: flex;
    justify-content: center; 
    align-items: center; 
}
.tabel td{
    padding:10px;
    height:25px;
}
.servicess {
    text-align: left ;
    padding-left: 90px;
  }
  
  .servicess button {
    margin-top: 50px;
    padding-left: 10px;
    width: 110px;
    border-radius: 10px;
    border: none;
    font-size: 30px;
  }
  
  .servicess button:hover {
    background-color: #8FBC8F;
    border: 2px solid white;
    color: #FAEBD7 ;
  }
        </style>
    </head> 
    <body>
    <div class="servicess">
        <a href="login2.php" class="learn-isi"><button>Back</button></a>
        <a href="datamakanan.php" class="learn-isi"><button>Next</button></a>
        <a href="home.php" class="learn-isi"><button>Home</button></a>
    </div>
    <h3 class="judul">DATA USER</h3>
    <br>
    <div class="tabel">
    <table border="1">   
    <tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        <th colspan="2">Action</th>            
    </tr>
    </div>
<?php
include 'koneksi.php';
$result = mysqli_query($mysqli, "SELECT * FROM user") or die (mysqli_error());
while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $data['id_user']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a href='editdatauser.php?Id=<?php echo $data['id_user'];?>'>Edit</a></td>
        <?php  ?>
        <td><a href='deleteuser.php?Id=<?php echo $data['id_user'];?>'>Hapus</a></td>
        <?php 
    }
    ?>
    </tr>

</table>
</html>