<?php include "partials/head.php" ?>
<?php include "partials/nav.php" ?>
<!-- main section -->
<main class="container-fluid vh-100">     
  <div class="container py-3">
    <div class="text-center rounded p-3">
      <h1 class="display-5 text-center"><?php echo $heading ?></h1>
      <form action="login" method="POST"id="sign-up-form">
        <div class="mb-5 ">
          <label for="exampleInputEmail1" class="form-label float-start">Email address</label>
          <input type="email" name="login-email" class="form-control" id="email-input" aria-describedby="emailHelp" placeholder="" value="ek@gmail.com">
          <div id="emailHelp" class="form-text float-start">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 ">
          <label for="exampleInputPassword1" class="form-label float-start">Password</label>
          <input type="password" name="login-password" class="form-control" id="password-input" value="1234">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label float-start">Repeat Password</label>
          <input type="password" name="login-repeat-password" class="form-control" id="repeat-password-input" value="1234">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label float-start" for="exampleCheck1 float-start">Check me out</label>
        </div>
        <button type="button" id="submit-btn" class="btn btn-primary">Submit</button>
      </form> 
  </div>
</main>
<!-- footer -->
<?php include "partials/footer.php" ?>