<?php  
include_once "../core/init.php";
logged_in();

// var_dump($_POST);
if(isset($_POST)){
    foreach ($_POST as $post) {
        if(empty($post)){
            $error[] = "Username atau Password tidak boleh kosong";
            break;
        }
    }

    if( isset($_POST["username"]) && isset($_POST["password"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if( loginAdmin(array("username" => $username, "password" => $password)) ){

            if(isset($_POST["remember"])){
                setcookie("username", hash("sha256", $username), time() + 60 * 60 * 24 * 30);
            }

            $_SESSION["admin"] = $username;
            // echo "bandung";
            header("Location:index.php");
        } else {
            // echo "bandung";
            header("Location:login.php?error=");
        }
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Area - HMJIF</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        .add{padding: 1em 0 3em;}
        .section{padding: 2em 0 5em;}
        /* apa aja */
        .badge{display: inline-block !important;}
        .badge-danger{background: rgba(255,0,0,.6);}
        .badge-warning{background: rgba(255,255,0,.8);}
        /* end apa aja */
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Login</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                           <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                           <input type="submit" name="login" value="Login" class="btn btn-lg btn-success btn-block">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  
include_once ROOT_PATH . "admin/template/footer.php";
?>