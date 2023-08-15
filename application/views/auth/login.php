
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIMPANG BSD</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-4 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
             <span>
                <h2>SIMPANG BSD NIAS BARAT</h2>
             </span>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>MASUK</h4></div>

              <div class="card-body">
                <form method="POST" action="<?=base_url('Home/login');?>">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                  <div class="form-group">
                    <label for="username">Nama Pengguna</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1">
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Kata Sandi</label>
                     
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">
                    
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Masuk
                    </button>
                  </div>
                </form>
              </div>
            </div>
           
            <div class="simple-footer">
                <a href="https://pejuangit.com/">simpangbsd</a> &copy; 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/assets/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/popper.js"></script>
  <script src="<?=base_url()?>/assets/modules/tooltip.js"></script>
  <script src="<?=base_url()?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/assets/modules/moment.min.js"></script>
  <script src="<?=base_url()?>/assets/js/stisla.js"></script>
  
  
  <!-- JS Libraies -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Page Specific JS File -->
  <script>
        $(document).ready(function() {
            $("#load").fadeOut();
            $('#username').focus();
        });

        const flashData = $('.flash-data').data('flashdata');
        notifikasi = flashData.split('-');
        if (flashData != '') {
            Swal.fire({
                icon: notifikasi[0],
                title: notifikasi[1],
                text: notifikasi[2],
              
            })
        }
    </script>
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/assets/js/custom.js"></script>
</body>
</html>