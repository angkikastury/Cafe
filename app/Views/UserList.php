<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<div class="container">
    <h3><strong>Data User</strong></h3>
    <button type="button" class="btn btn-info mb-2"data-toggle="modal" data-target="#addUser">Tambah data</button>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
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
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['role']?></td>
                <td><a href="#" class="btn btn-warning btn-sm btn edit" data-toggle="modal" data-target="#editUser-<?=$row['id']?>">Edit</a> 
                <a href="<?=base_url('user/delete/'.$row['id'])?>" onclick="return confirm('yakin akan di hapus')" class="btn btn-danger btn-sm btn delete">Hapus</a></td>
        </tr>
        <form action="<?=base_url('user/edit/'.$row['id'])?>" method="post">
<div class="modal fade" id="editUser-<?=$row['id']?>" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add  New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <from action="<?=base_url('users')?>" method="post">
        <div class="modal-body">

        <div class="form-group">
          <label>Nama User</label>
            <input type="text" class="form-control"  name="nama" value="<?=$row['nama']?>">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="<?=$row['nama']?>">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role" placeholder="Role">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="kasir"  <?=$row['role']=="Kasir"?"checked":""?>>>
                <label class="from-chek-label" for="flexRadioDefault1">Kasir</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Manager"  <?=$row['role']=="manager"?"checked":""?>>>
                <label class="from-chek-label" for="flexRadioDefault1">Manager</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Admin"  <?=$row['role']=="admin"?"checked":""?>>>
                <label class="from-chek-label" for="flexRadioDefault1">Admin</label>
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

<!-- Modal Add User -->
<form action="/Usercontroller/simpan" method="post">
<div class="modal fade" id="addUser" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add  New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        <from action="<?=base_url('user')?>" method="post">
        <div class="modal-body">

        <div class="form-group">
          <label>Nama User</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama User">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label>Role</label>
            <input type="text" class="form-control" name="role" placeholder="Role">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Kasir">
                <label class="from-check-label" for="flexRadioDefault1"> Kasir</label>
        </div> 
        <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Manager">
                <label class="from-chek-label" for="flexRadioDefault1">Manager</label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="Admin">
                <label class="from-chek-label" for="flexRadioDefault1">Admin</label>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
 </div>
 </form>


<!--End Modal Add User -->

<?= $this->endSection()?>
                    