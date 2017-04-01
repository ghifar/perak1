<div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="widget-box">
            
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Form Pengajuan Proposal</h5>
                </div>
               
                <div class="widget-content nopadding">
                 <?= form_open_multipart('kaprodi/c_prosesAjukanProposal', ['class'=>'form-horizontal']) ?>
                    <form action="<?php echo site_url('kaprodi/c_prosesAjukanProposal');?>" method="post" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Nama :</label>
                            <div class="controls">
                                <input type="text" placeholder="Nama" name="nama" class="span6 m-wrap" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Keterangan :</label>
                            <div class="controls">
                                <input type="text" placeholder="Type Dokumen" name="keterangan" class="span6 m-wrap" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Upload Dokumen :</label>
                            <div class="controls">
                                <input type="file" class="form-control" name="userfile" required />
                                
                            </div>
                        </div>
                        <!-- jika error -->
                        <span class="text-center"><?php if (isset($error)) { echo $error; } ?></span>
                        <!-- jika sukses tampilkan message sukses -->
                        <span class="text-center"><?php if (isset($success_msg)) { echo $success_msg; } ?></span>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                 <?php echo form_close(); ?>

                

                </div>
            </div>
        </div>
        <!--End-Action boxes-->


    </div>

    