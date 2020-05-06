@extends('layouts.master')
 
@section('content')
<div class="row">
    <div class="col-md-12">
    	<h4>Export Data</h4>
    	<div class="box box-warning" style="height: 450px;">
    		<div style="margin-top: 15%;">
    			<center><a href="{{ url('export/export_excel') }}" class="btn btn-success my-3 fa fa-download" target="_blank" style="font-size: 20px; padding: 15px;"> EXPORT LAPORAN PEMINJAMAN</a></center>
    		</div>
    	</div>
    </div>
</div>
@endsection