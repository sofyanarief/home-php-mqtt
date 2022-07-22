<?php
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EnGiNe-HoMe Automation | Dashboard</title>

    <!-- Bootstrap -->
    <link href="vendor/ourgapps/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendor/ourgapps/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendor/ourgapps/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendor/ourgapps/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendor/ourgapps/gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendor/ourgapps/gentelella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendor/ourgapps/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vendor/ourgapps/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <?php include 'sidebar_menu.php'; ?>
        <?php include 'top_navigation.php'; ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <h1>Welcome to EnGiNe-HoMe Automation @TheAraya</h1>
            <h2>This is a Web Application to control Home Automation Internet of Things (IoT) devices.</h2>
            <div class="tomorrow" data-location-id="056984" data-language="EN" data-unit-system="METRIC" data-skin="light" data-widget-type="summary" style="padding-bottom:22px;position:relative;">
                <a href="https://www.tomorrow.io/weather/" rel="nofollow noopener noreferrer" target="_blank" style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;">
                    <img alt="Powered by Tomorrow.io" src="https://weather-website-client.tomorrow.io/img/powered-by-tomorrow.svg" width="140" height="15"/>
                </a>
            </div>
        </div>
        <!-- /page content -->
        <?php include 'footer.php'; ?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/ourgapps/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendor/ourgapps/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendor/ourgapps/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendor/ourgapps/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendor/ourgapps/gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendor/ourgapps/gentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendor/ourgapps/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendor/ourgapps/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendor/ourgapps/gentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendor/ourgapps/gentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendor/ourgapps/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendor/ourgapps/gentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendor/ourgapps/gentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendor/ourgapps/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="vendor/ourgapps/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vendor/ourgapps/gentelella/build/js/custom.min.js"></script>
    <script>
    (function(d, s, id) {
        if (d.getElementById(id)) {
            if (window.__TOMORROW__) {
                window.__TOMORROW__.renderWidget();
            }
            return;
        }
        const fjs = d.getElementsByTagName(s)[0];
        const js = d.createElement(s);
        js.id = id;
        js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

        fjs.parentNode.insertBefore(js, fjs);
    })(document, 'script', 'tomorrow-sdk');
    </script>	
  </body>
</html>
<?php
}else{
    header("location: login.php");
}
?>