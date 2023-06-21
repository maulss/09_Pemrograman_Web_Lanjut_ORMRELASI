@extends('mahasiswas.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mt-2">
<h2 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
<h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
</div>

</div>
</div>
<p>NIM : {{$mahasiswa->id_mahasiswa}}</p>
<p>Nama : {{$mahasiswa->Nama}}</p>
<p>Kelas : {{$mahasiswa->kelas->nama_kelas}}</p>

<table class="table table-bordered">
<tr>
<th>Matakuliah</th>
<th>SKS</th>
<th>Semester</th>
<th>Nilai</th>
</tr>
@foreach ($mahasiswa_matakuliah as $item)
<tr>
    <td>{{$item->matakuliahs->nama_matkul}}</td>
    <td>{{$item->matakuliahs->sks}}</td>
    <td>{{$item->matakuliahs->semester}}</td>
    <td>{{$item->nilai}}</td>
</tr>
@endforeach
{{-- create link back to page mahasiswas --}}

</table>
<a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Kembali</a>
@endsection