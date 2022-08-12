<?php
session_start();
if(!isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EnGiNe-HoMe Automation | Login</title>

    <!-- Bootstrap -->
    <link href="../vendor/ourgapps/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendor/ourgapps/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendor/ourgapps/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendor/ourgapps/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../vendor/ourgapps/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <h1>EnGiNe-HoMe Automation</h1>
            <form method="post" action="do_login.php">
              <h1>@TheAraya</h1>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Username" required="" style="text-align:center" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" style="text-align:center" />
              </div>
              <div>
                <button name="submit" class="btn btn-success" type="Submit">Log in</button>
                <button class="btn btn-primary" type="Reset">Reset</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div>
                  <p>Copyrigth © OwnDev 2022</p>
                  <p>Powered by Gentelella Alela! Bootstrap 3 template</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
}else{
    header("location: dashboard.php");
}
?>