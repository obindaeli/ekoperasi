<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pengguna</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Pengguna</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <a href="<?=base_url('dashboard/adduser')?>" class="btn btn-success">Tambah Pengguna</a>
                        </span>
                    </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Pengguna</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Terakhir Login</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php
                                      $no=1; 
                                      foreach($tampil as $data) :?>
                                        <tr>
                                            <td class="text-center"><?php echo $no++; ?> </td>
                                            <td><?php echo $data->username; ?> </td>
                                            <td class="text-center"><?php echo format_indo($data->created_date); ?> </td>
                                            <td class="text-center"><?php echo $data->last_login; ?> </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('Dashboard/edituser/'); ?><?= $data->id_user; ?>" class="badge badge-info">
                                                        <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('Dashboard/hapususer/'); ?><?= $data->id_user; ?>" class="badge badge-danger tombol-hapus">
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
            </div>
          </div>
        </section>
      </div>