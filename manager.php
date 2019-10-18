<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
    .al{
     text-align: center; 
    margin-top: 10px;
    margin-bottom: 10px;
    }
    </style>
</head>

<body class="border">

   <form method="post" action="hoteldetail.php">
   <h2 class="al">REGISTER YOUR HOTELS</h2> 
   <div class="container">
   <div class="row">
   <div class="col-md-6">
  <div class="form-group"> 
  HOTEL ID:
 <input type="text " class="form-control" name="id">
  <br>
   HOTEL NAME:
    <input type="text" class="form-control"  name="name">
  </div>    
  <div class="form-group"> 
    STATE:
    <input type="text" class="form-control"  name="st">
  </div>    
  <div class="form-group"> 
   CITY:
    <input type="text" class="form-control"  name="city">
  </div>    
  <div class="form-group"> 
   ADDRESS:
    <input type="text" class="form-control"  name="addr">
  </div>    
   <div class="form-group"> 
   CONTACT NO:
    <input type="text" class="form-control"  name="con">
  </div>    
  
    </div>
    <div class="col-md-6">
       
  <div class="form-group"> 
   photo
    <input type="file" class="form-control"  name="pho">
  </div>    
      
  <div class="form-group"> 
   Cost
    <input type="number" class="form-control"  name="cost">
  </div>    
                
        
    </div>
   <div class="container-fluid al" >
     <div>
      <div col-md-12>
       <input type="submit" class="btn-lg btn-success" name="sub">
       </div>
       </div>
   </div>
</div>
</div>
</form>
</body>
</html>