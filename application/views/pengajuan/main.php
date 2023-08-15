<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengajuan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Anggaran</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <a href="<?=base_url('anggaran/pengajuan')?>" class="btn btn-success">Tambah</a>
                        </span>
                    </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama OPD</th>
                                    <th>Sumber Dana</th>
                                    <th>Nilai Pengajuan</th>
                                    <th>Status Pengajuan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no=0;
                                  foreach ($tampil as $row):
                                    $no++;
                                    echo "
                                          <tr>
                                              <td>$no</td>
                                              <td>$row->nama_opd</td>
                                              <td>$row->nama_sumber</td>
                                              <td>".rupiah($row->nilaipengajuan)."</td>
                                              <td>$row->status</td>
                                              <td class='text-center'>
                                                    <a href='".base_url('anggaran/editpengajuan/')."$row->id_pengajuan' class='badge badge-success'>
                                                    <i class='fas fa-eye'></i>
                                              </a>
                                              </td>
                                          </tr>
                                        ";
                                      
                                      endforeach;
                                   
                                  ?>
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