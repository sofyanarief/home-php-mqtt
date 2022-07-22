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

    <title>EnGiNe-HoMe Automation | 2nd Floor</title>

    <!-- Bootstrap -->
    <link href="vendor/ourgapps/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendor/ourgapps/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendor/ourgapps/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendor/ourgapps/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- Switchery -->
    <link href="vendor/ourgapps/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
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
        <div class="right_col" role="main" style="min-height: 800px">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>2<sup>nd</sup> Floor</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bathroom</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-6 col-sm-6 col-xs-12">Water Heater</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="swheaterlt2" type="checkbox" class="js-switch" /> <span id="statusheaterlt2"></span>
                                            <!-- <p><?php //echo base_url();?></p> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script>
        var base_url = window.location.origin;
        // $(document).ready(function(){
        //     getswstatus('heaterlt2');
        // });

        $('#swheaterlt2').change(function() {
            if($('#swheaterlt2')[0].checked == 1){
                setswstatus(1,'heaterlt2');
            }else{
                setswstatus(0,'heaterlt2');
            }
        });

        function setswstatus(setstatus,swname){
            $('#swheaterlt2').prop('disabled',true);
            if(setstatus == 1){
                $('#statusheaterlt2').text(' Turning ON... ');
            }else{
                $('#statusheaterlt2').text(' Turning OFF... ');
            }
            $.ajax({
                type:"post",
                url:base_url+'/control.php',
                data:{ ctrltype: 'swonoff', action: 'set', setstatus: setstatus, swname: swname },
                dataType: "json",
                async: false,
                success: function(data){
                    console.log(data);
                    if(setstatus == 1){
                        $('#statusheaterlt2').text(' ON ');
                    }else{
                        $('#statusheaterlt2').text(' OFF ');
                    }
                },
                error: function(){
                    alert('Error controlling '+swname);
                    console.log(data);
                    if(setstatus == 1){
                        $('#statusheaterlt2').text(' OFF ');
                        $('#swheaterlt2')[0].checked = 0;
                    }else{
                        $('#statusheaterlt2').text(' ON ');
                        $('#swheaterlt2')[0].checked = 1;
                    }
                }
            });
        }

        function getswstatus(swname){
            $.ajax({
                type:"post",
                url:base_url+'/control.php',
                data:{ ctrltype: 'swonoff', action: 'get', swname: swname },
                dataType: "json",
                async: false,
                success: function(data){
                    console.log(data);
                    if(data == 'on'){
                        $('#statusheaterlt2').text(' ON ');
                    }else{
                        $('#statusheaterlt2').text(' OFF ');
                    }
                },
                error: function(){
                    alert('Error controlling '+swname);
                    console.log(data);
                    $('#statusheaterlt2').attr('disabled',true);
                }
            });
        }
    </script>

    <!-- FastClick -->
    <script src="vendor/ourgapps/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendor/ourgapps/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Switchery -->
    <script src="vendor/ourgapps/gentelella/vendors/switchery/dist/switchery.min.js"></script>
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

  </body>
</html>
<?php
}else{
    header("location: login.php");
}
?>