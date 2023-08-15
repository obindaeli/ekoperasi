<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Anggaran</h1>
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
                            <a href="<?=base_url('anggaran/tambahanggaran')?>" class="btn btn-success">Tambah</a>
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
                                    <th>DAU</th>
                                    <th>PAD</th>
                                    <th>DAK</th>
                                    <th>DBH PUSAT</th>
                                    <th>DIF</th>
                                    <th>SILPA</th>
                                    <th>BKP</th>
                                    <th>DBH PROVINSI</th>
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
                                              <td>".rupiah($row->pad)."</td>
                                              <td>".rupiah($row->dau)."</td>
                                              <td>".rupiah($row->dak)."</td>
                                              <td>".rupiah($row->silpa)."</td>
                                              <td>".rupiah($row->dbhp)."</td>
                                              <td>".rupiah($row->dif)."</td>
                                              <td>".rupiah($row->bkp)."</td>
                                              <td>".rupiah($row->dbhpv)."</td>
                                      
                                              <td class='text-center'>
                                                    <a href='".base_url('anggaran/detailanggaran/')."$row->id_opd' class='badge badge-success'>
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