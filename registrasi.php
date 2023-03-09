
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="registrasi.css">
</head>
<body>
	
	<div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" id="username">
            </div>
             <div class="input-group">
                <input type="password" placeholder="Password" name="password" id="password">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
   
     </div>
</body>
</html>

<?php 

require'koneksi.php';

    if(isset($_POST["register"])){

            $username = strtolower(stripslashes($_POST["username"]));
            $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
            $cpassword = mysqli_real_escape_string($koneksi,$_POST["cpassword"]);
	    



                if ($password !== $cpassword) {
                    echo"<script>
                            alert('konfirmasi password tidak sesuai!');
                        </script>";
                        return false;
                }

                else{
                    echo"<script>

                        alert('userbaru berhasil ditambahkan');
                   </script> ";
			
			
                }

    }

 ?>
