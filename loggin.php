<!doctype html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Bootstrap Integration Loggin</title>
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css" />
        <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
        <style rel="stylesheet">   
            .jumbotron{
                max-width: 550px;
                margin: 0 auto;
                margin-top: 25px;
            }
            .form-signin{
                max-width: 330px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <form class="form-signin" role="form">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <input type="text" class="form-control" placeholder="Email address" required="" autofocus="">
                    <input type="password" class="form-control" placeholder="Password" required="">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
    </body>
</html>