<div class="row">
<div class="col-lg-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <div class="panel-title" style="float: left;">Laporan Penghonoran Guru</div>
	<div style="margin-left: 97%;">
	<a title="Print" class="btn btn-warning btn-xs" href="#" onclick="window.print();return false;" role="button"><span class="glyphicon glyphicon-print"></span></a>  
    </div>
  </div>
  <div class="panel-body"> 
<table class="table">
<tr>
    <th colspan="5">Periode : 
    <?php
    foreach ($data as $row);
    $this->db->distinct('bulan','bulan');
    $this->db->where('bulan',$row->bulan);
    $this->db->where('tahun',$row->tahun);
    $query=$this->db->get('penghonoran');
    $bulan=$query->row();
    echo $bulan->bulan;
    ?>
    <?php
    foreach ($data as $row);
    $this->db->distinct('tahun','tahun');
    $this->db->where('bulan',$row->bulan);
    $this->db->where('tahun',$row->tahun);
    $query=$this->db->get('penghonoran');
    $tahun=$query->row();
    echo $tahun->tahun;
    ?>
    </th>
</tr>
<tr class="info">
    <th>ID Honor</th>
	<th>NUPTK</th>
    <th>Nama</th>
    <th>Jumlah Jam</th>
	<th>Jumlah Honor</th>
</tr>
<?php foreach ($data as $row){ ?>
<tr>
    <td><?php echo $row->id_honor; ?></td>
    <td><?php echo $row->nuptk; ?></td>
	<td><?php echo $row->nama ; ?></td>
    <td><?php echo $row->jumlah_jam ; ?> Jam</td>
    <td><?php echo 'Rp. '.number_format($row->jumlah_honor,2,',','.'); ?></td>
</tr>
<?php } ?>
<tr>
    <th colspan="4" class="text-center">Total Jumlah</th>
    <td>
    <?php	
    foreach ($data as $row);
    $this->db->select_sum('jumlah_honor','total_jumlah');
    $this->db->where('bulan',$row->bulan);
    $this->db->where('tahun',$row->tahun);
    $query=$this->db->get('penghonoran');
    $total=$query->row();
    echo 'Rp. '.number_format($total->total_jumlah,2,',','.');
    ?></td>
</tr>
</table>
  </div>
</div>
</div>
</div>