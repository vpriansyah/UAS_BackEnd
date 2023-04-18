<!-- Main content -->
<section class="content">
    <?php
    foreach ($kamar as $k) :
    ?>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Kamar</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Nomor Kamar</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?= $k['nama']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Isi Kamar</span>
                                        <span class="info-box-number text-center text-muted mb-0"><?= $k['isi']; ?> Orang</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted">Letak Kamar</span>
                                        <span class="info-box-number text-center text-muted mb-0">Lantai <?= $k['lantai']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <span class="info-box-text text-center text-muted" style="padding-bottom:6px;">Status Kamar</span>
                                        <span class='info-box-number badge badge-success text-center mb-0'><?= $k['status']; ?></span>
                                        <!-- <span class="info-box-number text-center text-muted mb-0">Lantai <?= $k['lantai']; ?></span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="post">
                                    <div class="user-block">
                                        <h5>Jenis Kamar</h5>
                                    </div>
                                    <!-- /.user-block -->
                                    <h6>
                                        <?= $k['jenis']; ?>
                                    </h6>
                                    <p>
                                        <?php
                                        if ($k['jenis'] == 'Reguler') {
                                            $penjelasan = 'Kamar dengan jenis reguler adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus nihil sed cumque illo deleniti repellendus harum nesciunt nam sit alias facere, accusantium velit repellat iusto rerum laboriosam sint ad! Soluta!';
                                        } else if ($k['jenis'] == 'VIP') {
                                            $penjelasan = 'Kamar dengan jenis VIP adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus nihil sed cumque illo deleniti repellendus harum nesciunt nam sit alias facere, accusantium velit repellat iusto rerum laboriosam sint ad! Soluta!';
                                        } else if ($k['jenis'] == 'VVIP') {
                                            $penjelasan = 'Kamar dengan jenis VVIP adalah Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus nihil sed cumque illo deleniti repellendus harum nesciunt nam sit alias facere, accusantium velit repellat iusto rerum laboriosam sint ad! Soluta!';
                                        }
                                        echo $penjelasan;
                                        ?>
                                    </p>
                                </div>

                                <div class="post clearfix">
                                    <div class="user-block">
                                        <h5>Biaya Sewa Kamar</h5>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        <?php
                                        $konv = "Rp. " . number_format($k['biaya'], 0, ",", ".") . ",- / Hari";
                                        echo $konv;
                                        ?>
                                    </p>
                                </div>

                                <div class="post">
                                    <div class="user-block">
                                        <h5>Deskripsi</h5>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        <?= $k['deskripsi']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-hotel"></i> Hotel Carmila</h3>
                        <form action="<?= base_url('Home/sewaKamar'); ?>" method="POST">
                            <input type="hidden" name="id_kamar" class="form-control" value="<?= $k['id_kamar']; ?>">
                            <div class="form-group">
                                <label for="biaya">Lama Sewa</label>
                                <input type="text" readonly name="lama" class="form-control" value="<?= $lama ?>">
                            </div>
                            <div class="form-group">
                                <label for="biaya">Total Biaya</label>
                                <?php
                                    $total = $lama*$k['biaya'];
                                    $konvtotal = "Rp. " . number_format($total, 0, ",", ".") . ",-";
                                ?>
                                <input type="text" readonly name="biaya" class="form-control" value="<?= $konvtotal ?>">
                                <input type="hidden" readonly name="totalbiaya" class="form-control" value="<?= $total ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url('home/pesanKamar') ?>" class="btn btn-secondary">Batal</a>
                                    <input type="submit" value="Konfirmasi" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    <?php endforeach; ?>
</section>
<!-- /.content -->

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>