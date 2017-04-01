<div class="container-fluid">
        <hr>
        <div class="row-fluid">
         <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>View Proposal</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Tanggal Upload</th>
                            <th>Keterangan</th>
                            <th>Dokumen</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($proposal as $proposal) 
                            {
                            ?>
                            <tr>
                                <td><?php echo $proposal->nama;?></td>
                                <td><?php echo $proposal->tanggal;?></td>
                                <td><?php echo $proposal->keterangan;?></td>
                                <td><a href="<?php echo site_url('admin/download/'.$proposal->dokumen);?>"><font color="blue">Download</font></a></td>


                                <td><?php echo $proposal->status;?></td>                          
                            </tr>

                        <?php } ?>    


                        </tbody>
                    </table>
                </div>
                </div>
            </div>

        </div>
        <!--End-Action boxes-->


    </div>