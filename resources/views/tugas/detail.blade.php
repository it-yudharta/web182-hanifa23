@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Mahasiswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama  : </strong> {{$tugas->nama}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Tempat Tanggal Lahir: </strong> {{$tugas->ttl}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Jenis Kelamin : </strong> {{$tugas->jenis_kelamin}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Agama : </strong> {{$tugas->agama}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Status : </strong> {{$tugas->status}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Telpon : </strong> {{$tugas->telpon}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Alamat  : </strong> {{$tugas->alamat}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('tugas.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection