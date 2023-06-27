<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Data Mahasiswa</h1>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New</a>
      <?php 
       session_start();
       if(isset($_SESSION['message'])){
      ?>
      <div class="alert alert-info text-center" style="margin-top:20px;">
      <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
<table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
<th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Jurusan</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </thead>
                <tbody>
                    <?php
                    //load xml file
                    $file = simplexml_load_file('files/mahasiswa.xml');
 
                    foreach($file->user as $row){
                        ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->prodi; ?></td>
                            <td><?php echo $row->jurusan; ?></td>
                            <td><?php echo $row->provinsi; ?></td>
                            <td><?php echo $row->kabupaten; ?></td>
                            <td><?php echo $row->kecamatan; ?></td>
                            <td><?php echo $row->desa; ?></td>
                            <td>
<a href="#edit_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a></td><td><a href="#delete_<?php echo $row->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            </td>
                            <?php include('edit_delete_modal.php'); ?>
                        </tr>
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add_modal.php'); 
?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>