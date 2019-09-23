<!DOCTYPE html>

<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
       table, th, td {
  border-style: hidden;
}
        th{
            background-color:black;
            padding: 10px;
            color:white;
        }
        table{
            text-align: center;
            color:black;
        }
        tr{
            
            background-color: bisque;
        }
        td{
            margin-left: 20px;
            padding: 30px;
        }
        th{
            margin-left: 50px;
            padding: 30px;
        }
        .cen{
            text-align: center;
        }
        .sp{
            text-align: center;
            align-content: center;
            align-items: center;
            margin-left:90px; 
        }
    </style>
    
</head>
<body onload="callme()">
 <?php
       $con=mysqli_connect("localhost","root","","hotel");

$q="select * from cart";
$res=mysqli_query($con,$q);

    ?>
    
  <div class="container-fluid cen">
   <h3 >MANAGEMENT</h3>
    <div class="sp">
    <table  class="table-striped">
        <th>
           ID
        </th>
        
        <th>
            HOTEL NAME
        </th>
        <th>
            STATE
        </th>
        <th>
             CITY
        </th>
        <th>
             ADDRESS
        </th>
        <th>
             CONTACT
        </th>
        <th>
            RESULT
        </th>
        
        <th>
            STATUS
        </th>
    <srcipt>
    function callme(){
     setInterval(function(){
    <?php
        while($f=mysqli_fetch_array($res)){
?>      <tr>
        <td>
        <?php echo $f[0]?>
        </td>
        
        <td>
        <?php echo $f[1]?>
        </td>
        
        <td>
        <?php echo $f[2]?>
        </td>
        
        <td>
        <?php echo $f[3]?>
        </td>
        <td>
        <?php echo $f[4]?>
        </td>
        <td>
        <?php echo $f[6]?>
        </td>
        
        <td>
        <?php echo $f[8]?>
        </td>
        <td>
      <form method="post" action="status.php">
        <button class="btn btn-outline-dark" value="1" 
           onclick="callme()"name="but">
            ACCEPT
        </button>
        <br><br>
        <button class="btn btn-outline-dark" value="2" 
           onclick="callme()"name="but">
            REJECT
        </button>
        <input type="hidden" name="hid" value="<?php echo $f[0]?>">
        </form>  
        </td>
        
        </tr>
      
       
<?php
}    
        
?>      
  },1000);      
   }
   </srcipt>  
    </table>
    </div>
    </div>
    
</body>
</html>