<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>

  <ul>
    <li class="breadcrumb" style="padding-top: 20px;padding-bottom: 20px"> <i class="icon icon-user"></i>  <span class="text"><b>ADMIN UNIVERSITAS</b></span>

    </li>
    <li class="active"><a href="<?php echo site_url('admin/home');?>"><i class="icon icon-home"></i> <span>Home</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-pencil" ></i> <span>Laporan</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo site_url('admin/c_buatLaporan');?>">Buat Laporan</a></li>
        <li><a href="<?php echo site_url('admin/c_viewLaporan');?>">View Laporan</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Proposal</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?php echo site_url('admin/c_daftarProposal');?>">View Proposal</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-shopping-cart"></i> <span>Data Transaksi</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="<?php echo site_url('admin/c_tambahTransaksiPembelian');?>">Tambah Transaksi Pembelian</a></li>
        <li><a href="<?php echo site_url('admin/c_tambahTransaksiPenerimaan');?>">Tambah Transaksi Penerimaan</a></li>
        <li><a href="<?php echo site_url('admin/c_viewDataTransaksi');?>">View Data Transaksi</a></li>
      </ul>
    </li>
 
  </ul>
</div>
<!--sidebar-menu-->