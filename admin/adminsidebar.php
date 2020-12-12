  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../admin/dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           </a>
        </li>

<li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Analisa Permasalahan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin/survey-masalah.php"><i class="fa fa-edit"></i> Survey Permasalahan</span></a></li>
            <li><a href="../admin/data-masalah.php"><i class="fa fa-list"></i> Permasalahan</span></a></li>
            <li><a href="../admin/voting-pasar.php"><i class="fa fa-edit"></i>Voting Rencana Produk</a></li>
            <li><a href="../admin/analisa-pasar.php"><i class="fa fa-list"></i> Hasil Voting Rencana Produk</span></a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Create Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="../admin/create-analisa.php"><i class="fa fa-user-circle"></i> Analis</a></li>
            <li><a href="../admin/create-design.php"><i class="fa fa-user-circle"></i> Design</a></li>
            <li><a href="../admin/create-technical.php"><i class="fa fa-user-circle"></i> Technical</a></li>
            <li><a href="../admin/create-technical.php"><i class="fa fa-user-circle"></i> Tester</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-folder-o"></i>
            <span>Data Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin/data-proses.php"><i class="fa fa-calendar-minus-o"></i> Dalam Proses</a></li>
            <li><a href="../admin/data-selesai.php"><i class="fa fa-calendar-check-o"></i> Selesai</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cloud-upload"></i>
            <span>Pengembangan Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../admin/create-analisa.php"><i class="fa fa-edit"></i> Survey</a></li>
            <li><a href="../admin/create-design.php"><i class="fa fa-list"></i> Hasil Survey</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>