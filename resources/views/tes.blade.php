<div>

   @foreach ($semua as $item)
   <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->id}}</td>
        <td>{{"cou"}}</td>
        <td>{{$item->quantity}}</td>
        <td>{{$item->total}}</td>
        <td>{{'aksi'}}</td>
    </tr>
   @endforeach
  
   {{-- @foreach ($semua as $item)
       {{$item}}
   @endforeach --}}

</div>