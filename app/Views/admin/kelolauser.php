<!-- Main content -->
<section class="content">

    <?php if (has_permission('manage-users')) : ?>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar User</h3>

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
                        <th class="text-center">
                            Email
                        </th>
                        <th class="text-center">
                            Username
                        </th>
                        <th class="text-center">
                            Role
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
                    <?php foreach ($user as $u) : ?>
                        <!-- <?php //foreach ($group as $g) : ?> -->
                        <tr>
                            <td class="text-center">
                                <?= $u['email']; ?>
                            </td>
                            <td class="text-center">
                                <?= $u['username']; ?>
                            </td>
                            <td class="text-center">
                                <?= $u['name']; ?>
                            </td>
                            <td style="width: 15%" class="project-state text-center">
                                <?php
                                if ($u['active'] == 0) {
                                    $status = "<span class='badge badge-danger'>Tidak Aktif</span>";
                                } else if ($u['active'] == 1) {
                                    $status = "<span class='badge badge-success'>Aktif</span>";
                                }
                                echo $status;
                                ?>
                            </td>
                            <td class="project-actions text-center" style="width: 20%">
                                <a class="btn btn-primary btn-sm" href="<?= base_url('Home/detailUser') . "/" . $u['id']; ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="<?= base_url('Home/formUbahUser') . "/" . $u['id']; ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('Home/hapusUser') . "/" . $u['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus user?')">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- <?php //endforeach; ?> -->
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <?php endif; ?>

</section>
<!-- /.content -->