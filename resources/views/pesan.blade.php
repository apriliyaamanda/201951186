@extends('layouts.app')

@section('content')

   <div class="container mt-5">
      <div class="row">
         <div class="col-7">
            <h4>Checkout</h4>
            <br>
            <table class="table table-success table-stripped">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Tipe</th>
                  <th scope="col">Satuan</th>
                  <th scope="col">Harga</th>
               </tr>
               @foreach ($menu as $item) 
                    <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->menu }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                <a href="{{ route('sukses')}}">
                                Selesai</a>
                            </td>
                    </tr>
               @endforeach
            </table>
         </div>
      </div>
   </div>

@endsection