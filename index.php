<?php
$koneksi=mysqli_connect("localhost","root","","input email siswa");
if (isset($_POST["tblsubmit"])) {
$email=$_POST ["femail"];
$password=$_POST ["fpassword"];
$query= "INSERT INTO tabellogin VALUES ('$email','$password')";
mysqli_query($koneksi,$query);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Website</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</head>
<body>
    
    <header>
        <h2 class="Logo">Logo</h2>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="femail" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="fpassword" required>
                    <label>password</label>
                    <div class="remember-forget">
                      <input type="checkbox" required>
                      <p>Remember me</p>
                        <a href="#">Forget Password?</a>
                    </div>
                    <button type="submit" name="tblsubmit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                    </div>

                </div>
            </form>

        </div>
    </div>
    <!-- <table border= '1'align="center cellspacing="0">
        <tr>
        <td>
        <form method="post" name form siswa"action=" ">
        <table>
        <tr>
        <td cosplan=" 3 align= " center height = "24">
        <b> INPUT DATA SISWA </b> </td>
        </tr>
        <tr>
        <td>NIS</td>
        <td align=" center" > : </td>
        <td> <input type = "text" name= "fnis" required > </td> </tr>
        
        <tr>
        <td>NAMA</td>
        <td align=" center" > : </td>
        <td> <input type = "text" name= "fnama" required > </td> </tr>
        
        <tr>
        <td>KELAS</td>
        <td align=" center" > : </td>
        <td> <input type = "text" name= "fkelas" required > </td> </tr>
        
        <tr>
        <td>NO HP</td>
        <td align=" center" > : </td>
        <td> <input type = "text" name= "fnohp" required > </td> </tr>
        
        <tr>
        <td cosplan="2"align="center"><button type="submit"name="tblsubmit">SIMPAN</button>
        </td>
        
        <td>
        <button type = "reset"  name="tblreset"> BATAL</button> </td>
        </tr> -->
</body>
</html>