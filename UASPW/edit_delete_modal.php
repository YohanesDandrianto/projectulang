<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Edit Data Mahasiswa</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NIM:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="id" value="<?php echo $row->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Nama:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Prodi:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="prodi" value="<?php echo $row->prodi; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Jurusan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="jurusan" value="<?php echo $row->jurusan; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Provinsi:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="provinsi" value="<?php echo $row->provinsi; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Kabupaten:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kabupaten" value="<?php echo $row->kabupaten; ?>">
					</div>
				</div><div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Kecamatan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kecamatan" value="<?php echo $row->kecamatan; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Desa:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="desa" value="<?php echo $row->desa; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Delete Data Mahasiswa</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Apakah anda ingin menghapus ?</p>
				<h2 class="text-center"><?php echo $row->nama; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>