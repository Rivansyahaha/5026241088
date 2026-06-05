<!-- Menghubungkan dengan view template master-->
@extends('template')
@section('title', 'Data Bolpen')
@section('konten')
    <a href="/bolpen/tambah_bolpen" class="btn btn-primary">Tambah Bolpen Baru</a>
    <br />
    <br />
    <label>Cari Data Bolpen :</label>
    <form action="/bolpen/cari_bolpen" method="GET" class="form-inline">
        <div class="form-group">
            <input type="text" name="cari" placeholder="Cari Bolpen .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>

    <br />
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk Bolpen</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($bolpen as $b)
            <tr>
                <td>{{ $b->kodebolpen }}</td>
                <td>{{ $b->merkbolpen }}</td>
                <td>{{ $b->stockbolpen }}</td>
                <td>{{ $b->tersedia }}</td>
                <td>
                    <a href="/bolpen/edit_bolpen/{{ $b->kodebolpen }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/bolpen/hapus_bolpen/{{ $b->kodebolpen }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $bolpen->links() }}
@endsection
