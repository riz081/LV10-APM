@extends('layout.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Laporan Masuk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 float-right">
                            <label for="selectFilter">Filter Berdasarkan status</label>
                            <select name="selectFilter" id="select Filter" class="form form-control">
                                <option value="">-- Filter Status --</option>
                                <option value="">New</option>
                                <option value="">Process</option>
                                <option value="">Selesai</option>
                            </select>
                        </div>
                        <div class="col-md-3 float-right">
                            <label for="selectFilter">Filter Berdasarkan Kategori</label>
                            <select name="selectFilter" id="select Filter" class="form form-control">
                                <option value="">-- Filter Kategori --</option>
                                <option value="">Pencemaran</option>
                                <option value="">Kekerasan</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tanggal Pengaduan</th>
                                        <th>Judul Pengaduan</th>
                                        <th>Nama Pengadu</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>22 Oktober 2024</td>
                                        <td>Limbah Pabrik ABCD</td>
                                        <td>Lukman</td>
                                        <td>Pencemaran</td>
                                        <td><span class="badge badge-primary">New</span></td>
                                        <td>
                                            <a href="laporan-masuk-detail.html" class="btn btn-outline-primary btn-xs"
                                                title="Edit Masyarakat">
                                                <li class="fa fa-list"></li>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>22 Oktober 2024</td>
                                        <td>Limbah Pabrik ABCD</td>
                                        <td>ADIT</td>
                                        <td>Kekerasan</td>
                                        <td><span class="badge badge-warning">Process</span></td>
                                        <td>
                                            <a href="laporan-masuk-detail.html" class="btn btn-outline-primary btn-xs"
                                                title="Edit Masyarakat">
                                                <li class="fa fa-list"></li>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>22 Oktober 2024</td>
                                        <td>Limbah Pabrik ABCD</td>
                                        <td>Hakim</td>
                                        <td>Pencemaran</td>
                                        <td><span class="badge badge-success">Selesai</span></td>
                                        <td>
                                            <a href="laporan-masuk-detail.html" class="btn btn-outline-primary btn-xs"
                                                title="Edit Masyarakat">
                                                <li class="fa fa-list"></li>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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