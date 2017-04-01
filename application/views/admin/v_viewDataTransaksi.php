<div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Data Transaksi</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                             
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Edit / Hapus</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($transaksiPembelian as $transaksiPembelian) 
                            {
                            ?>
                            <tr>
                                <td><?php echo $transaksiPembelian->tanggal;?></td>
                                <td><?php echo $transaksiPembelian->nama_barang;?></td>
                                <td><?php echo $transaksiPembelian->banyak;?></td>
                                <td><?php echo $transaksiPembelian->harga;?></td>
                                <!-- <td><a href="<?php echo site_url('admin/download/'.$proposal->dokumen);?>"><font color="blue">Download</font></a></td> -->
                              <td>
                                <a class="btn btn-info"  href="<?php echo site_url('admin/c_editTransaksiPembelian/'.$transaksiPembelian->id);?>">Edit</a>
                                    <a class="btn btn-danger" href="<?php echo site_url('admin/c_prosesHapusTransaksiPembelian/'.$transaksiPembelian->id);?>">Hapus</a>
                                </td>

                            </tr>

                             <?php } ?> 
                          
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>