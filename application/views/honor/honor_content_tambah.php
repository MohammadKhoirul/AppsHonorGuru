<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tambah Data Honor Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_tambah" method="post" action="<?php echo base_url('index.php/honor/tambah_proses'); ?>">
  <div class="form-group">
    <label class="col-sm-3 control-label">NUPTK</label>
    <div class="col-sm-5">
      <select id="nuptk" class="form-control" name="nuptk">
            <option hidden="true" value="" selected="true">Silahkan Pilih</option>
            <?php foreach ($data as $row){ ?>
            <option value="<?php echo $row->nuptk; ?>"><?php echo $row->nuptk; ?></option>
            <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Jam</label>
    <div class="col-sm-5">
    <div class="input-group">
      <input id="jumlah_jam" type="text" class="form-control" placeholder="Jumlah Jam" name="jumlah_jam" />
    <span class="input-group-addon">Per Minggu</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Honor</label>
    <div class="col-sm-5">
    <div class="input-group">
    <span class="input-group-addon">Rp. </span>
      <input id="jumlah_honor" type="text" class="form-control" placeholder="Jumlah Honor" name="jumlah_honor" />
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