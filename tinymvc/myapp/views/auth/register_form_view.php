<?php require 'layout/_header.php'; ?>

<?php require 'layout/_nav.php'; ?>

<h1>REGISTER</h1>

<form role="form" action="register" method="post">
    
  <div class="form-group">
    <label for="empno">Employee Number:</label>
    <input type="empno" name="empno" class="form-control" id="empno">
  </div> 
    
  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="fname" name="fname" class="form-control" id="fname">
  </div>
    
  <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="lname" name="lname" class="form-control" id="lname">
  </div>
    
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>    
    
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
      
    <label for="c-pwd">Confirm Password:</label>
    <input type="password" name="pwd" class="form-control" id="c-pwd">      
  </div> 

  <button type="submit" value="&rarr; Login" class="btn btn-default">Submit</button>
</form>
<?php require 'layout/_footer.php'; ?>