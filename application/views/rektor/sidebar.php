
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>

    <ul>
        <li class="breadcrumb" style="padding-top: 20px;padding-bottom: 20px"> <i class="icon icon-user"></i>  <span class="text"><b>REKTOR</b></span>

        </li>
        <li><a href="<?php echo site_url('rektor/home');?>" ><i class="icon icon-home"></i> <span>Home</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-pencil" ></i> <span>Laporan</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="<?php echo site_url('rektor/c_ubahStatusLaporan');?>">Ubah Status Laporan</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Proposal</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="<?php echo site_url('rektor/c_daftarProposalBelumDiVerifikasiRektor');?>">Ubah Status Proposal</a></li>
            </ul>
        </li>

    </ul>
</div>