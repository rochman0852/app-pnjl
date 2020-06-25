<!-- modal insert -->
<div class="example-modal">
  <div id="tambahproduct" class="modal fade" role="dialog" style="display:none;">
    <div class="modal-dialog"> 
      <div class="modal-content">
        <div class="modal-header">
          <span aria-hidden="true"></span>
          <h3 class="modal-title">Tambah Product</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <form action="/product" method="post" role="form">
             {{ csrf_field() }}
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Nama Barang<span class="text-red">*</span></label>         
              <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="Nama Product" value=""></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Category<span class="text-red">*</span></label>
                <div class="col-sm-8"><select name="category" class="form-control select2" style="width: 100%;">
                  <option value="" selected="selected">-- Pilih Satu --</option>
                  @foreach ($category as $cat)
                <option value="{{$cat->id}}">{{$cat->nama_cat}}</option>
                  @endforeach
                </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
              <label class="col-sm-3 control-label text-right">Harga <span class="text-red">*</span></label>         
              <div class="col-sm-8"><input type="number" class="form-control" name="harga" placeholder="Harga" value=""></div>
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