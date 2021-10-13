@extends('layouts.app')

@section('title', 'Detail Kabupaten')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="kabupaten">Nama Kabupaten</label>
                        <input disabled type="text" class="form-control" name="kabupaten" id="kabupaten"
                            placeholder="Masukkan nama kabupaten" value="{{ $kabupaten->kabupaten }}">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Nama Provinsi</label>
                        <select disabled name="provinsi_id" id="provinsi" class="custom-select">
                            <option disabled selected>{{ $kabupaten->provinsi->provinsi }}</option>
                        </select>
                    </div>

                    <a href="{{ route('kabupaten.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
