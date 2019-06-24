@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Biodata Mahasiwa</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('tugas.update',$tugas->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nama :</strong>
          <input type="text" name="nama" class="form-control" value="{{$tugas->nama}}">
        </div>
        
        <div class="col-md-12">
          <strong>Tempat Tanggal Lahir :</strong>
          <input type="text" name="ttl" class="form-control" value="{{$tugas->ttl}}">
        </div>

        <div class="col-md-12">
          <label for="exampleFormControlSelect1">Jenis kelamin</label>
          <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Perempuan">Perempuan</option>
          </select>
          </div>

        <div class="col-md-12">
        <label for="exampleFormControlSelect1">Agama</label>
            <select name="agama" class="form-control" id="exampleFormControlSelect1">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            </select>
        </div>

        <div class="col-md-12">
          <strong>Status :</strong>
          <input type="text" name="status" class="form-control" value="{{$tugas->status}}">
        </div>

        <div class="col-md-12">
          <strong>Telpon :</strong>
          <input type="text" name="telpon" class="form-control" value="{{$tugas->telpon}}">
        </div>

        <div class="col-md-12">
          <strong>Alamat :</strong>
          <textarea class="form-control" name="alamat" rows="8" cols="80">{{$tugas->alamat}}</textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('tugas.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
