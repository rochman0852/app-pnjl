<!-- modal insert -->
<div class="example-modal">
  <div id="tambahcostumer" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog"> 
      <div class="modal-content">
        <div class="modal-header">
          <span aria-hidden="true"></span>
          <h3 class="modal-title">Tambah Costumer</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <form action="/costumer" method="post" role="form">
             {{ csrf_field() }}
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nama <span class="text-red">*</span></label>         
              <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama Costumer" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nomor Handphone <span class="text-red">*</span></label>         
              <div class="col-sm-8"><input type="number" class="form-control" name="no_hp" placeholder="Nomor Handphone" value=""></div>
              </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-sm-3 control-label text-right">Alamat<span class="text-red">*</span></label>
                        <div class="col-sm-8">
                        <textarea class="form-control" rows="5" name="alamat"></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
              <button  type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
              <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!-- modal insert close -->