<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<div class="container">
    <h3><strong>Laporan</strong></h3>

    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>User_id</th>
            <th>tanggal</th>
            <th>total_harga</th>
            <th>no_meja</th>
            <th>nama_pemesan</th>
            
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($data as $row):
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['user_id']?></td>
                <td><?=$row['tanggal']?></td>
                <td><?=$row['total_harga']?></td>
                <td><?=$row['no_meja']?></td>
                <td><?=$row['nama_pemesan']?></td>
               
        </tr>
        <?php
        $no++;
        endforeach?>
        <tbody>
    <table>
<div>
<?= $this->endSection()?>





