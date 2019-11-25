<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/assets/css/login.css" type="text/css">
    <title>Test Hiit Consulting </title>
</head>

<body>

    <div class="container">

        <div class="wrapper fadeInDown">
            <div id="formContent">

                <div class="fadeIn first">
                    <img src="public/img/login.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form method="post" action="index.php?act=login&ctrl=user" class="form-signin">
                    <?php if (isset($error_msg) and !empty($error_msg)){?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p><?php echo $error_msg; ?></p>
                    </div>
                    <?php }?>
                    <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required autofocus>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <div id="formFooter">
                    <a class="underlineHover" href="#">By Radouane</a>
                </div>

            </div>
        </div>

    </div>


    <script type="text/javascript" src="public/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>