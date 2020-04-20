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
                <form role="form" method="POST" action="{{ url('kelola-gedung/add') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Gedung</label>
                            <input type="text" name="nama_gedung" class="form-control" id="exampleInputEmail1" placeholder="Nama Gedung">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Luas Gedung</label>
                            <input type="text" name="luas_gedung" class="form-control" id="exampleInputEmail1" placeholder="Luas Gedung">
                        </div>                    

                        <div class="form-group">
                            <label for="exampleInputEmail1">Kapasitas</label>
                            <input type="text" name="kapasitas" class="form-control" id="exampleInputEmail1" placeholder="Kapasitas">
                        </div> 

                        <div class="form-group">
                            <label for="exampleInputEmail1">Parkir</label>
                            <input type="text" name="parkir" class="form-control" id="exampleInputEmail1" placeholder="Parkir">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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