@extends('mahasiswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>

<form action="" method="GET">
    <div class="row">
        <div class="col-8">
          <input type="text" class="form-control" name="Nama" placeholder="Cari Nama Mahasiswa" aria-label="First name">
        </div>
        <div class="col-4">
            <button class="btn btn-warning" type="submit">Cari</button>
        </div>
      </div>
</form>
</div>


<div class="float-right my-2">
<a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Nim</th>
<th>Nama</th>
<th>Kelas</th>
<th>Jurusan</th>
<th>No_Handphone</th>
<th>Email</th>
<th>Tgl_Lahir</th>
<th width="280px">Action</th>
</tr>
@foreach ($mahasiswas as $Mahasiswa)
<tr>
<td>{{ $Mahasiswa->id }}</td>
<td>{{ $Mahasiswa->Nama }}</td>
<td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
<td>{{ $Mahasiswa->Jurusan }}</td>
<td>{{ $Mahasiswa->No_Handphone }}</td>
<td>{{ $Mahasiswa->Email }}</td>
<td>{{ $Mahasiswa->Tgl_lahir }}</td>
<td>
<form action="{{ route('mahasiswas.destroy',$Mahasiswa->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
<a class="btn btn-warning" href="{{ route('mahasiswas.nilai',$Mahasiswa->id) }}">Nilai</a>
</form>
</td>
</tr>
@endforeach
</table>

{{ $mahasiswas->links() }}
@endsection