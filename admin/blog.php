<?php  

include_once "../core/init.php";
redirect();

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
                <h1 class="page-header">Blog</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="add">
            <a href="blog_add.php" class="btn btn-primary"><i class="fa fa-comments"></i> Add Article</a>
        </div>

        <div class="row">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr><th>No</th><th>Judul</th><th>Views</th><th>Artikel</th><th>Published</th><th>Tanggal Dibuat</th><th>Action</th></tr>
                            </thead>
                            <tbody>
                                <?php  
                                $data = array("id", "judul", "views", "isi", "published", "tgl_dibuat");
                                $row = getUserData($data);
                                $no = 0; $i = 1;
                                while ($no < count($row)) {
                                ?>     
                                <tr class="odd">
                                    <td><?= $i ?></td>
                                    <td><?= $row[$no]["judul"]; ?></td>
                                    <td><?= $row[$no]["views"]; ?></td>
                                    <td><a href="#"><?= substr($row[$no]["isi"],0,125); ?></a></td>
                                    <td><?= $row[$no]["published"]; ?></td>
                                    <td><?= $row[$no]["tgl_dibuat"]; ?></td>
                                    <td><a href="blog_delete.php?id=<?= $row[$no]['id']; ?>" class="badge badge-danger">DELETE</a> <a href="blog_update.php?id=<?= $row[$no]['id']; ?>" class="badge badge-warning">UPDATE</a></td>
                                </tr>                            
                                <?php $no++; $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>            
            </div>
        </div>
       
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php  
include_once ROOT_PATH . "admin/template/footer.php";
?>
