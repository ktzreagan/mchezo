<?php http_response_code(200) ?>
<?php require("partials/_assets.php") ?>
<?php if($page !="views/pages/login"): ?>
  <div class="body-wrapper" >
    <!-- partial:partials/_sidebar.html -->
    <?php require("partials/_sidebar.php"); ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
    <?php require("partials/_navbar.php") ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <?php
      require($page.".php")
      ?>
        <!-- partial:partials/_footer.html -->
        <?php require("partials/_footer.php") ?>
        <!-- partial -->
      </div>
    </div>
  </div>
  <?php else:  ?>
    <div class="body-wrapper" >
      <div class="main-wrapper ">
        <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center"  style="background: var(--bg-gradient);">
        <?php
        require($page.".php")
        ?>
        </div>
      </div>
    </div>

  <?php endif ?>

  <?php require("partials/_scripts.php")  ?>
