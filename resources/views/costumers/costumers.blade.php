@extends('layout.layout')
@extends('costumers.tambahCostumers')

@section('title', 'costumers')


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
              <h3 class="card-title">Daftar Costumers</h3>
              <div style="float:right;"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahcostumer"> Tambah Costumers</a>
          </div> 
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                 <tr>
                   <th>No.</th>
                   <th>Nama Costumers</th>
                   <th>ID Costumer</th>
                   <th>No. Hp</th>
                   <th>Aksi</th>
                 </tr>
                 
                </thead>
                <tbody>
               @foreach ($costumer as $cstm)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$cstm->nama}}</td>
                  <td>{{$cstm->no_id }}</td>
                  <td>{{$cstm->no_hp }}</td>
                  <td>  
                    <form action="/costumer/{{$cstm->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('delete') }}
                    <a id="edit-costumer" href="#" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-id="{{$cstm}}" data-target="#editcostumer"><i class="fa fa-edit"></i> Edit</a>
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

