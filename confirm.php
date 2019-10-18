<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $in=$_POST['in'];
    $out=$_POST['out'];
    $ph=$_POST['ph'];
    $email=$_POST['email'];
    $count=$_POST['count'];
    $name=$_SESSION['name'];
  
    $con=mysqli_connect("localhost","root","","hotel");

    $q="insert into booking(name,email,cin,cout,count,ph)values('$name','$email','$in','$out','$count','$ph');";
    
    $res=mysqli_query($con,$q);
    if($res){
        echo"successfully";
    }
    else{
        echo "error";
    }
    
        
    
    ?>
</body>
</html>