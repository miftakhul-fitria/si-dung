@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{ url('kelola-peminjaman') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-backward"></i> Kembali</a>
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="box-body">
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Pinjam</label>
                            <input type="text" name="no_pinjam" class="form-control" id="exampleInputEmail1" placeholder="No Pinjam" value="{{ $dt->no_pinjam }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" value="{{ $dt->nama }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">NIM</label>
                            <input type="text" name="nim" class="form-control" id="exampleInputEmail1" placeholder="NIM" value="{{ $dt->nim }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Fakultas</label>
                            <input type="text" name="fakultas" class="form-control" id="exampleInputEmail1" placeholder="Fakultas" value="{{ $dt->fakultas }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Organisasi</label>
                            <input type="text" name="nama_organisasi" class="form-control" id="exampleInputEmail1" placeholder="Nama Organisasi" value="{{ $dt->nama_organisasi }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Gedung</label>
                            <input type="text" name="nama_gedung" class="form-control" id="exampleInputEmail1" placeholder="Nama Gedung" value="{{ $dt->nama_gedung }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Pinjam</label>
                            <input type="text" name="tanggal_pinjam" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Pinjam" value="{{ $dt->tanggal_pinjam }}" disabled>
                        </div>        

                        <div class="form-group">
                            <label for="exampleInputEmail1">Waktu Pinjam</label>
                            <input type="text" name="waktu_pinjam" class="form-control" id="exampleInputEmail1" placeholder="Waktu Pinjam" value="{{ $dt->waktu_pinjam }}" disabled>
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Acara</label>
                            <input type="text" name="jenis_acara" class="form-control" id="exampleInputEmail1" placeholder="Jenis Acara" value="{{ $dt->jenis_acara }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi Acara</label>
                            <input type="text" name="deskripsi_acara" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi Acara" value="{{ $dt->deskripsi_acara }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Surat Permohonan</label>
                            <input type="text" name="surat_permohonan" class="form-control" id="exampleInputEmail1" placeholder="Surat Permohonan" value="{{ $dt->surat_permohonan }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">KTM</label>
                            <input type="text" name="ktm" class="form-control" id="exampleInputEmail1" placeholder="KTM" value="{{ $dt->ktm }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" name="status" class="form-control" id="exampleInputEmail1" placeholder="Disetujui / Tidak disetujui" value="{{ $dt->status }}" disabled="">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="Deskripsi" value="{{ $dt->deskripsi }}" disabled>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection