<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img{
            
            height: 400px;
            width: 400px;
            border:4px;
            border-radius:50%;
            
        }
        .m{
            margin-left: 100px;
            font-size: 50px;
            font-family: monospace;
        }        
    
    </style>
</head>
<body>
    <?php 
    
    $id=$_POST['id'];
    $pho=$_POST['pho'];
    
    $con=mysqli_connect("localhost","root","","hotel");
    $q="select * from cart where id='$id'";
    $res=mysqli_query($con,$q);
    $v=mysqli_fetch_array($res);
    
    
    
    ?>
    <form method="post"  action="confirm.php">
    <div class="row container">
        <div class="col-md-6 col-sm-4 ">
        
        <img src="<?php echo $v['pho'] ?>" class="img">
           <div >
        
           <h3 class="m"> RS:<?php echo  $v['cost'] ;?></h3>
        </div>
        
        </div>
        
     
        <br>
    
    <div class="col-md-4">
        <div class="form-group ">
            CHECK IN:
            <input type="date" class="form-control" name="in">
            
        </div>
        
    <div class="form-group ">
            CHECK OUT:
            <input type="date" class="form-control" name="out">
            
        </div>
        
  

        
         <div >
          <div class="form-group ">
            EMAIL
            <input type="text" class="form-control"  placeholder="enter your email" name="email">
            
        </div>
        <br>
        <div class="form-group">
         Total No Of Persons:
            <input text="text" class="form-control" placeholder="maximum  of  3 persons" name="count">
                        
        </div>
        <br>
        <div class="form-group">
         MOBILE NUMBER
            <input text="text" class="form-control" placeholder="enter your mobile number" name="ph">
                        
        </div>
        
        <br>
         <div>
             <button  type="submit" class="btn-lg btn-primary">CONFIRM BOOKING</button>
             
             
         </div>
         
          </div>
          </div>    
        </div>
          </form>
    <?php
    ?>
</body>
</html>