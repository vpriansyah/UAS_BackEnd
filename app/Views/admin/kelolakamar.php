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
                                <?php
                                if ($k['status'] == 'Kosong') {
                                    $status = "<span class='badge badge-danger'>Kosong</span>";
                                } else if ($k['status'] == 'Dipesan') {
                                    $status = "<span class='badge badge-warning'>Dipesan</span>";
                                } else if ($k['status'] == 'Terisi') {
                                    $status = "<span class='badge badge-success'>Terisi</span>";
                                }
                                echo $status;
                                ?>
                            </td>
                            <td class="project-actions text-center" style="width: 20%">
                                <a class="btn btn-primary btn-sm" href="<?= base_url('Home/detailKamar') ."/".$k['id_kamar']; ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <?php if (in_groups('admin')) : ?>
                                <a class="btn btn-info btn-sm" href="<?= base_url('Home/formUbahKamar') ."/".$k['id_kamar']; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('Home/hapusKamar') ."/".$k['id_kamar']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus kamar?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <?php if (in_groups('admin')) : ?>
    <a class="btn btn-primary" href="<?= base_url('Home/formTambahKamar'); ?>">
                <i class="fas fa-plus">
                </i>
                Tambah Kamar
            </a>
    <?php endif; ?>

</section>
<!-- /.content -->