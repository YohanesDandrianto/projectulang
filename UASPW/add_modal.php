<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   <center><h4 class="modal-title" id="myModalLabel">TAMBAH DATA MAHASISWA</h4></center>
            </div>
<div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">NIM:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="id">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Nama:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Prodi:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="prodi">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Jurusan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="jurusan">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Provinsi:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="provinsi">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Kabupaten:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kabupaten">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Kecamatan:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="kecamatan">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
<label class="control-label" style="position:relative; top:7px;">Desa:</label>
					</div>
					<div class="col-sm-10">
<input type="text" class="form-control" name="desa">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>
 
        </div>
    </div>
</div>
