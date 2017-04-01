<div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Form Tambah Data</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('admin/c_prosesTambahTransaksiPenerimaan');?>"  name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <div class="control-group">
                                <label class="control-label">Nama Transaksi</label>
                                <div class="controls">
                                    <input type="text" name="nama" id="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nominal</label>
                                <div class="controls">
                                    <input type="text" name="nominal" id="required">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Detail</label>
                                <div class="controls">
                                    <textarea type="text" name="detail" id="required"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Save" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>