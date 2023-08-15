<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Anggaran</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('Anggaran')?>">Anggaran</a></div>
              <div class="breadcrumb-item">Tambah Anggaran</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Anggaran</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Anggaran/tambahanggaran'); ?>" method="POST">
                            <div class="form-group col-8">
                                <label>Nama OPD</label>
                                <select name="a" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH OPD]</option>
                                  <?php 
                                    foreach ($opd as $row ): 
                                      echo '<option value="'.$row->id_opd.'">'.$row->nama_opd.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>

                                </select>
                            </div>
                            <div class="form-group col-8">
                                <label>Nama Sumber Anggaran</label>
                                <select name="b" id="" class="form-control" required>
                                  <option value="" disabled selected hidden>[PILIH SUMBER ANGGARAN]</option>
                                  <?php 
                                    foreach ($sumber as $row ): 
                                      echo '<option value="'.$row->id_sumber.'">'.$row->nama_sumber.'</option>
                                      ';
                                      endforeach;                                  
                                  ?>
                                </select>
                            </div>

                            <div class="form-group col-8">
                                <label>Nilai Anggaran</label>
                                <input type="text" class="form-control uang" name="c" autocomplete="off">
                            </div>
                            
                            <div class="form-group col-4">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <button class="btn btn-danger" type="reset">Batal</button>
                            </div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>