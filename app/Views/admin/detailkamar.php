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
                                        <?php
                                        if ($k['status'] == 'Kosong') {
                                            $status = "<span class='info-box-number badge badge-danger text-center mb-0'>Kosong</span>";
                                        } else if ($k['status'] == 'Dipesan') {
                                            $status = "<span class='info-box-number badge badge-warning text-center mb-0'>Dipesan</span>";
                                        } else if ($k['status'] == 'Terisi') {
                                            $status = "<span class='info-box-number badge badge-success text-center mb-0'>Terisi</span>";
                                        }
                                        echo $status;
                                        ?>
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
                                <?php
                                if($k['status'] == 'Terisi') {
                                foreach ($user as $u) :
                                ?>
                                <div class="post">
                                    <div class="user-block">
                                        <h5>Penyewa</h5>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        <?= $u['username']; ?>
                                    </p>
                                </div>
                                <?php 
                                endforeach;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-hotel"></i> Hotel Carmila</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore omnis temporibus culpa veritatis quaerat debitis nam quos eos rem porro nobis tenetur vitae praesentium eligendi atque cum eaque, dolor sunt!</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm">General Manager
                                <b class="d-block">Mu'adz</b>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    <?php endforeach; ?>
</section>
<!-- /.content -->