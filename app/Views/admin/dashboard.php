<section class="content">
        <div class="container-fluid">

          <?php if (in_groups('admin')) : ?>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $qtyUsers ?></h3>

                  <p>User</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-users"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $qtyAdmin ?></h3>

                  <p>Admin</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-users-cog"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $qtyKamar ?></h3>

                  <p>Kamar</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-door-closed"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?= $qtyKamarKosong ?></h3>

                  <p>Kamar Kosong</p>
                </div>
                <div class="icon">
                  <i class="nav-icon fas fa-door-open"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <?php endif; ?>

          <!-- Main row -->
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo base_url(); ?>/dist/img/photo2.png" class="img-fluid rounded-start">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Hotel Carmila</h5>
                  <p class="card-text"></p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dicta dolore asperiores qui eos doloribus earum voluptatem sequi repellendus explicabo sapiente maiores maxime doloremque, assumenda accusamus corrupti fugit. Quisquam, sequi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi harum, odit accusantium deleniti similique repellat excepturi. Velit possimus ratione tempore, harum perferendis illo voluptatem culpa molestias, consequuntur omnis, ex sit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, iure unde ad repellat maiores, quis iusto labore aliquid sequi ratione doloribus doloremque mollitia sapiente quae, culpa repellendus natus animi assumenda.</p>
                  <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>