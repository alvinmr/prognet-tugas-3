@extends('layouts.app')

@section('title', 'Detail Provinsi')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="provinsi">Nama Provinsi</label>
                        <input disabled type="text" class="form-control" name="provinsi" id="provinsi"
                            placeholder="Masukkan nama provinsi" value="{{ $provinsi->provinsi }}">
                    </div>

                    <a href="{{ route('kabupaten.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
