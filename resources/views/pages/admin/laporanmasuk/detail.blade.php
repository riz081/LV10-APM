@extends('layout.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Laporan Masuk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="judulPengaduan">Judul</label>
                                </div>
                                <div class="col-sm-6">
                                    : Limbah Pabrik ABCD
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="judulPengaduan">Kategori Pengaduan</label>
                                </div>
                                <div class="col-sm-6">
                                    : Pencemaran
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="tanggalLaporan">Tanggal Laporan</label>
                                </div>
                                <div class="col-sm-6">
                                    : 22 Oktober 2024
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="namaPelapor">NIK Pelapor</label>
                                </div>
                                <div class="col-sm-6">
                                    : 332071724056655
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="namaPelapor">Nama Pelapor</label>
                                </div>
                                <div class="col-sm-6">
                                    : Lukman
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="statusLaporan">Status</label>
                                </div>
                                <div class="col-sm-6">
                                    <select name="selectStatus" id="select" class="form-control">
                                        <option value="">Proses</option>
                                        <option value="">Selesai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <a href="/laporan-masuk.html" class="btn btn-outline-secondary btn-md btn-block"> <li class="fa fa-retweet"></li> Update Status</a>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <img src="/dist/img/photo1.png" alt="" class="img img-fluid"
                                style="border-radius: 10px;">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <p class="post">
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm"
                                    src="/dist/img/default-150x150.png" alt="User Image">
                                <span class="username">
                                    <a href="#">Maman Suparman</a>
                                </span>
                                <span class="description">di tanggapi tanggal 25 Oktober 2024</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>

                            <form class="form-horizontal">
                                <div class="input-group input-group-sm mb-0">
                                    <input class="form-control form-control-sm" placeholder="Isi Tanggapan">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-danger">Kirim Tanggapan</button>
                                    </div>
                                </div>
                            </form>
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