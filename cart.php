<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
    

   
    .n{

    color: white;
    align-items: center;
    float: right;
    align-content:center;
    
    }
        li{
        margin-right: 20px;
        padding: 20px;
        color: white
    }
    .login{
        float: right;
        
    }
    .car{
        text-align: center;
        height: 700px;
        width:auto;
    
        
    }
    .me{
        font-size: 20px;
    
    }
    body{
        background-color: black;
        font-family: 'Patua One', cursive;
    }
    input{
    color: black;
    }
      .cart{
      margin-left: auto;
    }


    </style>

</head>zz
<body>

   <img src="logo.jpg"width="100" height="70">
   <div class=" nav n">
    <li  class="navbar-list Active">
       <a href="home.php" class="active"> HOME</a>
    </li>
    <li >
      <a href="manager.php"> MANAGERS</a> 
    </li>
    <li >
     <a href="">CONTACT US</a>
    </li>
  </div>



<?php
$con=mysqli_connect("localhost","root","","hotel");
$query="select * from cart";
$res=mysqli_query($con,$query);
if(mysqli_num_rows($res)>0){
  echo "data found";
}
?>
<div class="container nav ">
   <?php    
    
while($row=mysqli_fetch_array($res)){

    ?>
    
<div class="container cart card-deck col-md-4">
        <div class="">
    
    <div class="card-column border style="width="300">
    <div class="card  text-center rounded  bg-info" >
        
  <img class="card-img-top" src="<?php  echo $row['pho'];?>" alt="Card image" width="100" height="300">
  <div class="card-body">
    <h4 class="card-title"><?php  echo $row['hname'];?></h4>
    <p class="card-text"><?php echo $row['haddr'];?></p>
    <a href="#" class="btn btn-dark btn-lg">Click me</a>
  </div>
</div>

</div>
    </div>        
</div>
<br>
<?php }?>
<br>
</div>  

</body>
</html>