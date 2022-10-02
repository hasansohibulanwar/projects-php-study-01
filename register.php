<?php
require ('koneksi.php');
if ( isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userpass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "INSERT INTO user_detail VALEUS('','$userMail','$userpass','$userName',2)";
    $result = mysqli_query($koneksi , $query);
    header('location: login.php');
}
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="register.php" method="POST">
            <P>email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></P>
            <P>password : <input type="password" name="text_pass" required></P>
            <P>nama  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" required></P>
        </form>
        <p><a href="login.php">Login</p>
    </body>
</html>