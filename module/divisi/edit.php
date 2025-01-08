<?php
$sql = mysqli_query($koneksi, "SELECT * FROM divisi WHERE kode='$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-edit"></i> Koreksi Divisi</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <button class="btn btn-sm btn-outline-danger" onclick="location.href = './?p=divisi';">
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
            <form role='form' action='module/kirim/kirim.php?kirim=edit&edit=divisi' method="post">
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" name="kode" value="<?= $data['kode'] ?>" />
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Divisi</label>
                                <input type="text" class="form-control form-control-sm" name="divisi" placeholder="Divisi" required value="<?= $data['divisi'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Nama Manager MMP</label>
                                <input type="text" class="form-control form-control-sm" name="manajer" placeholder="Nama Manajer" required value="<?= $data['manajer'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control form-control-sm" name="jabatan" placeholder="Jabatan" required value="<?= $data['jabatan'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Email Manager MMP</label>
                                <input type="text" class="form-control form-control-sm" name="email" placeholder="Email" required value="<?= $data['email'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Nama Manager MPP</label>
                                <input type="text" class="form-control form-control-sm" name="supervisor" placeholder="Nama Manager MPP" required value="<?= $data['supervisor'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control form-control-sm" name="jabatan_spv" placeholder="Jabatan Manager MPP" required value="<?= $data['jabatan_spv'] ?>" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Email Manager MPP</label>
                                <input type="text" class="form-control form-control-sm" name="email_spv" placeholder="Email Manager MPP" required value="<?= $data['email_spv'] ?>" />
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
