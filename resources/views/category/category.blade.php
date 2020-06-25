@extends('layout.layout')
@extends('category.tambahCategory')

@section('title', 'Category')


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
              <h3 class="card-title">Daftar Category</h3>
              <div style="float:right;"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahcategory"> Tambah Category</a>
          </div> 
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                 <tr>
                   <th>No.</th>
                   <th>Nama Category</th>
                   <th>Aksi</th>
                 </tr>
                 
                </thead>
                <tbody>
               @foreach ($category as $ctgy)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ctgy->nama_cat}}</td>
                  <td>  
                    <form action="/category/{{$ctgy->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('delete') }}
                    <a id="edit-category" href="#" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-id="{{$ctgy}}" data-target="#editcategory"><i class="fa fa-edit"></i> Edit</a>
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

