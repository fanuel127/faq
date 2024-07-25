<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
<script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>

  <title>form</title>
</head>
<body>
  <div class="container p-5 ">
  
    <h2 class="text-center text-info">FORM</h2> 
    <div class="row">
      <div class="col-md 4 d-flex justify-content-center">
      
<div class="form-action  bg-info rounded-2 ">
  <div class="form-control-lg">
   <!--name-->
  <div class="mb-3 mt-3 ">
  <label for="name" class="form-label">Name:</label>
    <input type="name" class="form-control" id="name" placeholder="Enter your name" >
 <!--email-->
    <div class="mb-3 ">
      <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your Email" >
    <!--password-->
        <div class="mb-6">
          <label for="password" class="form-label">password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" >
        
       <!--remember me-->
          <div class="form-check mb-3">
            <label class="form-check-label mb-3">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
            <div class="mt-3">
            <button type="submit" class="btn btn-warning">login</button>
          </div>
        </div>
      </div>
    </div>
 </div>
  </div> 
</div>
</div> 

  
</body>
</html>

