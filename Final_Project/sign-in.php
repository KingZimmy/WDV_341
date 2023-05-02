<!-- sign-in.php -->
<?php include('header.php'); ?>

<div class="container">
  <h1>Sign In</h1>
  <form method="post" action="login.php">
    <div class="mb-3">
      <label for="userName" class="form-label">Username</label>
      <input type="text" class="form-control" id="userName" name="userName" required>
    </div>
    <div class="mb-3">
      <label for="passWord" class="form-label">Password</label>
      <input type="password" class="form-control" id="passWord" name="passWord" required>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
  </form>
</div>

<!-- Bootstrap 5 JS code here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ny2lDQm1sId/m9z4/KGxIg/0nITKfAK2nLeRSNdJNzAW1KjDnXN9YBp8FqbLFXgF" crossorigin="anonymous"></script>

<!-- Footer Goes Here -->
<?php include('footer.php'); ?>
