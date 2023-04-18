<!-- Main content -->
<section class="content">

    <?php
    if (has_permission('manage-profile')) :
        foreach ($user as $u) :
    ?>
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail User</h3>

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

                            <?php if (in_groups('admin')) : ?>
                                <div class="row">
                                    <div class="col-12 col-sm-3">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Email</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $u['email']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Username</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $u['username']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Role</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $u['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted" style="padding-bottom:6px;">Status</span>
                                                <?php
                                                if ($u['active'] == 0) {
                                                    $status = "<span class='info-box-number badge badge-danger text-center mb-0'>Tidak Aktif</span>";
                                                } else if ($u['active'] == 1) {
                                                    $status = "<span class='info-box-number badge badge-success text-center mb-0'>Aktif</span>";
                                                }
                                                echo $status;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (in_groups('user')) : ?>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Email</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $u['email']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Username</span>
                                                <span class="info-box-number text-center text-muted mb-0"><?= $u['username']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted" style="padding-bottom:6px;">Status</span>
                                                <?php
                                                if ($u['active'] == 0) {
                                                    $status = "<span class='info-box-number badge badge-danger text-center mb-0'>Tidak Aktif</span>";
                                                } else if ($u['active'] == 1) {
                                                    $status = "<span class='info-box-number badge badge-success text-center mb-0'>Aktif</span>";
                                                }
                                                echo $status;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="row">
                                <div class="col-12">
                                    <div class="post">
                                        <div class="user-block">
                                            <h5>Dibuat Pada</h5>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            <?= $u['created_at']; ?>
                                        </p>
                                    </div>

                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <h5>Terakhir diupdate</h5>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            <?= $u['updated_at']; ?>
                                        </p>
                                    </div>

                                    <!-- <div class="post">
                                    <div class="user-block">
                                        <h5>Activate Hash</h5>
                                    </div> -->
                                    <!-- /.user-block -->
                                    <!-- <p>
                                        <?= $u['activate_hash']; ?>
                                    </p>
                                </div> -->
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
                            <?php if (in_groups('admin')) : ?>
                            <a class="btn btn-info btn-sm" href="<?= base_url('Home/formUbahUser') . "/" . $u['id']; ?>">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <?php endif; ?>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
    <?php endforeach;
    endif; ?>

</section>
<!-- /.content -->