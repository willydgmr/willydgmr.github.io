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
                    <!-- The below line can be an image or a h1, either will work -->
                    <h1>UD. Novary Sport</h1>
                	</div>
            	</div>
        	</div>
    	</header>

    	<form div class="login_form" action="" method="POST">
    		<label>Username</label><br>
    		<input type="text" name="user" placeholder="username"><br>
    		<label>Password</label><br>
    		<input type="Password" name="pass" placeholder="password"><br>
    		<input type="submit" name="submit" value="login" class="login_submit">
    	</form>

        <?php 
            if(isset($_POST['submit'])){
				include 'koneksi.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

				$cek = mysqli_query($koneksi, "SELECT * FROM dbadmin WHERE username ='".$user."' AND password ='".MD5($pass)."'"); 
				if(mysqli_num_rows($cek) > 0){
                    echo '<script>window.location="index.php"</script>';
                }else{ 
                    echo '<script>alert("Username atau password Anda salah!")</script>';
				}
			}
        ?>
	</body>
</html>