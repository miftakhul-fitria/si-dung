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
                      <td>
                        <div style="width:90px">
                          <a href="{{ url('kelola-peminjaman/detail/'.$dt->id) }}" class="btn btn-primary btn-xs btn-detail" id="detail"><i class="fa fa-eye"></i></a> 
                          
                          <a href="{{ url('kelola-peminjaman/'.$dt->id) }}" class="btn btn-warning btn-xs btn-edit" id="edit"><i class="fa fa-pencil-square-o"></i></a> 

                          <a href="{{ url('kelola-peminjaman/'.$dt->id) }}" class="btn btn-danger btn-xs btn-hapus" id="delete"><i class="fa fa-trash-o"></i></a>
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