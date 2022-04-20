@extends('pegawais.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Waduh!</strong>Kesalahan input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('pegawais.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>                    
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan Nama">                
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>                    
                    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" placeholder="Masukkan Jabatan">                
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>                    
                    <input type="text" name="umur" class="form-control" id="umur" aria-describedby="umur" placeholder="Masukkan Umur">    
                </div>
                <div>
                    <label for="jk">Jenis Kelamin</label>
                    <p><input type="radio" name="jk"  value="L" checked <? $pegawai['jk'] == "L" ?>>Pria   <input type="radio" name="jk"  value="P" <? $pegawai['jk'] == "P"?>>Wanita</p>
                </div>                
                 <div class="form-group">
                    <label for="alamat">Alamat</label>                  
                    <textarea type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Masukan Alamat"> </textarea>
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection