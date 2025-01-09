<?php
$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$_GET[id_barang]'");
$data = mysqli_fetch_array($sql);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-edit"></i> Koreksi Departemen</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <button class="btn btn-sm btn-outline-danger" onclick="location.href = './?p=barang';">
                        <i class="fa fa-reply"></i> Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Form Koreksi Data</h3>
            </div>
            <form role='form' action='module/kirim/kirim.php?kirim=edit&edit=barang' method="post">
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" name="id_barang" value="<?= $data['id_barang'] ?>" />
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control form-control-sm" name="nama_barang" placeholder="Nama Barang" required value="<?= $data['nama_barang'] ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> Update</button>
                </div>
            </form>
        </div>
    </div>
</div>