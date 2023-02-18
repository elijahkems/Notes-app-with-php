<?php include "partials/head.php" ?>
<?php include "partials/nav.php" ?>
<!-- main section -->
<main class="container-fluid">     
  <div class="container py-3">
    <div class="text-center rounded p-3">
      <h1 class="display-5 text-start">
      <?php echo $heading ?>
      <span class="d-inline"> 
        <button href="/createnote" class="btn btn-outline-secondary ms-5">
          <a class="nav-link" href="/createnote">create note</a>
        </button>
      </span>
      </h1>
     
    </div>
    <div class="text-center my-5">
      <!-- notes cards -->
      <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <p class="text-start">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Doloribus necessitatibus at accusantium error earum maxime
          provident, mollitia moleoribus eveniet consequatur
          voluptate minus doloribus suscipit?
        </p>
        <h1 class="display-6 text-end mx-3">
          Kevin <i class="fa-light fa-circle-user"></i>
        </h1>
      </div>
      <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <p class="text-start">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Doloribus necessitatibus at accusantium error earum maxime
          provident, mollitia molestias commodi quibusdam reprehenderit.
          Consectetur, ea omnis dolorem temporibus eveniet consequatur
          voluptate minus doloribus suscipit?
        </p>
        <h1 class="display-6 text-end mx-3">Marilyn</h1>
      </div>
      <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
        <p class="text-start">
        estias commodi quibusdam reprehenderit.
          Consectetur, ea omnis dolorem temporibus eveniet consequatur
          voluptate minus doloribus suscipit?
          sit amet consectetur adipisicing elit.
          Doloribus necessitatibus at accusantium error earum maxime
          provident, mollitia mol
        </p>
        <h1 class="display-6 text-end mx-3">Doe</h1>
      </div>
    </div>
  </div>
</main>
<!-- footer -->
<?php include "partials/footer.php" ?>

