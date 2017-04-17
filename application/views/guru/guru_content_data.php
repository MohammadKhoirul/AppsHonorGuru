<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <div class="panel-title" style="float: left;">Data Guru</div>
    <div style="margin-left: 94%;">
    <a title="Tambah Data" class="btn btn-success btn-xs" href="<?php echo base_url('index.php/guru/tambah');?>" role="button"><span class="glyphicon glyphicon-plus"></span></a>
    <a title="Refresh" class="btn btn-info btn-xs" href="<?php echo base_url('index.php/guru');?>" role="button"><span class="glyphicon glyphicon-refresh"></span></a>
    </div>
  </div>
  <div class="panel-body">
<table class="table">
<tr class="info">
	<th>NUPTK</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Lama Mengajar</th>
	<th>Umur</th>
	<th>Alamat</th>
	<th>Pilihan</th>
</tr>
<?php foreach ($data as $row){ ?>
<tr>
	<td><?php echo $row->nuptk; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->jenis_kelamin; ?></td>
	<td><?php echo $row->lama_mengajar; ?> Tahun</td>
	<td><?php echo $row->umur; ?> Tahun</td>
	<td><?php echo $row->alamat; ?></td>
	<td>
    <a title="Edit" onclick="" class="btn btn-warning btn-xs" href="<?php echo base_url('index.php/guru/edit'); echo'/'; echo $row->nuptk;?>" role="button"><span class="glyphicon glyphicon-cog"></span></a>
    <a title="Hapus" onclick="return confirm('Hapus Data ini ?');" class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/guru/hapus'); echo'/'; echo $row->nuptk;?>" role="button"><span class="glyphicon glyphicon-trash"></span></a>
    </td>
</tr>
<?php } ?>
</table>
  </div>
</div>
</div>
</div>