<?php require_once 'header.php'?> 
        <div class="col-4 mx-auto">
            <div class="card shadow-sm card-lift--hover text-center p-5">
                <h2>КИС ЕМИАС Аптека</h2>
                <hr>
                <h2>ВРАЧ</h2>
                <p class="lead">
                    <a class="btn btn-success btn-lg w-100" href="1.php" role="button">Открыть</a>
                </p>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow-sm card-lift--hover text-center p-5">
                <h2>КИС ЕМИАС Аптека</h2>
                <hr>
                <h2>ВРАЧ</h2>
                <p class="lead">
                    <a class="btn btn-success btn-lg w-100" href="2.php" role="button">Открыть</a>
                </p>
            </div>
        </div>
        <div class="col-4 mx-auto">
            <div class="card shadow-sm card-lift--hover text-center p-5">
                <h2>КИС ЕМИАС Аптека</h2>
                <hr>
                <h2>ВРАЧ</h2>
                <p class="lead">
                    <a class="btn btn-success btn-lg w-100" href="2.php" role="button">Открыть</a>
                </p>
            </div>
        </div>
    </div>
</div>



  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>