<?php include_once 'header.php';?>
<body>

    <div class="container">
        <div class="w-50 mx-auto" style="margin: 100px auto;">
            <h1 class="mb-5">Please sign in</h1>

<form>
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  

  <!-- Submit button -->
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="signup.php">Register</a></p>
  </div>
  </div>
  </div>
</form>
<?php include_once 'footer.php';?>