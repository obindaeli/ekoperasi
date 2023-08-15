<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>OPD</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard/opd')?>">OPD</a></div>
              <div class="breadcrumb-item">Edit OPD</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit OPD</h4>
                       
                    </div>
                    <div class="card-body">
                        <?php  foreach ($edit as $data) {?>
                            <form action="<?= base_url('dashboard/updateopd'); ?>" method="POST">
                                <div class="form-group col-8">
                                    <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?php echo $data->id_opd ?>">
                                    <label>Nama OPD</label>
                                    <input type="text" class="form-control" name="opd" autocomplete="off" value="<?php echo $data->nama_opd ?>">
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