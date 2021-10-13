@extends('layouts.app')

@section('title', 'Edit Provinsi')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('provinsi.update', $provinsi) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="provinsi">Nama Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi"
                                placeholder="Masukkan nama provinsi" value="{{ $provinsi->provinsi }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
