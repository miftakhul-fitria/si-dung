@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{ url('kelola-gedung') }}" class="btn btn-sm btn-flat btn-success"><i class="fa fa-backward"></i> Kembali</a>
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
                <form role="form" method="POST" action="{{ url('kelola-gedung/'.$dt->id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Gedung</label>
                            <input type="text" name="nama_gedung" class="form-control" id="exampleInputEmail1" placeholder="Nama Gedung" value="{{ $dt->nama_gedung }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Luas Gedung</label>
                            <input type="text" name="luas_gedung" class="form-control" id="exampleInputEmail1" placeholder="Luas Gedung" value="{{ $dt->luas_gedung }}">
                        </div>                    

                        <div class="form-group">
                            <label for="exampleInputEmail1">Kapasitas</label>
                            <input type="text" name="kapasitas" class="form-control" id="exampleInputEmail1" placeholder="Kapasitas" value="{{ $dt->kapasitas }}">
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputEmail1">Parkir</label>
                            <input type="text" name="parkir" class="form-control" id="exampleInputEmail1" placeholder="Parkir" value="{{ $dt->parkir }}">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
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