 <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Form Tambah Data</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('Laporan-pdf/index.php'); ?>" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <div class="control-group">
                                <label class="control-label">Pilih Jenis Laporan</label>
                                <div class="controls">
                                    <select class="span3" name="transaksi">
                                        <option value="transaksi_pembelian">Transaksi Pembelian</option>
                                        <option value="transaksi_penerimaan">Transaksi Penerimaan</option>
                                        <option>Jurnal</option>
                                        <option>Akhir Tahun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pilih Bulan Data Masuk</label>
                                <div class="controls">
                                    <select class="span3" name="bulan">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" value="Generate" class="btn btn-success">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>