<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengajuan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Pengajuan</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                       
                    </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama OPD</th>
                                    <th></th>
                                    <th></th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                      $no=1; 
                                      foreach($tampil as $data) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            
                                            <td><?php echo $data->nama_opd; ?> </td>
                                           
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('Penyerapan/detail/'); ?><?= $data->id_opd; ?>" class="badge badge-success">
                                                <i class="fas fa-eye"></i>
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
            </div>
          </div>
        </section>
      </div>