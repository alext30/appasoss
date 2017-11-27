<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">      
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/login.css" rel="stylesheet">
        <title>Login</title>
    </head>

    <body>
        <?php
        // put your code here
        include_once './modules/menu.php';
        ?>
        <section class="login-block">
            <div class="container-login">
                <div class="row">
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Ingresar</h2>
                        <form class="login-form">
                            <div class="form-group">
                                <label for="10000000000" class="text-uppercase colores">Cédula:</label>
                                <input type="number" class="form-control" placeholder="">

                            </div>
                            <div class="form-group">
                                <label for="" class="text-uppercase colores">Contraseña:</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>


                            <div class="form-check">
                                <label class="form-check-label colores">
                                    <input type="checkbox" class="form-check-input">
                                    <small>Recordar contraseña</small>
                                </label>
                                <button type="submit" class="btn btn-login float-right"> INGRESAR </button>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-8 banner-sec">
                    </div>	   
                </div>
            </div>
        </section>
        <?php
        include_once './modules/footer.php';
        ?>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>   
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
