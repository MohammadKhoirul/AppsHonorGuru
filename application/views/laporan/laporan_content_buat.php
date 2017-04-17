<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Buat Laporan Penghonoran Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_tambah" method="post" action="<?php echo base_url('index.php/laporan/laporan_proses'); ?>">
  <div class="form-group">
    <label class="col-sm-3 control-label">Bulan</label>
    <div class="col-sm-5">
      <select id="bulan" class="form-control" name="bulan">
            <option hidden="true" value="" selected="true">Silahkan Pilih</option>
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
      <input id="tahun" type="text" class="form-control" placeholder="Tahun" name="tahun" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
      <button name="buat_laporan" type="submit" class="btn btn-primary">Buat Laporan</button>
    </div>
  </div>
</form>
  </div>
</div>
</div>
</div>