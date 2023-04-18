<section class="content">
    <form action="<?= base_url('Home/ubahKamar'); ?>" method="POST">
    <?php foreach ($kamar as $k) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <input type="hidden" name="id_kamar" class="form-control" value="<?= $k['id_kamar']; ?>">
                        <div class="form-group">
                            <label for="nama">Nomor Kamar</label>
                            <input type="text" name="nama" class="form-control" value="<?= $k['nama']; ?>" onkeypress="return hanyaAngka(event)" required>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Kamar</label>
                            <input type="text" name="isi" class="form-control" value="<?= $k['isi']; ?>" onkeypress="return hanyaAngka(event)" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Kamar</label>
                            <select name="jenis" class="form-control custom-select">
                                <option selected disabled>Pilih Satu</option>
                                <option>Reguler</option>
                                <option>VIP</option>
                                <option>VVIP</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lantai">Lantai</label>
                            <input type="text" name="lantai" class="form-control" value="<?= $k['lantai']; ?>" onkeypress="return hanyaAngka(event)" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Kamar</label>
                            <textarea name="deskripsi" class="form-control" rows="4"><?= $k['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control custom-select">
                                <option selected disabled>Pilih Satu</option>
                                <option>Terisi</option>
                                <option>Kosong</option>
                                <option>Dipesan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya harian</label>
                            <input type="text" name="biaya" class="form-control" value="<?= $k['biaya']; ?>" onkeypress="return hanyaAngka(event)" required>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="<?= base_url('home/kelolaKamar') ?>" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Ubah Data Kamar" class="btn btn-success float-right">
            </div>
        </div>
        <?php endforeach; ?>
    </form>
</section>
<br>
<!-- /.content -->

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>