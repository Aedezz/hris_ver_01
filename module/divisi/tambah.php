<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><i class="fas fa-plus"></i> Tambah Divisi</h1>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <button class="btn btn-sm btn-outline-danger" onclick="location.href = './?p=divisi';"><i class="fa fa-reply"></i> Kembali</button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Form Isi Data</h3>
            </div>
            <form role="form" action="module/kirim/kirim.php?kirim=tambah&tambah=divisi" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Divisi</label>
                        <input autofocus type="text" class="form-control form-control-sm" id="divisi" name="divisi" placeholder="Divisi" required />
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nama Manager MMP</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="manajer" name="manajer" placeholder="Nama Manajer" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="jabatan" name="jabatan" placeholder="Jabatan" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email Manager MMP</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Email" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nama Manager MPP</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="supervisor" name="supervisor" placeholder="Nama Manager MPP" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Jabatan MPP</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="jabatan_spv" name="jabatan_spv" placeholder="Jabatan Manager MPP" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email Manager MPP</label>
                                <input autofocus type="text" class="form-control form-control-sm" id="email_spv" name="email_spv" placeholder="Email Manager MPP" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
