@extends('layout.layout')

@section('title', 'Penjualan')


@section('content')

   

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Penjualan</h3> 
        </div>

        <div class="card-body" >
        <div class="wrapper-card-header" style="display:flex">
        <div class="card">
              <div class="row">
              <label class="col-sm-5 control-label text-right">Nomor Transaksi</label>         
              <div class="col-sm-6"><input type="text" class="form-control" name="no_transaksi" id="id_tran" placeholder="Nomor Transaksi" value="{{$idtransaksi}}" disabled></div> 
              </div>
            <div class="row">
              <label class="col-sm-5 control-label text-right">Tanggal</label>         
              <div class="col-sm-6"><input type="text" class="form-control"  value="{{date('d-M-Y')}}" disabled></div>
              </div>
              <div class="row">
              <label class="col-sm-5 control-label text-right">Costumer</label>         
              <div class="col-sm-4">
        
              <input id="query-costumer" type="text" class="form-control" name="costumer" value="" ></div><button id="tombol-cari" type="button" style="display:inline-block" class="btn btn-outline-primary">Cari</button>
              </div>
              </form>
              <!-- ini  -->
              <div class="row">
                  <label class="col-sm-5 control-label text-right">Nama Costumer</label>         
                  <div class="col-sm-6"><input type="text" class="form-control" name="nama" id="nama-cus" value="" disabled></div>
                  </div>
              <div class="row">
                  <label class="col-sm-5 control-label text-right"></label>         
                  <div class="col-sm-6"><input type="hidden" class="form-control" name="id_cus"  id="id-cus" value="" disabled></div>
                  </div>
            
           
        </div>

        <div class="card">
              <div class="row">
              <label class="col-sm-5 control-label text-right">Nama Barang</label>         
              <div class="col-sm-4"><input type="text" class="form-control" id="query-barang" name="nama_barang" value="" ></div><button id="cari-barang" type="button" style="display:inline-block" class="btn btn-outline-primary">Cari</button>
              </div>
              <div class="row">
              <label class="col-sm-5 control-label text-right">ID Barang</label>         
              <div class="col-sm-6"><input type="text" class="form-control" id="target-id" name="id" value="" disabled></div>
              </div>
              <div class="row">
              <label class="col-sm-5 control-label text-right">harga</label>         
              <div class="col-sm-6"><input type="text" class="form-control"  id="target-harga" name="harga" value="" disabled></div>
              </div>
              <div class="row">
              <label class="col-sm-5 control-label text-right">Quantity</label>         
              <div class="col-sm-6"><input type="number" class="form-control" id="quantity" name="quantity" placeholder="Jumlah pembelian" value=""></div>
              </div>
              <div class="row">
              <label class="col-sm-5 control-label text-right"></label>         
              <div class="col-sm-4"><button type="button" id="tambah-belanjaan" class="btn btn-primary">TAMBAH</button></div>
              </div>
         </div> 

        <div class="card">
        <div class="row">
              <label class="col-sm-5 control-label text-right">Sub Total</label>         
              <div class="col-sm-6"><input type="text" class="form-control" name="no_transaksi"  value="" disabled></div>
              </div>
        </div>
        </div>

        <div class="tabel-belanjaan">
           <div class="card">

            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>

                 <tr>
                   <th>No.</th>
                   <th>Nama Barang</th>
                   <th>Harga</th>
                   <th>Quantity</th>
                   <th>Total</th>
                   <th>Aksi</th>
                 </tr>
                 
                </thead>
                
                <tbody id="tabel-belanje">

                </tbody>
              </table>
            </div>
          </div>
         
        </div>

        <div class="pembayaran" style="display:flex">
        
            <div class="card">
            <div class="row">
              <label class="col-sm-5 control-label text-right">Sub total</label>         
              <div class="col-sm-6"><input type="text" class="form-control"  value="" disabled></div>
              </div>
            </div>
            <div class="card">
            <div class="row">
              <label class="col-sm-5 control-label text-right">Bayar</label>         
              <div class="col-sm-6"><input type="number" class="form-control"  value="" ></div>
              </div>
            </div>
            <div class="card">
            <div class="row">
              <label class="col-sm-5 control-label text-right">Proses Transaksi</label>         
              <div class="col-sm-6"><button type="button"  class="btn btn-primary">PROSES</button></div>
              </div>
            </div>
            <div class="card">
            <div class="row">
              <label class="col-sm-5 control-label text-right">Kembalian</label>         
              <div class="col-sm-6"><input type="text" class="form-control"  value="" disabled></div>
              </div>
            </div>
        </div>



       
         

       
      </div>

      <!-- /.card -->

    </section>
    <!-- /.content -->



@endsection

