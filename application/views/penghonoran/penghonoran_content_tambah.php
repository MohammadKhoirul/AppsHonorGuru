<?php 
      $this->db->select_max('id_honor','max');
      $query=$this->db->get('penghonoran');
      $id_max=$query->row();
      $id_select= substr($id_max->max,3,5);
      $id_plus = $id_select + 1;
?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tambah Data Penghonoran Guru</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" role="form" name="guru_tambah" method="post" action="<?php echo base_url('index.php/penghonoran/tambah_proses'); ?>">
   <div class="form-group" hidden="true">
    <label class="col-sm-3 control-label">ID Honor</label>
    <div class="col-sm-5">
      <input id="id_honor" type="text" class="form-control" placeholder="ID Honor" name="id_honor" value="<?php echo "HNR$id_plus";?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-3 control-label">ID Honor</label>
    <div class="col-sm-5">
      <input disabled="true" id="id_honor" type="text" class="form-control" placeholder="ID Honor" name="dis_id_honor" value="<?php echo "HNR$id_plus";?>" />
    </div>
  </div>
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