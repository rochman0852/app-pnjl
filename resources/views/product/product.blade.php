@extends('layout.layout')
@extends('product.tambahProduct')

@section('title', 'Products')


@section('content')
@if (session('status'))
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

  @endif
@if ($errors->any())
    <div class="alert alert-danger">

          <strong>Gagal!</strong> data gagal tersimpan  
  
    </div>
@endif
<section>
   <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Products</h3>
              <div style="float:right;"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahproduct"> Tambah Products</a>
          </div> 
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                 <tr>
                   <th>No.</th>
                   <th>Nama Products</th>
           
                   <th>Category</th>
                   <th>Harga</th>
                   <th>Aksi</th>
                 </tr>
                 
                </thead>
                <tbody>
            
               @foreach ($allproduct as $prdct)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$prdct->nama}}</td>
                
                  <td>{{$prdct->nama_cat}}</td>
                  <td>{{$prdct->harga}}</td>
                  <td>  
                    <form action="/product/{{$prdct->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('delete') }}
                    <button type="submit" class="btn btn-danger btn-flat btn-xs" ><i class="fa fa-trash"></i> Delete</a>
                    </form>  
                  </td>
                </tr> 
                
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</section>        

@endsection

