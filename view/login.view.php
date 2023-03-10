<?php include "partials/head.php" ?>
<?php include "partials/nav.php" ?>
<!-- main section -->
<main class="container-fluid vh-100">     
  <div class="container py-3">
    <div class="text-center rounded p-3">
    <h1 class="display-5 text-center">Login form</h1>
      <form action="login" method="POST" id="login-form">
        <div class="mb-5 ">
          <label for="exampleInputEmail1" class="form-label float-start">Email address</label>
          <input type="email" name="login-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="ek@gmail.com">
          <div id="emailHelp" class="form-text float-start">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputPassword1" class="form-label float-start">Password</label>
          <input type="password" name="login-password" class="form-control" id="exampleInputPassword1" value="1234">
        </div>
        <button type="button" id="submit-btn" class="btn btn-primary">Login</button>
        <div class="my-3 form-check lead">
          <p class="d-inline">Don't have an account?</p>
          <a class="" href="/sign-up">Sign up</a>
        </div>
      </form> 
  </div>
</main>
<!-- footer -->
<?php include "partials/footer.php" ?>