<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url()?>">SIMPANG <span style="color:red;">BSD</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=base_url()?>">SM</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="<?base_url();?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-table"></i> 
                <span>Data Tabel</span></span>
              </a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('dashboard/user')?>">Pengguna</a></li>
                <li><a class="nav-link" href="<?=base_url('dashboard/opd')?>">Perangkat Daerah</a></li>
                <li><a class="nav-link" href="<?=base_url('dashboard/sumber')?>">Sumber Anggaran</a></li>
                <li><a class="nav-link" href="<?=base_url('dashboard/kas')?>">Kas Daerah</a></li>
                <li><a class="nav-link" href="<?=base_url('anggaran')?>">Pagu Indikatif</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Monitoring</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('anggaran/pengajuan')?>" href="<?=base_url('anggaran/pengajuan')?>">Pengajuan</a></li>
              </ul>
            </li>
            <li class="menu-header">Report & System</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i></i> <span>Master Report</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('penyerapan')?>">Report Pengajuan</a></li>
              </ul>
              <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fa fa-cogs"></i></i> <span>System</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('')?>">System Log</a></li>
              </ul>
            </li>
		
          </ul>

               
		 </aside>
      </div>