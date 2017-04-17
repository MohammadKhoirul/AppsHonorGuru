<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Data Honor Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_edit" method="post" action="<?php echo base_url('index.php/honor/edit_proses'); ?>">
  <div class="form-group" hidden="true"> 
    <label class="col-sm-3 control-label">NUPTK</label>
    <div class="col-sm-5">
      <input id="nuptk" type="text" class="form-control" placeholder="Nomor NUPTK" name="nuptk" value="<?php echo $data->nuptk; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">NUPTK</label>
    <div class="col-sm-5">
      <input disabled="true" id="nuptk" type="text" class="form-control" placeholder="Nomor NUPTK" name="dis_nuptk" value="<?php echo $data->nuptk; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-5">
      <input disabled="true" id="nama" type="text" class="form-control" placeholder="Nama Guru" name="dis_nama" value="<?php echo $data->nama; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Jam</label>
    <div class="col-sm-5">
    <div class="input-group">
      <input id="jumlah_jam" type="text" class="form-control" placeholder="Jumlah Jam" name="jumlah_jam" value="<?php echo $data->jumlah_jam; ?>" />
    <span class="input-group-addon">Per Minggu</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Honor</label>
    <div class="col-sm-5">
    <div class="input-group">
    <span class="input-group-addon">Rp. </span>
      <input id="jumlah_honor" type="text" class="form-control" placeholder="Jumlah Honor" name="jumlah_honor" value="<?php echo $data->jumlah_honor; ?>" />
    <span class="input-group-addon">Per Jam</span>
	</div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
	<div class="btn-group">
      <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url('index.php/honor');?>" role="button" cl>Batal</a>
    </div>
	</div>
  </div>
</form>
  </div>
</div>
</div>
</div>