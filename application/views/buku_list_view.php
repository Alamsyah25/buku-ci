<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SQLite List Buku</title>
</head>

<body>

<h2>Daftar Buku</h2>

<a href="<?php echo site_url('buku/tambah')?>">Tambah</a><br/><br/>
<form action="<?= site_url('buku/index') ?>" method="post">

    <div>
        <label for="judul">Judul: </label>
        <input type="text" name="txt_judul" id="txt_judul"/>
        <input type="submit" name="btnSearch" id="btnSearch" value="Search" />
    </div>

</form>
<table border="1" cellpadding="1" cellspacing="2" >
 <thead>
 <tr>
  <th>ID Buku</th>
  <th>Judul</th>
  <th>ISBN
  <th>Penulis</th>
  <th>Penerbit</th>
  <th>Tahun Terbit</th>
  <th>Aksi</th>
 </tr>
 </thead>
 
 <tbody>
  <?php

  foreach($model->rows as $row){
  	
	  ?>
  	<tr>
      <td><?php echo $row->idbuku;?></td>
      <td><?php echo $row->judul;?></td>
	  <td><?= $row->isbn ?></td>
      <td><?php echo $row->penulis;?></td>
      <td><?= $row->penerbit ?></td>
	  <td><?= $row->tahun_terbit ?></td>
      <td>
       <a href="<?php echo site_url('buku/edit/'.$row->idbuku);?>">Edit</a> | 
       <a href="<?php echo site_url('buku/hapus/'.$row->idbuku);?>" onClick="return confirm('Yakin akan dihapus?')">Hapus</a>
      </td>
 	</tr>
  <?php
  }
  ?>
 </tbody>
</table>

</body>
</html>
