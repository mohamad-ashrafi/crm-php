<?php

if (!file_exists('install.lock')) {
    include 'db_connection.php';
}
include 'header-auth.php';

?>



  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Mini CRM</h1>
        <h2 class="masthead-subheading mb-0">Admin communication with customers</h2>
          <p class="text-md-center">With dashboard - ticket registration - order registration</p>
      </div>
    </div>
  </header>


  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-auto text-center text-white small">Copyright &copy; Ashrafi CRM 2024</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
