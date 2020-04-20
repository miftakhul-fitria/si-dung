@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>

                    <a href="{{ url('kelola-gedung/add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                </p>
            </div>

            <div class="box-body">
               <table class="table table-hover myTable">
                   <thead>
                       <tr>
                           <th>Nama Gedung</th>
                           <th>Luas Gedung</th>
                           <th>Kapasitas</th>
                           <th>Parkir</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($data as $dt)
                       <tr>
                           <td>{{ $dt->nama_gedung }}</td>
                           <td>{{ $dt->luas_gedung }}</td>
                           <td>{{ $dt->kapasitas }}</td>
                           <td>{{ $dt->parkir }}</td>
                           <td>
                             <div style="width:60px">

                              <a href="{{ url('kelola-gedung/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> 

                              <a href="{{ url('kelola-gedung/'.$dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></a>

                             </div>
                           </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
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