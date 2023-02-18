<?php include "partials/head.php" ?>
<?php include "partials/nav.php" ?>
<!-- main section -->
<main class="container-fluid">     
  <div class="container py-3">
    <div class="text-center rounded p-3">
      <h1 class="display-5 text-start">
      <?php echo $heading ?>
      </h1>
    </div>
    <div class="text-center my-5">
        <!-- notes cards -->
        <?php if ($heading !== "") {?>
            <?php for($val = 0; $val < count($notes); $val++) { ?>
                <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                    <p class="text-start">
                        <?php echo $notes[$val] ?? "" ; ?>
                    </p>
                    <h1 class="display-6 text-end mx-3">
                        <?php echo $users[$val] ?? "..." ?>
                    </h1>
                </div>
            <?php }?>
        <?php } else {?>
            <div class="my-3 shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <p class="text-start">
                </p>
                <h1 class="display-6 text-end mx-3">
            </h1>
        </div>
        <?php }?>
    </div>
  </div>
</main>
<?php include "partials/footer.php"?>