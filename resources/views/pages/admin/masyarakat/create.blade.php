@extends('layout.layoutadmin')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Add Data Masyarakat</h3>
                        <a href="/masyarakat.html" class="btn float-right btn-outline-warning btn-md">
                            <li class="fa fa-undo"></li> Kembali
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form form-group">
                                    <label for="textNik">NIK</label>
                                    <input type="text" name="textNik" id="textNik" class="form form-control"
                                        placeholder="Contoh : 320717XXXXXXX">
                                </div>
                                <div class="form form-group">
                                    <label for="textNama">Nama</label>
                                    <input type="text" name="textNama" id="textNama" class="form form-control"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="form form-group">
                                    <label for="selectJenisKelamin">Jenis Kelamin</label>
                                    <select name="selectJenisKelamin" id="selectJenisKelamin"
                                        class="form form-control">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form form-group">
                                    <label for="textNoTelepon">No Telepon</label>
                                    <input type="text" class="form form-control" id="textNoTelepon">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form form-group">
                                    <label for="textAlamat">Alamat</label>
                                    <textarea name="textAlamat" id="textAlamat" cols="30" rows="1"
                                        class="form form-control"></textarea>
                                </div>
                                <div class="form form-group">
                                    <label for="textEmail">Email</label>
                                    <input type="email" name="textEmail" class="form form-control"
                                        id="textEmail">
                                </div>
                                <div class="form form-group">
                                    <label for="textPassword">Password</label>
                                    <input type="password" name="textPassword" class="form form-control"
                                        id="textPassword">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <a href="/masyarakat.html" class="btn btn-success btn-md float-right"><li class="fa fa-save"></li> Simpan</a href="/masyarakat.html">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection