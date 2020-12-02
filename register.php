<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<div class="container">

  <div id="msg" class="alert alert-dismissible alert-danger d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p class="mb-0"></p>
  </div>

  <form name="register">
    <fieldset>
      <legend>Register</legend>
      <div class="form-group">
        <label for="username">Username</label>
        <input name="username" type="text" class="form-control" placeholder="username">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="password">
      </div>
      <div class="form-group">
        <label for="password">Confirm password</label>
        <input name="confirmPassword" type="password" class="form-control" placeholder="password again">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </fieldset>
  </form>

</div>

<script src="js/register.js"></script>
<script src="js/common.js"></script>

<?php include_once 'layout/bottom.inc.php'; ?>
