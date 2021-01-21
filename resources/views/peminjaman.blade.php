@extends('layout.app')
<title>Peminjaman</title>
@section('content')

<div class="container py-5">
    <h1>Formulir Peminjaman</h1>
    <form>
        @csrf
        <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="">Alamat Lengkap</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
        </div>
        <div class="form-group">
            <label for="">Judul Buku</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="">Kode Buku</label>
            <input type="text" class="form-control" name="kode" id="kode">
        </div>
        <div class="form-group">
            <label for="">Tanggal Peminjaman</label>
            <input type="text" class="form-control" name="pinjam" id="pinjam">
        </div>
        <div class="form-group">
            <label for="">Tanggal Pengembalian</label>
            <input type="text" class="form-control" name="kembali" id="kembali">
        </div>
        <button type="submit" class='btn btn-secondary'>Kirim</button>
    </form>
</div>

@endsection
