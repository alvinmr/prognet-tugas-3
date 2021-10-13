@extends('layouts.app')

@section('title', 'Provinsi')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Provinsi</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-provinsi">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>#</th>
                        <th>Nama Provinsi</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($provinsi as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->provinsi }}</td>
                            <td>
                                <form action="{{ route('provinsi.destroy', $data) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <a class="btn btn-success" href="{{ route('provinsi.edit', $data) }}">Edit</a>
                                    <a class="btn btn-warning" href="{{ route('provinsi.show', $data) }}">Detail</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="tambah-provinsi" tabindex="-1" role="dialog" aria-labelledby="tambah-provinsiLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah-provinsiLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('provinsi.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="provinsi">Nama Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" id="provinsi"
                            placeholder="Masukkan nama provinsi">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
