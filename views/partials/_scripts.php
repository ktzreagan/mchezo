<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/materialize/js/materialize.min.js"></script>
  <script src="assets/materialize/js/materialize.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- Custom js for this page-->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>

  <?php require("views/partials/charts.php") ?>
  <!-- End custom js for this page-->

  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/js/sweet-alert.min.js"></script>
  <script src="assets/js/custom_logic.js"></script>


</script>

 


</script>


  <?php if(isset($_SESSION["success"])): ?>
    <script>
      swal("success","<?php echo($_SESSION['success']) ?>","success");
    </script>
  <?php  unset($_SESSION['success']);?>
  <?php endif ?>

  <?php if(isset($_SESSION["error"])): ?>
    <script>
      swal("error","<?php echo($_SESSION['error']) ?>","error");
    </script>
  <?php  unset($_SESSION['error']);?>
  <?php endif ?>


  <?php if(isset($_SESSION["info"])): ?>
    <script>
      swal("","<?php echo($_SESSION['info']) ?>","info");
    </script>
  <?php  unset($_SESSION['info']);?>
  <?php endif ?>

</body>
</html> 