<h1>Edit Data Mahasiswa</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
             {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama </label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$siswa->nama}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Tanggal Lahir </label>
                                <input name="tempat_tanggal_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Tanggal Lahir " value="{{$siswa->tempat_tanggal_lahir}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kewarganegaraan </label>
                                <input name="kewarganegaraan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kewarganegaraan " value="{{$siswa->kewarganegaraan}}">
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Jenis kelamin</label>
                                 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                 <option value="L" @if($siswa->jenis_kelamin == 'L')selected @endif>Laki-Laki</option>
                                 <option value="p" @if($siswa->jenis_kelamin == 'p')selected @endif>Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <input name="status" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" value="{{$siswa->status}}">
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Agama</label>
                                 <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                 <option value="Islam" @if($siswa->agama == 'Islam')selected @endif>Islam</option>
                                 <option value="Kristen" @if($siswa->agama == 'Kristen')selected @endif>Kristen</option>
                                 <option value="Hindu" @if($siswa->agama == 'Hindu')selected @endif>Hindu</option>
                                 <option value="Buddha" @if($siswa->agama == 'Buddha')selected @endif>Buddha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                 <label for="exampleFormControlSelect1">Anak Ke</label>
                                 <select name="anak_ke" class="form-control" id="exampleFormControlSelect1">
                                 <option value="1" @if($siswa->anak_ke== '1')selected @endif>Islam</option>
                                 <option value="2" @if($siswa->anak_ke  == '2')selected @endif>Kristen</option>
                                 <option value="3" @if($siswa->anak_ke  == '3')selected @endif>Hindu</option>
                                 <option value="4" @if($siswa->anak_ke  == '4')selected @endif>Buddha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telpon</label>
                                <input name="telpon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telpon" value="{{$siswa->telpon}}">
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                         </form>
                         </div>
                    </div>