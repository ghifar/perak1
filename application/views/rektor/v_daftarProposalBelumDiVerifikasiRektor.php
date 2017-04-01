<div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>Centang status Laporan yang ingin diterima</h5>
                </div>
                <div class="widget-content ">
                    <table class="table table-bordered table-striped with-check">
                        <thead>
                        <tr>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Document</th>
                            <th>Verifikasi/Tolak</th>
                            <th>Verifikasi/Tolak</th>
                            <!-- hapusatas -->
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($proposal as $proposal) 
                            {
                            ?>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td><?php echo $proposal->nama;?></td>
                                <td><?php echo $proposal->tanggal;?></td>
                                <td><?php echo $proposal->keterangan;?></td>
                                <td><a href="<?php echo site_url('rektor/download/'.$proposal->dokumen);?>">Download Lampiran</a></td>

                                <td><a class="btn btn-success" href="<?php echo site_url('rektor/c_proposalVerifikasi/'.$proposal->id);?>">Verifikasi</a>
                                    <a class="btn btn-danger" href="<?php echo site_url('rektor/c_proposalTolak/'.$proposal->id);?>">Tolak</a>
                                </td>                          
                            </tr>

                        <?php } ?>    


                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Verifikasi</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>

                </div>
            </div>

        </div>
        <!--End-Action boxes-->


    </div>