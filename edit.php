<?php
require ('koneksi.php');
if ( isset($_POST['update'])){
    $userid = $_POST ['txt_id'];
    $userMail = $_POST ['txt_email'];
    $userpass = $_POST ['txt_pass'];
    $userName = $_POST ['txt_nama'];

   $query = "UPDATE user_detail SET user_password='userpass', user_fullname='$userName' WHERE id='$userid'";
   echo $query;
   $result  = mysqli_query($koneksi, $query);
   header('location: home.php');
}
$id = $_GET ['id'];
$query =" SELECT * FROM user_detail WHERE id='$id'";
$result = mysqli_query ($koneksi, $query) ;
//$nomor =1;
while ($row =  mysqli_fetch_array($result)){
    $id = $row ['id'];
    $userMail = $row ['user_email'];
    $userpass = $row ['user_password'];
    $userName = $row ['user_fullname'];
}
?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form action="edit.php" method="POST">
            <P><input type="hidden" name="txt_id" value="<?php echo $id; ?>"></P>
            <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" value="<?php echo $userMail; ?>" readonly></p> 
            <p>password : <input type="password" name="txt_pass" value="<?php echo $userpass; ?>"></p>
            <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" value="<?php echo $userName; ?>"></p>
            <button type="submit" name="update" >update</button>
        </form>
    </body>
</html>
