@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Biodata Mahasiswa</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('tugas.create') }}">New Biodata</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "150px">Nama </th>
        <th width = "200px">Tempat Tanggal Lahir</th>
        <th width = "100px">Jenis Kelamin</th>
        <th width = "100px">Agama</th>
        <th width = "100px">Status</th>
        <th width = "100px">Telpon</th>
        <th>Alamat </th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($tugas as $tugas)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$tugas->nama}}</td>
          <td>{{$tugas->ttl}}</td>
          <td>{{$tugas->jenis_kelamin}}</td>
          <td>{{$tugas->agama}}</td>
          <td>{{$tugas->status}}</td>
          <td>{{$tugas->telpon}}</td>
          <td>{{$tugas->alamat}}</td>
          <td>
            <form action="{{ route('tugas.destroy', $tugas->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('tugas.show',$tugas->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('tugas.edit',$tugas->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>


  </div>
@endsection
