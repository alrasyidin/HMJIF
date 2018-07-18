<?php  

include_once "../core/init.php";
redirect();

if($_POST){
	foreach ($_POST as $post) {
		if (empty($post) && !in_array($post, $_POST)) {
			$error[] = "field tidak boleh kosong";
		}
	}

	if(empty($error)){
		$judul = $_POST["judul"];
		$slug = ambilKata($_POST["judul"], count(explode(" ",$_POST["judul"])), "-");
        $published = $_POST["published"];
        $artikel = $_POST["artikel"];

        // print_r($_FILES);
        if (isset($_FILES) && !empty($_FILES["gambar"]["name"])) {
    		$image = $_FILES; // berisi array informasi berupa image yang mau di upload
            // print_r($image);

            if(uploadImage($image, $error)){
                $updateData = array(
                    "id"  => $_GET["id"],
                    "judul" => $judul,
                    "slug" => $slug,
                    "image" => $image["gambar"]["name"],
                    "published" => $published,
                    "isi" => $artikel
                );

                if(updateData($updateData)){
                    header("Location:blog.php?berhasild=".$_GET['id']);
                }
            }else {
                echo "gagal";
                echo "<pre>";
                print_r($error);
            }
        } else {
            $updateData = array(
                "id" => $_GET['id'],
                "judul" => addslashes($judul),
                "slug" => $slug,
                "published" => $published,
                "isi" => $artikel
            );

            if(updateData($updateData)){
                header("Location:blog.php?berhasile=".$_GET['id']);
            }
        }
	}
}
include_once ROOT_PATH . "admin/template/header.php";
?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">No`thing Admin</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="setting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="blog.php"><i class="fa fa-pencil fa-fw"></i> Blog</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Article</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        $data = array("judul", "image", "isi");
        $row = getUserData($data, "WHERE id = '$id' LIMIT 1");
        ?>
        <div class="row section">
            <div class="col-lg-12">
				<form role="form" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" value="<?= $row[0]['judul']; ?>" required>
                        <small class="form-text text-muted"></small>
                    </div>
                    
                    <div class="form-group ">
                        <label>Masukkan Gambar</label>
                        <input type="file" name="gambar">
                    </div>

                    <div class="form-group">
                        <label>Publish Artikel</label> <br>
                        <label class="radio-inline">
                            <input type="radio" name="published" value="1" checked> Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="published" value="0"> Jangan
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Artikel</label>
                        <textarea class="form-control" rows="3" name="artikel" placeholder="Ketikkan artikela anda disini"><?= $row[0]["isi"]; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="add"><i class="fa fa-pencil"></i>  Update Article</button>
                </form>
            </div>
        </div>
       
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php include_once ROOT_PATH . "admin/template/footer.php"; ?>

<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
</script>