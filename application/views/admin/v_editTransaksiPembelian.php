<div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Form Tambah Data</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="<?php echo site_url('admin/c_prosesEditTransaksiPembelian');?>" >
                            <div class="control-group">
                                <label class="control-label">Nama Transaksi</label>
                                <div class="controls">
                                    <input type="text" name="nama" id="required" value="<?php echo $transaksiPembelian->nama;?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Detail</label>
                                <div class="field_wrapper">
                                    <div class="controls">
                                        <input type="text" name="nama_barang" placeholder="Nama Barang" value="<?php echo $transaksiPembelian->nama_barang;?>"/>
                                        <input type="text" name="banyak" placeholder="Qty" class="span1 m-wrap" onchange=javascript:Estimate(this.form); value="<?php echo $transaksiPembelian->banyak;?>"/>
                                        <input type="text" name="harga" placeholder="Harga" class="span3 m-wrap" onchange=javascript:Estimate(this.form); value="<?php echo $transaksiPembelian->harga;?>" />
                                        <span href="javascript:void(0);" class="add_button" title="Add field" ><span class="icon" style="padding-left:5px ">  <i class="icon-plus"></i></span></a>
                                    </div>
                                </div>
                            </div>
                           <div class="control-group">
                              <label class="control-label">Total</label>
                                <div class="controls">
                                    <input value="<?php echo $transaksiPembelian->total;?>" maxlength=9 name=total readOnly size=6>&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                            <div class="form-actions">
                            <input type="hidden" name="id" value="<?php echo $transaksiPembelian->id; ?>">
                                <input type="submit" value="Save" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <SCRIPT language=JavaScript>
function Estimate(form) {

var harga = form.harga.value;
var banyak = form.banyak.value;


var TotalCost = banyak * harga;


form.total.value =TotalCost; 
}
</SCRIPT>
