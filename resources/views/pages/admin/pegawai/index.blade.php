@extends('layout.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pegawai</h3>
                    <a href="/pegawai/create" class="btn float-right btn-outline-secondary btn-md">
                        <li class="fa fa-plus"></li> Add Data Pegawai
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>3207172222000000</td>
                                <td>Lukman</td>
                                <td>Admin</td>
                                <td>
                                    <a href="/pegawai/1/edit" class="btn btn-warning btn-xs"
                                        title="Edit Masyarakat">
                                        <li class="fa fa-edit"></li>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>3207172222000000</td>
                                <td>Fery</td>
                                <td>Petugas</td>
                                <td>
                                    <a href="pegawai-detail.html" class="btn btn-warning btn-xs"
                                        title="Edit Masyarakat">
                                        <li class="fa fa-edit"></li>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>3207172222000000</td>
                                <td>Samsu</td>
                                <td>Admin</td>
                                <td>
                                    <a href="pegawai-detail.html" class="btn btn-warning btn-xs"
                                        title="Edit Masyarakat">
                                        <li class="fa fa-edit"></li>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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