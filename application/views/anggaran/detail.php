<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>
              <?php 
                  foreach($opd as $data) :
                  echo $data->nama_opd;
                  endforeach;
              ?>
            </h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('penyerapan')?>">Anggaran</a></div>
              <div class="breadcrumb-item">Detail</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Anggaran</h4>
                    </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Sumber Anggaran</th>
                                    <th>Nilai Pagu</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($detail as $data) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            <td><?php echo $data->nama_sumber; ?> </td>
                                            <td class="text-center"><?php echo rupiah($data->total); ?> </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('Dashboard/editpagu/'); ?><?= $data->id_pagu; ?>" class="badge badge-info">
                                                        <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('Dashboard/hapuspagu/'); ?><?= $data->id_pagu; ?>" class="badge badge-danger tombol-hapus">
                                                      <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?> 
                                </tbody>
                            </table>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>