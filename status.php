<?php
$con=mysqli_connect("localhost","root","","hotel");
$v=$_POST['but'];
$id=$_POST['hid'];
echo "id is $id";
if($con){
    echo "connection succesful";
}
if($v==1){
    echo "successfully accepted";
    $m="ACCEPTED";
}
elseif($v==2){
echo "successfully rejected";
     $m="REJECTED";   
             
    }

echo "value is '$m'";
$q="update cart SET status='$v', result='$m' where id='$id';";
echo $q;
$res=mysqli_query($con,$q);


if($res){
    echo "successful";
    header("Location: admin.php");
}
else{
    echo "sorry";
}
