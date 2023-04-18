<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Kamar</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 15%" class="text-center">
                            Nomor Kamar
                        </th>
                        <th style="width: 15%" class="text-center">
                            Isi Kamar
                        </th>
                        <th style="width: 20%" class="text-center">
                            Jenis
                        </th>
                        <th>
                            Biaya Sewa
                        </th>
                        <th style="width: 15%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%" class="text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kamar as $k) : ?>
                        <tr>
                            <td style="width: 15%" class="text-center">
                                <?= $k['nama']; ?>
                            </td>
                            <td style="width: 15%" class="text-center">
                                <?= $k['isi']; ?> Orang
                            </td>
                            <td style="width: 20%" class="text-center">
                                <?= $k['jenis']; ?>
                            </td>
                            <td>
                                <?php
                                $konv = "Rp. " . number_format($k['biaya'], 0, ",", ".") . ",- / Hari";
                                echo $konv;
                                ?>
                            </td>
                            <td style="width: 15%" class="project-state text-center">
                                <span class='badge badge-danger'><?= $k['status']; ?></span>
                            </td>
                            <td class="project-actions text-center" style="width: 20%">
                                <a class="btn btn-primary btn-sm" href="<?= base_url('Home/formPesanKamar') ."/".$k['id_kamar']; ?>">
                                    <i class="fas fa-bookmark">
                                    </i>
                                    Pesan
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->