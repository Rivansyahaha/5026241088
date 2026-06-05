@extends('template')
@section('title', 'Data Bolpen')
@section('konten')
    <a href="/bolpen" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Bolpen
        </div>

        <div class="card-body">
            <form action="/bolpen/store_bolpen" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkbolpen" class="col-sm-2 col-form-label">Merk Bolpen</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkbolpen" id="merkbolpen" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockbolpen" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockbolpen" id="stockbolpen" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="">-- Pilih --</option>
                            <option value="Y">Y</option>
                            <option value="N">N</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
