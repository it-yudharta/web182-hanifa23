<!DOCTYPE html>
<html>
  <head>
  <title></title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <div class="container">
        <div class="row">
                <div class="col-6">
                    <h1>BIODATA MAHASISWA</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah data diri 
                    </button>
                </div>
            
            <table class="table table-hover">
                <tr>
                    <th>NAMA</th>
                    <th>TEMPAT TANGGAL LAHIR</th>
                    <th>KEWARGANEGARAAN</th>
                    <th>JENIS KELAMIN</th>
                    <th>STATUS</th>
                    <th>AGAMA</th>
                    <th>ANAK KE</th>
                    <th>ALAMAT</th>
                    <th>TELPON</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->tempat_tanggal_lahir}}</td>
                    <td>{{$siswa->kewarganegaraan}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->status}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->anak_ke}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->telpon}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm" onclick="return confirm('Yakin Data Mau Diedit?')">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Mau Dihapus ?')">Delete</a>
                    </td>
                    
                </tr>
                @endforeach
                </table>
            </div>
        </div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="exampleModalLabel">Data Mahasiswa</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                            <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama </label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir </label>
                                <input name="tempat_tanggal_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Tanggal Lahir">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kewarganegaraan </label>
                                <input name="kewarganegaraan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kewarganegaraan">
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Jenis kelamin</label>
                                 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                 <option value="L">Laki-Laki</option>
                                 <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status">
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Agama</label>
                                 <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                 <option value="Islam">Islam</option>
                                 <option value="Kristen">Kristen</option>
                                 <option value="Hindu">Hindu</option>
                                 <option value="Buddha">Buddha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Anak Ke</label>
                                 <select name="anak_ke" class="form-control" id="exampleFormControlSelect1">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input name="telpon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telpon">
                            </div>

                       </div>
                     <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary onclick="return confirm('Data Berhasil Disimpan')">Submit</button>
               </form>
          </div>
       </div>
     </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>