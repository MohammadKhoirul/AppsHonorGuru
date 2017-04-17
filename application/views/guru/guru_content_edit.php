<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Data Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_edit" method="post" action="<?php echo base_url('index.php/guru/edit_proses'); ?>">
  <div hidden="true" class="form-group">
    <label class="col-sm-3 control-label">NUPTK</label>
    <div class="col-sm-5">
      <input id="nuptk" type="text" class="form-control" placeholder="Nomor NUPTK" name="nuptk" value="<?php echo $data->nuptk; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">NUPTK</label>
    <div class="col-sm-5">
      <input id="nuptk" type="text" class="form-control" placeholder="Nomor NUPTK" name="nuptk_change" value="<?php echo $data->nuptk; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-5">
      <input id="nama" type="text" class="form-control" placeholder="Nama Guru" name="nama" value="<?php echo $data->nama; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jenis Kelamin</label>
    <div class="col-sm-5">
      <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
            <option hidden="true" value="<?php echo $data->jenis_kelamin; ?>" selected="true"><?php echo $data->jenis_kelamin; ?></option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Lama Mengajar</label>
    <div class="col-sm-5">
    <div class="input-group">
      <input id="lama_mengajar" type="text" class="form-control" placeholder="Lama Mengajar" name="lama_mengajar" value="<?php echo $data->lama_mengajar; ?>" />
    <span class="input-group-addon">Tahun</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Umur</label>
    <div class="col-sm-5">
    <div class="input-group">
      <input id="umur" type="text" class="form-control" placeholder="Umur" name="umur" value="<?php echo $data->umur; ?>" />
    <span class="input-group-addon">Tahun</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-5">
      <input id="alamat" type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $data->alamat; ?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
	<div class="btn-group">
      <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url('index.php/guru');?>" role="button" cl>Batal</a>
    </div>
	</div>
  </div>
</form>
  </div>
</div>
</div>
</div>