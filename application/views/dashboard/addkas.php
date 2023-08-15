<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kas Daerah</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard/kas')?>">Dashboard</a></div>
              <div class="breadcrumb-item active">Kas Daerah</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Kas Daerah</h4>
                       
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('dashboard/tambahkas'); ?>" method="POST">
                        <div class="form-group col-8">
                                <label>Nama Sumber Dana</label>
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
                                <label>Nilai Pagu</label>
                                <input type="text" class="form-control nilai" name="password">
                            </div>
                            <div class="form-group col-8">
                                <label>RKUD</label>
                                <input type="text" class="form-control nilai" name="username" autocomplete="off">
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