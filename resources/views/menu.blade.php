@extends('layouts.app')

@section('content')
<div class="container  mt-5" style="color: cornsilk;">

<div class="row">
        <div class="col-lg">
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
        </div>
            
            <!-- <a href="{{ route('menu.create') }}" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahDataModal"> Tambah Data</a> -->

            <table class="table table-hover" style="color: #fff;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>



                    </tr>
                </thead>
                <tbody>
                @foreach ($menu as $item) 
                    <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->menu }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->harga }}</td>

                            <td>
                                <a href="{{ route('pesan')}}" class="btn btn-info">
                                    <i class="fas fa-plus fa-sm text-white-50"></i>
                                Checkout</a>
                                <form action="{{ route('menu.destroy', $item->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        delete
                                    </button>
                                </form>
                                <!-- <a href="{{ route('menu.destroy', $item->id) }}" class="badge badge-pill badge-success">Hapus</a> -->
                                
                            </td>

                        </tr>
                @endforeach                            
                </tbody>

            </table>



        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <!-- <button type="button" class="btn-delete" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form action="{{ route('menu.store') }}" method="POST">
            @csrf
            <div class="col-sm-12">
                <input type="hidden" name="id" id="id">

                <div class="form-group">
                    <label for="nama" class="col-sm-12 control-label">Nama</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" 
                        id="nama" value="{{ old('nama') }}">
                    </div>
                </div> 
                <div class="form-group">
                    <label for="menu" class="col-sm-12 control-label">Menu</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="menu" placeholder="Menu" 
                        id="menu" value="{{ old('menu') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-sm-12 control-label">Tipe</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="type" placeholder="Tipe" 
                        id="type" value="{{ old('type') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="satuan" class="col-sm-12 control-label">Satuan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="satuan" placeholder="Satuan" 
                        id="satuan" value="{{ old('satuan') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga" class="col-sm-12 control-label">Harga</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="harga" placeholder="Harga" 
                        id="harga" value="{{ old('harga') }}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection