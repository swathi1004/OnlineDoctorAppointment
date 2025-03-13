<html>
    <body>
        <?php
$firstname = $_Post['fname'];
$lastname = $_Post['lname'];
$email   =   $_Post['mail'];
$password = $_Post['pass'];


$username ="root"
$server ="localhost"
$password="";
$db="register";
$sql= mysqli_connect("$username","$server","$password","$db")
$result= "Insert into reg (fname,lname,mail,pass) values ('$firstname', '$lastname','$email','$password')";
$conn = mysqli_bind($sql,$result)
?>
</body>
</html>

