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


include_once ROOT_PATH . "admin/template/header.php";
?>
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