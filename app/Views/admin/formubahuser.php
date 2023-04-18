<section class="content">
    <form action="<?= base_url('Home/ubahUser'); ?>" method="POST">
    <?php foreach ($user as $u) : ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <input type="hidden" name="id" class="form-control" value="<?= $u['id']; ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="<?= $u['email']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" name="username" class="form-control" value="<?= $u['username']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="group">Role</label>
                            <select name="group" class="form-control custom-select">
                                <option selected disabled>Pilih Satu</option>
                                <option value="2">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="active">Status</label>
                            <select name="active" class="form-control custom-select">
                                <option selected disabled>Pilih Satu</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="<?= base_url('home/kelolaUser') ?>" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Ubah Data User" class="btn btn-success float-right">
            </div>
        </div>
        <?php endforeach; ?>
    </form>
</section>
<br>
<!-- /.content -->