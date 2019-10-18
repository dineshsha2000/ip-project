<?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cp=$_POST['conpass'];
$f=1;
if($pass!=$cp){
    $f=0;
    echo "sorry password & confirm password are not same";
}
if($f==1){
if($name==null && $email==null && $pass==null){
    echo "<h2>sorry some fields are not field</h2>";
    
}

else{

$con=mysqli_connect("localhost","root","","hotel");
$q="insert into sign(name,email,pass)VALUES('$name','$email','$pass');";

$v=mysqli_query($con,$q);
if($v){
    echo "successuly";
}
else{
    echo "false";
}
}
    
    
    
}
?>

<a href="home.php"><button>BACK</button></a>
