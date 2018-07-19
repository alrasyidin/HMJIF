<?php  

include_once "../core/init.php";
redirect();

include_once ROOT_PATH . "admin/template/header.php";
?>

<div id="wrapper">
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
