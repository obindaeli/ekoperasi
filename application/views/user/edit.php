<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard/user')?>">Pengguna</a></div>
              <div class="breadcrumb-item">Edit Pengguna</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Pengguna</h4>
                       
                    </div>
                    <div class="card-body">
                        <?php  foreach ($edit as $data) {?>
                            <form action="<?= base_url('dashboard/update'); ?>" method="POST">
                                <div class="form-group col-8">
                                    <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data->id_user ?>">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $data->username ?>">
                                </div>
                                <div class="form-group col-8">
                                    <label>Kata Sandi</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $data->confirm ?>">
                                </div>
                                <div class="form-group col-4">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-danger" type="reset">Batal</button>
                                </div>
                            </form>
                        <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>