@extends('pegawais.layout')
@section('content')
<body>
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-center">
                <h2>KELOLA DATA PEGAWAI</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('pegawais.create') }}">Tambah Pegawai</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th width="180px">Action</th>
        </tr>
        @foreach ($pegawais as $key => $pegawai)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->umur }}</td>
            <td>{{ $pegawai->jk }}</td>
            <td>{{ $pegawai->alamat}}</td>
            <td>
                <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">
 
                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$pegawai->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
      
@endsection