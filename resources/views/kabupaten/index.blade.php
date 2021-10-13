@extends('layouts.app')

@section('title', 'Kabupaten')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Kabupaten</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-kabupaten">
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>#</th>
                        <th>Provinsi</th>
                        <th>Nama Kabupaten</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($kabupaten as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->provinsi->provinsi }}</td>
                            <td>{{ $data->kabupaten }}</td>
                            <td>
                                <form action="{{ route('kabupaten.destroy', $data) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    <a class="btn btn-success" href="{{ route('kabupaten.edit', $data) }}">Edit</a>
                                    <a class="btn btn-warning" href="{{ route('kabupaten.show', $data) }}">Detail</a>
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
<div class="modal fade" id="tambah-kabupaten" tabindex="-1" role="dialog" aria-labelledby="tambah-kabupatenLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah-kabupatenLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kabupaten.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="kabupaten">Nama Kabupaten</label>
                        <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                            placeholder="Masukkan nama kabupaten">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Nama Provinsi</label>
                        <select name="provinsi_id" id="provinsi" class="custom-select">
                            <option disabled selected>Pilih Provinsi</option>
                            @foreach ($provinsi as $data)
                                <option value="{{ $data->id }}">{{ $data->provinsi }}</option>
                            @endforeach
                        </select>
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
