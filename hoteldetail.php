
<?php 

$con=mysqli_connect("localhost","root","","hotel");
$id=$_POST['id'];
$n=$_POST['name'];
$s=$_POST['st'];
$c=$_POST['city'];
$addr=$_POST['addr'];
$cont=$_POST['con'];
$pho=$_POST['pho'];
echo $id;
echo $n;
echo $s;
echo $c;
echo $addr;
echo $cont;
echo $pho;
if($con)    {
    echo "connected succ";
}
else{
    echo "no link";
}
if($id==null || $n==null || $s==null || $c==null || $addr==null || $cont==null || $pho==null){
    echo "some fields are not filled";
}
else{


$q="insert into cart(id,hname,hstate,hcity,haddr,con,pho)VALUES('$id','$n','$s','$c','$addr','$cont','$pho');";
$res=mysqli_query($con,$q);
if($res){
    echo "inserted successfulyy";
        
}
else{
    echo "error";
}

}












?>