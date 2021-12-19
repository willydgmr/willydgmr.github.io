<!DOCTYPE html>
<html lang="id">
	<head>
		<link rel="stylesheet" href="css/style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
   		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

		<title>Toko</title>
	</head>
	<body style="background-color: #262626;">
		<header class="header1">
        	<div class="inner">
            	<div class="logo">
                	<div>
                    <h1>UD. Novary Sport</h1>
                	</div>
            	</div>

            	<nav>
                <li><span><a href="Login.php" class="button">Logout</a></span></li>
            	</nav>
        	</div>
    	</header>
		<div>
			<form action="" method="post" class="form_data">
				<div class="form">
					<label for="tanggal">Tanggal:</label>
  					<input type="date" class="form_tanggal" name="tanggal">
				</div>
				
				<div class="form">
					<label for="pemasukan" >Pemasukan:</label><br>
					<input type="number" class="form_pemasukan" name="pemasukan" value=""><br>
				</div>

				<div class="form">
					<label for="pengeluaran">Pengeluaran:</label><br>
					<input type="number" class="form_pengeluaran" name="pengeluaran" value=""><br><br>
				</div>
					<input type="submit" value="submit" name="submit" class="submit1">
			  </form> 
			<?php

				include 'koneksi.php';

				if (isset($_POST["submit"])){
					mysqli_query($koneksi,"insert into dbdata set
					tanggal = '$_POST[tanggal]',
					pemasukan = '$_POST[pemasukan]',
					pengeluaran = '$_POST[pengeluaran]'");

					echo '<script>alert("New Data Sucsessfully Added")</script>';
				}


			?>


		</div>
		<h1 class="text_tabel">Tabel Pemasukan</h1>
			
			<div class="box_total">
			<table border="1" class="table1">
			<tr>
				<th width="150">Total Pemasukan</th>
				<th width="150">Total Pengeluaran</th>
				<th width="150">Total</th>

		</table>		
				<?php

					include "koneksi.php";
					
					//total pemasukan
					$get_data1 = mysqli_query($koneksi,"SELECT sum(Pemasukan) as total_pemasukan FROM dbdata");
					while ($count1 = mysqli_fetch_array($get_data1)){
						echo"<h1>Total Pemasukan : Rp. $count1[total_pemasukan]</h1>";
					};

					//total pengeluaran
					$get_data2 = mysqli_query($koneksi,"SELECT sum(Pengeluaran) as total_pengeluaran FROM dbdata");
					while ($count2 = mysqli_fetch_array($get_data2)){
						echo"<h1>Total Pengeluaran : Rp. $count2[total_pengeluaran]</h1>";
					};

					//total 
					$get_data3 = mysqli_query($koneksi,"SELECT sum(Pemasukan-Pengeluaran) as total FROM dbdata");
					while ($count3 = mysqli_fetch_array($get_data3)){
						echo"<h1>Total Dana: Rp. $count3[total]</h1>";
					};
				?>	

			</div>



		<table border="1" class="table1">
			<tr>
				<th width="50">No</th>
				<th width="150">Tanggal</th>
				<th width="150">Pemasukan</th>
				<th width="150">Pengeluaran</th>

				<?php

				include "koneksi.php";
				$no=1;
				$ambildata = mysqli_query($koneksi,"SELECT * FROM dbdata");
				while ($tampil = mysqli_fetch_array($ambildata)){
					echo "
					<tr>
						<td>$no</td>
						<td>$tampil[Tanggal]</td>
						<td>$tampil[Pemasukan]</td>
						<td>$tampil[Pengeluaran]</td>
					</tr> ";

					$no++;
				}


				?>
		</table>
	</body>
</html>