<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign UP Form Design</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <button type="button" class="btn btn-outline-primary" ><a href="index.php">Home</a></button>
  <div class="form">
    <h2>SIGN UP</h2>
      <form  action="connect.php" method="post">
        <div class="inputBox">
        <input type="text"id="pharmacyid"name="pharmacyid" name="" required="">
        <label for="">Pharmacy ID</label>
      </div>
      <div class="inputBox">
        <input type="text"id="FirstName"name="FirstName" name="" required="">
        <label for="">First Name</label>
      </div>
       <div class="inputBox">
        <input type="text"id="LastName"name="LastName" name="" required="">
        <label for="">Last Name</label>
      </div>
      <div class="inputBox">
        <input type="email"id="email"name="email" name="" required="">
        <label for="">Email</label>
      </div>
      <div class="inputBox">
        <input type="password" name="password" required="">
        <label for="">Password</label>
      </div>
      <div class="inputBox">
        <input type="password"id="rpassword"name="rpassword" name="" required="">
        <label for="">Re Enter Password</label>
      </div>
      <input type="submit" name="" value="Submit">
    </form>
  </div>
</body>
</html>