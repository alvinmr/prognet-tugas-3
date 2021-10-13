@extends('layouts.app')

@section('title', 'Edit Kabupaten')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kabupaten.update', $kabupaten) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="kabupaten">Nama Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                                placeholder="Masukkan nama kabupaten" value="{{ $kabupaten->kabupaten }}">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Nama Provinsi</label>
                            <select name="provinsi_id" id="provinsi" class="custom-select">
                                <option disabled selected>Pilih Provinsi</option>
                                @foreach ($provinsi as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $kabupaten->provinsi_id ? 'selected' : '' }}>
                                        {{ $data->provinsi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
