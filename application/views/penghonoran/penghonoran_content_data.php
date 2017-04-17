<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <div class="panel-title" style="float: left;">Data Penghonoran Guru</div>
    <div style="margin-left: 94%;">
    <a title="Tambah Data" class="btn btn-success btn-xs" href="<?php echo base_url('index.php/penghonoran/tambah');?>" role="button"><span class="glyphicon glyphicon-plus"></span></a>
    <a title="Refresh" class="btn btn-info btn-xs" href="<?php echo base_url('index.php/penghonoran');?>" role="button"><span class="glyphicon glyphicon-refresh"></span></a>
    </div>
  </div>
  <div class="panel-body">
<table class="table">
<tr class="info">
    <th>ID Honor</th>
    <th>Bulan</th>
    <th>Tahun</th>
	<th>NUPTK</th>
    <th>Nama</th>
    <th>Jumlah Jam</th>
	<th>Jumlah Honor</th>
    <th>Pilihan</th>
</tr>
<?php foreach ($data as $row){ ?>
<tr>
    <td><?php echo $row->id_honor; ?></td>
    <td><?php echo $row->bulan; ?></td>
    <td><?php echo $row->tahun; ?></td>
    <td><?php echo $row->nuptk; ?></td>
	<td><?php echo $row->nama ; ?></td>
    <td><?php echo $row->jumlah_jam ; ?> Jam</td>
    <td><?php echo 'Rp. '.number_format($row->jumlah_honor,2,',','.'); ?></td>
	<td>
    <a title="Edit" onclick="" class="btn btn-warning btn-xs" href="<?php echo base_url('index.php/penghonoran/edit'); echo'/'; echo $row->id_honor;?>" role="button"><span class="glyphicon glyphicon-cog"></span></a>
    <a title="Hapus" onclick="return confirm('Hapus Data ini ?');" class="btn btn-danger btn-xs" href="<?php echo base_url('index.php/penghonoran/hapus'); echo'/'; echo $row->id_honor;?>" role="button"><span class="glyphicon glyphicon-trash"></span></a>
    </td>
</tr>
<?php } ?>
</table>
  </div>
</div>
</div>
</div>