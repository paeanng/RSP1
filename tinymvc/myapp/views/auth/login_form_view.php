<?php require 'layout/_header.php'; ?>

<?php require 'layout/_nav.php'; ?>

<h1>LOGIN</h1>

<form role="form" action="login" method="post">
  <div class="form-group">
    <label for="empno">Employee Number:</label>
    <input type="text" name="empno" class="form-control" id="empno">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pwd" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php require 'layout/_footer.php'; ?>