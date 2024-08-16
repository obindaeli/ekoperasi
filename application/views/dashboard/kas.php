<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>KAS DAERAH</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url('dashboard')?>">Dashboard</a></div>
              <div class="breadcrumb-item">Kas Daerah</div>
            </div>
          </div>
				<div class="row">
					<div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span>
                            <a href="<?=base_url('Dashboard/addkas')?>" class="btn btn-success">Tambah</a>
                        </span>
                    </div>
                    <div class="card-body">
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>                                 
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Sumber Dana</th>
                                    <th>Pagu</th>
                                    <th>RKUD</th>
                                    <th>Sisa</th>
                                    <th>Realisasi</th>
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
                                              <td>$row->nama_sumber</td>
                                              <td>".rupiah($row->pagu)."</td>
                                              <td>".rupiah($row->rkud)."
                                                      <a 
                                                      href='javascript:;'
                                                      data-id=".$row->id_kas."
                                                      data-rkud=".$row->rkud."
                                                      data-toggle='modal' data-target='#edit-data'>
                                                      <button  data-toggle='modal' data-target='#ubah-data' class='btn'> <i class='fas fa-edit'></i></button>
                                                  </a>
                                              </td>
                                              <td>".rupiah($row->sisa)."</td>
                                              <td>".rupiah($row->realisasi)."</td>
                                              <td class='text-center'>
                                                    <a href='".base_url('dashboard/editkas/')."$row->id_kas' class='badge badge-success'>
                                                    <i class='fas fa-edit'></i>
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
        <!-- Modal Ubah -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <form class="form-horizontal" action="<?= base_url('dashboard/updaterkud'); ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">
                            <div class="form-group col-12">
                              <input type="hidden" id="id" class="form-control" name="a" placeholder="ID">
                                <label>RKUD</label>
                                <input type="number"  id="rkud" class="form-control nilai" name="b" autocomplete="off">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- END Modal Ubah -->
      </div>