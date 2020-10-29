@extends('layouts.app')

@section('content')
    <h1>Tambah organisasi</h1>
    <form action="/organisation/add"></form>
        @csrf
        <div class="form-group">
            <label for="organisation-name">Nama organisasi</label>
            <input type="text" name="organisation-name" id="organisation-name" class="form-control" placeholder="Contoh: Lajnah Perpaduan" aria-describedby="help-organisation-name">
            <small id="help-organisation-name" class="text-muted">Nama tidak boleh disertakan dengan nama induk seperti Lajnah Tarbiah Dewan Pemuda PAS Negeri Sembilan. Memadai dengan tulis Lajnah Tarbiah.</small>
        </div>
        <div class="form-group">
            <label for="parent-organisation">Organisasi induk</label>
            <select class="form-control" name="parent-organisation" id="parent-organisation">
                {{-- Pilihan mestilah berdasarkan organisasi yang pengguna ini diberi autoriti untuk menambah sub-organisasi --}}
                <option>Dewan Pemuda PAS Negeri Sembilan</option>
                <option>Dewan Pemuda PAS Kawasan Seremban</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Tambah organisasi</button>
    </form>
@endsection