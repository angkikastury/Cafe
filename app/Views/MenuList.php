<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<div class="container">
    <h3>Data Menu</h3>
    <button type="button" class="btn btn-info mb-2"
        data-toggle="modal" data-target="#addMenu">Tambah data</button>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Option</th>

            
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach($data as $row):
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['harga']?></td>
                <td><?=$row['jenis']?></td>
                <td><?=$row['stok']?></td>
                <td><a href="#" class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</a> 
                <a href="<?=base_url('menu/delete/'.$row['id'])?>" onclick="return confirm('yakin akan di hapus')" class="btn btn-danger btn-sm btn delete">Hapus</a></td>
        </tr>
        <form action="<?=base_url('menu/edit/'.$row['id'])?>" method="post">
<div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <from action="<?=base_url('menus')?>" method="post">
        <div class="modal-body">

        <div class="form-group">
          <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="<?=$row['nama']?>">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" value="<?=$row['harga']?>">
        </div>

        <div class="form-group">
            <label>Jenis</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Makanan">
                <label class="from-check-label" for="flexRadioDefault1"> Makanan</label>
        </div> 
        <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Minuman">
                <label class="from-chek-label" for="flexRadioDefault2">Mimuman</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Cemilan">
                <label class="from-chek-label" for="flexRadioDefault3">Cemilan</label>

        <div class="form-group">
            <label>Stok</label>
            <input type="text" class="form-control" name="stok" value="<?=$row['stok']?>">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
 </div>
 </form>

        <?php
        $no++;
        endforeach?>
        <tbody>
    <table>
<div>

            </div>

        </div>

    </div>

</div>

<!-- Modal Add Menu -->
<form action="/menucontroller/simpan" method="post">
<div class="modal fade" id="addMenu" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <from action="<?=base_url('menus')?>" method="post">
        <div class="modal-body">

        </div>
        <div class="form-group">
          <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama ">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" placeholder="Harga">
        </div>

        <div class="form-group">
            <label>Jenis</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Makanan">
                <label class="from-check-label" for="flexRadioDefault1"> Makanan</label>
        </div> 
        <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Minuman">
                <label class="from-chek-label" for="flexRadioDefault2">Minuman</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="Cemilan">
                <label class="from-chek-label" for="flexRadioDefault3">Cemilan</label>
        </div>
            
        <div class="form-group">
            <label>Stok</label>
            <input type="text" class="form-control" name="stok" placeholder="Stok">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
 </div>
 </form>


<!--End Modal Add Menu -->

<?= $this->endSection()?>







