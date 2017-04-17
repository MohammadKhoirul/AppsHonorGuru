<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Edit Data Penghonoran Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_edit" method="post" action="<?php echo base_url('index.php/penghonoran/edit_proses'); ?>">
  <div class="form-group" hidden="true">
    <label class="col-sm-3 control-label">ID Honor</label>
    <div class="col-sm-5">
      <input id="id_honor" type="text" class="form-control" placeholder="ID Honor" name="id_honor" value="<?php echo $data->id_honor; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">ID Honor</label>
    <div class="col-sm-5">
      <input disabled="true" id="id_honor" type="text" class="form-control" placeholder="ID Honor" name="dis_id_honor" value="<?php echo $data->id_honor; ?>" />
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
      <input disabled="true" id="jumlah_jam" type="text" class="form-control" placeholder="Jumlah Jam" name="jumlah_jam" value="<?php echo $data->jumlah_jam; ?>" />
    <span class="input-group-addon"> Jam</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Jumlah Honor</label>
    <div class="col-sm-5">
    <div class="input-group">
    <span class="input-group-addon">Rp. </span>
      <input disabled="true" id="jumlah_honor" type="text" class="form-control" placeholder="Jumlah Honor" name="jumlah_honor" value="<?php echo $data->jumlah_honor; ?>" />
    </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Bulan</label>
    <div class="col-sm-5">
      <select id="bulan" class="form-control" name="bulan">
            <option hidden="true" value="<?php echo $data->bulan;?>" selected="true"><?php echo $data->bulan;?></option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Agustus">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">Tahun</label>
    <div class="col-sm-5">
      <input id="bulan" type="text" class="form-control" placeholder="Tahun" name="tahun" value="<?php echo $data->tahun; ?>" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
	<div class="btn-group">
      <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url('index.php/penghonoran');?>" role="button" cl>Batal</a>
    </div>
	</div>
  </div>
</form>
  </div>
</div>
</div>
</div>