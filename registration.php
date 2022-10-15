<!DOCTYPE html>
<html>
 <head>
  <title>Registration Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   
   <br />

   <div class="col-md-6" style="margin:0 auto; float:none;">

<form action="user_data.php" method="post">

<div class="form-group">
    <label for="name">Name:
        <input type="text" name="name" placeholder="Enter your name" required><br>
    </label>
</div>

<div class="form-group">
    <label for="email">Email:
        <input type="email" name="email" placeholder="Enter your email" required><br>
    </label>
</div>

<div class="form-group">
    <label for="date">Date of birth:
        <input type="date" name="date" placeholder=""><br>
    </label>
</div>

<div class="form-group">
    <label for="gender">
        <input type="radio" name="gender" value="male" checked="checked">Male
        <input type="radio" name="gender" value="female">Female<br>
    </label>
</div>

<div class="form-group">
    <label for="country">Country:
        <input type="text" name="country" placeholder="Enter the name of your country" required><br>
    </label>
</div>

<div class="form-group">
    <label for="submit">
        <input type="submit" value="SUBMIT" class="btn btn-info">
    </label>
</div>
</form>

   </div>
  </div>


 </body>
</html>