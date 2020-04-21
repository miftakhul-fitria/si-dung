@extends('layouts.master')
 
@section('content')
 
<div class="row">
    <div class="col-md-12">
        <h4>{{ $title }}</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>

            <div class="box-body">
               <table class="table table-hover myTable">
                   <thead>
                       <tr>
                           <th>No Pinjam</th>
                           <th>Nama</th>
                           <th>Nama Gedung</th>
                           <th>Tanggal Pinjam</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                    @foreach($data as $dt)
                    <tr>
                      <td>{{ $dt->no_pinjam }}</td>
                      <td>{{ $dt->nama }}</td>
                      <td>{{ $dt->nama_gedung }}</td>
                      <td>{{ $dt->tanggal_pinjam }}</td>
                      <td>{{ $dt->status }}</td>
                      
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