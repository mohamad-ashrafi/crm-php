<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo BASE_URL; ?>/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo BASE_URL; ?>/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo BASE_URL; ?>/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>

    <title>CRM Project using PHP and MySQL</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL; ?>/assets/css/home.css" rel="stylesheet">
    <script type="text/javascript">
        function checkpass() {
            if (document.signup.password.value != document.signup.cpassword.value) {
                alert('New Password and Re-Password field does not match');
                document.signup.cpassword.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">CRM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/registration.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/admin/">Admin Panel</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="#">LOGO</a>
    </div>
</nav>
</body>
</html>
